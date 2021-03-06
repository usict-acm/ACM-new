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

$(document).ready(function () {
  var count = 0;
  var det = document.getElementById("my-form");
  var db = firebase.firestore();
  var form = $("#my-form");

  form.validate({
    errorPlacement: function errorPlacement(error, element) {
      element.before(error);
    },
    rules: {
      confirm: {
        equalTo: "#password",
      },
    },
  });
  console.log("ready!");
  $("#my-form").steps({
    headerTag: "h3",
    bodyTag: "section",
    saveState: true,
    transitionEffect: "slideLeft",
    stepsOrientation: "vertical",
    onStepChanging: function (event, currentIndex, newIndex) {
      form.validate().settings.ignore = ":disabled,:hidden";
      return form.valid();
    },
    onFinishing: function (event, currentIndex) {
      var form = $(this);
      form.validate().settings.ignore = ":disabled";
      return form.valid();
    },
    onFinished: function (event, currentIndex) {
      event.preventDefault();

      var regPartOne = det.teamName.value.substring(0, 2);
      var regPartTwo = (det.leaderNumber.value % 100000).toString();
      var regPartThree = Math.floor(Math.random() * 1000).toString();
      var regNo = regPartOne + regPartThree + regPartTwo;

      const registerRef = db
        .collection("registration")
        .doc(det.leaderEmail.value);

      registerRef.get().then((docSnapshot) => {
        if (docSnapshot.exists) {
          $("#errorMessage").html(
            "Email already registered,\
             Submit your entries before 6 march, 2021, 11:59 PM to proceed"
          );
          $("#errorModal").modal();
        } else {
          registerRef
            .set({
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
              file: "",
            })
            .then(() => {
              $("#successfulMessage").html(
                "Team name:-" +
                  det.teamName.value +
                  " <br>Registration no. :-" +
                  regNo +
                  "<br>Email id:-" +
                  det.leaderEmail.value
              );
              $("#successModal").modal();
              Email.send({
                // SecureToken: "",
                // Host : "smtp.yourisp.com",
                // Username : "username",
                // Password : "password",
                To: det.leaderEmail.value,
                //From : "",
                Subject: "Trellathon Registration Details",
                Body:
                  "Thank you for regitering for Trellathon. Following are the details for your registration.\n Email: - " +
                  det.leaderEmail.value +
                  "\n Registration no.: - " +
                  regNo +
                  "\n Keep these details with you for submissions.",
              }).then();
            })
            .catch((error) => {
              $("#errorMessage").html(error);
              $("#errorModal").modal();
            });
        }
      });
    },
  });
});

// feather.replace();

$(document).ready(function () {
  setTimeout(function () {
    $(".modal").addClass("modal--open");
  }, 1700);

  setTimeout(function () {
    $(".modal__icon").addClass("modal__icon--visible");
  }, 2200);
});

$(function () {
  $("#leaderNumber_error_message").hide();
  $("#memberOneNumber_error_message").hide();
  $("#memberTwoNumber_error_message").hide();
  $("#memberThreeNumber_error_message").hide();
  $("#memberFourNumber_error_message").hide();

  var error_leaderNumber = false;
  var error_memberOneNumber = false;
  var error_memberTwoNumber = false;
  var error_memberThreeNumber = false;
  var error_memberFourNumber = false;

  $("#leaderNumber").focusout(function () {
    check_leaderNumber();
  });
  $("#memberOneNumber").focusout(function () {
    check_leaderNumber();
  });
  $("#memberTwoNumber").focusout(function () {
    check_leaderNumber();
  });
  $("#memberThreeNumber").focusout(function () {
    check_leaderNumber();
  });
  $("#memberFourNumber").focusout(function () {
    check_leaderNumber();
  });

  function check_leaderNumber() {
    var leaderNumber_length = $("#leaderNumber").val().length;
    if (leaderNumber_length != 10) {
      $("#leaderNumber_error_message").html("Number Should have 10 digits");
      $("#leaderNumber_error_message").show();
      $("#leaderNumber").css("background", "rgb(251, 227, 228)");
      error_leaderNumber = true;
    } else {
      $("#leaderNumber_error_message").hide();
      $("#leaderNumber").css("background", "white");
    }
  }
  function check_memberOneNumber() {
    var memberOneNumber_length = $("#memberOneNumber").val().length;
    if (memberOneNumber_length != 10) {
      $("#memberOneNumber_error_message").html("Number Should have 10 digits");
      $("#memberOneNumber_error_message").show();
      $("#memberOneNumber").css("background", "rgb(251, 227, 228)");
      error_memberOneNumber = true;
    } else {
      $("#memberOneNumber_error_message").hide();
      $("#memberOneNumber").css("background", "white");
    }
  }
  function check_memberTwoNumber() {
    var memberTwoNumber_length = $("#memberTwoNumber").val().length;
    if (memberTwoNumber_length != 10) {
      $("#memberTwoNumber_error_message").html("Number Should have 10 digits");
      $("#memberTwoNumber_error_message").show();
      $("#memberTwoNumber").css("background", "rgb(251, 227, 228)");
      error_memberTwoNumber = true;
    } else {
      $("#memberTwoNumber_error_message").hide();
      $("#memberTwoNumber").css("background", "white");
    }
  }
  function check_memberThreeNumber() {
    var memberThreeNumber_length = $("#memberThreeNumber").val().length;
    if (memberThreeNumber_length != 10) {
      $("#memberThreeNumber_error_message").html(
        "Number Should have 10 digits"
      );
      $("#memberThreeNumber_error_message").show();
      $("#memberThreeNumber").css("background", "rgb(251, 227, 228)");
      error_memberThreeNumber = true;
    } else {
      $("#memberThreeNumber_error_message").hide();
      $("#memberThreeNumber").css("background", "white");
    }
  }
  function check_memberFourNumber() {
    var memberFourNumber_length = $("#memberFourNumber").val().length;
    if (memberFourNumber_length != 10) {
      $("#memberFourNumber_error_message").html("Number Should have 10 digits");
      $("#memberFourNumber_error_message").show();
      $("#memberFourNumber").css("background", "rgb(251, 227, 228)");
      error_memberFourNumber = true;
    } else {
      $("#memberFourNumber_error_message").hide();
      $("#memberFourNumber").css("background", "white");
    }
  }

  $("#my_form").submit(function () {
    error_leaderNumber = false;
    error_memberOneNumber = false;
    error_memberTwoNumber = false;
    error_memberThreeNumber = false;
    error_memberFourNumber = false;

    check_leaderNumber();
    check_memberOneNumber();
    check_memberTwoNumber();
    check_memberThreeNumber();
    check_memberFourNumber();
  });
});
