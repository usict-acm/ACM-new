<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 
    <title>Responses</title>
  </head>
  <body>
  <style type="text/css">
        .wrapper{
            width: 1000px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
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
    </style>
    <?php
        include_once 'forms.php';
    ?>


    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h4 class="pull-left">Responses</h4>
                    </div>
                    <table class='table table-bordered table-striped'>
                            <thead  class="responsedata" id="responsestableHeading">
                            
                            </thead>
                            <tbody class="responsedata" id="responsestable">

                            </tbody>
                        </table>

                </div>

            </div>

        </div>
    </div>
    
                           

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    

    <?php
        $ID = $_GET["Id"];
    ?>

    <script>
        let urlll = '../blogAdmin/api.php/?q=readResponses&Id=' + '<?php echo $ID ?>';
        $(document).ready(function() {       
            getdata();
        });
        function getdata()
        {
            $.ajax({
                type: 'GET',
                url: urlll,
                success: function(data) {
                    console.log("data responses",data);
                    let responses = document.getElementById("responsestable");
                    var tr = "<tr>";
                    var td = "";
                    $("#responsestableHeading").append(tr);
                    for(let k=0; k<data[0].length;k++){
                        td += `<th>${data[0][k]}</th>`;
                    }
                    $("#responsestableHeading").append(td);
                    var trend = "</tr>";
                    $("#responsestableHeading").append(trend);
                    for(let i=1; i<data.length; i++){
                        var tr = "<tr>";
                        $("#responsestable").append(tr);
                        var td = "";
                        for(let j=0; j<data[i].length; j++){
                            td += `<td>${data[i][j]}</td>`;
                        }
                        $("#responsestable").append(td);
                        var trend = "</tr>";
                        $("#responsestable").append(trend);
                    }                
                }
            });
        }            
    </script>
  </body>
</html>




