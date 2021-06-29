<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$question = $answer = $lang = "";
$question_err = $answer_err = $lang_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["Sno"]) && !empty($_POST["Sno"])){
    // Get hidden input value
    $Sno = $_POST["Sno"];
    
    // Validate question
    $input_question = trim($_POST["question"]);
    if(empty($input_question)){
        $question_err = "Please enter a question.";
    } else{
        $question = $input_question;
    }
    
    // Validate answer answer
    $input_answer = trim($_POST["answer"]);
    if(empty($input_answer)){
        $answer_err = "Please enter an answer.";     
    } else{
        $answer = $input_answer;
    }
    // Validate lang
    $input_lang = trim($_POST["lang"]);
    if(empty($input_lang)){
        $lang_err = "Please enter the lang amount.";     
    } else{
        $lang = $input_lang;
    }
    
    // Check input errors before inserting in database
    if(empty($question_err) && empty($answer_err) && empty($lang_err)){
        // Prepare an update statement
        $sql = "UPDATE faq SET question=?, answer=?, lang=? WHERE Sno=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssi", $param_question, $param_answer, $param_lang, $param_id);
            
            // Set parameters
            $param_question = $question;
            $param_answer = $answer;
            $param_lang = $lang;
            $param_id = $Sno;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
} else{
    // Check existence of Sno parameter before processing further
    if(isset($_GET["Sno"]) && !empty(trim($_GET["Sno"]))){
        // Get URL parameter
        $Sno =  trim($_GET["Sno"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM faq WHERE Sno = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $Sno;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $question = $row["question"];
                    $answer = $row["answer"];
                    $lang = $row["lang"];
                } else{
                    // URL doesn't contain valid Sno. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($link);
    }  else{
        // URL doesn't contain Sno parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" answer="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

        <style>
                    .wrapper{
            width: 500px;
            margin: 0 auto;
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
    </style>
</head>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group <?php echo (!empty($question_err)) ? 'has-error' : ''; ?>">
                            <label>question</label>
                            <input type="text" name="question" class="form-control" value="<?php echo $question; ?>">
                            <span class="help-block"><?php echo $question_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($answer_err)) ? 'has-error' : ''; ?>">
                            <label>answer</label>
                            <textarea name="answer" class="form-control"><?php echo $answer; ?></textarea>
                            <span class="help-block"><?php echo $answer_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($lang_err)) ? 'has-error' : ''; ?>">
                            <label>lang</label>
                            <input type="text" name="lang" class="form-control" value="<?php echo $lang; ?>">
                            <span class="help-block"><?php echo $lang_err;?></span>
                        </div>
                        <input type="hidden" name="Sno" value="<?php echo $Sno; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="../index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>