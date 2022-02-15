import "assets/plugins/nucleo/css/nucleo.css";
import "@fortawesome/fontawesome-free/css/all.min.css";
import "assets/scss/argon-dashboard-react.scss";
import "assets/css/main.css";

import React from "react";
import ReactDOM from "react-dom";
import App from "App";
import { Provider } from "react-redux";
import store from "redux/store";

ReactDOM.render(
<Provider store={store}><App /></Provider>, document.getElementById("root"));
