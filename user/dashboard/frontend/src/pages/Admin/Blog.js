import React from 'react'
import {
    Button,
    Card,
    CardHeader,
    Input,
    Container,
    Row,
    Col,FormGroup
  } from "reactstrap";
import "assets/css/Blog.css"

export default function Blog() {


    return (
        <div>
         <>
          <Container className="mt-4" >
            <Container className="BlogContainer" fluid>
             <Row>
               <Col className="order-xl-1">
                <Card className="bg-secondary">
                 <CardHeader className="bg-white border-0">
                  <Row className="CardHeader">
                   <Col xs="4">
                    <FormGroup >
                     <Input type="select" className="dropdown" name="select" id="exampleSelect">
                     <option>Published</option>
                     <option>Draft</option>
                     </Input>
                    </FormGroup>
                   </Col>
                   <Col className="text-right mr-3">
                     <Button
                      type="button"
                      color="info"
                     >
                     New Post
                    </Button>
                   </Col>
                  </Row>
                 </CardHeader>

                </Card>
               </Col>
             </Row>
            </Container>
          </Container>
         </>
        </div>
    )
}
