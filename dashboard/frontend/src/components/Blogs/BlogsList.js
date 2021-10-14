import BlogCard from "./BlogCard";

const BlogsList = ({ blogData }) => {
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
          <BlogCard key={i} id="post-content" index={i} blogDetails={blog} />
        ))}
      </div>
    );
  }
};

export default BlogsList;
