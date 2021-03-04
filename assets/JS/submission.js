var uploadField = document.getElementById("pdf");
function getExtension(filename) {
    var parts = filename.split('.');
    return parts[parts.length - 1];
}
function isPDF(filename) {
    var ext = getExtension(filename);
    switch (ext.toLowerCase()) {
      case 'pdf': return true;
    }
    return false;
}  

uploadField.onchange = function() {
    if(this.files[0].size > 10485760){
        $("#errorModal").modal();
        $("#errorMessage").html("The file is too Big!");
        $('#loadingModal').modal('hide');
       this.value = "";
    }
    else {
        if(!isPDF(this.files[0].name)){
            $("#errorModal").modal();
            $("#errorMessage").html("Your Submission has to be in PDF format only.");
            $('#loadingModal').modal('hide');
            this.value = '';
        }
    }
};

document.getElementById("merabutton").addEventListener("click", function(event){
    event.preventDefault();
    $("#loadingModal").modal();
    var db = firebase.firestore();
    var leaderEmail = document.getElementById('leaderEmail').value;
    const docRef = db.collection("registration").doc(leaderEmail);
    var teamCode = document.getElementById('teamCode').value;

    docRef.get().then((doc) => {
        if (!doc.exists) {
            // doc.data() will be undefined in this case
            $("#errorModal").modal();
            $("#errorMessage").html("You need to register for the Hackathon first!");
            $('#loadingModal').modal('hide');
        } else {
            console.log("Document data:", doc.data());
            if(doc.data().file != ''){
                $("#errorModal").modal();
                $("#errorMessage").html("You submission has already been recorded and it can not be updated.");
                $('#loadingModal').modal('hide');
            }
            else{
            if(teamCode === doc.data().registration){
                console.log(doc.data().registration); 
                const ref = firebase.storage().ref();
                const file = document.querySelector('#pdf').files[0]
                const name = doc.data().registration + ' submission';
                const metadata = {
                contentType: file.type
                };
                const task = ref.child(name).put(file, metadata);
                task
                .then(snapshot => snapshot.ref.getDownloadURL())
                .then((url) => {
                    console.log(url);
                    docRef.update({
                        file:url,
                    });
                    document.querySelector('#pdf').src = url;
                    $("#successModal").modal();
                    $('#loadingModal').modal('hide');
                })
                .catch(console.error);
            }
            else{
                $('#loadingModal').modal('hide');
                $("#errorModal").modal();
                $("#errorMessage").html("Please enter the correct Registration Number.");
            }
        }
    }
    }).catch((error) => {
        console.log("Error getting document:", error);
        $("#errorModal").modal();
        $("#errorMessage").html("Error getting document <br> please try again.", error);
        $('#loadingModal').modal('hide');
    });
});

$(window).on("scroll", function() {
    if($(window).scrollTop()) {
          $('nav').addClass('black');
    }

    else {
          $('nav').removeClass('black');
    }
})


function toggleIcon(e) {
  $(e.target)
      .prev('.panel-heading')
      .find(".more-less")
      .toggleClass('fas-plus fas-minus');
}
$('.panel-group').on('hidden.bs.collapse', toggleIcon);
$('.panel-group').on('shown.bs.collapse', toggleIcon);
$(document).ready(function () {
$(document).click(
 function (event) {
     var target = $(event.target);
     var _mobileMenuOpen = $(".navbar-collapse").hasClass("show");
     if (_mobileMenuOpen === true && !target.hasClass("navbar-toggler")) {
         $("button.navbar-toggler").click();
     }
 }
);
});

