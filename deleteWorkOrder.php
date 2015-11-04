<html>
	<head>
	</head>
	<body>
		<?php	

			$link = mysqli_connect('localhost', 'tpusater', 'evilspirit');
						
			if(!$link){
				die('Could not connect: ' . mysql_error());
			}

			mysqli_select_db($link, 'tpusater') or die('Could not select database');

			// Dynamically (kinda) build the query
			$deleteQuery = "DELETE FROM WorkOrder WHERE orderID = " . $_POST["workOrderID"];

			$deleteQueryResult = mysqli_query($link, $deleteQuery) 
					or die('Query failed: ' . mysql_error());

			printf("Work order %d has been deleted.\n", $_POST["workOrderID"]);

		?>
	</body>
</html>