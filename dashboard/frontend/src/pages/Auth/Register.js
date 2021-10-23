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
import { signup } from "api/user";
import { COLLEGES } from "utils/Constants";
import { BRANCHES } from "utils/Constants";

const Register = () => {
	const dispatch = useDispatch(),
		[loading, setLoading] = useState(false),
		[email, setEmail] = useState(""),
		[name, setName] = useState(""),
		[password, setPassword] = useState(""),
		[memId, setMemId] = useState(""),
		[course, setCourse] = useState(""),
		[branch, setBranch] = useState(""),
		[rollNo, setRollNo] = useState(""),
		[college, setCollege] = useState("");

	useEffect(() => {
		return () => {
			setLoading(false);
		};
	}, []);

	const registerHandler = async (e) => {
		e.preventDefault();
		if (
			email === "" ||
			name === "" ||
			password === "" ||
			course === "" ||
			branch === "" ||
			rollNo === "" ||
			college === ""
		) {
			return alert("Please fill all the required fields.");
		}
		setLoading(true);
		const data = {
			email,
			name,
			password,
			acmMemberId: memId,
			course,
			branch,
			rollNo,
			college,
		};
		dispatch(signup(data, setLoading));
	};

	return (
		<div className="registerPage">
			<div className="registerLeft glass">
				<h2 style={{ marginBottom: "20px" }}>Why Join Us?</h2>
				<ul>
					<li style={{ marginBottom: "10px" }}>ACM’s flagship publication</li>
					<li style={{ marginBottom: "10px" }}>ACM’s Popular E-Newsletters</li>
					<li style={{ marginBottom: "10px" }}>Lifelong Learning Center</li>
					<li style={{ marginBottom: "10px" }}>
						ACM Student Research Competition
					</li>
					<li style={{ marginBottom: "10px" }}>
						Have access to Clubs Under ACM USICT
					</li>
					<li style={{ marginBottom: "10px" }}>ACM Career & Job Center</li>
					<li style={{ marginBottom: "10px" }}>Specific Interest Groups</li>
					<li style={{ marginBottom: "10px" }}>
						Sponsored Conferences and Tours
					</li>
					<li style={{ marginBottom: "10px" }}>ACM Summer and Winter School</li>
				</ul>
			</div>
			<Col className="mt-5 registerRight">
				<Card className="bg-secondary shadow border-0">
					<CardBody className="px-lg-5 py-lg-5">
						<div className="text-center text-muted mb-4">
							<small>Please enter your details</small>
						</div>
						<Form role="form" onSubmit={registerHandler}>
							<FormGroup>
								<InputGroup className="input-group-alternative mb-3">
									<InputGroupAddon addonType="prepend">
										<InputGroupText>
											<i className="bx bx-rename" />
										</InputGroupText>
									</InputGroupAddon>
									<Input
										placeholder="Name*"
										type="text"
										value={name}
										onChange={(e) => setName(e.target.value)}
										required
									/>
								</InputGroup>
							</FormGroup>
							<FormGroup>
								<InputGroup className="input-group-alternative mb-3">
									<InputGroupAddon addonType="prepend">
										<InputGroupText>
											<i className="ni ni-email-83" />
										</InputGroupText>
									</InputGroupAddon>
									<Input
										placeholder="Email*"
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
										placeholder="Password*"
										type="password"
										autoComplete="new-password"
										value={password}
										onChange={(e) => setPassword(e.target.value)}
										required
									/>
								</InputGroup>
							</FormGroup>
							<FormGroup>
								<InputGroup className="input-group-alternative mb-3">
									<InputGroupAddon addonType="prepend">
										<InputGroupText>
											<i className="ni ni-building" />
										</InputGroupText>
									</InputGroupAddon>
									<Input
										list="colleges"
										placeholder="College Name*"
										type="text"
										value={college}
										onChange={(e) => setCollege(e.target.value)}
										required
									/>
								</InputGroup>
								<datalist id="colleges">
									{COLLEGES.map((value, index) => (
										<option key={index} value={value} />
									))}
								</datalist>
							</FormGroup>
							<FormGroup>
								<InputGroup className="input-group-alternative mb-3">
									<InputGroupAddon addonType="prepend">
										<InputGroupText>
											<i className="ni ni-hat-3" />
										</InputGroupText>
									</InputGroupAddon>
									<Input
										placeholder="Course*"
										type="select"
										required
										value={course}
										onChange={(e) => setCourse(e.target.value)}
									>
										<option value="">Select Course*</option>
										{Object.keys(BRANCHES).map((value, index) => (
											<option key={index} value={value}>
												{value}
											</option>
										))}
									</Input>
								</InputGroup>
							</FormGroup>
							<FormGroup>
								<InputGroup className="input-group-alternative mb-3">
									<InputGroupAddon addonType="prepend">
										<InputGroupText>
											<i className="bx bx-library" />
										</InputGroupText>
									</InputGroupAddon>
									<Input
										placeholder="Course*"
										type="select"
										required
										value={branch}
										onChange={(e) => setBranch(e.target.value)}
										disabled={course === ""}
									>
										<option value="">Select Branch*</option>
										{BRANCHES[course]?.map((value, index) => (
											<option key={index} value={value}>
												{value}
											</option>
										))}
									</Input>
								</InputGroup>
							</FormGroup>
							<FormGroup>
								<InputGroup className="input-group-alternative mb-3">
									<InputGroupAddon addonType="prepend">
										<InputGroupText>
											<i className="bx bx-id-card" />
										</InputGroupText>
									</InputGroupAddon>
									<Input
										placeholder="Roll No*"
										type="text"
										value={rollNo}
										onChange={(e) => setRollNo(e.target.value)}
										required
									/>
								</InputGroup>
							</FormGroup>
							<FormGroup>
								<InputGroup className="input-group-alternative mb-3">
									<InputGroupAddon addonType="prepend">
										<InputGroupText>
											<i className="bx bx-id-card" />
										</InputGroupText>
									</InputGroupAddon>
									<Input
										placeholder="ACM Member ID"
										type="text"
										value={memId}
										onChange={(e) => setMemId(e.target.value)}
									/>
								</InputGroup>
							</FormGroup>
							<div className="text-center">
								<Button className="mt-4 w-100" color="primary" type="submit">
									{loading ? (
										<Spinner color="light" size="sm" />
									) : (
										"Create account"
									)}
								</Button>
							</div>
						</Form>
					</CardBody>
				</Card>
				<Row className="mt-3">
					<Col className="text-right" xs="12">
						<a className="text-light" href="/login">
							<small>Already registered? Login</small>
						</a>
					</Col>
				</Row>
			</Col>
		</div>
	);
};

export default Register;
