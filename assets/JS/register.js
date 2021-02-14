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





$( document ).ready(function() {
  console.log( "ready!" );
  $("#my-form").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    stepsOrientation: "vertical",
    onFinished: function (event, currentIndex)
    {
      // console.log(form.serialize());
        $("#my-form").submit();
        console.log("done");
    }
  });
});




// var form = $("#my-form");
// form.validate({
//     errorPlacement: function errorPlacement(error, element) { element.before(error); },
//     rules: {
//         confirm: {
//             equalTo: "#password"
//         }
//     }
// });
// form.children("div").steps({
//     headerTag: "h3",
//     bodyTag: "section",
//     transitionEffect: "slideLeft",
//     onStepChanging: function (event, currentIndex, newIndex)
//     {
//         form.validate().settings.ignore = ":disabled,:hidden";
//         return form.valid();
//     },
//     onFinishing: function (event, currentIndex)
//     {
//         form.validate().settings.ignore = ":disabled";
//         return form.valid();
//     },
//     onFinished: function (event, currentIndex)
//     {
//         form.submit();
//     }
// });


