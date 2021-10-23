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

  <?php
    include_once './forms.php';

  ?>


    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Responses</h2>
                        <table class="table table-bordered" id="responsestable">
                            <!-- <thead>
                                <tr>
                                while ($count>=0){
                                    <th></th>
                                }
                                    

                                </tr>
                            </thead> -->

                            <tbody class="responsedata">

                            </tbody>
                        </table>

                    </div>

                </div>

            </div>

        </div>
    </div>
    
                           

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    

    <?php
    // $page = isset($_GET["page"]) ? $_GET["page"] : 1;
    $ID = $_GET["Id"];
    $formName = $_GET["name"];
    ?>

    <script>
        let urlll = './api.php/?q=readResponses&Id=' + <?php echo $ID ?> + '&name=event_1_registration';

        
        $(document).ready(function() {
            
            // let urlll = './api.php/?q=readResponses&Id=1&name=event_1_registration';
            getdata();
        });


        // $allFields = $post->readFields($ID,$formName);

        function getdata()
        {
            $.ajax({
                type: 'GET',
                url: urlll,
                success: function(data) {
                    console.log(data);
                    data.forEach(myFunc);

                    function myFunc(row, index) {
                    responsestable.innerHTML += `<tr>
                    ${
                        row.forEach(response_data)
                        while ()
                    }
                    <td>${row[0]}</td>`
                        }


                        function response_data(eachdata){
                            

                        }
                        // $.each(data, function (key,value){

                        //     while ($row=$allFields->fetch_assoc()){
                        //         $('.responsedata').append(
                                
                        //             '<tr'+
                        //             '<td>'+ value[$row] + '</td>\
                        //             </tr>');
                        //         }
                        //     );
                        // });
                }
            });
        }

        

            
    </script>


  </body>
</html>




