import React from "react";
import { formatDate } from "utils/commonFunctions";

export default function DisplayBlogSideBar(props) {
	return (
		<>
			<div>
				<h3>Blog Info</h3>
			</div>
			<hr />
			<div>
				<h4>All Tags</h4>
				<div className="tagContainer">
					{props.blog?.tags.map((item, i) => (
						<div key={i} className="tag_style px-2">
							{item}
						</div>
					))}
				</div>
				<hr />
				<div>
					<p>
						<h3>Published :</h3>
						{formatDate(props.blog?.published)}
					</p>
					<p>
						<h3>Last updated:</h3>
						{formatDate(props.blog?.lastUpdated)}
					</p>
				</div>
			</div>
		</>
	);
}
