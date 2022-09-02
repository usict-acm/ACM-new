<?php
require('../blogAdmin/database.php');
$database = new Database();
$link = $database->connect();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" answer="width=device-width, initial-scale=1.0">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style>
        .wrapper {
            width: 700px;
            margin: 0 auto;
        }

        .hh_button {
            display: inline-block;
            text-decoration: none;
            background: linear-gradient(to right, #ff8a00, #da1b60);
            border: none;
            color: white;
            padding: 10px 25px;
            font-size: 1rem;
            border-radius: 3px;
            cursor: pointer;
            font-family: 'Roboto', sans-serif;
            position: relative;
            margin-top: 30px;
            margin: 0px;
            position: absolute;
            right: 20px;
            top: 1.5%;
        }

        header {
            color: white;
            padding: 20px;
            margin-bottom: 20px;
        }

        header a,
        header a:hover {
            text-decoration: none;
            color: white;
        }
        .copybutton {
        /* position: absolute; */
        border-width: 0;
        color: #337ab7;
        background-color: #f9f9f9;
    }
    .edit-logo{
        position: absolute;
        margin: 0 0 0px 10px;
    }
    .tash-bin{
        position: relative;
        margin:0px 0 0  15px;
    }
    .centerAlign{
        text-align:center;
    }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>


    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Check Participants</h2>
                    </div>
                    <!-- <p>Please fill in the form to add announcement.</p> -->
                    <form >
                        <div class="form-group">
                            <select  class='form-control' onchange="changeDD()" id="changeDDid">
                                <option selected disabled>Select the Event Name</option>



                                    <script>
                                            let url = '../blogAdmin/api.php?q=getEvents';
                                            let getEvents = document.getElementById("changeDDid");

                                            $(document).ready(function() {
                                                $.ajax({
                                                url: url,
                                                method: 'GET',
                                                dataType: 'JSON',
                                                success: function(data) {
                                                        for (i = 0; i < data.length; i++) {
                                                            getEvents.innerHTML += `<option  value='${data[i].eventId}'>${data[i].eventName}</option>`;
                                                    
                                                        }
                                                },
                                                });
                                            });

                                    </script>


                            </select>
                        </div>
                    </form>
                    <div id="getEventParticipant"></div>
                    <script>
                        function changeDD(){
                            let val = document.querySelector('#changeDDid').value;
                            // console.log(val);
                            let url = '../blogAdmin/api.php?q=getEventParticipant&eventId='+val;
                            // console.log(url);
                            let getEventParticipant = document.getElementById("getEventParticipant");

                            getEventParticipant.innerHTML = `<table class='table table-bordered table-striped'>
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Participant Name</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>`;
                            $(document).ready(function() {
                                $.ajax({
                                url: url,
                                method: 'GET',
                                dataType: 'JSON',
                                success: function(data) {

                                    for (i = 0; i < data.length; i++) {
                                        url = '../blogAdmin/api.php?q=getParticipantName&userId='+data[i].userId;
                                        $.ajax({
                                            url: url,
                                            method: 'GET',
                                            dataType: 'JSON',
                                            success: function(data) {
                                                console.log("check ", data);
                                                getEventParticipant.innerHTML += `<tr><td>${data[0].name}</td></tr>`;
                                            },
                                        });
                                    }

                                },
                                });
                            });
                            getEventParticipant.innerHTML += `</tbody>                         
                                                                    </table>`;
                        }
                    </script>

                </div>
            </div>
        </div>
    </div>
</body>

</html>