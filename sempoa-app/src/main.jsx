import React from "react";
import ReactDOM from "react-dom/client";
import MainMenu from "./pages/MainMenu.jsx";
import JenisLatihan from "./pages/JenisLatihan.jsx";
import ModeBebas from "./pages/ModeBebas.jsx"
import { createBrowserRouter, RouterProvider } from "react-router-dom";
import "./index.css";

const router = createBrowserRouter([
  {
    path: "/",
    element: <MainMenu></MainMenu>,
  },
  {
    path: "jenis",
    element: <JenisLatihan></JenisLatihan>,
  },
  {
    path: "bebas",
    element: <ModeBebas></ModeBebas>,
  },
]);

ReactDOM.createRoot(document.getElementById("root")).render(
  <RouterProvider router={router} />
);
