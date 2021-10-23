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
import React, { useEffect, useState } from "react";
import { useDispatch } from "react-redux";
import { login } from "api/user";

// reactstrap components
import {
	Button,
	Card,
	CardBody,
	FormGroup,
	Form,
	Input,
	InputGroupAddon,
	InputGroupText,
	InputGroup,
	Row,
	Col,
	Spinner,
} from "reactstrap";

const Login = () => {
	const dispatch = useDispatch(),
		[email, setEmail] = useState(""),
		[password, setPassword] = useState(""),
		[loading, setLoading] = useState(false);

	useEffect(() => {
		return () => {
			setLoading(false);		
		};
	}, []);

	const loginHandler = async (e) => {
		e.preventDefault();
		if (email === "" || password === "") {
			return alert("Please fill all the required fields.");
		}
		setLoading(true);
		const body = {
			email,
			password,
		};
		dispatch(login(body, setLoading));
	};

	return (
		<div className="loginPage">
			<Card className="col-lg-4 col-md-7 mt-5 bg-secondary shadow border-0 glass">
				<CardBody className="px-lg-5 py-lg-5">
					<div className="text-center text-muted mb-4">
						<small>Please enter your credentials</small>
					</div>
					<Form onSubmit={loginHandler} role="form">
						<FormGroup className="mb-3">
							<InputGroup className="input-group-alternative">
								<InputGroupAddon addonType="prepend">
									<InputGroupText>
										<i className="ni ni-email-83" />
									</InputGroupText>
								</InputGroupAddon>
								<Input
									placeholder="Email"
									type="email"
									autoComplete="new-email"
									value={email}
									onChange={(e) => setEmail(e.target.value)}
									required
								/>
							</InputGroup>
						</FormGroup>
						<FormGroup>
							<InputGroup className="input-group-alternative">
								<InputGroupAddon addonType="prepend">
									<InputGroupText>
										<i className="ni ni-lock-circle-open" />
									</InputGroupText>
								</InputGroupAddon>
								<Input
									placeholder="Password"
									type="password"
									autoComplete="new-password"
									value={password}
									onChange={(e) => setPassword(e.target.value)}
									required
								/>
							</InputGroup>
						</FormGroup>
						<div className="text-center">
							<Button className="my-4 w-100" color="primary" type="submit">
								{loading ? <Spinner color="light" size="sm" /> : "Sign in"}
							</Button>
						</div>
					</Form>
				</CardBody>
			</Card>
			<Row className="mt-3">
				<Col className="text-right" xs="12">
					<a className="text-light" href={process.env.REACT_APP_HOSTED_BASE_URL + "/register"}>
						<small>Create new account</small>
					</a>
				</Col>
			</Row>
		</div>
	);
};

export default Login;
