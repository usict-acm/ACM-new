import React, { useState, useEffect } from 'react'
import {
  Button,
  Card,
  CardHeader,
  Input,
  Container,
  Row,
  Col,
} from 'reactstrap'
import { CKEditor } from '@ckeditor/ckeditor5-react'
import documentEditor from 'ckeditor5-custom-build'
import '../../assets/css/CreateBlog.css'
import SideNav from '../../components/Navbars/CreateBlog_sidebar'
import { useDispatch, useSelector } from 'react-redux'
import { selectUser } from 'redux/slices/userSlice'
import { addBlog } from 'api/blog'

const CreateBlog = () => {
  const dispatch = useDispatch(),
    user = useSelector(selectUser),
    [title, setTitle] = useState(''),
    [userEmail, setUserEmail] = useState(''),
    [content, setContent] = useState(''),
    [tags, setTags] = useState([])

  const init = () => {
    setUserEmail(user?.email)
  }

  useEffect(() => {
    init()
    //eslint-disable-next-line
  }, [])

  function createBlog(draft) {
    if (!title || !content) {
      return alert('Title and Content must be mentioned !!')
    }
    let data = {
      blogTitle: title,
      userEmail,
      content,
      tags,
      isDraft: draft,
    }

    dispatch(addBlog(data))
  }

  return (
    <Container className='mt-4' fluid='xxl'>
      <Container className='BlogContainer' fluid>
        <Row>
          <Col className='order-xl-1'>
            <Card className='bg-secondary'>
              <CardHeader className='bg-white border-0'>
                <Row className='CardHeader'>
                  <Col xs='6'>
                    <Input
                      className='title'
                      type='name'
                      placeholder='T I T L E'
                      onChange={(event) => setTitle(event.target.value)}
                    />
                  </Col>
                  <Col className='text-right'>
                    <Button
                      className='ni ni-cloud-upload-96 save-btn'
                      type='button'
                      color='success'
                      onClick={() => createBlog(true)}
                    >
                      <p className='btn_txt'>Save</p>
                    </Button>
                    <Button
                      className='ni ni-curved-next save-btn'
                      type='button'
                      color='warning'
                      onClick={() => createBlog(false)}
                    >
                      <p className='btn_txt'>Publish</p>
                    </Button>
                  </Col>
                </Row>
              </CardHeader>
              <Card>
                <div id='toolbar-container' />
                <div id='Editor'>
                  <div className='TextEditor'>
                    <CKEditor
                      editor={documentEditor}
                      config={{
                        toolbar: {
                          // shouldNotGroupWhenFull: true,
                          items: [
                            'undo',
                            'redo',
                            '|',
                            'heading',
                            '|',
                            'fontFamily',
                            '|',
                            'fontSize',
                            'bold',
                            'italic',
                            'underline',
                            'fontColor',
                            'fontBackgroundColor',
                            'highlight',
                            'removeHighlight',
                            '|',
                            'blockQuote',
                            'code',
                            'codeBlock',
                            'strikethrough',
                            'subscript',
                            'superscript',
                            '|',
                            'link',
                            'uploadImage',
                            'resizeImage',
                            'imageStyle:wrapText',
                            'imageStyle:breakText',
                            'mediaEmbed',
                            '|',
                            'alignment',
                            '|',
                            'todoList',
                            'numberedList',
                            'bulletedList',
                            'indent',
                            'outdent',
                            '|',
                            'insertTable',
                            'tableColumn',
                            'tableRow',
                            'mergeTableCells',
                            'toggleTableCaption',
                            'tableCellProperties',
                            'tableProperties',
                            '|',
                            'horizontalLine',
                            'MathType',
                            'ChemType',
                            'specialCharacters',
                            '|',
                            'findAndReplace',
                            'selectAll',
                          ],
                        },
                      }}
                      //  onChange = {(e, editor) =>{handleChange(e, editor)}}
                      onReady={(editor) => {
                        const toolbarContainer =
                          document.querySelector('#toolbar-container')
                        toolbarContainer.appendChild(
                          editor.ui.view.toolbar.element
                        )

                        window.editor = editor
                        // You can store the "editor" and use when it is needed.
                        console.log('Editor is ready to use!')
                      }}
                      onChange={(event, editor) => {
                        const data = editor.getData()
                        setContent(data)
                      }}
                    />
                  </div>
                  <div className='PostSetting'>
                    <SideNav tags={tags} setTags={setTags} />
                  </div>
                </div>
              </Card>
            </Card>
          </Col>
        </Row>
      </Container>
    </Container>
  )
}

export default CreateBlog
