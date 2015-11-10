<html>
	<head>
		<title>Create New User</title>
		<link rel="stylesheet" href="style/style.css">
	</head>
	<body>
		<h1>Create a New User</h1>
		<form name="newUser" action="checkCreateUser.php" method="POST">
			<div>
				<label>First Name:</label>
				<input type="text" name="firstName">
			</div>
			<div>
				<label>Last Name:</label>
				<input type="text" name="lastName">
			</div>
			<div>
				<label>Userame:</label>
				<input type="text" name="username">
			</div>
			<div>
				<label>Password:</label>
				<input type="text" name="password">
			</div>
			<div>
				<label>Confirm Password:</label>
				<input type="text" name="password2">
			</div>
			<div>
				<label>Email:</label>
				<input type="text" name="email">
			</div>
			<div>
				<label>Phone:</label>
				<input type="text" name="phone">
			</div>
			<div>
				<input type="submit" value="Create User" name="submit">
			</div>
		</form>
	</body>
</html>

