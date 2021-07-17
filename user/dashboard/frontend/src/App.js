import React, { useEffect, useState } from "react";
import { BrowserRouter, Route, Switch, Redirect } from "react-router-dom";

import AdminLayout from "layouts/Admin.js";
import AuthLayout from "layouts/Auth.js";

const App = () => {
  const [user, setUser] = useState(null);

  useEffect(() => {
    setUser(localStorage.getItem("user"));
  }, []);

  const AdminRoutes = () => (
    <Switch>
      <Route path="/" render={(props) => <AdminLayout {...props} />} />
      <Redirect from="*" to="/" />
    </Switch>
  );
  const AuthRoutes = () => (
    <Switch>
      <Route path="/" render={(props) => <AuthLayout {...props} />} />
      <Redirect from="/*" to="/" />
    </Switch>
  );

  return (
    <BrowserRouter>{!user ? <AdminRoutes /> : <AuthRoutes />}</BrowserRouter>
  );
};

export default App;
