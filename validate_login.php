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
			$query = "SELECT username, password FROM Users WHERE username = '" . $username ."'";
			$result = mysqli_query($link, $query) or die('Query failed: ' . mysql_error());
			// Printing results in HTML
			echo "<table>\n";
			while ($tuple = mysqli_fetch_array($result, MYSQL_ASSOC)) {
 			echo "\t<tr>\n";
 			foreach ($tuple as $col_value) {
			 	echo "\t\t<td>$col_value</td>\n";
			 }
			 echo "\t</tr>\n";
			}
			echo "</table>\n";
			// Free resultset
			mysqli_free_result($result);
			// Closing connection
			mysqli_close($link);
		?>
	</body>

</html>
