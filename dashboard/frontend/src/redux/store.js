import { configureStore } from "@reduxjs/toolkit";
import userReducer from "./slices/userSlice";
import mainReducer from "./slices/mainSlice";

const store = configureStore({
  reducer: {
    main: mainReducer,
    user: userReducer,
  },
});

export default store;
