<html>
	<head>
		<title> CHSB Work Order </title>
	</head>

	<body>
		<h1>Campus Housing Work Order Submission</h1>
		<h2>Please enter your work order information</h2>
		<form id='houseID' action="workOrderSubmit.php" method="post">
			<div> 
				<label>House ID:</label>
				<input name="houseID" type="number">
			</div>

			<div> 
				<label>User ID:</label>
				<input name="userID" type="number">
			</div>

			<div> 
				<label>Type:</label>
				<input name="type" type="radio" value="ELECTRIC" checked> Electric
				<input name="type" type="radio" value="PLUMBING"> Plumbing
				<input name="type" type="radio" value="HVAC"> HVAC
				<input name="type" type="radio" value="APPLIANCE"> Appliance
				<input name="type" type="radio" value="EXTERIOR"> Exterior
				<input name="type" type="radio" value="OTHER"> Other
			</div>

			<div>
				<label>Description:</label>
				<input name="description" type="text">
			</div>

			<div>
				<label>Urgency:</label>
				<input name="urgency" type="radio" value="LOW" checked> Low
				<input name="urgency" type="radio" value="MEDIUM"> Medium
				<input name="urgency" type="radio" value="HIGH"> High
				<input name="urgency" type="radio" value="EMERGENCY"> Emergency
			</div>

			<div>
				<input type="submit" value="Submit">
			</div>
			
		</form>

	</body>

</html>
