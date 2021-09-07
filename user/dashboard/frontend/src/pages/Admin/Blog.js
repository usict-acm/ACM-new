import React, { useState } from 'react'
import
  {
    Button,
    Card,
    CardHeader,
    CardBody,
    Input,
    Container,
    Row,
    Col, Dropdown, DropdownToggle, DropdownMenu, DropdownItem
  } from "reactstrap";
import "assets/css/Blog.css"

export default function Blog()
{

  const [dropdownOpen, setDropdownOpen] = useState(false);

  const toggle = () => setDropdownOpen(prevState => !prevState);
  return (
    <div>
      <>
        <Container className="mt-4" >
          <Container className="BlogContainer" fluid>
            <Row>
              <Col className="order-xl-1">
                <Card className="bg-secondary">
                  <CardHeader className="bg-white border-0 ">
                    <Row className="CardHeader">
                      <Col xs="4">
                        <Dropdown isOpen={dropdownOpen} className="drop-btn" toggle={toggle}>
                          <DropdownToggle className="drop-text" caret>
                            Published
                          </DropdownToggle>
                          <DropdownMenu>
                            <DropdownItem >Published</DropdownItem>
                            <DropdownItem divider />
                            <DropdownItem>Draft</DropdownItem>
                          </DropdownMenu>
                        </Dropdown>
                      </Col>
                      <Col className="text-right">
                        <Button
                          type="button"
                          color="info"
                        >
                          New Post
                        </Button>
                      </Col>
                    </Row>
                  </CardHeader>
                  <CardBody >
                    <Container className="mb-4" fluid>
                      <Row>
                        <Col className="order-x1-1">
                          <Card className="bg-secondary">
                            <CardHeader className="bg-white border-0">
                              <Row  >
                              <Col xs="4" >
                                    {/* <Button
                                    type="button"
                                    color="danger"
                                    >Trash
                                    </Button> */}
                              </Col>
                                <Col className="text-right" xs="4" sm={{ size: 4, offset: 8 }}>
                                  <Input  
                                  className="form-control me-2" 
                                  type="text" placeholder="Search"  
                                  aria-label="Search"
                                      />
                                </Col>
                              </Row>
                            </CardHeader>
                          </Card>
                        </Col>
                      </Row>
                    </Container>
                  </CardBody>

                </Card>
              </Col>
            </Row>
          </Container>
        </Container>
      </>
    </div>
  )
}
