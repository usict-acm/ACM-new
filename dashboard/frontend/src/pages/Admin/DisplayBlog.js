import React, { useState, useEffect } from "react";
import { Button, CardHeader, CardBody, Container, Row, Col } from "reactstrap";
import "assets/css/preview.css";
import { useHistory, useParams } from "react-router";
import { useDispatch, useSelector } from "react-redux";
import { CKEditor } from "@ckeditor/ckeditor5-react";
import documentEditor from "ckeditor5-custom-build";
import SideBar from "components/Blogs/DisplayBlogSideBar.js";
import { selectUser } from "redux/slices/userSlice";
import { fetchSingleBlog, updateBlog } from "api/blog";
import "assets/css/CreateBlog.css";
import { setLoading } from "redux/slices/mainSlice";

export default function Preview() {
	const dispatch = useDispatch(),
		params = useParams(),
		{ blogId } = params,
		history = useHistory(),
		user = useSelector(selectUser),
		[editorInstance, setEditorInstance] = useState(null),
		[blog, setBlog] = useState(null);

	useEffect(() => {
		dispatch(setLoading(true));
	}, [dispatch]);

	useEffect(() => {
		const fetchBlog = async () => {
			const blog = await fetchSingleBlog({ userEmail: user?.email, blogId });
			if (blog) {
				setBlog(blog);
				dispatch(setLoading(false));
			} else dispatch(setLoading(false));
		};
		fetchBlog();
	}, [dispatch, blogId, user]);

	useEffect(() => {
		blog && editorInstance?.setData(blog?.content);
	}, [editorInstance, blog]);

	async function unPublish(draft) {
		let data = {
			blogId: blog?.blogId,
			blogTitle: blog?.blogTitle,
			userEmail: blog?.userEmail,
			userName: blog?.userName,
			content: blog?.content,
			tags: blog?.tags,
			isDraft: draft,
			isPublished: !draft,
		};
		let res;

		res = await dispatch(updateBlog(data));

		// cleanup
		if (res.status === "success") {
			editorInstance?.setData("");
			// setTitle('')
			// setContent('')
			// setTags([])

			history.replace("/blogs");
		} else if (res.status === "failed") {
			alert("Process Failed");
		}
	}

	return (
		<Container fluid className="p-2 mt-4">
			<CardHeader className="px-2 bg-secondary">
				<Row className="titleEdit">
					<Col xs="8">
						<h1 className="blogTitle">{blog?.blogTitle}</h1>
					</Col>
					<Col xs="12" sm="4" className="editbtnCol justify-content-center justify-content-sm-end">
						<Button
							onClick={() => history.push(`/createBlog/${blogId}`)}
							color="info"
							className="bx bxs-pencil py-1"
						></Button>
						<Button
							onClick={() => unPublish(true)}
							color="danger"
							className="py-2"
						>
							UNPUBLISH
						</Button>
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
	);
}
