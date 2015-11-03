<html>
	<head>
		<title> CHSB Work Order </title>
	</head>

	<body>
		<h1>Campus Housing Work Order Submission</h1>
		<h2>Please enter your work order information</h2>
		<form id='houseID' action="workorder_submit.php" method="post">
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
				<input name="type" type="radio" value="electric" checked> Electric
				<input name="type" type="radio" value="plumbing"> Plumbing
				<input name="type" type="radio" value="hvac"> HVAC
				<input name="type" type="radio" value="appliance"> Appliance
				<input name="type" type="radio" value="exterior"> Exterior
				<input name="type" type="radio" value="other"> Other
			</div>

			<div>
				<label>Description:</label>
				<input name="description" type="text">
			</div>

			<div>
				<label>Urgency:</label>
				<input name="urgency" type="radio" value="low" checked> Low
				<input name="urgency" type="radio" value="medium"> Medium
				<input name="urgency" type="radio" value="high"> High
				<input name="urgency" type="radio" value="emergency"> Emergency
			</div>

			<div>
				<input type="submit" value="Submit">
			</div>

	</body>

</html>
