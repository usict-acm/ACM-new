import React, { useEffect, useState } from "react";
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
import { updateProfile } from "redux/slices/userSlice";

const Profile = () => {
  const dispatch = useDispatch(),
    user = useSelector(selectUser),
    [disabled, setDisabled] = useState(true),
    [cursor, setCursor] = useState({ cursor: "" }),
    [name, setName] = useState(""),
    [memberId, setMemberId] = useState("");

  const init = () => {
    setName(user?.name);
    setMemberId(user?.acmMemberId);
  };

  useEffect(() => {
    init();
  }, []);

  const updateInfo = () => {
    let data = { ...user, name, acmMemberId: memberId };
    if (!name) {
      alert("Please fill in all the required fields");
      return;
    }
    dispatch(updateProfile(data));
  };

  return (
    <Container className="mt-0" fluid="xxl">
      <UserHeader />
      {/* Page content */}

      <Container className="mt--9" fluid>
        <Row>
          <Col className="order-xl-1">
            <Card className="bg-secondary shadow">
              <CardHeader className="bg-white border-0">
                <Row className="align-items-center">
                  <Col xs="8">
                    <h3>My Account</h3>
                  </Col>
                  <Col className="text-right">
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
                  </Col>
                </Row>
              </CardHeader>
              <CardBody>
                <CardImg
                  top
                  style={{ width: "20%" }}
                  src={
                    require("../../assets/img/theme/team-4-800x800.jpg").default
                  }
                  alt="Card image cap"
                  className="rounded-circle d-block m-auto md-8 "
                />
                <div className="my-3">
                  {disabled ? (
                    <h2 className="text-center my-3">{user?.name}</h2>
                  ) : (
                    <Input
                      className="text-center m-auto d-block"
                      type="name"
                      placeholder="New Name"
                      readOnly={disabled}
                      style={{ width: "15%" }}
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
                          <label className="form-control-label">
                            Member ID
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
                                setDisabled(true);
                                setCursor({ cursor: "" });
                                updateInfo();
                              }}
                              type="button"
                              value="Input"
                              color="success"
                            >
                              Save changes
                            </Button>
                          )}
                          {disabled ? null : (
                            <Button
                              onClick={() => {
                                setDisabled(true);
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
