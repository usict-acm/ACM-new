import React, { useEffect } from "react";
import { BrowserRouter, Route, Switch } from "react-router-dom";

import AdminLayout from "layouts/Admin.js";
import AuthLayout from "layouts/Auth.js";
import { useSelector } from "react-redux";
import { selectUser } from "redux/slices/userSlice";
import { setUser, resetUser } from "redux/slices/userSlice";

const App = () => {
  const user = useSelector(selectUser);

  useEffect(() => {
    const localUser = localStorage.getItem("user");
    if (!localUser) {
      resetUser();
    } else {
      setUser(JSON.parse(localStorage.getItem("user")));
    }
  }, []);

  const AdminRoutes = () => (
    <Switch>
      <Route path="/" render={(props) => <AdminLayout {...props} />} />
      {/* <Redirect from="*" to="/" /> */}
    </Switch>
  );
  const AuthRoutes = () => (
    <Switch>
      <Route path="/" render={(props) => <AuthLayout {...props} />} />
      {/* <Redirect from="/*" to="/" /> */}
    </Switch>
  );

  return (
    <BrowserRouter>{user ? <AdminRoutes /> : <AuthRoutes />}</BrowserRouter>
  );
};

export default App;
