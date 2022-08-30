import { resetUser } from "redux/slices/userSlice";
import { setUser } from "redux/slices/userSlice";

export const fetchUserDoc = (body) => async (dispatch) => {
  await fetch(process.env.REACT_APP_BASE_URL + "/api.php?q=fetchUserDoc", {
    method: "POST",
    body: JSON.stringify(body),
  })
    .then((res) => res.json())
    .then((res) => {
      if (res.message === "success") {
        dispatch(setUser(res.user));
      } else {
        console.log(res.error || "Login Failed");
        localStorage.removeItem("user");
        dispatch(resetUser());
      }
    })
    .catch((err) => console.log(err.message));
};

export const login = async (body) => {
  return await fetch(process.env.REACT_APP_BASE_URL + "/api.php?q=login", {
    method: "POST",
    body: JSON.stringify(body),
  })
    .then((res) => res.json())
    .then((res) => {
      if (res.message === "Login successful") {
        return { user: res.user };
      } else {
        return { error: res.error || "Login Failed" };
      }
    })
    .catch((err) => {
      return { error: err.message };
    });
};

export const signup = async (body) => {
  return await fetch(process.env.REACT_APP_BASE_URL + "/api.php?q=register", {
    method: "POST",
    body: JSON.stringify(body),
  })
    .then((response) => response.json())
    .then((res) => {
      if (res?.message === "Signup successful") {
        return { user: res.user };
      } else {
        return { error: res.error || "Unable to register" };
      }
    })
    .catch((error) => {
      return { error: error.message || "Unable to register" };
    });
};

export const updateProfile = async (body) => {
  return await fetch(process.env.REACT_APP_BASE_URL + "/api.php?q=update", {
    method: "POST",
    body: JSON.stringify(body),
  })
    .then((res) => res.json())
    .then((res) => {
      if (res.message === "Update successful") {
        return { user: res.user };
        // localStorage.setItem("user", JSON.stringify(res.user));
        // dispatch(setUser(res.user));
      } else {
        return { error: res.error || "Update Failed" };
      }
    })
    .catch((err) => ({ error: err.message || "Update Failed" }));
};

export const resetPassword = async (body) => {
  return await fetch(
    process.env.REACT_APP_BASE_URL + "/api.php?q=resetPassword",
    {
      method: "POST",
      body: JSON.stringify(body),
    }
  )
    .then((res) => res.json())
    .then((res) => {
      if (res.message === "Password changed successfully") {
        return { user: res.user, message: res.message };
        // localStorage.setItem("user", JSON.stringify(res.user));
        // dispatch(setUser(res.user));
      } else {
        return { error: res.error || "Update Failed" };
      }
    })
    .catch((err) => ({ error: err.message || "Update Failed" }));
};

export const logout = () => (dispatch) => {
  localStorage.removeItem("user");
  dispatch(resetUser());
};
