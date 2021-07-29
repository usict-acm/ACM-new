import React from "react";
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
import { useSelector } from "react-redux";
import { selectUser } from "redux/slices/userSlice";

const Profile = (props) => {
  const user = useSelector(selectUser);
  console.log(user);
  return (
    <Container className="mt-0" fluid="xxl">
      <UserHeader />
      {/* Page content */}

      <Container className="mt--9" fluid>
        <Row>
          <Col className="order-xl-1">
            <Card className="bg-secondary shadow">
              <CardHeader className="bg-white border-0">
                <h3 className="my-0 text-center">My Account</h3>
              </CardHeader>

              <CardBody>
                <CardImg
                  top
                  style={{ width: "25%" }}
                  src={
                    require("../../assets/img/theme/team-4-800x800.jpg").default
                  }
                  alt="Card image cap"
                  className="rounded-circle d-block m-auto md-8 "
                />

                <h2 className="text-center my-3">{user?.name}</h2>

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
                            placeholder={user?.acmMemberId}
                            readOnly
                          />
                        </FormGroup>
                      </Col>

                      <Col className="text-right">
                        <Button type="button" value="Input" color="info">
                          Edit Profile
                        </Button>
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
