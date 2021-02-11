<html>
	<head>
		<title>My First PHP Website</title>
	</head>
	<body>
		<h2>Login Page</h2>
		<a href="index.php">Click here to go back<br/><br/>
		<form action="checklogin.php" method="POST">
			Enter Username: <input type="text" name="username" required="required"></input> <br/>
			Enter Password: <input type="password" name="password" required="required"></input> <br/>
			<input type="submit" value="Login"/>
		</form>
	</body>
</html>
