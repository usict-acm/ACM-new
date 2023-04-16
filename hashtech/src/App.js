import react from "react";
import { createBrowserRouter, RouterProvider } from "react-router-dom";

//import all component
import Contactus from "./components/Contactus";
import Home from "./components/Home";
import PageNotFound from "./components/PageNotFound.js";
import Results from "./components/Results.js";

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
  {
    path: "/results",
    element: <Results></Results>,
  },
]);

export default function App() {
  return (
    <main>
      <RouterProvider router={router}></RouterProvider>
    </main>
  );
}
