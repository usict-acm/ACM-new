var db = firebase.firestore();
var data =[["Team Code", "Team Name", "Leader E-mail", "M1 E-mail", "M2 E-mail", "M3 E-Mail", "M4 E-Mail", "M1 First Name", "M1 Last Name","M2 First Name", "M2 Last Name","M3 First Name", "M3 Last Name","M4 First Name", "M4 Last Name", "M1 GitHub", "M2 GitHub", "M3 GitHub", "M4 GitHub", "M1 College", "M2 College", "M3 College", "M4 College", "M1 Premium", "M2 Premium", "M3 Premium", "M4 Premium", "M1 Phone Number","M2 Phone Number","M3 Phone Number","M4 Phone Number","Submission"]];
var download = function(content, fileName, mimeType) {
  var a = document.createElement('a');
  mimeType = mimeType || 'application/octet-stream';

  if (navigator.msSaveBlob) { // IE10
    navigator.msSaveBlob(new Blob([content], {
      type: mimeType
    }), fileName);
  } else if (URL && 'download' in a) { //html5 A[download]
    a.href = URL.createObjectURL(new Blob([content], {
      type: mimeType
    }));
    a.setAttribute('download', fileName);
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
  } else {
    location.href = 'data:application/octet-stream,' + encodeURIComponent(content); // only this mime type is supported
  }
}
db.collection('registration').get().then((s) => {
  var n = 0;
  s.forEach(function(x){
    console.log(x.data());
    var pusher = [x.data().registration,x.data().teamName, x.data().leaderEmail, x.data().memberOneEmail,  x.data().memberTwoEmail, x.data().memberThreeEmail, x.data().memberFourEmail, x.data().memberOneFirstName, x.data().memberOneLastName,  x.data().memberTwoFirstName, x.data().memberTwoLastName, x.data().memberThreeFirstName, x.data().memberThreeLastName, x.data().memberFourFirstName, x.data().memberFourLastName,  x.data().memberOneGithub, x.data().memberTwoGithub, x.data().memberThreeGithub, x.data().memberFourGithub, x.data().memberOneCollege, x.data().memberTwoCollege, x.data().memberThreeCollege , x.data().memberFourCollege, x.data().memberOneMembership, x.data().memberTwoMembership, x.data().memberThreeMembership, x.data().memberFourMembership, x.data().memberOneNumber, x.data().memberTwoNumber, x.data().memberThreeNumber, x.data().memberFourNumber, x.data().file];
    data.push(pusher);
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
     `+ x.data().memberOneMembership +` <br /> `+ x.data().memberTwoMembership +` <br /> `+ x.data().memberThreeMembership +` <br /> `+ x.data().memberFourMembership +`
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

document.getElementById("csv").addEventListener("click", function(event){
  event.preventDefault();
  // $("#loadingModal").modal();
  // Example data given in question text
  console.log(data);
// Building the CSV from the Data two-dimensional array
// Each column is separated by ";" and new line "\n" for next row
var csvContent = '';
data.forEach(function(infoArray, index) {
  dataString = infoArray.join(';');
  csvContent += index < data.length ? dataString + '\n' : dataString;
});

// The download function takes a CSV string, the filename and mimeType as parameters
// Scroll/look down at the bottom of this snippet to see how download is called

download(csvContent, 'dowload.csv', 'text/csv;encoding:utf-8');
});

$(window).on("scroll", function() {
  if($(window).scrollTop()) {
        $('nav').addClass('black');
  }

  else {
        $('nav').removeClass('black');
  }
});