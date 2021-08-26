import React from "react";
import
  {
    Button,
    Card,
    CardHeader,
    Input,
    Container,
    Row,
    Col,
  } from 'reactstrap';
import { CKEditor } from '@ckeditor/ckeditor5-react'
import documentEditor from "@ckeditor/ckeditor5-build-decoupled-document";
import "../../assets/css/CreateBlog.css"
import UserHeader from "components/Headers/UserHeader";
import SideNav from "../../components/Navbars/CreateBlog_sidebar";
const CreateBlog = () =>
{

  return (
    <>
      <Container className="mt-0" fluid="xxl">
        <UserHeader />

        <Container className="BlogContainer" fluid>
          <Row>
            <Col className="order-xl-1">
              <Card className="bg-secondary shadow">
                <CardHeader className="bg-white border-0">
                  <Row className="align-items-center  justify-content-between">
                    {/* <Col xs="6"> */}
                    <Input
                      className="title"
                      type="name"
                      placeholder="T I T L E"
                    />
                    {/* </Col> */}
                    {/* <Col className="text-right"> */}
                    <Button
                      className="ni ni-curved-next"
                      type="button"
                      color="success"
                    >
                      Publish
                    </Button>
                    {/* </Col> */}
                  </Row>

                </CardHeader>
                <Card>
                  <div id="toolbar-container"></div>

                  <div id="Editor">
                    <div className="TextEditor">
                      <CKEditor
                        editor={documentEditor}
                        //  onChange = {(e, editor) =>{handleChange(e, editor)}}
                        onReady={editor =>
                        {
                          // Add the toolbar to the container
                          const toolbarContainer = document.querySelector('#toolbar-container');
                          toolbarContainer.appendChild(editor.ui.view.toolbar.element);

                          window.editor = editor;
                          // You can store the "editor" and use when it is needed.
                          console.log('Editor is ready to use!', editor);
                        }}
                        onChange={(event, editor) =>
                        {
                          const data = editor.getData();
                          console.log({ event, editor, data });
                        }}
                        onBlur={(event, editor) =>
                        {
                          console.log('Blur.', editor);
                        }}
                        onFocus={(event, editor) =>
                        {
                          console.log('Focus.', editor);
                        }}
                      />
                    </div>
                    <div className="PostSetting">
                      <SideNav/>
                    </div>
                  </div>

                </Card>
              </Card>
            </Col>
          </Row>
        </Container>
      </Container>
    </>
  )
};

export default CreateBlog;
