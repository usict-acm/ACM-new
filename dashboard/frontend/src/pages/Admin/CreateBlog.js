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
import "assets/css/CreateBlog.css";
import SideNav from "../../components/Navbars/CreateBlogSidebar";
import { useDispatch, useSelector } from "react-redux";
import { selectUser } from "redux/slices/userSlice";
import { useHistory, useParams } from "react-router";
import { addBlog, updateBlog } from "api/blog";
import { fetchSingleBlog } from "api/blog";
import { setLoading } from "redux/slices/mainSlice";

const CreateBlog = () => {
	const dispatch = useDispatch(),
		history = useHistory(),
		params = useParams(),
		{ blogId } = params,
		user = useSelector(selectUser),
		[title, setTitle] = useState(""),
		[content, setContent] = useState(""),
		[tags, setTags] = useState([]),
		[editorInstance, setEditorInstance] = useState(null),
		[editingBlog, setEditingBlog] = useState(null);

	useEffect(() => {
		dispatch(setLoading(true));
	}, [dispatch]);

	useEffect(() => {
		const setData = async () => {
			const blog = await fetchSingleBlog({ userEmail: user?.email, blogId });
			setEditingBlog(blog);
			blog && editorInstance && editorInstance.setData(blog?.content || "");
			setTags(blog?.tags || []);
			setContent(blog?.content || "");
			setTitle(blog?.blogTitle || "");
			dispatch(setLoading(false));
		};
		if (blogId) {
			setData();
		}
	}, [dispatch, user, blogId, editorInstance]);

	const reset = () => {
		if (blogId) {
			setTags(editingBlog?.tags || []);
			setContent(editingBlog?.content || "");
			setTitle(editingBlog?.blogTitle || "");
			editingBlog &&
				editorInstance &&
				editorInstance.setData(editingBlog?.content || "");
		} else {
			setTitle("");
			setContent("");
			setTags([]);
			setEditingBlog(null);
			editorInstance && editorInstance.setData("");
		}
	};

	const hasChanged = () => {
		if (blogId) {
			return (
				title !== editingBlog?.blogTitle ||
				content !== editingBlog?.content ||
				tags !== editingBlog?.tags
			);
		} else {
			return title !== "" || content !== "" || tags.length > 0;
		}
	};

	async function createBlog(draft) {
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
		let res;
		if (blogId) {
			data = {
				...data,
				blogId: editingBlog.blogId,
				isPublished: !editingBlog.isDraft,
			};
			res = await dispatch(updateBlog(data));
		} else res = await dispatch(addBlog(data));

		// cleanup
		if (res.status === "success") {
			editorInstance?.setData("");
			setTitle("");
			setContent("");
			setTags([]);

			history.replace("/blogs");
		} else if (res.status === "failed") {
			alert("Process Failed");
		}
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
										{editingBlog && (
											<Button
												className="bx bx-x save-btn"
												type="button"
												color="danger"
												onClick={reset}
												disabled={!hasChanged()}
											>
												<p className="btn_txt">Cancel</p>
											</Button>
										)}
										{!blogId && (
											<Button
												className="bx bx-save save-btn"
												type="button"
												color="info"
												onClick={() => createBlog(true)}
												disabled={!hasChanged()}
											>
												<p className="btn_txt">Save</p>
											</Button>
										)}
										{!editingBlog || editingBlog?.isDraft ? (
											<Button
												className="bx bxs-cloud-upload save-btn"
												type="button"
												color="success"
												onClick={() => createBlog(false)}
												disabled={!editingBlog && !hasChanged()}
											>
												<p className="btn_txt">Publish</p>
											</Button>
										) : (
											<Button
												className="bx bxs-cloud-upload save-btn"
												type="button"
												color="success"
												onClick={() => createBlog(false)}
												disabled={!hasChanged()}
											>
												<p className="btn_txt">Save Changes</p>
											</Button>											
										)}
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
										<SideNav
											tags={tags}
											setTags={setTags}
											editingBlog={editingBlog}
										/>
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
