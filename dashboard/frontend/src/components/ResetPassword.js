import React, { useState } from "react";
import { Form, FormGroup, Label, Input, Button } from "reactstrap";
import { useSelector } from "react-redux";
import { selectUser } from "../redux/slices/userSlice";
import Backdrop from "@mui/material/Backdrop";
import Box from "@mui/material/Box";
import Modal from "@mui/material/Modal";
import Fade from "@mui/material/Fade";
import Typography from "@mui/material/Typography";
import SweetAlert from "./SweetAlert";
import { resetPassword as resetPasswordApi } from "../api/user";
import "../assets/css/resetpassword.css";

const style = {
	position: "absolute",
	top: "50%",
	left: "50%",
	transform: "translate(-50%, -50%)",
	width: 400,
	bgcolor: "background.paper",
	border: "1px solid rgba(0, 0, 0, 0.05)",
	boxShadow: "0 1px 5px #dddfe2",
	borderRadius: "10px",
	p: 4,
};

const ResetPassword = ({ show, closeModal }) => {
	const user = useSelector(selectUser),
		[current, setCurrent] = useState(""),
		[newPass, setNewPass] = useState(""),
		[showAlert, setShowAlert] = useState(false),
		[alertMsg, setAlertMsg] = useState(""),
		[alertType, setAlertType] = useState("success");

	const submitHandler = async (e) => {
		e.preventDefault();
		if (current === newPass) {
			setAlertMsg("Previous password and new password can't be same.");
			setAlertType("error");
			return setShowAlert(true);
		}
		const body = {
			email: user?.email,
			newPass,
			currentPass: current,
		};
    const res = await resetPasswordApi(body);
    if(res?.error){
      setAlertMsg(res?.error);
			setAlertType("error");
			return setShowAlert(true);
    }else{
      setAlertMsg(res?.message);
			setAlertType("success");
      setShowAlert(true);
      return closeModal();
    }
	};

	return (
		<>
			<SweetAlert
				open={showAlert}
				setOpen={setShowAlert}
				msg={alertMsg}
				type={alertType}
			/>
			<Modal
				aria-labelledby="transition-modal-title"
				aria-describedby="transition-modal-description"
				open={show}
				onClose={closeModal}
				closeAfterTransition
				BackdropComponent={Backdrop}
				BackdropProps={{
					timeout: 500,
				}}
			>
				<Fade in={show}>
					<Box sx={style} className="resetpassword">
						<Form onSubmit={submitHandler}>
							<Typography
								id="transition-modal-title"
								variant="h5"
								component="h2"
								className="mb-3 text-center"
							>
								Reset Password
							</Typography>
							<div>
								<FormGroup>
									<Label for="currentPassword">Current Password</Label>
									<Input
										name="currentPassword"
										placeholder="Current password"
										type="password"
										value={current}
										onChange={(e) => setCurrent(e.target.value)}
										required
									/>
								</FormGroup>
								<FormGroup>
									<Label for="newPassword">New Password</Label>
									<Input
										name="newPassword"
										placeholder="New password"
										type="password"
										minLength={6}
										value={newPass}
										onChange={(e) => setNewPass(e.target.value)}
										required
									/>
								</FormGroup>
								<Button className="reset_btn">Reset</Button>
							</div>
						</Form>
					</Box>
				</Fade>
			</Modal>
		</>
	);
};

export default ResetPassword;
