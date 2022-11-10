import React, { useEffect, useRef, useState } from "react";
import {
  CardImg,
  Button,
  Card,
  CardHeader,
  CardBody,
  FormGroup,
  Form,
  Input,
  Container,
  Row,
  Col,
} from "reactstrap";
import UserHeader from "components/Headers/UserHeader.js";
import { useDispatch, useSelector } from "react-redux";
import { selectUser } from "redux/slices/userSlice";
import "../../assets/css/profile.css";
import { COLLEGES } from "utils/Constants";
import { updateProfile } from "api/user";
import SweetAlert from "components/SweetAlert";
import { setUser } from "redux/slices/userSlice";
import userIcon from "../../assets/img/user.png";

const Profile = () => {
  const dispatch = useDispatch(),
    user = useSelector(selectUser),
    [disabled, setDisabled] = useState(true),
    [cursor, setCursor] = useState({ cursor: "" }),
    [name, setName] = useState(""),
    [memberId, setMemberId] = useState(""),
    [college, setCollege] = useState(""),
    [localURL, setLocalURL] = useState(""),
    [showAlert, setShowAlert] = useState(false),
		[alertMsg, setAlertMsg] = useState(""),
		[alertType, setAlertType] = useState("warning"),
    fileUploadRef = useRef(null);

  const init = () => {
    setName(user?.name);
    setMemberId(user?.acmMemberId);
    setCollege(user?.college);
    setLocalURL("");
    setDisabled(true);
    setCursor({ cursor: "pointer" });
  };

  useEffect(() => {
    init();
    //eslint-disable-next-line
  }, []);

  const updateInfo = async () => {
    if (
      name === user.name &&
      memberId === user.acmMemberId &&
      college === user.college &&
      !localURL
    ) {
      setAlertMsg("One or more editable values must be edited for changes to be saved");
			setAlertType("warning");
			setShowAlert(true);
			return;
    }
    const data = {
      ...user,
      name,
      college,
      acmMemberId: memberId,
      profilePhoto: localURL,
    };
    if (!name) {
      setAlertMsg("Please fill in all the required fields");
			setAlertType("warning");
			setShowAlert(true);
			return;
    }
    const updateRes = await updateProfile(data);
    if (updateRes?.error) {			
			setAlertMsg(updateRes?.error);
			setAlertType("error");
			setShowAlert(true);
		} else {
			localStorage.setItem("user", JSON.stringify(updateRes.user));
			dispatch(setUser(updateRes.user));
      setAlertMsg("Profile update successfully");
			setAlertType("success");
			setShowAlert(true);
		}
    setDisabled(true);
    setCursor({ cursor: "pointer" });
    setLocalURL("");
  };

  const onImageChange = (e) => {
    const fileReader = new FileReader();
    fileReader.readAsDataURL(e.target.files[0]);
    fileReader.onload = () => {
      setLocalURL(fileReader.result);
    };
    fileReader.onerror = (err) => {
      console.log(err);
    };
  };

  return (
    <Container className="mt-0" fluid="xxl">
      <SweetAlert
				open={showAlert}
				setOpen={setShowAlert}
				msg={alertMsg}
				type={alertType}
			/>
      {/* <UserHeader /> */}
      {/* Page content */}
      <Container className="profileContainer" fluid>
        <Row>
          <Col className="order-xl-1">
            <Card className="bg-secondary">
              <CardHeader className="bg-white border-0">
                <Row className="align-items-center justify-content-between">
                  {/* <Col xs="8"> */}
                  <h3>My Account</h3>
                  {/* </Col> */}
                  {/* <Col className="text-right"> */}
                  <Button
                    disabled={!disabled}
                    onClick={() => {
                      setDisabled(false);
                      setCursor({ cursor: "no-drop" });
                    }}
                    type="button"
                    value="Input"
                    color="info"
                    style={cursor}
                  >
                    Edit Profile
                  </Button>
                  {/* </Col> */}
                </Row>
              </CardHeader>
              <CardBody>
                <div className="profileImage m-auto">
                  {!disabled && (
                    <div className="overlay">
                      <div
                        className="overlay__icon"
                        onClick={() => fileUploadRef.current.click()}
                      >
                        <i className="bx bxs-pencil" />
                      </div>
                    </div>
                  )}
                  <CardImg
                    top
                    src={
                      localURL ||
                      user?.profilePhoto ||
                      userIcon
                    }
                    alt="Card image cap"
                    className="rounded-circle d-block md-8 "
                  />
                </div>
                <div className="my-3">
                  {disabled ? (
                    <h2 className="text-center my-3">{user?.name}</h2>
                  ) : (
                    <Input
                      className="text-center m-auto d-block nameField"
                      type="name"
                      placeholder="New Name"
                      readOnly={disabled}
                      onChange={(e) => setName(e.target.value)}
                      value={name}
                      required
                    />
                  )}
                </div>
                <Form>
                  <h6 className="heading-small text-muted mb-4">
                    User information
                  </h6>
                  <div className="pl-lg-4">
                    <input
                      type="file"
                      hidden
                      accept="image/*"
                      ref={fileUploadRef}
                      onChange={onImageChange}
                    />
                    <Row className="justify-content-md-center">
                      <Col md="12">
                        <FormGroup>
                          <label className="form-control-label">Email</label>
                          <Input
                            type="email"
                            placeholder={user?.email}
                            readOnly
                            value={user?.email}
                            style={cursor}
                          />
                        </FormGroup>
                      </Col>
                      <Col md="12">
                        <FormGroup>
                          <label className="form-control-label">College</label>
                          <Input
                            list="colleges"
                            type="text"
                            placeholder="NA"
                            readOnly
                            value={college}
                            onChange={(e) => setCollege(e.target.value)}
                          />
                          <datalist id="colleges">
                            {COLLEGES.map((value, index) => (
                              <option key={index} value={value} />
                            ))}
                          </datalist>
                        </FormGroup>
                      </Col>
                      <Col lg="6">
                        <FormGroup>
                          <label className="form-control-label">Course</label>
                          <Input
                            type="text"
                            placeholder={user?.course}
                            readOnly
                            value={user?.course}
                            style={cursor}
                          />
                        </FormGroup>
                      </Col>
                      <Col lg="6">
                        <FormGroup>
                          <label className="form-control-label">Branch</label>
                          <Input
                            type="text"
                            placeholder={user?.branch}
                            readOnly
                            value={user?.branch}
                            style={cursor}
                          />
                        </FormGroup>
                      </Col>
                      <Col lg="6">
                        <FormGroup>
                          <label className="form-control-label">
                            Roll Number
                          </label>
                          <Input
                            type="text"
                            placeholder={user?.rollNo}
                            readOnly
                            value={user?.rollNo}
                            style={cursor}
                          />
                        </FormGroup>
                      </Col>
                      <Col lg="6">
                        <FormGroup>
                          <label className="form-control-label member-label">
                            <span>Member ID</span>
                            {!user?.acmMemberId && (
                              <a
                                href="https://usict.acm.org/benefits.php#registration"
                                target="_blank"
                                rel="noopener noreferrer"
                              >
                                Become A Member
                              </a>
                            )}
                          </label>
                          <Input
                            type="text"
                            placeholder={
                              memberId ? "Member Id" : "Not A Member"
                            }
                            readOnly={disabled}
                            onChange={(e) => setMemberId(e.target.value)}
                            value={memberId}
                          />
                        </FormGroup>
                      </Col>
                      <Col className="text-right">
                        <div>
                          {disabled ? null : (
                            <Button
                              onClick={() => {
                                updateInfo();
                              }}
                              type="button"
                              value="Input"
                              color="success"
                            >
                              Save
                            </Button>
                          )}
                          {disabled ? null : (
                            <Button
                              onClick={() => {
                                init();
                              }}
                              type="button"
                              value="Input"
                              color="danger"
                            >
                              Cancel
                            </Button>
                          )}
                        </div>
                      </Col>
                    </Row>
                  </div>
                </Form>
              </CardBody>
            </Card>
          </Col>
        </Row>
      </Container>
    </Container>
  );
};

export default Profile;
