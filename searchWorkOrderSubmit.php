<html>
	<head>
		<title>Work Order Search Results</title>
	</head>
	<body>
		<?php
			session_start();

			$link = mysqli_connect('localhost', 'tpusater', 'evilspirit');
			
			if(!$link){
				die('Could not connect: ' . mysql_error());
			}

			mysqli_select_db($link, 'tpusater') or die('Could not select database');

			$workOrderQuery = "SELECT * FROM WorkOrder WHERE 1 = 1 ";

			$criteria = 0;

			printf("%s , %s, %s\n", $_POST["houseID"], $_POST["type"], $_POST["urgency"]);

			if ( $_POST["houseID"] != "" ){
				$workOrderQuery .= " AND houseID = " . $_POST["houseID"];
			} elseif ( isset($_POST["type"]) ){
				$workOrderQuery .= " AND workOrderType = '" . $_POST["type"] . "'";
			} elseif ( isset($_POST["urgency"]) ){
				$workOrderQuery .= " AND urgency = '" . $_POST["urgency"] . "'";
			}

			echo $workOrderQuery;

			$workOrderQueryResult = mysqli_query($link, $workOrderQuery) 
				or die('Query failed: ' . mysql_error());

			// Printing results in HTML
			echo "<table>\n";
			while ($tuple = mysqli_fetch_array($workOrderQueryResult, MYSQL_ASSOC)) {
			  echo "\t<tr>\n";
			  foreach ($tuple as $col_value) {
			    echo "\t\t<td>$col_value</td>\n";
			  }
			  echo "\t</tr>\n";
			}
			echo "</table>\n";
		?>
	</body>
</html>