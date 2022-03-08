<?php
	// require the include files that has all the back-end functionality
	require_once('./database.php');
   
	// check to see if a code has been supplied and process it
	if (isset($_GET['code']) && $_GET['code'] != '' && strlen($_GET['code']) > 0){
		$code = $_GET['code']; 
        $database = new Database();
        $link = $database->connect();
        $conn = $link;
		
		// validate the code against the database
		$query = mysqli_query($conn, "SELECT * FROM link WHERE code='$code'");
		if (mysqli_num_rows($query) == 1){
			
			// retrieve the data from the database
			$data = mysqli_fetch_assoc($query);
			
			// update the counter in the database
			mysqli_query($conn, "UPDATE link SET count='" . ($data['count']) + 1 . "' WHERE id='". ($data['id'])."'");
			
			/* ADD EXTRA STUFF HERE IF DESIRED */
			
			// set some header data and redirect the user to the url
			/*header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
			header("Cache-Control: no-cache");
			header("Pragma: no-cache");*/

			header("Location: " . $data['originalLink']);
			
			die();
		}
		else{
			 header("Location: ../404.html");
			//$message = '<font color="red">Unable to redirect to your url</font>';
			//echo $message;
		}
	}
?>