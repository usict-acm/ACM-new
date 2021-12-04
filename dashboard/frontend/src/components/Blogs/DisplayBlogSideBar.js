import React from "react";
import { formatDate } from "utils/commonFunctions";

export default function DisplayBlogSideBar({ blog }) {
	return (
		<>
			<div>
				<h3>Blog Info</h3>
			</div>
			<hr />
			<h4>Cover Image</h4>
			<div className="blog__cover">
				<img className="blog__coverImage" src={blog?.coverImage} alt="cover" />
			</div>
			<div>
				<h4>All Tags</h4>
				<div className="tagContainer">
					{blog?.tags.map((item, i) => (
						<div key={i} className="tag_style px-2">
							{item}
						</div>
					))}
				</div>
				<hr />
				<div>
					<div>
						<h3>Published :</h3>
						{formatDate(blog?.published)}
					</div>
					<div>
						<h3>Last updated:</h3>
						{formatDate(blog?.lastUpdated)}
					</div>
				</div>
			</div>
		</>
	);
}
