import React, { useState } from "react";
import { Input } from "reactstrap";
import { formatDate } from "utils/commonFunctions";
import "../../assets/css/CreateBlog.css";

const SideNav = ({ tags, setTags, editingBlog, coverImage, setCoverImage }) => {
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
		setTags(filteredArray);
	};

	const imageChange = (e) => {
		const fileReader = new FileReader();
		fileReader.readAsDataURL(e.target.files[0]);
		fileReader.onload = () => {
			setCoverImage(fileReader.result);
		};
		fileReader.onerror = (err) => {
			console.log(err);
		};
	};

	return (
		<>
			<div className="top_section">
				<h3>Post Settings</h3>
			</div>
			<hr />
			<div className="blog__cover">
				<img className="blog__coverImage" src={coverImage} alt="cover" />
				<div className="blog__coverForm">
					<input
						width="600px"
						onChange={imageChange}
						className="blog__coverInput"
						name="cover"
						type="file"
						accept="image/*"
					/>
					<label className="blog__coverLabel" htmlFor="cover">
						Change cover image
					</label>
				</div>
			</div>
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
							<span className="ni ni-fat-remove" onClick={() => removeTags(i)}></span>
							<span className="tag_text">{tag}</span>
						</div>
					);
				})}
			</div>
			{editingBlog ? (
				<>
					<hr />
					<div>
						<div>
							<h3>Created :</h3>
							{formatDate(editingBlog?.created)}
						</div>
						<div>
							<h3>Last updated:</h3>
							{formatDate(editingBlog?.lastUpdated)}
						</div>
					</div>
				</>
			) : null}
		</>
	);
};

export default SideNav;
