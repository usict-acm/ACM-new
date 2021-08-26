import React, { useState } from "react";

// import { Nav , InputGroup,FormControl,Accordion} from 'react-bootstrap';
import { Container, Collapse, Button, CardBody, Card, Input } from 'reactstrap';
import "../../assets/css/CreateBlog.css"
// import Example from "./Example";

const SideNav=()=>{
 
    return(
        <>
         <div className="top_section">
          <h3>Post Settings</h3>
         </div>
        <hr />
         <div>
         <h4>Tags</h4>
        <Input type="text" placeholder="Separate tags with commas"></Input>
        <Button color="info" className="mt-3">Add</Button>
         </div>
         {/* <hr />  */}
 
        </>

    );

}

export default SideNav;
