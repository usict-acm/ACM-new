import React, { useEffect, useState } from "react";
import {
  Button,
  Card,
  CardHeader,
  Input,
  Container,
  Row,
  Col,
} from "reactstrap";
import { CKEditor } from "@ckeditor/ckeditor5-react";
import documentEditor from "ckeditor5-custom-build";
import "../../assets/css/CreateBlog.css";
import SideNav from "../../components/Navbars/CreateBlogSidebar";
import { useDispatch, useSelector } from "react-redux";
import { selectUser } from "redux/slices/userSlice";
import { selectBlogs } from "redux/slices/blogSlice";
import { addBlog, fetchUserBlogs } from "api/blog";
import { useParams } from "react-router";

const CreateBlog = () => {
  const dispatch = useDispatch(),
    params = useParams(),
    user = useSelector(selectUser),
    [title, setTitle] = useState(""),
    [content, setContent] = useState(""),
    [tags, setTags] = useState([]),
    blogs = useSelector(selectBlogs),
    [editorInstance, setEditorInstance] = useState(null);

  console.log(params.blogIndex);

  useEffect(() => {
    dispatch(fetchUserBlogs({ userEmail: user?.email }));
  }, [dispatch, user?.email]);
  console.log("blog's data :", blogs);

  function createBlog(draft) {
    if (!title || !content) {
      return alert("Title and Content must be mentioned !!");
    }
    let data = {
      blogTitle: title,
      userEmail: user?.email,
      userName: user?.name,
      content,
      tags,
      isDraft: draft,
    };

    dispatch(addBlog(data));

    editorInstance?.setData("");
    setTitle("");
    setContent("");
    setTags([]);
  }

  return (
    <Container className="mt-4" fluid="xxl">
      <Container className="BlogContainer" fluid>
        <Row>
          <Col className="order-xl-1">
            <Card className="bg-secondary">
              <CardHeader className="bg-white border-0">
                <Row className="CardHeader">
                  <Col xs="6">
                    <Input
                      className="title"
                      type="name"
                      placeholder="T I T L E"
                      onChange={(event) => setTitle(event.target.value)}
                      value={title}
                    />
                  </Col>
                  <Col className="text-right">
                    <Button
                      className="ni ni-cloud-upload-96 save-btn"
                      type="button"
                      color="success"
                      onClick={() => createBlog(true)}
                    >
                      <p className="btn_txt">Save</p>
                    </Button>
                    <Button
                      className="ni ni-curved-next save-btn"
                      type="button"
                      color="warning"
                      onClick={() => createBlog(false)}
                    >
                      <p className="btn_txt">Publish</p>
                    </Button>
                  </Col>
                </Row>
              </CardHeader>
              <Card>
                <div id="toolbar-container" />
                <div id="Editor">
                  <div className="TextEditor">
                    <CKEditor
                      editor={documentEditor}
                      config={{
                        removePlugins: ["Title"],
                        placeholder: "Write your blog",
                        toolbar: {
                          // shouldNotGroupWhenFull: true,
                          items: [
                            "undo",
                            "redo",
                            "|",
                            "heading",
                            "|",
                            "fontFamily",
                            "|",
                            "fontSize",
                            "bold",
                            "italic",
                            "underline",
                            "fontColor",
                            "fontBackgroundColor",
                            "highlight",
                            "removeHighlight",
                            "|",
                            "blockQuote",
                            "code",
                            "codeBlock",
                            "strikethrough",
                            "subscript",
                            "superscript",
                            "|",
                            "link",
                            "uploadImage",
                            "resizeImage",
                            "imageStyle:wrapText",
                            "imageStyle:breakText",
                            "mediaEmbed",
                            "|",
                            "alignment",
                            "|",
                            "todoList",
                            "numberedList",
                            "bulletedList",
                            "indent",
                            "outdent",
                            "|",
                            "insertTable",
                            "tableColumn",
                            "tableRow",
                            "mergeTableCells",
                            "toggleTableCaption",
                            "tableCellProperties",
                            "tableProperties",
                            "|",
                            "horizontalLine",
                            // 'MathType',
                            // 'ChemType',
                            "specialCharacters",
                            "|",
                            "findAndReplace",
                            "selectAll",
                          ],
                        },
                      }}
                      onReady={(editor) => {
                        setEditorInstance(editor);
                        const toolbarContainer =
                          document.querySelector("#toolbar-container");
                        toolbarContainer.appendChild(
                          editor.ui.view.toolbar.element
                        );
                        console.log("Editor is ready to use!");
                      }}
                      onChange={(_, editor) => {
                        const data = editor.getData();
                        setContent(data);
                      }}
                    />
                  </div>
                  <div className="PostSetting">
                    <SideNav tags={tags} setTags={setTags} />
                  </div>
                </div>
              </Card>
            </Card>
          </Col>
        </Row>
      </Container>
    </Container>
  );
};

export default CreateBlog;
