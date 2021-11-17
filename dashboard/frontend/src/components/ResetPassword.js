import React, { useState } from "react";
import { Form, FormGroup, Label, Input, Button } from "reactstrap";
import "../assets/css/resetpassword.css"
import Backdrop from "@mui/material/Backdrop";
import Box from "@mui/material/Box";
import Modal from "@mui/material/Modal";
import Fade from "@mui/material/Fade";
import Typography from "@mui/material/Typography";

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

function ResetPassword({ show, closeModal }) {
  const [open, setOpen] = useState(show);
  const handleClose = () => setOpen(false);

  if (!show) {
    return null;
  }

  return (
    <>
      <Modal
        aria-labelledby="transition-modal-title"
        aria-describedby="transition-modal-description"
        open={open}
        onClose={(handleClose, closeModal)}
        closeAfterTransition
        BackdropComponent={Backdrop}
        BackdropProps={{
          timeout: 500,
        }}
      >
        <Fade in={open}>
          <Box sx={style} className="resetpassword">
            <Form>
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
                    placeholder="current password"
                    type="password"
                    required
                  />
                </FormGroup>
                <FormGroup>
                  <Label for="newPassword">New Password</Label>
                  <Input
                    name="newPassword"
                    placeholder="New password"
                    type="password"
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
}

export default ResetPassword;
