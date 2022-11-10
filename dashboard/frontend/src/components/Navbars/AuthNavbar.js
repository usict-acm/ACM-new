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
import React from "react";
import { Link } from "react-router-dom";
// reactstrap components
import {
  UncontrolledCollapse,
  NavbarBrand,
  Navbar,
  NavItem,
  NavLink,
  Nav,
  Container,
  Row,
  Col,
} from "reactstrap";
import "../../assets/css/login.css";
import acmLogo from "../../assets/img/brand/acm-logo.svg"
import webAward from "../../assets/img/brand/outstanding-website-text.png"

const AuthNavbar = () => {
  return (
    <>
      <Navbar
        className="sticky-top navbar-top navbar-horizontal navbar-light bg-white nav-shadow"
        expand="md"
      >
        <Container>
          <a href="https://usict.acm.org/">
            <img
              className="navbarLogo"
              alt="..."
              src= {acmLogo}
              />
          </a>
          <a href="https://usict.acm.org/" className="oslogo text-center">
            <img
              className="navbarLogo"
              alt="..."
              src={
                webAward
              }
            />
          </a>
          <button className="navbar-toggler" id="navbar-collapse-main">
            <span className="navbar-toggler-icon" />
          </button>
          <UncontrolledCollapse navbar toggler="#navbar-collapse-main">
            <div className="navbar-collapse-header d-md-none">
              <Row>
                <Col className="collapse-brand" xs="6">
                <a href="https://usict.acm.org/">
                    <img
                      alt="..."
                      src={
                        acmLogo
                      }
                    />
                  </a>
                </Col>
                <Col className="collapse-close" xs="6">
                  <button className="navbar-toggler" id="navbar-collapse-main">
                    <span />
                    <span />
                  </button>
                </Col>
              </Row>
            </div>
            <Nav className="ml-auto" navbar>
              <NavItem>
                <NavLink className="nav-link-icon" to="/register" tag={Link}>
                  <i className="ni ni-circle-08" />
                  <span className="nav-link-inner--text">Register</span>
                </NavLink>
              </NavItem>
              <NavItem>
                <NavLink className="nav-link-icon" to="/login" tag={Link}>
                  <i className="ni ni-key-25" />
                  <span className="nav-link-inner--text">Login</span>
                </NavLink>
              </NavItem>
            </Nav>
          </UncontrolledCollapse>
        </Container>
      </Navbar>
    </>
  );
};

export default AuthNavbar;
