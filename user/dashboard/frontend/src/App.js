import React, { useEffect, useState } from "react";
import { BrowserRouter } from "react-router-dom";

import AdminLayout from "layouts/Admin.js";
import AuthLayout from "layouts/Auth.js";
import { useDispatch, useSelector } from "react-redux";
import { selectUser } from "redux/slices/userSlice";
import { setUser, resetUser } from "redux/slices/userSlice";

const App = () => {
  const dispatch = useDispatch(),
    user = useSelector(selectUser),
    [loading, setLoading] = useState(true);

  useEffect(() => {
    setLoading(true);
    const localUser = localStorage.getItem("user");
    if (!localUser) {
      dispatch(resetUser());
      setLoading(false);
    } else {
      dispatch(setUser(JSON.parse(localStorage.getItem("user"))));
      setLoading(false);
    }
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
