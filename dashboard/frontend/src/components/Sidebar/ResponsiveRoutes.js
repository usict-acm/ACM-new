// import Index from "views/Index.js";
import Dashboard from "pages/Admin/Dashboard";
import Profile from "pages/Admin/Profile.js";
import AllBlogs from "pages/Admin/AllBlogs.js";
// import Icons from "views/examples/Icons.js";
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
];
export default routes;
