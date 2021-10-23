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
// import Index from "views/Index.js";
import Dashboard from "pages/Admin/Dashboard";
import Profile from "pages/Admin/Profile.js";
import AllBlogs from "pages/Admin/AllBlogs.js";
// import Icons from "views/examples/Icons.js";
import Register from "pages/Auth/Register";
import Login from "pages/Auth/Login";
import AllEvents from "pages/Admin/Events/AllEvents";
// import MyEvents from "pages/Admin/Events/MyEvents";

var routes = [
  {
    path: "/home",
    name: "Dashboard",
    icon: "ni ni-tv-2 text-primary",
    component: Dashboard,
    layout: "/admin",
  },
  // {
  //   path: "/icons",
  //   name: "Icons",
  //   icon: "ni ni-planet text-blue",
  //   component: Icons,
  //   layout: "/admin",
  // },
  {
    path: "/profile",
    name: "Profile",
    icon: "ni ni-single-02 text-yellow",
    component: Profile,
    layout: "/admin",
  },
  {
    path: "/blogs",
    name: "Blogs",
    icon: "ni ni-pin-3 text-orange",
    component: AllBlogs,
    layout: "/admin",
  },
  {
    path: "/events",
    name: "Events",
    icon: "ni ni-album-2 text-blue",
    component: AllEvents,
    layout: "/admin",
  },
  // {
  //   path: "/my-events",
  //   name: "My Events",
  //   icon: "ni ni-album-2 text-blue",
  //   component: MyEvents,
  //   layout: "/admin",
  // },  
  {
    path: "/login",
    name: "Login",
    icon: "ni ni-key-25 text-info",
    component: Login,
    layout: "/auth",
  },
  {
    path: "/register",
    name: "Register",
    icon: "ni ni-circle-08 text-pink",
    component: Register,
    layout: "/auth",
  },
];
export default routes;
