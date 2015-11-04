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
			$updateWorkOrderQuery = "UPDATE WorkOrder SET status = '" . $_POST["newStatus"] .
			  "' WHERE orderID = " . $_POST["workOrderID"];

			echo $updateWorkOrderQuery;

			die('\nbye');

			$updateWorkOrderQueryResult = mysqli_query($link, $updateWorkOrderQuery) 
					or die('Query failed: ' . mysql_error());

			printf("Work order %d has been set to %s.\n", $_POST["workOrderID"], $_POST["newStatus"]);

		?>
	</body>
</html>