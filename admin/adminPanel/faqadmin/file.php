<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" answer="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
        <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
        .hh_button {
    display: inline-block;
    text-decoration: none;
    background: linear-gradient(to right,#ff8a00,#da1b60);
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
    header a,  header a:hover {
        text-decoration: none;
        color: white;
    }
    .alignment123 {
            position: relative;
            right: 300px;
            top: -10px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Files Admin Panel</h2>
                        <a href="?table=AddFile" class="btn btn-primary pull-right">Add New File</a>
                    </div>
                    <div id="container">
                    <input type="text" id="file" class='form-control alignment123 titleField reqField0' name="file" placeholder="Enter previous link" required />
                    <br>
                    <input type="text" id="file" class='form-control alignment123 titleField reqField0' name="file" placeholder="Enter previous link" required />
                    <button id="submitForm" class="btn btn-primary" type="submit" name="submit" value="submit">Previous Link</button>
                    <button id="submitForm" class="btn btn-primary" type="submit" name="submit" value="submit">Get Preview</button>
                    <button id="submitForm" class="btn btn-primary" type="submit" name="submit" value="submit">Check&confirm</button>


                </div>
            </div>
        </div>
</div>
</body>