<html>
	<head>
		<title>Work Order Search Results</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	</head>
	<body>
		<script type="text/javascript">

	    function confirmDelete(orderID) {
	    		var message = 'Are you sure you want to delete work order ';
	    		message = message + orderID.toString();

	        if (confirm(message)) {
	            //Make ajax call
	            $.ajax({
	                url: "./deleteWorkOrder.php",
	                type: "POST",
	                data: {workOrderID : orderID},
	                dataType: "html", 
	                success: function() {
	                    alert("It was succesfully deleted!");
	                }
	            });

	        }
	    }
		</script>

		<h1> Search Results </h1>

		<div>
			<?php
				session_start();

				$link = mysqli_connect('localhost', 'tpusater', 'evilspirit');
				
				if(!$link){
					die('Could not connect: ' . mysql_error());
				}

				mysqli_select_db($link, 'tpusater') or die('Could not select database');

				// Dynamically (kinda) build the query

				$workOrderQuery = "SELECT * FROM WorkOrder WHERE 1 = 1 ";

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
				echo "<table>\n";
				while ($tuple = mysqli_fetch_array($workOrderQueryResult, MYSQL_ASSOC)) {
				  echo "\t<tr>\n";
				  foreach ($tuple as $col_value) {
				    echo "\t\t<td>$col_value</td>\n";
				  }
				  echo '<td><a href="#">Modify</a></td>' .
				  	'<td><a href="deleteWorkOrder.php?workOrderID='. $tuple["orderID"] . '">Delete</a></td>' .
				  	'</tr>';
				}
				echo "</table>\n";
			?>
		</div>

	</body>
</html>