import React, { useEffect, useState } from "react";
import { Button, Card, CardHeader, Input, Container, Row, Col } from "reactstrap";
import { CKEditor } from "@ckeditor/ckeditor5-react";
import documentEditor from "ckeditor5-custom-build";
import "assets/css/CreateBlog.css";
import SideNav from "../../components/Navbars/CreateBlogSidebar";
import { useDispatch, useSelector } from "react-redux";
import { selectUser } from "redux/slices/userSlice";
import { useHistory, useParams } from "react-router";
import { addBlog, updateBlog } from "api/blog";
import { fetchSingleBlog } from "api/blog";
import Loader from "components/Loader";
import SweetAlert from "components/SweetAlert";

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
		[editingBlog, setEditingBlog] = useState(null),
		[loading, setLoading] = useState(true),
		[coverImage, setCoverImage] = useState("https://picsum.photos/400");

	const [alertOpen, setAlertOpen] = useState(false),
	[alertMsg, setAlertMsg] = useState(""),
	[alertType, setAlertType] = useState("error");

	// useEffect(() => {
	// setLoading(true);
	// }, [dispatch]);

	useEffect(() => {
		const setData = async () => {
			const blog = await fetchSingleBlog({ userEmail: user?.email, blogId });
			if (!blog || blog?.approved || !blog.isDraft) return history.replace("/blogs");
			setEditingBlog(blog);
			blog && editorInstance && editorInstance.setData(blog?.content || "");
			setTags(blog?.tags || []);
			setContent(blog?.content || "");
			setTitle(blog?.blogTitle || "");
			setCoverImage(blog?.coverImage || "https://picsum.photos/400");
			setLoading(false);
		};
		if (blogId) {
			setData();
		} else {
			setLoading(false);
		}
	}, [dispatch, user, blogId, editorInstance, history]);

	const reset = () => {
		if (editingBlog) {
			setTags(editingBlog?.tags || []);
			setContent(editingBlog?.content || "");
			setTitle(editingBlog?.blogTitle || "");
			setCoverImage(editingBlog?.coverImage);
			editingBlog && editorInstance && editorInstance.setData(editingBlog?.content || "");
		} else {
			setTitle("");
			setContent("");
			setTags([]);
			setEditingBlog(null);
			setCoverImage("https://picsum.photos/400");
			editorInstance && editorInstance.setData("");
		}
	};

	const hasChanged = () => {
		if (blogId) {
			return (
				title !== editingBlog?.blogTitle ||
				content !== editingBlog?.content ||
				tags !== editingBlog?.tags ||
				coverImage !== editingBlog?.coverImage
			);
		} else {
			return title !== "" && content !== "";
		}
	};

	async function createBlog(draft) {
		if (!title || !content || !coverImage) {
			return alert("Title and Content must be mentioned !!");
		}
		let data = {
			blogTitle: title,
			userEmail: user?.email,
			userName: user?.name,
			coverImage: coverImage || editingBlog?.coverImage,
			content,
			tags,
			approved: false,
			isDraft: draft,
		};
		let res;
		if (blogId) {
			data = {
				...data,
				blogId: editingBlog.blogId,
				isPublished: !editingBlog.isDraft,
			};
			res = await updateBlog(data);
		} else res = await addBlog(data);

		// cleanup
		if (res.status === "success") {
			editorInstance?.setData("");
			setTitle("");
			setContent("");
			setTags([]);
			setCoverImage("https://picsum.photos/400");

			history.replace("/blogs");
		} else if (res.status === "failed") {
			setAlertMsg("Process Failed");
			setAlertType("error");
			setAlertOpen(true);
		}
	}

	return (
		<Container className="mt-4" fluid="xxl">
			{loading && <Loader />}
			<SweetAlert
				open={alertOpen}
				setOpen={setAlertOpen}
				msg={alertMsg}
				type={alertType}
			/>
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
									<div className="my-auto ml-auto">
										{editingBlog && (
											<Button
												className="bx bx-x save-btn py-1 px-3"
												type="button"
												color="danger"
												onClick={reset}
												disabled={!hasChanged()}
											>
												<p className="btn_txt">Cancel</p>
											</Button>
										)}
										<Button
											className="bx bx-save save-btn py-1 px-3"
											type="button"
											color="info"
											onClick={() => createBlog(editingBlog ? editingBlog.isDraft : true)}
											disabled={!hasChanged()}
										>
											<p className="btn_txt">Save</p>
										</Button>
										{(!editingBlog || editingBlog?.isDraft) && (
											<Button
												className="bx bxs-cloud-upload save-btn py-1 px-3"
												type="button"
												color="success"
												onClick={() => createBlog(false)}
												disabled={!editingBlog && !hasChanged()}
											>
												<p className="btn_txt">Publish</p>
											</Button>
										)}
									</div>
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
												const toolbarContainer = document.querySelector("#toolbar-container");
												toolbarContainer.appendChild(editor.ui.view.toolbar.element);
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
											coverImage={coverImage}
											setCoverImage={setCoverImage}
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
