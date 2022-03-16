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
import { useHistory } from "react-router";
import Loader from "components/Loader";

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
		[filterData, setFilterData] = useState([]),
		[fetchAgain, setFetchAgain] = useState(false),
		[loading, setLoading] = useState(true);

	useEffect(() => {
		const fetchData = async () => {
			setLoading(true);
			const allBlogs = await fetchUserBlogs({ userEmail: user?.email });
			if (allBlogs) {
				setBlogs(allBlogs);
				setLoading(false);
			} else setLoading(false);
		};
		fetchData();
		return () => {
			setBlogs([]);
		};
	}, [user, dispatch, fetchAgain]);

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

	return loading ? <Loader /> : (
		<Container className="BlogContainer mt-4" fluid>
			<Row className="m-0 p-0">
				<Col className="order-xl-1 p-0">
					<Card>
						<CardHeader className="bg-white border-0 pb-0 pb-md-3 align-items-stretch">
							<Row className="CardHeader m-0 p-0">
								<Col md="6" className="col-12 p-0">
									<ButtonGroup className="w-100">
										<Button
											outline
											color="info"
											onClick={() => setType(0)}
											active={type === 0}
											className="groupBtn"
										>
											Published
										</Button>
										<Button
											outline
											color="info"
											onClick={() => setType(1)}
											active={type === 1}
											className="groupBtn"
										>
											Drafts
										</Button>
										<Button
											outline
											color="info"
											onClick={() => setType(2)}
											active={type === 2}
											className="groupBtn"
										>
											Waiting Approval
										</Button>
									</ButtonGroup>
								</Col>
								<Col className="col-12 col-md text-right post-btn p-0 mx-0 my-2 my-md-0">
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
													<BlogsList blogData={filterData} setFetchAgain={setFetchAgain} />
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
