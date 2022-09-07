import React, { useEffect, useState } from "react";
import { BrowserRouter } from "react-router-dom";

import AdminLayout from "layouts/Admin.js";
import AuthLayout from "layouts/Auth.js";
import { useDispatch, useSelector } from "react-redux";
import { selectUser } from "redux/slices/userSlice";
import { fetchUserDoc, logout } from "api/user";
import Loader from "components/Loader";

const App = () => {
  const dispatch = useDispatch(),
    user = useSelector(selectUser),
    [loading, setLoading] = useState(true);

  useEffect(() => {
    const setAllData = async (userData) => {
      await dispatch(fetchUserDoc(userData));
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
    <>
      <Loader />
    </>
  ) : (
    <BrowserRouter basename={process.env.REACT_APP_HOSTED_BASE_URL}>
      {user ? <AdminLayout /> : <AuthLayout />}
    </BrowserRouter>
  );
};

export default App;
