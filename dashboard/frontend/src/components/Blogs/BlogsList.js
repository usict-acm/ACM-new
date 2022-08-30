import React from "react";
import BlogCard from "./BlogCard";

const BlogsList = ({ blogData, setFetchAgain }) => {
  if (blogData?.length === 0) {
    return (
      <div className="cont-nodata">
        <h3>No data found</h3>
      </div>
    );
  } else {
    return (
      <div className="post-component">
        {blogData.map((blog, i) => (
          <BlogCard key={i} id="post-content" index={i} blogDetails={blog} setFetchAgain={setFetchAgain} />
        ))}
      </div>
    );
  }
};

export default BlogsList;
