<html>
	<head>
		<title>Work Order Search Results</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	</head>
	<body>

		<h1> Search Results </h1>

		<div>
			<table>
				<tr>
					<th>ID</th>
					<th>House ID</th>
					<th>User ID</th>
					<th>Date Created</th>
					<th>Status</th>
					<th>Type</th>
					<th>Description</th>
					<th>Urgency</th>
				</tr>
				<?php
					session_start();

					$link = mysqli_connect('localhost', 'tpusater', 'evilspirit');
					
					if(!$link){
						die('Could not connect: ' . mysql_error());
					}

					mysqli_select_db($link, 'tpusater') or die('Could not select database');

					// Dynamically (kinda) build the query

					$workOrderQuery = "SELECT orderID, houseID, userID, created, status," . 
					  "workOrderType, description, urgency FROM WorkOrder WHERE 1 = 1 ";

					$criteria = 0;

					if ( $_POST["houseID"] != "" ){
						$workOrderQuery .= " AND houseID = " . $_POST["houseID"];
					} elseif ( isset($_POST["type"]) ){
						$workOrderQuery .= " AND workOrderType = '" . $_POST["type"] . "'";
					} elseif ( isset($_POST["urgency"]) ){
						$workOrderQuery .= " AND urgency = '" . $_POST["urgency"] . "'";
					}

					// Run the query
					$workOrderQueryResult = mysqli_query($link, $workOrderQuery) 
						or die('Query failed: ' . mysql_error());

					// Printing results in HTML
					while ($tuple = mysqli_fetch_array($workOrderQueryResult, MYSQL_ASSOC)) {
					  echo "<tr>";
					  foreach ($tuple as $col_value) {
					    echo "<td>$col_value</td>";
					  }
					  echo '<td>' .
							    '<form action="modifyWorkOrder.php" method="POST">'.
							    	'<input type="hidden" name="workOrderID" value="' . $tuple["orderID"] . '">' .
							    	'<input type="submit" value="Modify">' .
							    '</form></td>' .
							    '<td>' .
							    '<form action="deleteWorkOrder.php" method="POST">'.
							    	'<input type="hidden" name="workOrderID" value="' . $tuple["orderID"] . '">' .
							    	'<input type="submit" value="Delete">' .
							    '</form></td>' .
					  	'</tr>';
					}
				?>
		  </table>
		</div>

	</body>
</html>