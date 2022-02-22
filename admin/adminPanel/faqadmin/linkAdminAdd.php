<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" answer="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <style type="text/css">
        .wrapper {
            width: 650px;
            margin: 0 auto;
        }

        .page-header h2 {
            margin-top: 0;
        }

        table tr td:last-child a {
            margin-right: 15px;
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

        .alignment123 {
            position: relative;
            top: -10px;
        }
        .form-text{
            position:relative;
            width:500px;
        }
        #custID{
            padding:20px 5px 20px 170px;
            font-weight:100em;
            width:100%;

        }
        .new{
            display:inline-block;
        }
        .static-value{
            position:absolute;
            /* background-color:#337ab7; */
            color:white;
            left:10px;
            font-weight:bold;
            font-size:1.1em;
            color:#444;
            top:9px;
        }

    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Shorten Link Admin Panel</h2>
                        <!-- <a href="?table=AddLink" class="btn btn-primary pull-right">Add New File</a> -->
                    </div>
                    <form action="">
                    <div id="container">
                        <input type="text" class='form-control alignment123' name="file0" placeholder="Link is for" required />
                        <br>
                        <input type="text" id="file" class='form-control' name="file1" placeholder="Enter previous link" required />
                        <br>
                        <!-- <div class="input-group mb-3">
                            <div class="input-group-addon">
                                <span class="input-group-text" id="basic-addon3">https://usict.acm.org/</span>
                            </div>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Custom Link">
                        </div> -->


                        <div class="form-text new">
                            <input type=text class="form-control" placeholder="Custom Link Name" id="custID"/ required>
                            <label for="custID" class="static-value">https://usict.acm.org/  </label>
                        </div> 
                        <button id="" class="btn btn-primary new" type="" name="" value="">Get Preview</button>
                        <br>
                        <br>
                        <br>
                        <input id="submitForm" class="btn btn-primary" type="submit" name="submit" value="Check & Confirm" />


                    </div>
                    </form>
                </div>
            </div>
        </div>
</body>