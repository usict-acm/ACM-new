// function _class(name){
//     return document.getElementsByClassName(name);
//   }

//   let tabPanes = _class("tab-header")[0].getElementsByTagName("div");

//   for(let i=0;i<tabPanes.length;i++){
//     tabPanes[i].addEventListener("click",function(){
//       _class("tab-header")[0].getElementsByClassName("active")[0].classList.remove("active");
//       tabPanes[i].classList.add("active");

//       _class("tab-indicator")[0].style.top = `calc(70px + ${i*45}px)`;

//       _class("tab-content")[0].getElementsByClassName("active")[0].classList.remove("active");
//       _class("tab-content")[0].getElementsByTagName("div")[i].classList.add("active");

//     });
//   }





$(document).ready(function() {

  var count = 0;
  var det = document.getElementById("my-form");
  var db = firebase.firestore();
 var form = $("#my-form");

 form.validate({
   errorPlacement: function errorPlacement(error, element) { element.before(error); },
   rules: {
       confirm: {
           equalTo: "#password"
       }
   }
});
  console.log("ready!");
  $("#my-form").steps({
      headerTag: "h3",
      bodyTag: "section",
      saveState: true,
      transitionEffect: "slideLeft",
      stepsOrientation: "vertical",
      onStepChanging: function (event, currentIndex, newIndex)
    {
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
    },
    onFinishing: function (event, currentIndex)
    {
      var form = $(this);
        form.validate().settings.ignore = ":disabled";
        return form.valid();
    },
      onFinished: function(event, currentIndex) {
        event.preventDefault();


        var regPartOne = det.teamName.value.substring(0, 2);
        var regPartTwo = ((det.leaderNumber.value) % 100000).toString();
        var regPartThree = Math.floor((Math.random() * 1000)).toString();
        var regNo = regPartOne + regPartThree + regPartTwo;

        const registerRef = db.collection("registration").doc(det.leaderEmail.value);

        registerRef.get()
        .then((docSnapshot)=>{
          if(docSnapshot.exists){
            $("#errorMessage").html("Email already registered,\
             Submit your entries before 6 march, 2021, 11:59 PM to proceed")
             $("#errorModal").modal();
          }
          else
          {
            registerRef.set({
              teamName: det.teamName.value,
              numberOfMembers: det.numberOfMembers.value,
              leaderName: det.leaderName.value,
              leaderNumber: det.leaderNumber.value,
              leaderEmail: det.leaderEmail.value,
              memberOneFirstName: det.memberOneFirstName.value,
              memberOneLastName: det.memberOneLastName.value,
              memberOneCollege: det.memberOneCollege.value,
              memberOneNumber: det.memberOneNumber.value,
              memberOneEmail: det.memberOneEmail.value,
              memberOneGithub: det.memberOneGithub.value,
              memberTwoFirstName: det.memberTwoFirstName.value,
              memberTwoLastName: det.memberTwoLastName.value,
              memberTwoCollege: det.memberTwoCollege.value,
              memberTwoNumber: det.memberTwoNumber.value,
              memberTwoEmail: det.memberTwoEmail.value,
              memberTwoGithub: det.memberTwoGithub.value,
              memberThreeFirstName: det.memberThreeFirstName.value,
              memberThreeLastName: det.memberThreeLastName.value,
              memberThreeCollege: det.memberThreeCollege.value,
              memberThreeNumber: det.memberThreeNumber.value,
              memberThreeEmail: det.memberThreeEmail.value,
              memberThreeGithub: det.memberThreeGithub.value,
              memberFourFirstName: det.memberFourFirstName.value,
              memberFourLastName: det.memberFourLastName.value,
              memberFourCollege: det.memberFourCollege.value,
              memberFourNumber: det.memberFourNumber.value,
              memberFourEmail: det.memberFourEmail.value,
              memberFourGithub: det.memberFourGithub.value,
              registration: regNo,
              file: ""
            })
            .then(() => {
                $("#successfulMessage").html("Team name:-"+det.teamName.value+" <br>Registration no. :-" + regNo+"<br>Email id:-"+det.leaderEmail.value)
                $("#successModal").modal();
                Email.send({
                  // SecureToken: "",
                  // Host : "smtp.yourisp.com",
                  // Username : "username",
                  // Password : "password",
                  To : det.leaderEmail.value,
                  //From : "",
                  Subject : "Trellathon Registration Details",
                  Body : "Thank you for registering for Trellathon. Following are the details for your registration.\n Email: - "+det.leaderEmail.value+"\n Registration no.: - "+ regNo+"\n Keep these details with you for submissions.",
              }).then(
              );
              })
          .catch((error) => {
            $("#errorMessage").html(error);
            $("#errorModal").modal();
          });
          }
        })




}
});
});




// feather.replace();

$(document).ready(function() {
  setTimeout(function(){
      $('.modal').addClass('modal--open');
  }, 1700);

  setTimeout(function(){
      $('.modal__icon').addClass('modal__icon--visible');
  }, 2200);
});






// $(function() {

//   $("#teamName_error_message").hide();
//   $("#member_error_message").hide();
//   $("#leaderName_error_message").hide();
//   $("#leaderNumber_error_message").hide();
//   $("#leaderEmail_error_message").hide();

//   var error_teamName = false;
//   var error_member = false;
//   var error_leaderName = false;
//   var error_leaderNumber = false;
//   var error_leaderEmail = false;

//   $("#teamName").focusout(function(){
//      check_teamName();
//   });
//   $("#member").focusout(function() {
//      check_member();
//   });
//   $("#leaderName").focusout(function() {
//      check_leaderName();
//   });
//   $("#leaderNumber").focusout(function() {
//      check_leaderNumber();
//   });
//   $("#leaderEmail").focusout(function() {
//      check_leaderEmail();
//   });


// function check_teamName() {
//    var pattern = /^[a-zA-Z]*$/;
//    var teamName_length = $("#teamName").val().length;
//    var teamName = $("#teamName").val();
//    if ((pattern.test(teamName)) && (teamName !== '')) {
//       if(teamName_length < 10){
//          $("#teamName_error_message").hide();
//          $("#teamName").css("border","3px solid #34F458");
//       } else {
//          $("#teamName_error_message").html("Team Name should be max. 20 characters");
//          $("#teamName_error_message").show();
//          $("#teamName").css("border","3px solid #F90A0A");
//          error_teamName = true;
//       } 
//    } else {
//       $("#teamName_error_message").html("Should contain only letters");
//       $("#teamName_error_message").show();
//       $("#teamName").css("border","3px solid #F90A0A");
//       error_teamName = true;
//    }
//  }

//   function check_member() {
//     var member = $("#member").val();
//     if ((member <= 4) && (member >=2)) {
//       $("#member_error_message").hide();
//        $("#member").css("border","3px solid #34F458");
//     } else {
//       $("#member_error_message").html("Members Should be from 2 to 4");
//       $("#member_error_message").show();
//       $("#member").css("border","3px solid #F90A0A");
//       error_member = true;
//     }
//  }

//  function check_leaderName() {
//   var pattern = /^[a-zA-Z]*$/;
//   var leaderName_length = $("#leaderName").val().length;
//   var leaderName = $("#leaderName").val();
//   if ((pattern.test(leaderName)) && (leaderName !== '')) {
//      if (leaderName_length < 25){
//       $("#leaderName_error_message").hide();
//       $("#leaderName").css("border","3px solid #34F458");
//      } else{
//       $("#leaderName_error_message").html("Name should be max. 20 characters");
//       $("#leaderName_error_message").show();
//       $("#leaderName").css("border","3px solid #F90A0A");
//      }  
//   } else {
//      $("#leaderName_error_message").html("Should contain only letters");
//      $("#leaderName_error_message").show();
//      $("#leaderName").css("border","3px solid #F90A0A");
//      error_leaderName = true;
//   }
// }

// function check_leaderNumber() {
//   var leaderNumber_length = $("#leaderNumber").val().length;
//   if ((leaderNumber_length != 10)) {
//      $("#leaderNumber_error_message").html("Number Should have 10 digits");
//      $("#leaderNumber_error_message").show();
//      $("#leaderNumber").css("border","3px solid #F90A0A");
//      error_leaderNumber = true;
//   } else {
//      $("#leaderNumber_error_message").hide();
//      $("#leaderNumber").css("border","3px solid #34F458");
//   }
// }

//   function check_leaderEmail() {
//      var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
//      var leaderEmail = $("#leaderEmail").val();
//      if (pattern.test(leaderEmail) && leaderEmail !== '') {
//         $("#leaderEmail_error_message").hide();
//         $("#leaderEmail").css("border","3px solid #34F458");
//      } else {
//         $("#leaderEmail_error_message").html("Invalid Email");
//         $("#leaderEmail_error_message").show();
//         $("#leaderEmail").css("border","3px solid #F90A0A");
//         error_leaderEmail = true;
//      }
//   }

//   $("#my_form").submit(function() {
//      error_teamName = false;
//      error_member = false;
//      error_leaderName = false;
//      error_leaderNumber = false;
//      error_leaderEmail = false;

//      check_teamName();
//      check_member();
//      check_leaderName();
//      check_leaderNumber();
//      check_leaderEmail();

//      if (error_teamName === false && error_member === false && error_leaderName === false && error_leaderNumber === false && error_leaderEmail === false) {
//         alert("Registration Successfull");
//         return true;
//      } else {
//         alert("Please Fill the form Correctly");
//         return false;
//      }


//   });
// });
