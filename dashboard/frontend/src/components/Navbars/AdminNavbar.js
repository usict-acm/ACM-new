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
import { logout } from "api/user";
import React, { useState } from "react";
import { useDispatch, useSelector } from "react-redux";
import { Link } from "react-router-dom";
import ResetPassword from "../ResetPassword";
import userImg from "../../assets/img/user.png"
import "./Avatar.css";
// reactstrap components
import {
	DropdownMenu,
	DropdownItem,
	UncontrolledDropdown,
	DropdownToggle,
	Navbar,
	Nav,
	Container,
	Media,
} from "reactstrap";
import { selectUser } from "redux/slices/userSlice";

import "../../assets/css/navbar.css";

const AdminNavbar = (props) => {
	const [showModal, setShowModal] = useState(false);
	const handleOpen = () => setShowModal(true);
	const dispatch = useDispatch(),
		user = useSelector(selectUser);

	const logoutHandler = () => {
		dispatch(logout());
	};

	return (
		<>
			<ResetPassword closeModal={() => setShowModal(false)} show={showModal} />
			<Navbar className="navbar-light p-0 p-md-2 border-bottom" expand="md" id="navbar-main">
				<Container fluid>
					<div className="h4 mb-0 text-uppercase d-none d-md-inline-block">
						{props.brandText}
					</div>
					<Nav className="align-items-center d-none d-md-flex" navbar>
						<UncontrolledDropdown nav>
							<DropdownToggle className="pr-0" nav>
								<Media className="align-items-center">
									<span className="avatar avatar-sm rounded-circle bg-transparent">
										<img
											className="navbarAvatar"
											alt="..."
											src={
												user?.profilePhoto ||
												userImg													
											}
										/>
									</span>
									<Media className="ml-2 d-none d-lg-block">
										<span className="mb-0 text-sm font-weight-bold">
											{user?.name.length > 15
												? user?.name.substring(0, 15) + "..."
												: user?.name}
										</span>
									</Media>
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
								<DropdownItem onClick={handleOpen}>
									<i className="ni ni-lock-circle-open" />
									<span>Reset Password</span>
								</DropdownItem>
								<DropdownItem divider />
								<DropdownItem onClick={logoutHandler}>
									<i className="ni ni-user-run" />
									<span>Logout</span>
								</DropdownItem>
							</DropdownMenu>
						</UncontrolledDropdown>
					</Nav>
				</Container>
			</Navbar>
		</>
	);
};

export default AdminNavbar;
