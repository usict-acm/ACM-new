import React,{ useState } from "react";
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
  const[disabled,setDisabled] = useState(true);
  const[cursor, setCursor] = useState({cursor : ""});
//   const[readOnly,setReadonly] = useState(true);
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
               <Row className="align-items-center">
                <Col xs="8">
                 <h3>My Account</h3>
                </Col>
                <Col className="text-right">
                 <Button disabled={!disabled} onClick={()=>{
                     setDisabled(false);
                    setCursor({cursor : "no-drop"});
                 }}
                  type="button" value="Input" color="info" style={cursor}>
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
                 {disabled ?
                  <h2 className="text-center my-3">{user?.name}</h2> 
                  : <Input className="text-center m-auto d-block" type="name"
                     placeholder={user?.name} readOnly={disabled} style={{ width: "25%" }}                           
                />
                  }
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
                            placeholder={user?.acmMemberId}
                            readOnly = {disabled}
                          />
                        </FormGroup>
                      </Col>
                      <Col className="text-right">
                      <div>
                       {disabled ? null : <Button onClick={()=>{
                           setDisabled(true);
                           setCursor({cursor : ""});
                           }}
                        type="button" value="Input" color="success" >
                        Save changes
                       </Button>}
                       {disabled ? null : <Button onClick={()=>setDisabled(true)}
                        type="button" value="Input" color="primary" >
                        Cancel
                       </Button>}
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
