import React, { useState, useEffect } from "react";
import { Button, CardHeader, CardBody, Container, Row, Col } from "reactstrap";
import "assets/css/preview.css";
import { useHistory, useParams } from "react-router";
import { useSelector } from "react-redux";
import { selectBlogs } from "redux/slices/blogSlice";
import { CKEditor } from "@ckeditor/ckeditor5-react";
import documentEditor from "ckeditor5-custom-build";
import "assets/css/CreateBlog.css";
// import { formatDate } from "utils/commonFunctions";
import SideBar from "components/Blogs/DisplayBlogSideBar.js"

export default function Preview() {
  const params = useParams(),
    { blogId } = params,
    history = useHistory(),
    blogs = useSelector(selectBlogs),
    [editorInstance, setEditorInstance] = useState(null);

  const blog = blogs.find((item) => item.blogId === blogId);

  useEffect(() => {
    blog && editorInstance?.setData(blog?.content);
  }, [editorInstance, blog]);

  return (
    <>
      <Container fluid className="p-2 mt-4 ">
        <CardHeader className="mb-4 px-2 bg-secondary">
          <Row className="titleEdit">
            <Col xs="9">
              <h1 className="blogTitle">{blog?.blogTitle}</h1>
            </Col>
            <Col  xs="3" className="editbtnCol">
              <Button
                onClick={() => history.push(`/createBlog/${blogId}`)}
                color="info"
                className="bx bxs-pencil"
              ></Button>
            </Col>
          </Row>
        </CardHeader>
        <CardBody className="px-2">
            <div className="display">
            <div id="blogContent" className="blogContent TextEditor">
              <CKEditor
                editor={documentEditor}
                config={{ toolbar: [] }}
                disabled
                onReady={(editor) => {
                  setEditorInstance(editor);
                }}
              />
            </div>
            
            <div className="sideBar ">
              <SideBar blog={blog} />
           </div>
            </div>
        </CardBody>
      </Container>
    </>
  );
}
