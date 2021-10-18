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
/*eslint-disable*/
import React, { useState } from "react";
import { NavLink as NavLinkRRD, Link } from "react-router-dom";
// nodejs library to set properties for components
import { PropTypes } from "prop-types";

// reactstrap components
import {
	Collapse,
	DropdownMenu,
	DropdownItem,
	UncontrolledDropdown,
	DropdownToggle,
	Media,
	NavbarBrand,
	Navbar,
	NavItem,
	NavLink,
	Nav,
	Container,
	Row,
	Col,
} from "reactstrap";
import { useDispatch, useSelector } from "react-redux";
import { selectUser } from "redux/slices/userSlice";
import { logout } from "api/user";

const Sidebar = (props) => {
	const dispatch = useDispatch(),
		user = useSelector(selectUser),
		[collapseOpen, setCollapseOpen] = useState();

	const logoutHandler = () => {
		dispatch(logout());
	};

	// toggles collapse between opened and closed (true/false)
	const toggleCollapse = () => {
		setCollapseOpen((data) => !data);
	};
	// closes the collapse
	const closeCollapse = () => {
		setCollapseOpen(false);
	};
	// creates the links that appear in the left menu / Sidebar
	const createLinks = (routes) => {
		return routes.map((prop, key) => {
			return (
				prop.layout === "/admin" && (
					<NavItem key={key}>
						<NavLink
							to={prop.path}
              active={window.location.pathname === prop.path}
							tag={NavLinkRRD}
							onClick={closeCollapse}
							activeClassName="active"
						>
							<i className={prop.icon} />
							{prop.name}
						</NavLink>
					</NavItem>
				)
			);
		});
	};

	const { routes, logo } = props;
	let navbarBrandProps;
	if (logo && logo.innerLink) {
		navbarBrandProps = {
			to: logo.innerLink,
			tag: Link,
		};
	} else if (logo && logo.outterLink) {
		navbarBrandProps = {
			href: logo.outterLink,
			target: "_blank",
		};
	}

	return (
		<Navbar
			className="navbar-vertical fixed-left navbar-light bg-white"
			expand="md"
			id="sidenav-main"
		>
			<Container fluid>
				{/* Toggler */}
				<button
					className="navbar-toggler"
					type="button"
					onClick={toggleCollapse}
				>
					<span className="navbar-toggler-icon" />
				</button>
				{/* Brand */}
				<NavbarBrand className="pt-0" {...navbarBrandProps}>
					<img
						alt="logo"
						className="navbar-brand-img"
						src={
							require("../../assets/img/brand/outstanding-website.png").default
						}
					/>
				</NavbarBrand>
				{/* User */}
				<Nav className="align-items-center d-md-none">
					<UncontrolledDropdown nav>
						<DropdownToggle nav>
							<Media className="align-items-center">
								<span className="avatar avatar-sm rounded-circle bg-white">
									<img
										alt="..."
										src={
											user?.profilePhoto ||
											require("../../assets/img/theme/team-1-800x800.jpg")
												.default
										}
									/>
								</span>
							</Media>
						</DropdownToggle>
						<DropdownMenu className="dropdown-menu-arrow" right>
							<DropdownItem className="noti-title" header tag="div">
								<h6 className="text-overflow m-0">Welcome!</h6>
							</DropdownItem>
							<DropdownItem to="/profile" tag={Link}>
								<i className="ni ni-single-02" />
								<span>My profile</span>
							</DropdownItem>
							<DropdownItem to="/profile" tag={Link}>
								<i className="ni ni-settings-gear-65" />
								<span>Settings</span>
							</DropdownItem>
							<DropdownItem to="/profile" tag={Link}>
								<i className="ni ni-calendar-grid-58" />
								<span>Activity</span>
							</DropdownItem>
							<DropdownItem to="/profile" tag={Link}>
								<i className="ni ni-support-16" />
								<span>Support</span>
							</DropdownItem>
							<DropdownItem divider />
							<DropdownItem onClick={logoutHandler}>
								<i className="ni ni-user-run" />
								<span>Logout</span>
							</DropdownItem>
						</DropdownMenu>
					</UncontrolledDropdown>
				</Nav>
				{/* Collapse */}
				<Collapse navbar isOpen={collapseOpen}>
					{/* Collapse header */}
					<div className="navbar-collapse-header d-md-none">
						<Row>
							<Col className="collapse-brand" xs="6">
								<Link to="/">
									<img
										alt="logo"
										src={
											require("../../assets/img/brand/outstanding-website.png")
												.default
										}
									/>
								</Link>
							</Col>
							<Col className="collapse-close" xs="6">
								<button
									className="navbar-toggler"
									type="button"
									onClick={toggleCollapse}
								>
									<span />
									<span />
								</button>
							</Col>
						</Row>
					</div>
					{/* Navigation */}
					<Nav navbar>{createLinks(routes)}</Nav>
				</Collapse>
			</Container>
		</Navbar>
	);
};

Sidebar.defaultProps = {
	routes: [{}],
};

Sidebar.propTypes = {
	// links that will be displayed inside the component
	routes: PropTypes.arrayOf(PropTypes.object),
	logo: PropTypes.shape({
		// innerLink is for links that will direct the user within the app
		// it will be rendered as <Link to="...">...</Link> tag
		innerLink: PropTypes.string,
		// outterLink is for links that will direct the user outside the app
		// it will be rendered as simple <a href="...">...</a> tag
		outterLink: PropTypes.string,
		// the image src of the logo
		imgSrc: PropTypes.string.isRequired,
		// the alt for the img
		imgAlt: PropTypes.string.isRequired,
	}),
};

export default Sidebar;
