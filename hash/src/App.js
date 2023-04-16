import react from "react";
import { createBrowserRouter, RouterProvider } from "react-router-dom";

//import all component
import Contactus from "./components/Contactus";
import Home from "./components/Home";
import PageNotFound from "./components/PageNotFound.js";

// root routes
const router = createBrowserRouter([
  {
    path: "/",
    element: <Home></Home>,
  },
  {
    path: "/contactus",
    element: <Contactus></Contactus>,
  },
  {
    path: "*",
    element: <PageNotFound></PageNotFound>,
  },
]);

export default function App() {
  return (
    <main>
      <RouterProvider router={router}></RouterProvider>
    </main>
  );
}
