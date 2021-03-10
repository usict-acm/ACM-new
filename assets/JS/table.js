var db = firebase.firestore();
db.collection('registration').get().then((s) => {
  // $("#station").html(""); // This will empty your station button
  // $("#station_box").html(""); // This will empty your station box
  var n = 0;
  s.forEach(function(x){
    console.log(x.data());
     $("#table").append(`
<tr class="row">
 <td class="col">
    `+ x.data().registration +`
  </td>
  <td class="col">
    `+ x.data().teamName +`
  </td>
  <td class="col">
    `+ x.data().leaderEmail +` <br /> `+ x.data().memberOneEmail +` </br> `+ x.data().memberTwoEmail +` </br>  `+ x.data().memberThreeEmail +`<br /> `+ x.data().memberFourEmail +`
  </td>
  <td class="col">
    `+ x.data().memberOneFirstName + ' ' + x.data().memberOneLastName +` <br /> `+ x.data().memberTwoFirstName + ' ' + x.data().memberTwoLastName +` <br /> `+ x.data().memberThreeFirstName + ' ' + x.data().memberThreeLastName +` <br /> `+ x.data().memberFourFirstName + ' ' + x.data().memberFourLastName +`
  </td>
  <td class="col">
     `+ x.data().memberOneGithub +` <br /> `+ x.data().memberTwoGithub +` <br /> `+ x.data().memberThreeGithub +`<br /> `+ x.data().memberFourGithub +`
  </td>
  <td class="col">
     `+ x.data().memberOneCollege +` <br /> `+ x.data().memberTwoCollege +` <br /> `+ x.data().memberThreeCollege +`<br /> `+ x.data().memberFourCollege +`
  </td>
  <td class="col">
     `+ x.data().memberOneMembership +` <br /> `+ x.data().memberTwoMembership +` <br /> `+ x.data().memberThreeGithub +` <br /> `+ x.data().memberFourGithub +`
  </td>
  <td class="col">
     `+ x.data().memberOneNumber +` <br /> `+ x.data().memberTwoNumber +` <br /> `+ x.data().memberThreeNumber +` <br /> `+ x.data().memberFourNumber +`
  </td>
  <td class="col">
    <a target="_blank" href="`+ x.data().file +` ">
      View Submission
    </a>
  </td>
</tr>
`);

     n += 1;
  });
});