import { setBlogs } from "redux/slices/blogSlice";

export const fetchUserBlogs = (body) => (dispatch) => {
  fetch(
    process.env.REACT_APP_BASE_URL + "/api.php?q=blogs",
    {
      method: "POST",
      body: JSON.stringify(body),
    }
  )
    .then((res) => res.json())
    .then((res) => {
      if (res.message === "success") {
        dispatch(setBlogs(res.blogs));
      } else {
        alert(res.error || "process failed");
      }
    })
    .catch((err) => console.log(err.message));
};

export const addBlog = (body) => (dispatch) => {
  return fetch(
    process.env.REACT_APP_BASE_URL +
      "/api.php?q=createBlog",
    {
      method: "POST",
      body: JSON.stringify(body),
    }
  )
    .then((res) => res.json())
    .then((res) => {
      if (res.message === "success") {
        dispatch(setBlogs(res.blogs));
        return { status: "success" };
      } else {
        console.log(res.error || "process failed");
        return { status: "failed" };
      }
    })
    .catch((err) => {
      console.log(err.message);
      return { status: "failed" };
    });
};

export const updateBlog = (body) => (dispatch) => {
  return fetch(
    process.env.REACT_APP_BASE_URL +
      "/api.php?q=updateBlog",
    {
      method: "POST",
      body: JSON.stringify(body),
    }
  )
    .then((res) => res.json())
    .then((res) => {
      // console.log(res);
      if (res.message === "success") {
        dispatch(setBlogs(res.blogs));
        return { status: "success" };
      } else {
        console.log(res.error || "process failed");
        return { status: "failed" };
      }
    })
    .catch((err) => {
      console.log(err.message);
      return { status: "failed" };
    });
};

export const deleteBlog = (body) => (dispatch) => {
  return fetch(
    process.env.REACT_APP_BASE_URL +
      "/api.php?q=deleteBlog",
    {
      method: "POST",
      body: JSON.stringify(body),
    }
  )
    .then((res) => res.json())
    .then((res) => {
      if (res.message === "success") {
        dispatch(setBlogs(res.blogs));
        return { status: "success" };
      } else {
        console.log(res.error || "process failed");
        return { status: "failed" };
      }
    })
    .catch((err) => {
      console.log(err.message);
      return { status: "failed" };
    });
};
