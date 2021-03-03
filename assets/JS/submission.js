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
       alert("File is too big!");
       this.value = "";
    }
    else {
        if(!isPDF(this.files[0].name)){
           alert("Yeh theek nahi hai, pdf daal na bhai");
            this.value = '';
        }
    }
};

document.getElementById("merabutton").addEventListener("click", function(event){
    event.preventDefault();
    var db = firebase.firestore();
    var leaderEmail = document.getElementById('leaderEmail').value;
    const docRef = db.collection("registration").doc(leaderEmail);
    var teamCode = document.getElementById('teamCode').value;

    docRef.get().then((doc) => {
        if (!doc.exists) {
            // doc.data() will be undefined in this case
            alert("Pehle Register toh karlo Uncle");
        } else {
            console.log("Document data:", doc.data());
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
                    document.querySelector('#pdf').src = url;
                })
                .catch(console.error);
            }
            else{
                alert("Bhai Team Code yaad kar");
            }
        }
    }).catch((error) => {
        console.log("Error getting document:", error);
    });
});
