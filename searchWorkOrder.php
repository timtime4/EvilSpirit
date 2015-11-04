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
                				<input name="type" type="checkbox" value='Other'> Other
                		</div>

                		<div>
                				<label>Urgency:</label>
                				<input name="type" type="checkbox" value="low"> Low
                				<input name="type" type="checkbox" value="medium"> Medium
                				<input name="type" type="checkbox" value="high"> High
                				<input name="type" type="checkbox" value="emergency"> Emergency
                    </div>
        </body>
</html>