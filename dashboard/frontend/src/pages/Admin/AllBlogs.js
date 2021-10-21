import React, { useState, useEffect } from "react";
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
} from "reactstrap";
import "assets/css/Blog.css";
import { useSelector } from "react-redux";
import { selectBlogs } from "redux/slices/blogSlice";
import BlogsList from "components/Blogs/BlogsList";

export default function AllBlogs() {
  const blogs = useSelector(selectBlogs);

  const toggle = () => setDropdownOpen((prevState) => !prevState),
    [showDrafts, setShowDrafts] = useState(false),
    [dropdownOpen, setDropdownOpen] = useState(false),
    [searchQuery, setSearchQuery] = useState(""),
    [filterData, setFilterData] = useState([]);

  useEffect(() => {
    setFilterData(() => {
      return blogs
        .filter((blog) => blog.isDraft === showDrafts)
        .filter(
          (blog) =>
            searchQuery === "" ||
            blog.blogTitle.toLowerCase().includes(searchQuery.toLowerCase())
        );
    });
  }, [blogs, showDrafts, searchQuery]);

  return (
    <>
      <Container className="BlogContainer mt-4" fluid>
        <Row className="m-0 p-0">
          <Col className="order-xl-1 p-0">
            <Card>
              <CardHeader className="bg-white border-0">
                <Row className="CardHeader m-0 p-0">
                  <Col xs="4" className="p-0">
                    <Dropdown
                      isOpen={dropdownOpen}
                      className="drop-btn"
                      toggle={toggle}
                    >
                      <DropdownToggle className="drop-text" caret>
                        {(showDrafts ? "Drafts" : "Published") +
                          " (" +
                          filterData.length +
                          ")"}
                      </DropdownToggle>
                      <DropdownMenu>
                        <DropdownItem onClick={() => setShowDrafts(false)}>
                          Published
                        </DropdownItem>
                        <DropdownItem divider />
                        <DropdownItem onClick={() => setShowDrafts(true)}>
                          Drafts
                        </DropdownItem>
                      </DropdownMenu>
                    </Dropdown>
                  </Col>
                  <Col className="text-right post-btn p-0 m-0">
                    <Button
                      type="button"
                      color="info"
                      href={process.env.REACT_APP_HOSTED_BASE_URL + "/createBlog"}
                      className="postBtn"
                    >
                      New Post
                    </Button>
                  </Col>
                </Row>
              </CardHeader>
              <CardBody className="content-card">
                <Container className="mb-4" fluid>
                  <Row>
                    <Col className="order-x1-1 p-0">
                      <Card className="bg-secondary">
                        <CardHeader className="bg-white border-0">
                          <Row className="p-0">
                            <Col
                              className="px-2 search-row"
                              // sm={{ size: 4, offset: 8 }}
                              lg="12"
                            >
                              <Input
                                className="form-control me-2 "
                                type="search"
                                onChange={(e) => setSearchQuery(e.target.value)}
                                placeholder="Search"
                                aria-label="Search"
                              />
                            </Col>
                          </Row>
                        </CardHeader>
                        <hr className="h-line" />
                        <CardBody className="post-section">
                          <div>
                            <BlogsList blogData={filterData} />
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
