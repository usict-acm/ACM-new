import React, { useEffect, useState } from "react";
import { Card, CardBody } from "reactstrap";
import { useSelector } from "react-redux";
import { useHistory } from "react-router";
import "../../assets/css/dashboard/recentblog.css";
import moment from "moment";
import { fetchUserBlogs } from "api/blog";
import { selectUser } from "redux/slices/userSlice";

const RecentBlog = () => {
	const history = useHistory(),
	 user = useSelector(selectUser),
	 [blogs, setBlogs] = useState([]);

	useEffect(() => {
		const fetchData = async () => {
			const allBlogs = await fetchUserBlogs({ userEmail: user?.email });
			if (allBlogs) {
				console.log(allBlogs);
				setBlogs(allBlogs);
			}
		};
		fetchData();
	}, [user]);

	return blogs?.filter((blog) => blog.isDraft === false)
		.slice(0, 3)
		.map((filterdata) => (
			<Card
				className="dashboardCard shadow-lg mb-4"
				onClick={() => history.push(`/blog/${filterdata.blogId}`)}
				key={filterdata.blogId}
			>
				<CardBody className="dashboardCard__container">
					<div className="dashboardCard__date">
						<h2 id="bold">
							{moment(filterdata?.published).format("DD MMM, YY")}
						</h2>
					</div>
					<div className="dashboardCard__contents">
						<h2 id="bold">{filterdata.blogTitle}</h2>
						<p className="dashboardCard__tags text-muted tags">
							{filterdata.tags?.map((tag, i) => (
								<span className="tag_style px-2" key={i}>
									{tag}
								</span>
							))}
						</p>
					</div>
				</CardBody>
			</Card>
		));
};

export default RecentBlog;
