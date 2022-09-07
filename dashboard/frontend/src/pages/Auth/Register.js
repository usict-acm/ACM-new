/*!
 
=========================================================
* Argon Dashboard React - v1.2.0
=========================================================
 
* Product Page: https://www.creative-tim.com/product/argon-dashboard-react
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard-react/blob/master/LICENSE.md)
 
* Coded by Creative Tim
 
=========================================================
 
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 
*/
import React, { useEffect, useState } from "react";
import { useDispatch } from "react-redux";

// reactstrap components
import {
  Button,
  Card,
  CardBody,
  FormGroup,
  Form,
  Input,
  InputGroupAddon,
  InputGroupText,
  InputGroup,
  Col,
  Spinner,
} from "reactstrap";
import { signup } from "api/user";
import { COLLEGES } from "utils/Constants";
import { BRANCHES } from "utils/Constants";
import { useHistory } from "react-router";
import SweetAlert from "components/SweetAlert";
import { setUser, resetUser } from "redux/slices/userSlice";
import { COURSES } from "utils/Constants";

const Register = () => {
  const history = useHistory(),
    dispatch = useDispatch(),
    [loading, setLoading] = useState(false),
    [email, setEmail] = useState(""),
    [name, setName] = useState(""),
    [password, setPassword] = useState(""),
    [memId, setMemId] = useState(""),
    [course, setCourse] = useState(""),
    [otherCourse, setOtherCourse] = useState(""),
    [branch, setBranch] = useState(""),
    [otherBranch, setOtherBranch] = useState(""),
    [rollNo, setRollNo] = useState(""),
    [college, setCollege] = useState(""),
    [otherCollege, setOtherCollege] = useState(""),
    [showAlert, setShowAlert] = useState(false),
    [alertMsg, setAlertMsg] = useState(""),
    [alertType, setAlertType] = useState("warning");

  useEffect(() => {
    return () => {
      setLoading(false);
    };
  }, []);

  const registerHandler = async (e) => {
    e.preventDefault();
    if (
      email === "" ||
      name === "" ||
      password === "" ||
      course === "" ||
      branch === "" ||
      rollNo === "" ||
      college === ""
    ) {
      setAlertMsg("Please fill all the required fields.");
      setAlertType("warning");
      setShowAlert(true);
      return;
    }
    if (password.length < 8) {
      setAlertMsg("Please enter password with more than 8 character.");
      setShowAlert(true);
      return;
    }
    setLoading(true);
    const data = {
      email,
      name,
      password,
      acmMemberId: memId,
      course,
      branch,
      rollNo,
      college,
    };
    if (data.college === "Other") {
      data.college = otherCollege;
    }
    if (data.course === "Other") {
      data.course = otherCourse;
    }
    if (data.branch === "Other") {
      data.branch = otherBranch;
    }
    const signUpRes = await signup(data);
    if (signUpRes?.error) {
      localStorage.removeItem("user");
      dispatch(resetUser());
      setAlertMsg(signUpRes?.error);
      setAlertType("error");
      setShowAlert(true);
    } else {
      localStorage.setItem("user", JSON.stringify(signUpRes?.user));
      dispatch(setUser(signUpRes?.user));
    }
    setLoading(false);
  };

  return (
    <div className="registerPage">
      <SweetAlert
        open={showAlert}
        setOpen={setShowAlert}
        msg={alertMsg}
        type={alertType}
      />
      <div className="registerLeft glass">
        <h2 style={{ marginBottom: "20px" }}>Why Join Us?</h2>
        <ul>
          <li style={{ marginBottom: "10px" }}>ACM’s flagship publication</li>
          <li style={{ marginBottom: "10px" }}>ACM’s Popular E-Newsletters</li>
          <li style={{ marginBottom: "10px" }}>Lifelong Learning Center</li>
          <li style={{ marginBottom: "10px" }}>
            ACM Student Research Competition
          </li>
          <li style={{ marginBottom: "10px" }}>
            Have access to Clubs Under ACM USICT
          </li>
          <li style={{ marginBottom: "10px" }}>ACM Career & Job Center</li>
          <li style={{ marginBottom: "10px" }}>Specific Interest Groups</li>
          <li style={{ marginBottom: "10px" }}>
            Sponsored Conferences and Tours
          </li>
          <li style={{ marginBottom: "10px" }}>ACM Summer and Winter School</li>
        </ul>
        <div className="w-100 text-right">
          <a
            className="link__behaviour"
            href="https://usict.acm.org/benefits.php"
            target="_blank"
            rel="noopener noreferrer"
          >
            <small>Learn More...</small>
          </a>
        </div>
      </div>
      <Col className="mt-5 registerRight">
        <Card className="bg-secondary shadow border-0">
          <CardBody className="px-lg-5 py-lg-5">
            <div className="text-center text-muted mb-4">
              <small>Please enter your details</small>
            </div>
            <Form role="form" onSubmit={registerHandler}>
              <FormGroup>
                <InputGroup className="input-group-alternative mb-3">
                  <InputGroupAddon addonType="prepend">
                    <InputGroupText>
                      <i className="bx bx-rename" />
                    </InputGroupText>
                  </InputGroupAddon>
                  <Input
                    placeholder="Name*"
                    type="text"
                    value={name}
                    onChange={(e) => setName(e.target.value)}
                    required
                  />
                </InputGroup>
              </FormGroup>
              <FormGroup>
                <InputGroup className="input-group-alternative mb-3">
                  <InputGroupAddon addonType="prepend">
                    <InputGroupText>
                      <i className="ni ni-email-83" />
                    </InputGroupText>
                  </InputGroupAddon>
                  <Input
                    placeholder="Email*"
                    type="email"
                    autoComplete="new-email"
                    value={email}
                    onChange={(e) => setEmail(e.target.value)}
                    required
                  />
                </InputGroup>
              </FormGroup>
              <FormGroup>
                <InputGroup className="input-group-alternative">
                  <InputGroupAddon addonType="prepend">
                    <InputGroupText>
                      <i className="ni ni-lock-circle-open" />
                    </InputGroupText>
                  </InputGroupAddon>
                  <Input
                    placeholder="Password*"
                    type="password"
                    autoComplete="new-password"
                    value={password}
                    onChange={(e) => setPassword(e.target.value)}
                    required
                  />
                </InputGroup>
              </FormGroup>
              <FormGroup>
                <InputGroup className="input-group-alternative mb-3">
                  <InputGroupAddon addonType="prepend">
                    <InputGroupText>
                      <i className="ni ni-building" />
                    </InputGroupText>
                  </InputGroupAddon>
                  <Input
                    list="colleges"
                    placeholder="College Name*"
                    type="select"
                    value={college}
                    onChange={(e) => setCollege(e.target.value)}
                    required
                  >
                    <option value="">Select College*</option>
                    {COLLEGES.map((value, index) => (
                      <option key={index} value={value}>
                        {value}
                      </option>
                    ))}
                  </Input>
                </InputGroup>
              </FormGroup>
              {college === "Other" ? (
                <FormGroup>
                  <InputGroup className="input-group-alternative mb-3">
                    <InputGroupAddon addonType="prepend">
                      <InputGroupText>
                        <i className="ni ni-fat-add" />
                      </InputGroupText>
                    </InputGroupAddon>
                    <Input
                      placeholder="Type College Name*"
                      type="text"
                      value={otherCollege}
                      onChange={(e) => setOtherCollege(e.target.value)}
                      required
                    />
                  </InputGroup>
                </FormGroup>
              ) : null}
              <FormGroup>
                <InputGroup className="input-group-alternative mb-3">
                  <InputGroupAddon addonType="prepend">
                    <InputGroupText>
                      <i className="ni ni-hat-3" />
                    </InputGroupText>
                  </InputGroupAddon>
                  <Input
                    placeholder="Course*"
                    type="select"
                    required
                    value={course}
                    onChange={(e) => setCourse(e.target.value)}
                  >
                    <option value="">Select Course*</option>
                    {COURSES.map((value, index) => (
                      <option key={index} value={value}>
                        {value}
                      </option>
                    ))}
                  </Input>
                </InputGroup>
              </FormGroup>
              {course === "Other" ? (
                <FormGroup>
                  <InputGroup className="input-group-alternative mb-3">
                    <InputGroupAddon addonType="prepend">
                      <InputGroupText>
                        <i className="ni ni-fat-add" />
                      </InputGroupText>
                    </InputGroupAddon>
                    <Input
                      placeholder="Type Course Name*"
                      type="text"
                      value={otherCourse}
                      onChange={(e) => setOtherCourse(e.target.value)}
                      required
                    />
                  </InputGroup>
                </FormGroup>
              ) : null}

              <FormGroup>
                <InputGroup className="input-group-alternative mb-3">
                  <InputGroupAddon addonType="prepend">
                    <InputGroupText>
                      <i className="bx bx-library" />
                    </InputGroupText>
                  </InputGroupAddon>
                  <Input
                    placeholder="Course*"
                    type="select"
                    required
                    value={branch}
                    onChange={(e) => setBranch(e.target.value)}
                  >
                    <option value="">Select Branch*</option>
                    {BRANCHES?.map((value, index) => (
                      <option key={index} value={value}>
                        {value}
                      </option>
                    ))}
                  </Input>
                </InputGroup>
              </FormGroup>

              {branch === "Other" ? (
                <FormGroup>
                  <InputGroup className="input-group-alternative mb-3">
                    <InputGroupAddon addonType="prepend">
                      <InputGroupText>
                        <i className="ni ni-fat-add" />
                      </InputGroupText>
                    </InputGroupAddon>
                    <Input
                      placeholder="Type Branch Name*"
                      type="text"
                      value={otherBranch}
                      onChange={(e) => setOtherBranch(e.target.value)}
                      required
                    />
                  </InputGroup>
                </FormGroup>
              ) : null}
              <FormGroup>
                <InputGroup className="input-group-alternative mb-3">
                  <InputGroupAddon addonType="prepend">
                    <InputGroupText>
                      <i className="bx bx-id-card" />
                    </InputGroupText>
                  </InputGroupAddon>
                  <Input
                    placeholder="Roll No*"
                    type="text"
                    pattern="[0-9]*"
                    value={rollNo}
                    onChange={(e) => setRollNo(e.target.value)}
                    required
                  />
                </InputGroup>
              </FormGroup>
              <FormGroup>
                <InputGroup className="input-group-alternative mb-3">
                  <InputGroupAddon addonType="prepend">
                    <InputGroupText>
                      <i className="bx bx-id-card" />
                    </InputGroupText>
                  </InputGroupAddon>
                  <Input
                    placeholder="ACM Member ID"
                    type="text"
                    value={memId}
                    onChange={(e) => setMemId(e.target.value)}
                  />
                </InputGroup>
              </FormGroup>
              <div className="text-center">
                <Button className="mt-4 w-100" color="primary" type="submit">
                  {loading ? (
                    <Spinner color="light" size="sm" />
                  ) : (
                    "Create account"
                  )}
                </Button>
                <div className="text-center mt-3">
                  <p
                    style={{ width: "fit-content" }}
                    className="link__behaviour mx-auto"
                    onClick={() => history.push("/login")}
                  >
                    <small>Already registered? Login</small>
                  </p>
                </div>
              </div>
            </Form>
          </CardBody>
        </Card>
      </Col>
    </div>
  );
};

export default Register;
