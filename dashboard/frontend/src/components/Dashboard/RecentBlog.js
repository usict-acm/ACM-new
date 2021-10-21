import React from "react";
import { Card, CardBody } from "reactstrap";
import { useSelector } from "react-redux";
import { selectBlogs } from "redux/slices/blogSlice";
import { dateMonth } from "utils/commonFunctions";
import { useHistory } from "react-router";
import "../../assets/css/dashboard/recentblog.css";

const RecentBlog = () => {
  const blogs = useSelector(selectBlogs),
    history = useHistory();
  console.log(blogs);

  return (
    <>
      {blogs
        .filter((blog) => blog.isDraft === false)
        .map((filterdata) => (
          <Card
            className="blogcard shadow-lg mb-4"
            onClick={() => history.push(`/blog/${filterdata.blogId}`)}
            key={filterdata.blogId}
          >
            <CardBody className="parent">
              <div className="date ">
                <h2 id="bold">{dateMonth(filterdata.published)}</h2>
              </div>
              <div className="contents">
                <h2 id="bold">{filterdata.blogTitle}</h2>
                <p className="text-muted">
            
                    {filterdata.tags?.map((tag,i) => (

                        <span className="tag_style px-2" key={i}>{tag}</span>

                    ))}
  
                </p>
              </div>
            </CardBody>
          </Card>
        ))
        .slice(0, 3)}
    </>
  );
};

export default RecentBlog;
