<html>
        <head>
                <title> Search Work Orders </title>
        </head>

        <body>
                <h1>Campus Housing Work Order Search</h1>
                <h2>Please enter your search criteria</h2>
                <form id='search' action="searchWorkOrderSubmit.php" method="post">
                		<div>
                				<label>House ID:</label>
                				<input name="houseID" type="number">
                		</div>

                		<div>
                				<label>Type:</label>
                				<input name="type" type="checkbox" value="ELECTRIC"> Electric
                				<input name="type" type="checkbox" value="PLUMBING"> Plumbing
                				<input name="type" type="checkbox" value="HVAC"> HVAC
                				<input name="type" type="checkbox" value="APPLIANCE"> Appliance
                				<input name="type" type="checkbox" value="EXTERIOR"> Exterior
                				<input name="type" type="checkbox" value='OTHER'> Other
                		</div>

                		<div>
                				<label>Urgency:</label>
                				<input name="urgency" type="checkbox" value="LOW"> Low
                				<input name="urgency" type="checkbox" value="MEDIUM"> Medium
                				<input name="urgency" type="checkbox" value="HIGH"> High
                				<input name="urgency" type="checkbox" value="EMERGENCY"> Emergency
                    </div>
                    <input type="submit" value="Search">
                </form>
        </body>
</html>