import { configureStore } from "@reduxjs/toolkit";
import userReducer from "./slices/userSlice";
import blogReducer from "./slices/blogSlice";

const store = configureStore({
  reducer: {
    user: userReducer,
    blog: blogReducer,
  },
});

export default store;
