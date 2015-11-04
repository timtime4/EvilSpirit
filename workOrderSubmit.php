
<?php
	session_start();

	$link = mysqli_connect('localhost', 'tpusater', 'evilspirit');
	
	if(!$link){
		die('Could not connect: ' . mysql_error());
	}

	mysqli_select_db($link, 'tpusater') or die('Could not select database');

	$leaseQuery = "SELECT houseID FROM Lease WHERE userID = '" . $_SESSION["userID"] . "'";
	$leaseQueryResult = mysqli_query($link, $leaseQuery) 
		or die('Query failed: ' . mysql_error());

	$leaseQueryArray = mysqli_fetch_array($leaseQueryResult, MYSQLI_BOTH);

	$houseID = $leaseQueryArray["houseID"];

	$workOrder = "(" . $houseID . "," . $_SESSION["userID"] . ",'" .
		date('Y-m-d H:i:s') . "','SUBMITTED','" . $_POST["type"] . "','" . 
		$_POST["description"] . "','" . $_POST["urgency"] . "')"; 

	echo $workOrder;

	$workOrderSumbit = "INSERT INTO WorkOrder " .
		"(houseID, userID, created, status, workOrderType, description, urgency)" .
		" VALUES " . $workOrder; 

	$workOrderSumbitResult = mysqli_query($link, $workOrderSumbit) 
		or die('Insert Query failed: ' . mysql_error());

	echo "\nWork order sumbitted successfully!";

?>
