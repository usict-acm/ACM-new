import React, { useEffect, useState } from "react";
import { BrowserRouter } from "react-router-dom";

import AdminLayout from "layouts/Admin.js";
import AuthLayout from "layouts/Auth.js";
import { useDispatch, useSelector } from "react-redux";
import { selectUser } from "redux/slices/userSlice";
import { fetchUserDoc, logout } from "api/user";
import { isLoading, setLoading } from "redux/slices/mainSlice";
import Loader from "components/Loader";

const App = () => {
  const dispatch = useDispatch(),
    loading = useSelector(isLoading),
    user = useSelector(selectUser),
    [localLoading, setLocalLoading] = useState(true);

  useEffect(() => {
    const setAllData = async (userData) => {
      await dispatch(fetchUserDoc(userData));
      dispatch(setLoading(false));
      setLocalLoading(false);
    };
    setLocalLoading(true);
    dispatch(setLoading(true))
    const localUser = localStorage.getItem("user");
    if (!localUser) {
      dispatch(logout());
      dispatch(setLoading(false));
      setLocalLoading(false);
    } else {
      const userData = JSON.parse(localUser);
      setAllData(userData);
    }
    //eslint-disable-next-line
  }, []);

  return localLoading ? <h1>Loading...</h1> : (  
    <>
      {loading && <Loader />}
      <BrowserRouter basename="/test_acm/dashboard/user-portal">{user ? <AdminLayout /> : <AuthLayout />}</BrowserRouter>
    </>
  );
};

export default App;
