import React, { useState } from "react";
import { Button, Input } from "reactstrap";
import "../../assets/css/CreateBlog.css";

const SideNav = ({ tags, setTags }) => {
  var today = new Date(),
    date = today.toDateString();

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
            type="text"
            placeholder="Enter one at a time"
            value={item}
            onChange={(e) => setItem(e.target.value)}
          ></Input>
          <Button type="submit" color="info" className="my-3">
            Add
          </Button>
        </form>
      </div>
      <div className="tagContainer">
        {tags.map((tags, i) => {
          return (
            <div key={i} className="tag_style">
              <span
                className="ni ni-fat-remove"
                onClick={() => removeTags(i)}
              ></span>
              {tags}
            </div>
          );
        })}
      </div>
      <hr />
      <div>
        <h4>Published Date : </h4>
        <p>{date}</p>
      </div>
    </>
  );
};

export default SideNav;
