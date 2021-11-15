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
	ButtonGroup,
} from "reactstrap";
import BlogsList from "components/Blogs/BlogsList";
import { useDispatch, useSelector } from "react-redux";
import { selectUser } from "redux/slices/userSlice";
import { fetchUserBlogs } from "api/blog";
import "assets/css/Blog.css";
import { setLoading } from "redux/slices/mainSlice";
import { useHistory } from "react-router";

export default function AllBlogs() {
	const history = useHistory(),
		dispatch = useDispatch(),
		user = useSelector(selectUser),
		[blogs, setBlogs] = useState([]),
		[type, setType] = useState(0),
		// 0 -> published
		// 1 -> draft
		// 2 -> waiting approval
		[searchQuery, setSearchQuery] = useState(""),
		[filterData, setFilterData] = useState([]);

	useEffect(() => {
		const fetchData = async () => {
			dispatch(setLoading(true));
			const allBlogs = await fetchUserBlogs({ userEmail: user?.email });
			if (allBlogs) {
				setBlogs(allBlogs);
				dispatch(setLoading(false));
			} else dispatch(setLoading(false));
		};
		fetchData();
		return () => {
			setBlogs([]);
		};
	}, [user, dispatch]);

	useEffect(() => {
		setFilterData(() => {
			return blogs
				.filter(
					(blog) =>
						(type === 1 && blog.isDraft) ||
						(type === 0 && !blog.isDraft && blog.approved) ||
						(type === 2 && !blog.isDraft && !blog.approved)
				)
				.filter(
					(blog) =>
						searchQuery === "" ||
						blog.blogTitle.toLowerCase().includes(searchQuery.toLowerCase())
				);
		});
	}, [blogs, type, searchQuery]);

	return (
		<Container className="BlogContainer mt-4" fluid>
			<Row className="m-0 p-0">
				<Col className="order-xl-1 p-0">
					<Card>
						<CardHeader className="bg-white border-0">
							<Row className="CardHeader m-0 p-0">
								<Col xs="4" className="p-0">
									<ButtonGroup>
										<Button
											outline
											color="info"
											onClick={() => setType(0)}
											active={type === 0}
										>
											Published
										</Button>
										<Button
											outline
											color="info"
											onClick={() => setType(1)}
											active={type === 1}
										>
											Drafts
										</Button>
										<Button
											outline
											color="info"
											onClick={() => setType(2)}
											active={type === 2}
										>
											Waiting Approval
										</Button>
									</ButtonGroup>
								</Col>
								<Col className="text-right post-btn p-0 m-0">
									<Button
										type="button"
										color="info"
										onClick={() => history.push("/createBlog")}
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
											<CardHeader className="bg-white border-0 pb-0">
												<Row className="p-0">
													<Col className="px-2 search-row" lg="12">
														<Input
															className="form-control me-2"
															type="search"
															onChange={(e) => setSearchQuery(e.target.value)}
															placeholder="Search"
															aria-label="Search"
														/>
														<p className="my-1 font-weight-normal">
															Results found: {filterData?.length}
														</p>
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
	);
}
