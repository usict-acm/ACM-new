import React, { useState, useEffect } from 'react'
import {
  Button,
  Card,
  CardHeader,
  Input,
  CardBody,
  Container,
  Row,
  Col,
  Dropdown,
  DropdownToggle,
  DropdownMenu,
  DropdownItem,
} from 'reactstrap'
import 'assets/css/Blog.css'
import { useSelector, useDispatch } from 'react-redux'
import { selectBlogs } from 'redux/slices/blogSlice'
import { selectUser } from 'redux/slices/userSlice'
import { fetchUserBlogs } from 'api/blog'

function Content(props) {
  return (
    <div className='contentBox'>
      <div className='smallBox'>
        <input type='checkbox' />
        <div className='details'>
          <h3>{props.title}</h3>
          <h5>{props.date}</h5>
        </div>
      </div>
      <div>
        <Button>Edit</Button>
        <Button>Trash</Button>
      </div>
    </div>
  )
}

export default function Blog() {
  const user = useSelector(selectUser)
  const dispatch = useDispatch()

  const blogs = useSelector(selectBlogs)
  useEffect(() => {
    dispatch(fetchUserBlogs({userEmail:user?.email}))
    console.log(blogs)
  }, [])

  // const [data,setData] = useState(false)
  const [dropdownOpen, setDropdownOpen] = useState(false)
  const toggle = () => setDropdownOpen((prevState) => !prevState)

  // function showData() {
  //   if(blogs[0].blogId === false){
  //     return false
  //   }
  //   else return true
  // }

  return (
    <div>
      <>
        <Container className='mt-4'>
          <Container className='BlogContainer' fluid>
            <Row>
              <Col className='order-xl-1'>
                <Card>
                  <CardHeader className='bg-white border-0 mt-4'>
                    <Row className='CardHeader'>
                      <Col xs='4'>
                        <Dropdown
                          isOpen={dropdownOpen}
                          className='drop-btn'
                          toggle={toggle}
                        >
                          <DropdownToggle className='drop-text' caret>
                            Published
                          </DropdownToggle>
                          <DropdownMenu>
                            <DropdownItem>Published</DropdownItem>
                            <DropdownItem divider />
                            <DropdownItem>Draft</DropdownItem>
                          </DropdownMenu>
                        </Dropdown>
                      </Col>
                      <Col className='text-right post-btn'>
                        <Button type='button' color='info' href='/CreateBlog'>
                          New Post
                        </Button>
                      </Col>
                    </Row>
                  </CardHeader>
                  <Container>
                    <Container className='mb-4' fluid>
                      <Row>
                        <Col className='order-x1-1'>
                          <Card className='bg-secondary'>
                            <CardHeader className='bg-white border-0'>
                              <Row>
                                <Col
                                  className='text-right'
                                  sm={{ size: 4, offset: 8 }}
                                >
                                  <Input
                                    className='form-control me-2'
                                    type='search'
                                    placeholder='Search'
                                    aria-label='Search'
                                  />
                                </Col>
                              </Row>
                            </CardHeader>
                            <hr className='h-line' />
                            <CardBody className='post-section'>
                              {/* <div>                     
                            { showData() === true ?  <h3>NO DATA YET</h3> : 
                            <div className="post-component">
                                {blogs.map((item)=>(
                                <Content id="post-content" title={item.blogTitle} date={item.published} key={item.blogId}/>
                                ))
                                }
                            </div>
                            }
                          </div> */}
                            </CardBody>
                          </Card>
                        </Col>
                      </Row>
                    </Container>
                  </Container>
                </Card>
              </Col>
            </Row>
          </Container>
        </Container>
      </>
    </div>
  )
}
