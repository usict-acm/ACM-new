import React from "react";
import Snackbar from "@mui/material/Snackbar";
import MuiAlert from "@mui/material/Alert";

const Alert = React.forwardRef(function Alert(props, ref) {
	return <MuiAlert elevation={6} ref={ref} variant="filled" {...props} />;
});

const SweetAlert = ({ msg, type, open, setOpen }) => {
	const handleClose = (event, reason) => {
		if (reason === "clickaway") {
			return;
		}
		setOpen(false);
	};

	return (
		<Snackbar
			open={open}
			autoHideDuration={3000}
			onClose={handleClose}
			anchorOrigin={{
				vertical: "top",
				horizontal: "right",
			}}
		>
			<Alert onClose={handleClose} severity={type} sx={{ width: "100%" }}>
				{msg}
			</Alert>
		</Snackbar>
	);
};

export default SweetAlert;
