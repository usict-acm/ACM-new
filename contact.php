<!-- ****************************************************contact us ***************************** -->

<script>
    function contact_us(){
      // console.log(type);
      let name = document.querySelector("#name").value;
      let email = document.querySelector("#email").value;
      let mobile = document.querySelector("#mobile").value;
      let college = document.querySelector("#college").value;
      let message = document.querySelector("#message").value;

    //   let file = document.querySelector("#file").value;
      
            var formData = new FormData();
            formData.append('name', name);
            formData.append('email', email);
            formData.append('mobile', mobile);
            formData.append('college', college);
            formData.append('message', message);

            let checkVal = true;
            // for (const value of formData.values()) {
            //   console.log(value);
            //     if(value=='' || value=='undefined')
            //         $checkVal = false;
            // }.
			if(name=='' || name=='undefined' || email=='' || email=='undefined' || message=='' || message=='undefined')
			{
				checkVal = false;

			}
    
          if(checkVal){

            $.ajax({
                type: "POST",
                url: "./admin/blogAdmin/api.php/?q=contactus",
                data : formData,
                cache: false,
                processData: false,
                contentType: false,
                success: function(data){
                    alert(data.message);
                    // console.log(data.message);
					// alert("Form Submitted!!");
                    // window.location.replace('./user/');
                    // window.location.replace('../../../../thankyou.php');

                },
                error: function(xhr, status, error){
                    // window.location.reload();
					// alert("Form Submitted!!");
                    alert("Fill in the details");
                },
      	});

        }else{
            // alert("Fill required Fields.");
            console.log();
        }

    };

  </script>



<div class="dsph" id="contact">
	<div class="d-flex justify-content-center mt-md-5">
		<img src="./assets/images/contact_us_img.webp" class="svg-media" alt="" />
		<div class="contactUs">
			<div class="closebtn">
				<button class="btn btn-primary btn-theme s-form-group contact-btn" onclick="closecontact()"><i class="fas fa-times"></i></button>
			</div>
			<form class="s-form" name="contact" method="POST" onsubmit="return validateform();">
				<h2 class="my-4 display-4 fw-bolder text-center">Contact<span class="text-blue"> Us</span></h2>
				<div class="row form-row">
					<div class="form-group s-form-group col-md-5">
						<input type="text" name="name" id="name" class="form-control" placeholder="Name *" required />
					</div>
					<div class="form-group s-form-group col-md-5">
					<input type="text" name="email" id="email" class="form-control" aria-describedby="emailHelp" placeholder="Email *" required />
					</div>
				</div>
				<div class="row form-row">
					<div class="form-group s-form-group col-md-5">
					<input type="number" name="mobile" id="mobile" class="form-control" placeholder="Phone No." />
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
					<input type="text" name="college" id="college" class="form-control" placeholder="College/ Organization" />					</div>
				</div>
				<div class="contact-msg">
					<textarea type="text" name="message" id="message" rows="5" placeholder="Message *" class="form-control col-md-11 contact-message" required></textarea>
				</div>
				<div class="row contact-msg">
					<button type="submit" class="btn btn-primary btn-theme s-form-group contact-btn col-md-3 col-sm-2" onclick="contact_us()">Submit</button>
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