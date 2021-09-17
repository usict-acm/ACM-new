import React,{useState,useEffect} from 'react';
import {
  Button,
  Card,
  CardHeader,
  Input,
  CardBody,
  Container,
  Row,
  Col,
} from 'reactstrap';
import "assets/css/preview.css";
import { useParams } from 'react-router';
import { useSelector } from 'react-redux';
import { selectBlogs } from 'redux/slices/blogSlice';
import { CKEditor } from "@ckeditor/ckeditor5-react";
import documentEditor from "ckeditor5-custom-build";
import "../../assets/css/CreateBlog.css";

export default function Preview(){
    const param = useParams(),
    {blogIndex} = param,
    blogs=useSelector(selectBlogs),
    blog=blogs.find(item=> item.blogId === blogIndex),
    formatDate = (timestamp) => {
      const date = new Date(timestamp);
      return (
        date.getDate() +
        ", " +
        (months[date.getMonth()])   
        + ", " + 
        date.getFullYear()    
      );
    };

    const months = [
      "January",
      "February",
      "March",
      "April",
      "May",
      "June",
      "July",
      "August",
      "September",
      "October",
      "November",
      "December"
    ]


    useEffect(()=>{
        document.getElementById("blogContent").innerHTML=blog?.content;
    },[blog])

    
    return(
        <>
        <Container fluid className="p-2 mt-4 ">
         <CardHeader className="mb-4 px-2 bg-secondary" >
          <Row className="titleEdit">
            <Col >
             <h1 className="blogTitle" >{blog?.blogTitle}</h1>

            </Col>
            <Col className="text-right editbtn">
             <Button color="info" className="bx bxs-pencil"></Button>
            </Col>
          </Row>
         </CardHeader>
         <CardBody className="px-2">
          <p className="date">{formatDate(blog?.published)}</p>
          {/* <p>{blog?.tags}</p> */}
           <div>
            <p className="blogContent">
               <div id="blogContent">

               </div>
            </p>
           </div>
         </CardBody>
        </Container>
        </>
    )
}
