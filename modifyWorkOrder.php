<html>
	<head>
		<title>Modify Work Order</title>
		<link rel="stylesheet" href="style/style.css">
	</head>

	<body>
		<h1>Update Existing Work Order</h1>
		<h2>Please update Status of the Work Order</h2>
		<form id='workOrderID' action="modifyWorkOrderSubmit.php" method="post">
			<!-- <div>
				<label>Work Order ID:</label>
				<input name="workOrderID" type="number">
			</div> -->

			<div>
				<label>Select New Status</label>
				<select name="newStatus">
					<option value="SUBMITTED">Submitted</option>
					<option value="WAITING">Waiting</option>
					<option value="SCHEDULED">Schedule</option>
					<option value="COMPLETED">Completed</option>
				</select>
			</div>

			<input type="hidden" name="workOrderID" value="<?php printf("%s", $_POST["workOrderID"]);?>">

			<div>
				<input type="submit" value="Submit">
			</div>
		</form>
	</body>
</html>
