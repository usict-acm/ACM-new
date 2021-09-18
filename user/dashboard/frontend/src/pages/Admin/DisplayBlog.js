import React, { useState, useEffect } from "react";
import { Button, CardHeader, CardBody, Container, Row, Col } from "reactstrap";
import "assets/css/preview.css";
import { useHistory, useParams } from "react-router";
import { useSelector } from "react-redux";
import { selectBlogs } from "redux/slices/blogSlice";
import { CKEditor } from "@ckeditor/ckeditor5-react";
import documentEditor from "ckeditor5-custom-build";
import "../../assets/css/CreateBlog.css";
import { formatDate } from "utils/commonFunctions";

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
            <Col>
              <h1 className="blogTitle">{blog?.blogTitle}</h1>
            </Col>
            <Col className="text-right editbtn">
              <Button
                onClick={() => history.push(`/createBlog/${blogId}`)}
                color="info"
                className="bx bxs-pencil"
              ></Button>
            </Col>
          </Row>
        </CardHeader>
        <CardBody className="px-2">
          <p className="date">{formatDate(blog?.published)}</p>
          {/* <p>{blog?.tags}</p> */}
          <div>
            {/* <p> */}
            <div id="blogContent" className="blogContent">
              <CKEditor
                editor={documentEditor}
                config={{ toolbar: [] }}
                disabled
                onReady={(editor) => {
                  setEditorInstance(editor);
                }}
              />
            </div>
            {/* </p> */}
          </div>
        </CardBody>
      </Container>
    </>
  );
}
