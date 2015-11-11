<?php
	// Display the inputed username and password
	$username = $_POST["username"];
	$password = $_POST["password"];

  // Connect to database
  $link = mysqli_connect('localhost', 'tpusater', 'evilspirit')
    or die('Could not connect: ' . mysql_error());

  mysqli_select_db($link, 'tpusater') or die('Could not select database');
	
	// Performing SQL query
	$query = "SELECT userID, username, password, userType FROM Users WHERE username = '" . $username ."'";
	$result = mysqli_query($link, $query) or die('Query failed: ' . mysql_error());

	$queryArray = mysqli_fetch_array($result, MYSQLI_BOTH);

	$userType = $queryArray["userType"];
	
	// TODO: Validate password
	if(!password_verify($_POST["password"]), $queryArray["password"]){
		echo "Incorrect Username or Password!";
	}

	// Start session
	session_start();
	$_SESSION["userID"] = $queryArray["userID"];

	if($userType == "RENTER"){
		echo '<script type="text/javascript"> window.location = "./makeWorkOrder.php" </script>';
	} elseif($userType == "MAINTENANCE"){
		echo '<script type="text/javascript"> window.location = "./searchWorkOrder.php" </script>';
	} elseif($userType == "ADMINISTRATOR"){
		echo '<script type="text/javascript"> window.location = "./administratorLanding.php" </script>';
	}


	// Free resultset
	mysqli_free_result($result);
	// Closing connection
	mysqli_close($link);
?>

