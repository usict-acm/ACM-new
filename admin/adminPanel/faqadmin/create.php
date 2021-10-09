<?php
// header('location: ../../blogAdmin/blogAdmin.html')
?>

<?php
// Include config file
require_once "./config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" answer="width=device-width, initial-scale=1.0">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://cdn.tiny.cloud/1/mksotb5qwcfqike273vpegiuc1l37f1gkd7eansyq3mve8kz/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
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
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Record</h2>
                    </div>
                    <p>Please fill this form and submit to add faq record to the database.</p>
                    <form action="../../blogAdmin/api.php?q=postblog" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" name="title" id="title" class='form-control' placeholder="Enter the title of the blog" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="author" id="age" class='form-control' placeholder="Who wrote the blog" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="category" id="category" class='form-control' placeholder="Enter Category of blog" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="event" id="event" class='form-control' placeholder="Enter event, if any" />
                        </div>
                        <div class="form-group">
                            <textarea name="content" id="content" rows="10" class='form-control mceEditor' placeholder="Enter the blog"></textarea>
                        </div>
                        <input class="form-group" type="file" name="file" id="file" />

                        <input class="btn btn-primary" type="submit" name="submit" value="submit" />
                        <a href="../index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    tinymce.init({
        selector: 'textarea',
        mode: "specific_textareas",
        editor_Selector: "mceEditor",
        plugins: ' advlist autolink lists link image charmap print preview hr anchor pagebreak autolink lists media mediaembed pageembed permanentpen powerpaste table advtable tinymcespellchecker',
        toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
    });
</script>

</html>