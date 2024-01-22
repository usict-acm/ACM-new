<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="../css/password.css">
</head>
<body>

<?php
// Initialize a variable to track whether to display the form
$displayForm = true;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    include 'common.php';

    // Check if the database connection is successful
    if (!$conn) {
        echo '<div>Sorry, unable to connect</div>';
    } else {
        $username = $_POST['user'];
        //$oldpass = $_POST['oldpassword'];
        $oldpass = hash('sha256',$_POST['oldpassword']);
        $newpass = hash('sha256', $_POST['newpassword']);

        // Check if the user exists using a prepared statement
        $checkUserQuery = "SELECT * FROM users WHERE username = ?";
        $checkUserStmt = mysqli_prepare($conn, $checkUserQuery);
        mysqli_stmt_bind_param($checkUserStmt, "s", $username);
        mysqli_stmt_execute($checkUserStmt);
        $result = mysqli_stmt_get_result($checkUserStmt);

        if (mysqli_num_rows($result) == 0) {
            echo"<div>
            user not found
        </div>";
        } else {
            // Check if the old password is correct using a prepared statement
            $checkPasswordQuery = "SELECT password FROM users WHERE username = ?";
            $checkPasswordStmt = mysqli_prepare($conn, $checkPasswordQuery);
            mysqli_stmt_bind_param($checkPasswordStmt, "s", $username);
            mysqli_stmt_execute($checkPasswordStmt);
            $passwordResult = mysqli_stmt_get_result($checkPasswordStmt);

            if ($row = mysqli_fetch_assoc($passwordResult)) {
                $storedPassword = $row['password'];

                // Compare the entered old password with the stored plain text password
                if ($oldpass === $storedPassword) {
                    // The old password is correct, proceed with updating the password
                    // Update the password using a prepared statement
                    $updatePasswordQuery = "UPDATE users SET password = ? WHERE username = ?";
                    $updatePasswordStmt = mysqli_prepare($conn, $updatePasswordQuery);
                    mysqli_stmt_bind_param($updatePasswordStmt, "ss", $newpass, $username);

                    if (mysqli_stmt_execute($updatePasswordStmt)) {
                        echo "<div>Password updated successfully</div>";
                        // Do not display the form after a successful password update
                        $displayForm = false;

                        // Start session and set session variables
                        session_start();
                        $_SESSION['auth'] = 'true';
                        $_SESSION['start'] = time();
                        $_SESSION['expire'] = $_SESSION['start'] + (60 * 60);

                        // Redirect after a successful password update
                        header('location: ./login.php');
                        exit(); // Ensure no further code execution after redirection
                    } else {
                        echo "Error updating password: " . mysqli_error($conn);
                    }
                } else {
                    // Wrong password,display the form
                    echo " <div>
                    Wrong Password
                </div>";
                    $displayForm = true;
                }
            } else {
                echo "Error fetching password from the database";
            }
        }
    }
    // Close the database connection
    mysqli_close($conn);
}

// Display the form only if $displayForm is true
if ($displayForm) {
?>
    <form method="post">
        <img src="acm-logo.svg" alt="acm logo">
        <label for="user">Enter your username</label>
        <input type='text' placeholder="user" name="user">

        <label for="oldpassword">Enter your old password</label>
        <input type='password' placeholder="oldpassword" name="oldpassword" id="password">

        <label for="newpassword">Enter your new password</label>
        <input type='password' id="password" placeholder="newpassword" name="newpassword">

        <button type='submit' name='submit'>Submit password</button>
    </form>
<?php
}
?>
<script src="password.js"></script>
</body>
</html>
