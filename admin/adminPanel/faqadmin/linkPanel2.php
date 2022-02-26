<?php
    $randNum = bin2hex(random_bytes(3));;
    echo "      
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' answer='width=device-width, initial-scale=1.0'>
        <title>Dashboard</title>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css'>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js'></script>
        <style type='text/css'>
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
            #in3{
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
            .randDiv{
                margin:20px 0 0 150px;
            }
    
        </style>
    </head>
    
    <body>
    
    
    
    
    
    
                <div class='wrapper'>
                    <div class='container-fluid'>
                        <div class='row'>
                            <div class='col-md-12'>
                                <div class='page-header clearfix'>
                                    <h2 class='pull-left'>Shorten Link Admin Panel</h2>
                                </div>
                                <div id='container'>
                                    <form method='POST' > 
                                        <input type='text' id='in1' class='form-control alignment123' name='in1' placeholder='Link is for' value='".$lf."' required readonly />
                                        <br>
                                        <input type='text' id='in2' class='form-control' name='in2' placeholder='Enter Original Link' value='".$ol."' required readonly/>
                                        <br>
                                        <div class='form-text new'>
                                            <input type='text' class='form-control' name='in3' placeholder='Custom Link Name' value='".$sl."' id='in3' required />
                                            <label for='in3' class='static-value'>https://usict.acm.org/  </label>
                                        </div> 
                                        <button id='' class='btn btn-primary new' type='' name='' value=''>Get Preview</button>
                                        <br>
                                        <div class='randDiv'>
                                            <span style='font-weight:bold;'>OR</span>
                                            <button type='button' class='btn btn-primary' id='randomBtn' name='random' >Genrate Random Short Link ??</button>
                                        </div>
                                        <br><br>
                                        <button type='submit' class='btn btn-primary' id='submitForm' name='reg1' >Check & Confirm</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                
                <script>
                    document.querySelector('#randomBtn').addEventListener('click',function(){
                            // console.log('".$randNum."');
                            document.querySelector('#in3').value='". $randNum."';
                        });
                </script>
                
                ";
?>