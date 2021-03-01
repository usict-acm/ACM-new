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

  console.log("ready!");
  $("#my-form").steps({
      headerTag: "h3",
      bodyTag: "section",
      transitionEffect: "slideLeft",
      stepsOrientation: "vertical",
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
            alert("USER EMAIL ALREADY EXISTS")
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
          }
        })




}
});
});
