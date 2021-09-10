import React,{useState} from 'react'
import {
    Button,
    Card,
    CardHeader,
    Input,
    CardBody,
    Container,
    Row,
    Col, Dropdown, DropdownToggle, DropdownMenu, DropdownItem 
  } from "reactstrap";
import "assets/css/Blog.css"
import { useSelector } from 'react-redux';
import { selectBlogs } from 'redux/slices/blogSlice';




export default function Blog() {
  const blogs = useSelector(selectBlogs)
  console.log(blogs)

  // const [data,setData] = useState(false)
  const [dropdownOpen, setDropdownOpen] = useState(false)
  const [selected, setSelected] = useState(false);
  console.log( "selected : "+ selected);
  const toggle = () => setDropdownOpen(prevState => !prevState);

  function showData() {
    if(blogs[0].blogId === false){
      return false
    }
    else return true
  }

  function Content(props){
    return(
      <div className="contentBox" >
  
  <div className="smallBox">
          
              <input type="checkbox"
              //  onClick={()=>setDisabled(!disabled)}
                 onChange = {(e)=> setSelected(e.target.checked)}
                 
               />

              <div className="details">
                <h3>{props.title}</h3>
                <p>{props.date}</p>
              </div>
         </div>
         <div className="Buttons">
           <Button color="info">Edit</Button>
           <Button color="danger">Trash</Button>
         </div>
      </div>
    )
  }
  
    return (
        <div>
         <>
          <Container className="mt-4" >
            <Container className="BlogContainer" fluid>
             <Row>
               <Col className="order-xl-1">
                <Card >
                 <CardHeader className="bg-white border-0 mt-4">
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
                   <Col className="text-right post-btn">
                     <Button
                      type="button"
                      color="success"
                      href="/CreateBlog"
                     >
                     New Post
                    </Button>
                   </Col>
                  </Row>
                 </CardHeader>
                 <Container >
                  <Container className="mb-4" fluid>
                    <Row>
                      <Col className="order-x1-1">
                       <Card className="bg-secondary">
                        <CardHeader className="bg-white border-0">
                         <Row>
                           <Col lg="8" md="6" sm="4" xs="4">
                            <div>
                            {
                             selected ? 
                           
                            <Button type="button" color="danger">Trash All</Button>
                            : null
                            }
                            </div>
                           </Col>
                          <Col lg="4" md="6" sm="8" xs="8">
                           <Input 
                            // className="form-control me-2"
                            type="search"
                            placeholder="Search"
                            aria-label="Search"/>
                          </Col>
                         </Row>
                        </CardHeader>
                        <hr className="h-line"/>
                        <CardBody className="post-section">

                          <div>                     
                            { showData() !== true ?
                            <div className="cont-nodata"><h3>NO DATA YET</h3></div>
                             : 
                            <div className="post-component">
                                {blogs.map( (item, i) => (
                                <Content id="post-content" 
                                title={item.blogTitle} date={item.published} key={i} blogId = {item.blogId} />))
                                }
                            </div>}
                          </div>

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
  );
}
