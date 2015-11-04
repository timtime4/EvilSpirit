<html>
	<head>
	</head>
	<body>
		<?php
			printf("Work order to delete is %d", $_GET["workOrderID"]);

			$link = mysqli_connect('localhost', 'tpusater', 'evilspirit');
						
			if(!$link){
				die('Could not connect: ' . mysql_error());
			}

			mysqli_select_db($link, 'tpusater') or die('Could not select database');

			// Dynamically (kinda) build the query
		?>
	</body>
</html>