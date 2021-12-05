export const fetchUserBlogs = async (body) => {
  return await fetch(
    process.env.REACT_APP_BASE_URL + "/api.php?q=allBlogs",
    {
      method: "POST",
      body: JSON.stringify(body),
    }
  )
    .then((res) => res.json())
    .then((res) => {
      if (res.message === "success") {
        return res.blogs;
      } else {
        alert(res.error || "process failed");
      }
    })
    .catch((err) => console.log(err.message));
};

export const fetchSingleBlog = async (body) => {
  return await fetch(
    process.env.REACT_APP_BASE_URL + "/api.php?q=singleBlog",
    {
      method: "POST",
      body: JSON.stringify(body),
    }
  )
    .then((res) => res.json())
    .then((res) => {
      if (res.message === "success") {
        return res.blog;
      } else {
        alert(res.error || "process failed");
      }
    })
    .catch((err) => console.log(err.message));
};

export const addBlog = async (body) => {
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
        // dispatch(setBlogs(res.blogs));
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

export const updateBlog = async (body) => {
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
      console.log(res);
      if (res.message === "success") {
        // dispatch(setBlogs(res.blogs));
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

export const deleteBlog = async (body) => {
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
        // dispatch(setBlogs(res.blogs));
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
