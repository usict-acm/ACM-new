
<?php
// Include config file
require_once "config1.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .wrapper {
            width: 500px;
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
    </style>
</head>
<body>

    <?php
    include_once '../blogAdmin/forms.php';
        $database = new Database();
        $db = $database->connect();
        $post = new Form($db);    
    ?>

    <?php
    $formID = $post->latestID();
    ?>

    <script>
        function copy(){
            var copyText = "usict.acm.org/forms/?id=" + '<?php echo $formID ?>';
            navigator.clipboard.writeText(copyText);
        }
    </script>
    

    

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header"></div>
                    <h2>Your form has been created.</h2> 
                    <br>
                    <h2>You may copy the link from below.</h2><br>
                <div>
            <div>
        <div>
    <div>
    <button class="btn btn-primary" onclick=copy()>Copy</button>

    
</body>
</html>