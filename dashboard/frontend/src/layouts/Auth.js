import React from "react";
import { useLocation, Route, Switch, Redirect } from "react-router-dom";

// core components
import AuthNavbar from "components/Navbars/AuthNavbar.js";
import AuthFooter from "components/Footers/AuthFooter.js";

import routes from "routes.js";

const Auth = () => {
	const location = useLocation();

	React.useEffect(() => {
		document.documentElement.scrollTop = 0;
		document.scrollingElement.scrollTop = 0;
	}, [location]);

	const getRoutes = (routes) => {
		return routes.map((prop, key) => {
			if (prop.layout === "/auth") {
				return (
					<Route exact path={prop.path} key={key}>
						<div className="bg-default" style={{ width: "100vw", minHeight: "100vh" }}>
							<AuthNavbar />
							<div className="main-content authContent">
								<div className="topSection" />
								<div style={{ padding: "0 30px" }}>
									<div className="justify-content-center">
										<prop.component />
										<AuthFooter />
									</div>
								</div>
							</div>
						</div>
					</Route>
				);
			} else {
				return null;
			}
		});
	};

	return (
		<Switch>
			{getRoutes(routes)}
			<Redirect exact from="/" to="/login" />
			<Redirect exact from="/home" to="/login" />
			<Redirect exact from="/profile" to="/login" />
			<Redirect exact from="/blogs" to="/login" />
			<Redirect exact from="/events" to="/login" />
			<Redirect exact from="/blog/:blogId" to="/login" />
			<Redirect exact from="/createBlog" to="/login" />
			<Redirect exact from="/createBlog/:blogId" to="/login" />
			<Redirect exact from="/event/:eventId" to="/login" />
			<Redirect from="*" to="/404" />
		</Switch>
	);
};

export default Auth;
