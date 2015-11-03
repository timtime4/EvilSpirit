<?php
session_start();
?>

<html>
	<head>
		<title>Test</title>
	</head>

	<body>
		<?php
			// Display the inputed username and password
			$username = $_POST["username"];
			$password = $_POST["password"];

		  // Connect to database
		  $link = mysqli_connect('localhost', 'tpusater', 'evilspirit')
		    or die('Could not connect: ' . mysql_error());
		  echo 'Connected successfully!';

		  mysqli_select_db($link, 'tpusater') or die('Could not select database');
			
			// Performing SQL query
			$query = "SELECT username, password, userType FROM Users WHERE username = '" . $username ."'";
			$result = mysqli_query($link, $query) or die('Query failed: ' . mysql_error());

			$query_array = mysqli_fetch_array($result, MYSQLI_BOTH);

			echo $query_array[0,0] . $query_array[0,1] . $query_array[0,2];
			
			// Free resultset
			mysqli_free_result($result);
			// Closing connection
			mysqli_close($link);
		?>
	</body>

</html>
