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
		?>

		Your username is <?php echo $username;?> and your password is <?php echo $password;?>.

		<?php
		  // Connect to database
		  $link = mysqli_connect('localhost', 'tpusater', 'evilspirit')
		    or die('Could not connect: ' . mysql_error());
		  echo 'Connected successfully!';
		?>
	</body>

</html>
