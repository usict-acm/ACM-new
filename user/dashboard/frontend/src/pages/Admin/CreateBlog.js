import React, { useState } from "react";
// import { Nav , InputGroup,FormControl} from 'react-bootstrap';
import {  NavItem, NavLink,Container } from 'reactstrap';
import { CKEditor } from '@ckeditor/ckeditor5-react'
import documentEditor from "@ckeditor/ckeditor5-build-decoupled-document";
import "../../assets/css/CreateBlog.css"
import UserHeader from "components/Headers/UserHeader";
// import SideNav from "./SideNav";
const CreateBlog = () =>
{

  return (
    <>
    <Container className="mt-0" fluid="xxl">
     <UserHeader/>

     <Container className="BlogContainer" fluid>
      <div id="toolbar-container"></div>
      
      <div id="Editor">
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
    
     </Container>
    </Container>
    </>
  )
};

export default CreateBlog;