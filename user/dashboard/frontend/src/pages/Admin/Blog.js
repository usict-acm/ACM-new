import React,{useState,useEffect} from 'react'
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
import toolbar from "pages/Admin/CreateBlog";
import { Link } from 'react-router-dom'

export default function Blog() {
  const user = useSelector(selectUser)
  console.log(user)
  const dispatch = useDispatch()
  const blogs = useSelector(selectBlogs)
  console.log("1",blogs)


  const  toggle = () => setDropdownOpen((prevState) => !prevState),
    [data,setData] = useState({select:"Published",disabled:false }),
    [dropdownOpen, setDropdownOpen] = useState(false),
    [entries,setEntries] =useState({draft:0,published:0});
    const [searchItem, setSearchItem]= useState("");
    const [isShown, setIsShown]= useState([]),
    [filterData, setFilterData]= useState([]);

  useEffect(() => {
    dispatch(fetchUserBlogs({userEmail:user?.email}))
    }, [dispatch,user?.email] )
  
  function showData() {   
    if(blogs.length === 0) return false
    else{  
      return true
    } 
  }

  function showFilterData (){
    if (filterData.length === 0) {

      return   <div className="cont-nodata"><h3>No data found</h3></div>


    } else {
      return <>
      <div className="post-component">
        {
          filterData.map( (item, i) => (
            <Link to={item.isDraft?`/CreateBlog/${item.blogId}`:`/blog/${item.blogId}`} >
            <Content id="post-content" 
            title={item.blogTitle} date={item.published}
            key={i} index={i} isDraft={item.isDraft} />
            </Link>)  )
        }
      </div>
      </>
    }
  }

  useEffect(()=>{
    const len = blogs.filter( value => value.isDraft === data.disabled).length;
    data.disabled?setEntries({draft:len}):setEntries({published:len})

    setFilterData(()=>{
      return blogs.filter( draft => draft.isDraft === data.disabled)
       .filter((val)=>{
         if(searchItem === ""){
           return val;
         }
         else if(val.blogTitle.toLowerCase().includes(searchItem.toLowerCase())){
           return val
         }
   })
     });

    setIsShown(()=>{
      let arr = [];
      for (let i = 0; i < len; i++) {
        arr.push({isMouseEnter : false})
      }

      return arr;
    })

  },[blogs,data.disabled,searchItem])

  
  function Content(props){
    return(
      <div className="contentBox"
        onMouseEnter={()=>{
          const update = [...isShown];
          update[props.index].isMouseEnter = true;
          setIsShown(update);
        }}
        onMouseLeave={()=>{
          const update = [...isShown];
          update[props.index].isMouseEnter = false;
          setIsShown(update);
        }}
       >

            <div className="details" >
              <h3>{props.title}</h3>
              <p>{props.date}</p>
            </div>
         <div className="Buttons">
           {isShown[props.index]?.isMouseEnter ? <Button color="info" className="bx bxs-pencil"></Button>:null }
           {isShown[props.index]?.isMouseEnter ? <Button color="danger" ><i className='bx bx-trash'></i></Button>:null }

         </div>
      </div>
    )
  }

  
  return (
      <>
        <Container className='BlogContainer mt-4' fluid>
          <Row className="m-0 p-0">
            <Col className='order-xl-1 p-0'>
              <Card>
                <CardHeader className='bg-white border-0'>
                  <Row className='CardHeader m-0 p-0'>
                    <Col xs='4' className="p-0">
                      <Dropdown
                        isOpen={dropdownOpen}
                        className='drop-btn'
                        toggle={toggle}
                      >
                        <DropdownToggle className='drop-text' caret>
                          {data.select} ({data.disabled?entries.draft:entries.published})
                        </DropdownToggle>
                        <DropdownMenu>
                          <DropdownItem onClick={()=> setData({select:"Published",disabled:false})}>
                            Published</DropdownItem>
                          <DropdownItem divider />
                          <DropdownItem onClick={()=> setData({select:"Draft",disabled:true})}>
                            Draft</DropdownItem>
                        </DropdownMenu>
                      </Dropdown>
                    </Col>
                    <Col className='text-right post-btn p-0 m-0'>
                      <Button type='button' color='info' href="/CreateBlog" className="postBtn">
                        New Post
                      </Button>
                    </Col>
                  </Row>
                </CardHeader>
                <CardBody className="content-card">
                  <Container className='mb-4' fluid>
                    <Row>
                      <Col className='order-x1-1 p-0'>
                        <Card className='bg-secondary'>
                          <CardHeader className='bg-white border-0'>
                            <Row className="p-0">
                              <Col
                                className='px-2 search-row'
                                // sm={{ size: 4, offset: 8 }}
                                lg="12"
                              >
                                <Input
                                  className='form-control me-2 '
                                  type='search'
                                  onChange={(e)=>setSearchItem(e.target.value)}
                                  placeholder='Search'
                                  aria-label='Search'
                                />
                              </Col>
                            </Row>
                          </CardHeader>
                          <hr className='h-line' />
                          <CardBody className='post-section'>
                            <div>                     
                              { !showData() ?
                              <div className="cont-nodata"><h3>NO DATA YET</h3></div>
                                : 
                              showFilterData()
                              }
                            </div>

                          </CardBody>
                        </Card>
                      </Col>
                    </Row>
                  </Container>
                </CardBody>
              </Card>
            </Col>
          </Row>
        </Container>
      </>
  );
}