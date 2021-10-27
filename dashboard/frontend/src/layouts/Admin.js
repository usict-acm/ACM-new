/*!

=========================================================
* Argon Dashboard React - v1.2.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard-react
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard-react/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

*/
import React from "react";
import { useLocation, Route, Switch, Redirect } from "react-router-dom";
// reactstrap components
import { Container } from "reactstrap";
// core components
import AdminNavbar from "components/Navbars/AdminNavbar.js";
import AdminFooter from "components/Footers/AdminFooter.js";
import Sidebar from "components/Sidebar/Sidebar.js";

import routes from "routes.js";
import CreateBlog from "pages/Admin/CreateBlog";
import DisplayBlog from "pages/Admin/DisplayBlog";
import EventDetails from "pages/Admin/Events/EventDetails";

const Admin = (props) => {
  const mainContent = React.useRef(null);
  const location = useLocation();

  React.useEffect(() => {
    document.documentElement.scrollTop = 0;
    document.scrollingElement.scrollTop = 0;
    mainContent.current.scrollTop = 0;
  }, [location]);

  const getRoutes = (routes) => {
    return routes.map((prop, key) => {
      if (prop.layout === "/admin") {
        return (
          <Route exact path={prop.path} component={prop.component} key={key} />
        );
      } else {
        return null;
      }
    });
  };

  const getBrandText = () => {
    for (let i = 0; i < routes.length; i++) {
      if (location.pathname === routes[i].path) return routes[i].name;
    }
    return "";
  };

  return (
    <>
      <Sidebar
        {...props}
        routes={routes}
        logo={{
          innerLink: "/home",
          imgSrc: require("../assets/img/brand/argon-react.png").default,
          imgAlt: "...",
        }}
      />
      <div className="main-content" ref={mainContent}>
        <AdminNavbar {...props} brandText={getBrandText(location.pathname)} />
        <Switch>
          {getRoutes(routes)}
          <Route exact path="/blog/:blogId" component={DisplayBlog} />
          <Route exact path="/createBlog/:blogId" component={CreateBlog} />
          <Route exact path="/createBlog" component={CreateBlog} />
          <Route exact path="/event/:eventId" component={EventDetails} />
          <Redirect from="*" to="/home" />
        </Switch>
        <Container fluid>
          <AdminFooter />
        </Container>
      </div>
    </>
  );
};

export default Admin;
