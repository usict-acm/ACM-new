import { createSlice } from "@reduxjs/toolkit";

const blogSlice = createSlice({
  name: "blog",
  initialState: {
    blogs: [],
  },
  reducers: {
    setBlogs: (state, action) => {
      state.blogs = action.payload;
    },
    resetBlogs: (state) => {
      state.blogs = [];
    },
  },
});

export const { setBlogs, resetBlogs } = blogSlice.actions;
export const selectBlogs = (state) => state.blog.blogs;
export default blogSlice.reducer;
