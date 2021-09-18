import React, { useEffect, useState } from "react";
import { BrowserRouter } from "react-router-dom";

import AdminLayout from "layouts/Admin.js";
import AuthLayout from "layouts/Auth.js";
import { useDispatch, useSelector } from "react-redux";
import { selectUser } from "redux/slices/userSlice";
import { setUser, resetUser } from "redux/slices/userSlice";
import { fetchUserBlogs } from "api/blog";

const App = () => {
  const dispatch = useDispatch(),
    user = useSelector(selectUser),
    [loading, setLoading] = useState(true);

  useEffect(() => {
    const setAllData = async (userData) => {
      dispatch(setUser(userData));
      await dispatch(fetchUserBlogs({ userEmail: userData?.email }));
      setLoading(false);
    };

    setLoading(true);
    const localUser = localStorage.getItem("user");
    if (!localUser) {
      dispatch(resetUser());
      setLoading(false);
    } else {
      const userData = JSON.parse(localUser);
      setAllData(userData);
    }
    //eslint-disable-next-line
  }, []);

  return loading ? (
    <div>
      <h1>Loading...</h1>
    </div>
  ) : (
    <BrowserRouter>{user ? <AdminLayout /> : <AuthLayout />}</BrowserRouter>
  );
};

export default App;
