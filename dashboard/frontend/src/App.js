import React, { useEffect, useState } from "react";
import { BrowserRouter } from "react-router-dom";

import AdminLayout from "layouts/Admin.js";
import AuthLayout from "layouts/Auth.js";
import { useDispatch, useSelector } from "react-redux";
import { selectUser } from "redux/slices/userSlice";
import { fetchUserBlogs } from "api/blog";
import { fetchUserDoc, logout } from "api/user";

const App = () => {
  const dispatch = useDispatch(),
    user = useSelector(selectUser),
    [loading, setLoading] = useState(true);

  useEffect(() => {
    const setAllData = async (userData) => {
      await dispatch(fetchUserDoc(userData));
      await dispatch(fetchUserBlogs({ userEmail: userData?.email }));
      setLoading(false);
    };

    setLoading(true);
    const localUser = localStorage.getItem("user");
    if (!localUser) {
      dispatch(logout());
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
    <BrowserRouter basename="/test_acm/dashboard/user-portal">{user ? <AdminLayout /> : <AuthLayout />}</BrowserRouter>
  );
};

export default App;
