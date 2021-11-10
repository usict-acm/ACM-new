import React, { useState } from "react";
import { Input } from "reactstrap";
import { formatDate } from "utils/commonFunctions";
import "../../assets/css/CreateBlog.css";

const SideNav = ({ tags, setTags, editingBlog }) => {
	const [item, setItem] = useState("");

	const addTags = () => {
		setTags((prev) => {
			if (item.length < 1) {
				return [...prev];
			} else return [...prev, item];
		});

		setItem("");
	};

	const removeTags = (i) => {
		const filteredArray = tags.filter((item, index) => {
			return index !== i;
		});
		console.log(filteredArray);
		setTags(filteredArray);
	};

	return (
		<>
			<div className="top_section">
				<h3>Post Settings</h3>
			</div>
			<hr />
			<div>
				<h4>Tags</h4>
				<form
					onSubmit={(e) => {
						e.preventDefault();
						addTags();
					}}
				>
					<Input
						onKeyDown={(e) => {
							if (e.key === " ") {
								e.preventDefault();
								addTags();
							}
						}}
						type="text"
						placeholder="Press Enter or Space to add the tag"
						value={item}
						onChange={(e) => setItem(e.target.value)}
					/>
				</form>
			</div>
			<div className="tagContainer">
				{tags.map((tag, i) => {
					return (
						<div key={i} className="tag_style">
							<span
								className="ni ni-fat-remove"
								onClick={() => removeTags(i)}
							></span>
							<span className="tag_text">{tag}</span>
						</div>
					);
				})}
			</div>
			{editingBlog ? (
				<>
					<hr />
					<div>
						<p>
							<h3>Created :</h3>
							{formatDate(editingBlog?.created)}
						</p>
						<p>
							<h3>Last updated:</h3>
							{formatDate(editingBlog?.lastUpdated)}
						</p>
					</div>
				</>
			) : null}
		</>
	);
};

export default SideNav;
