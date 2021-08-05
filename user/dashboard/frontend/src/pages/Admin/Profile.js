import React,{ useEffect, useState } from "react";
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

  const[disabled,setDisabled] = useState(true);
  const[cursor, setCursor] = useState({cursor : ""});
  const [data, setData] = useState([]);

  const[name, setName] = useState();
  const[memberId, setMemberId] = useState();
  const[id, setId] = useState();
  const[email, setEmail] = useState()
  const[branch, setBranch] = useState()
  const[rollNo, setRollNo] = useState()
  const[course, setcourse] = useState()


const url = "http://localhost:8000/users";

const getUser = () =>{
  fetch(url).then((result) =>{
    result.json().then((resp) =>{
        setData(resp?.[0]);
        setName(resp?.[0]?.name);
        setMemberId(resp?.[0]?.memberId);
        setId(resp?.[0]?.id);
        setEmail(resp?.[0]?.email);
        setRollNo(resp?.[0]?.rollNo);
        setBranch(resp?.[0]?.branch);
        setcourse(resp?.[0]?.course);
    })
  })
};

useEffect( ()=>{
  getUser();
}, [ ] );

  const updateInfo = () =>{
    let items = {id, name,email, memberId,course, rollNo,branch }
    fetch(`http://localhost:8000/users/${id}`, {
      method : 'PUT',
      headers : {
        'Accept' : 'application/json',
        'Content-Type' : 'application/json'
      },
      body : JSON.stringify(items)
    }).then((result)=>{
      result.json().then((resp)=>{
        // getUser();
      })
    })
  }

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
                  <h2 className="text-center my-3">
                  {/* {user?.name} */}
                  {name}
                  </h2> 
                  : <Input className="text-center m-auto d-block" type="name"
                     placeholder={user?.name} readOnly={disabled} style={{ width: "25%" }}   
                     onChange={(e)=>setName(e.target.value)}   value={name}                     
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
                            value={data?.email}
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
                            value={data?.course}
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
                            value={data?.branch}
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
                            value={data?.rollNo}
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
                            onChange={(e)=>setMemberId(e.target.value)}
                            value={memberId}
                          />
                        </FormGroup>
                      </Col>
                      <Col className="text-right">
                      <div>
                       {disabled ? null : <Button onClick={()=>{
                           setDisabled(true);
                           setCursor({cursor : ""});
                           updateInfo();
                           }}
                        type="button" value="Input" color="success" >
                        Save changes
                       </Button>}
                       {disabled ? null : <Button onClick={()=>{
                           setDisabled(true)
                           window.location.reload();
                         }}
                        type="button" value="Input" color="danger" >
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
