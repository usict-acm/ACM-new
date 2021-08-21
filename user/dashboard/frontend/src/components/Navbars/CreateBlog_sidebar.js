import React, { useState } from "react";
// import { Nav , InputGroup,FormControl,Accordion} from 'react-bootstrap';
import { Container, Collapse, Button, CardBody, Card } from 'reactstrap';
import "../../assets/css/CreateBlog.css"
// import Example from "./Example";

const SideNav=()=>{
    const [showTags, setShowTags] = useState(false);
    const [showPub, setShowPub] = useState(false);

    // const toggle = () => setIsOpen(!isOpen);
    return(
        <>
        <div>
         <div className="right">
          <h3>Post Settings</h3>
        <hr />
         </div>
         <div>
            <div><button onClick={()=>setShowTags(!showTags)}>toggle</button></div>
            <div>{showTags?<p>Tags</p>:null}</div>
         </div>
         <hr /> 
         <div>
            <div><button onClick={()=>setShowPub(!showPub)}>toggle</button></div>
            <div>{showPub?<p>Published</p>:null}</div>
         </div>


        </div>
        </>

    );

}

export default SideNav;