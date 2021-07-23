
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Announcements Form</title>
</head>

<style>
    .announcementH1class {
    font-family: Calibri;
    font-size: 40px;
    font-weight: 100;
    margin-left: auto;
    margin-right: auto;
    text-align: left;
    width: 38%;
  }

  .announcementHR {
    width: 38%;
  }

  .announcementH3class {
    font-family: Calibri;
    font-size: 30px;
    font-weight: 100;
    margin-left: auto;
    margin-right: auto;
    text-align: left;
    width: 38%;
  }

  .formClass {
    margin: auto;
    text-align: center;
    width: 60%;
  }

  ::placeholder {
    color: gray
  }

  .announcementInput {
    border: 2px solid lightgray;
    border-radius: 5px;
    font-family: Roboto;
    font-size: 19px;
    height: 20px;
    margin: 10px;
    padding: 15px;
    width: 60%;
  }

  .announcementTextarea {
    border: 2px solid lightgray;
    border-radius: 5px;
    font-family: Roboto;
    font-size: 19px;
    height: 100px;
    margin: 10px;
    padding: 15px;
    width: 60%;
  }

  .announcementPosterlabel {
    color: gray;
    font-family: Roboto;
    font-size: 19px;
    margin: 10px;
}
</style>

<body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script>
    function submit_announcements(){
    var formData = new FormData();
    formData.append('name',  $("#name").val());
    formData.append('description', $("#description").val());
    formData.append('regLink', $("#regLink").val());
    formData.append('startTime', $("#startTime").val());
    formData.append('endTime', $("#endTime").val());
    formData.append('watchLink', $("#watchLink").val());
    formData.append('partners', $("#partners").val());
    formData.append('speakers', $("#speakers").val());
    formData.append('poster', $("#poster").prop("files")[0]);
    $.ajax({
      type: "POST",
      url: "../../blogAdmin/api.php/?q=postAnnouncement",
      data : formData,
      cache: false,
      processData: false,
      contentType: false,
      success: function(data){
       alert(data);
      },
      error: function(xhr, status, error){
       console.error(xhr);
      },
    });
  }

  </script>

  <h1 class="announcementH1class">
    Create Announcements
  </h1>
  <hr class="announcementHR">
  <h3 class="announcementH3class">
    Please fill in the form to add announcement
  </h3>

  <form class="formClass" method="post" enctype="multipart/form-data">

    <input class="announcementInput" type="text" placeholder="Enter the title of the announcement" name="txtTitle" id="name" value=""><br>
    <textarea class="announcementTextarea" placeholder="Description of the announcement" name="txtDescription" id="description" rows="8" cols="80"></textarea><br>
    <input class="announcementInput" type="text" placeholder="RegLink" name="txtReglink" id="regLink" value=""><br>
    <input class="announcementInput" type="datetime" placeholder="Date and time for commencement of the event" name="" id="startTime" value=""><br>
    <input class="announcementInput" type="datetime" placeholder="Date and time for end of the event" name="" id="endTime" value=""><br>
    <input class="announcementInput" type="text" placeholder="Watch Link" name="txtWatchlink" id="watchLink" value=""><br>
    <input class="announcementInput" type="text" placeholder="Partners" name="txtPartners" id="partners" value=""><br>
    <input class="announcementInput" type="text" placeholder="Speakers of the event" name="speakers" id="txtSpeakers" value=""><br>
    <label class="announcementPosterlabel">Upload the poster</label><br>
    <input class="announcementInput" type="file" placeholder="Upload the poster" name="file" id="poster" value=""><br>
    <input type="button" name="submit" value="submit" onclick="submit_announcements()">

  </form>

</body>

</html>
