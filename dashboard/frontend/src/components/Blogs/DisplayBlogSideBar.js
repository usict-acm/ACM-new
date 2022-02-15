import React from "react";
import { formatDate } from "utils/commonFunctions";

export default function DisplayBlogSideBar({ blog }) {
	return (
		<>
			<div>
				<h3>Blog Info</h3>
			</div>
<<<<<<< HEAD
			<hr />
=======
			<hr className="mt-2 mb-3" />
>>>>>>> e80fb4c5d90316a9a580217fa0c024d7d247d23d
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
				<hr className="my-3" />
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
