import { createSlice } from "@reduxjs/toolkit";
import { API_BASE_URL } from "utils/Constants";

const userSlice = createSlice({
  name: "user",
  initialState: {
    user: null,
  },
  reducers: {
    setUser: (state, action) => {
      state.user = action.payload;
    },
    resetUser: (state) => {
      state.user = null;
    },
  },
});

export const { setUser, resetUser } = userSlice.actions;
export const selectUser = (state) => state.user.user;
export default userSlice.reducer;

// ACTIONS
export const login = (body) => (dispatch) => {
  fetch(API_BASE_URL + "/user/dashboard/backend/api.php?q=login", {
    method: "POST",
    body: JSON.stringify(body),
  })
    .then((res) => res.json())
    .then((res) => {
      if (res.message === "Login successful") {
        localStorage.setItem("user", JSON.stringify(res.user));
        dispatch(setUser(res.user));
      } else {
        alert(res.error || "Login Failed");
        localStorage.removeItem("user");
        dispatch(resetUser());
      }
    })
    .catch((err) => console.log(err.message));
};

export const signup = (body) => (dispatch) => {
  fetch(API_BASE_URL + "/user/dashboard/backend/api.php?q=register", {
    method: "POST",
    body: JSON.stringify(body),
  })
    .then((response) => response.json())
    .then((res) => {
      if (res.error) {
        return alert(res.error);
      }
      if (res.message === "Signup successful") {
        localStorage.setItem("user", JSON.stringify(res.user));
        dispatch(setUser(res.user));
      } else {
        alert("Registration Failed");
        localStorage.removeItem("user");
        dispatch(resetUser());
      }
    })
    .catch((error) => console.log(error.message));
};

export const logout = () => (dispatch) => {
  localStorage.removeItem("user");
  dispatch(resetUser());
};
