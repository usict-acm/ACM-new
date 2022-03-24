<!-- ****************************************************contact us ***************************** -->
<div class="dsph" id="contact">
	<div class="d-flex justify-content-center mt-md-5">
		<img src="./assets/images/contact_us_img.webp" class="svg-media" alt="" />
		<div class="contactUs">
			<div class="closebtn">
				<button class="btn btn-primary s-form-group contact-btn" onclick="closecontact()"><i class="fas fa-times"></i></button>
			</div>
			<form class="s-form" name="contact" method="post" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSeW8dszRK5ynb6HS51X7fGrfW7su1_8JFL0Tm3hWfbfdpZiCQ/formResponse" onsubmit="return validateform();">
				<h2 class="my-4 display-4 fw-bolder text-center">Contact<span class="text-blue"> Us</span></h2>
				<div class="row form-row">
					<div class="form-group s-form-group col-md-5">
						<input type="text" name="name" class="form-control" placeholder="Name *" />
					</div>
					<div class="form-group s-form-group col-md-5">
					<input type="text" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Email *" />
					</div>
				</div>
				<div class="row form-row">
					<div class="form-group s-form-group col-md-5">
					<input type="number" name="phone" class="form-control" placeholder="Phone No." />
				</div>
				<style>
                    input::-webkit-outer-spin-button,
                    input::-webkit-inner-spin-button {
                    -webkit-appearance: none;
                    margin: 0;
                    }
                    input[type=number] {
                    -moz-appearance: textfield;
					}
             	</style>
				<div class="form-group s-form-group col-md-5">
					<input type="text" name="college" class="form-control" placeholder="College/ Organization" />					</div>
				</div>
				<div class="contact-msg">
					<textarea type="text" name="message" rows="5" placeholder="Message *" class="form-control col-md-11 contact-message"></textarea>
				</div>
				<div class="row contact-msg">
					<button type="submit" class="btn btn-primary s-form-group contact-btn col-md-3 col-sm-2">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>

	<!-- ********************************contact_us end**************************************************** -->
<!-- back to top -->
<div class="scrolltop">
	<div class="scroll icon">
        <i class="fa fa-rocket" aria-hidden="true"></i>
    </div>
</div>
<!-- contact us -->
<div class="contact-bottom-btn">
	<a href="javascript:showcontact()">
		<div class="contact-icon"><i class="fas fa-comments" aria-hidden="true"></i></div>
	</a>
</div>