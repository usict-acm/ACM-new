import React from "react";
import { useLocation, Route, Switch, Redirect } from "react-router-dom";
import AdminNavbar from "components/Navbars/AdminNavbar.js";
import Sidebar from "components/Sidebar/Sidebar.js";

import routes from "routes.js";
import CreateBlog from "pages/Admin/CreateBlog";
import DisplayBlog from "pages/Admin/DisplayBlog";
import EventDetails from "pages/Admin/Events/EventDetails";
import Error404 from "pages/Error404";
import Podcast from "pages/Podcast";
import LogoImg from "../assets/img/brand/acm1.png";

const Admin = (props) => {
  const mainContent = React.useRef(null);
  const location = useLocation();

  React.useEffect(() => {
    document.documentElement.scrollTop = 0;
    document.scrollingElement.scrollTop = 0;
    if (mainContent?.current) mainContent.current.scrollTop = 0;
  }, [location]);

  const getBrandText = () => {
    for (let i = 0; i < routes.length; i++) {
      if (location.pathname === routes[i].path) return routes[i].name;
    }
    return "";
  };

  const getRoutes = (routes) => {
    return routes.map((prop, key) => {
      if (prop.layout === "/admin") {
        return (
          <Route exact path={prop.path} key={key}>
            <Sidebar
              {...props}
              routes={routes}
              logo={{
                innerLink: "/home",
                imgSrc: LogoImg,
                imgAlt: "...",
              }}
            />
            <div className="main-content" ref={mainContent}>
              <AdminNavbar
                {...props}
                brandText={getBrandText(location.pathname)}
              />
              <prop.component />
              {/* <Container fluid>
                <AdminFooter />
              </Container> */}
            </div>
          </Route>
        );
      } else {
        return null;
      }
    });
  };

  const RenderRoute = (details) => (
    <Route exact path={details.path}>
      <Sidebar
        {...props}
        routes={routes}
        logo={{
          innerLink: "/home",
          imgSrc: LogoImg,
          imgAlt: "...",
        }}
      />
      <div className="main-content" ref={mainContent}>
        <AdminNavbar {...props} brandText={getBrandText(location.pathname)} />
        <details.component />
        {/* <Container fluid>
          <AdminFooter />
        </Container> */}
      </div>
    </Route>
  );

  return (
    <Switch>
      {getRoutes(routes)}
      <RenderRoute path="/blog/:blogId" component={DisplayBlog} />
      <RenderRoute path="/createBlog/:blogId" component={CreateBlog} />
      <RenderRoute path="/createBlog" component={CreateBlog} />
      <RenderRoute path="/event/:eventId" component={EventDetails} />
      <RenderRoute path="/podcast" component={Podcast} />
      <Redirect exact from="/" to="/home" />
      <Redirect exact from="/login" to="/home" />
      <Redirect exact from="/register" to="/home" />
      <Route component={Error404} />
    </Switch>
  );
};

export default Admin;
