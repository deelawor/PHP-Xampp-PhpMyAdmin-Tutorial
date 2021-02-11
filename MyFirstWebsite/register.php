<html>
	<head>
		<title>My First PHP Website</title>
	</head>
	<body>
		<h2>Registration Page</h2>
		<a href="index.php"> Click here to go back </a> <br/><br/>
		<form action="register.php" method="POST">
			Enter Username: <input type="text" name="username" required="required"/> <br/>
			Enter Password: <input type="password" name="password" required="required"/> <br/>
			<input type="submit" value="Registration"/>
		</form>
	</body>
</html>

<?php
	
	if($_SERVER["REQUEST_METHOD"]== "POST"){
		$connection= mysqli_connect("localhost", "root", "", "first_db");
		$username = mysqli_real_escape_string($connection, $_POST['username']);
		$password = mysqli_real_escape_string($connection, $_POST['password']);
		
		echo "Username entered is: ". $username. "<br/>";
		echo "Password entered is: ". $password;
		
		$bool = true;
		
		/*mysqli_connect("localhost", "root","", "first_db") or die(mysqli_error());*/
		$query = mysqli_query("Select * from users");
		while($row = mysqli_fetch_array($query))
		{
			$table_users == $row['username'];
			
			if($username == $table_users)
			{
				$bool = false;
				print '<script>alert("Username has been taken!")</script>';
			}
		}
		
		if($bool)
		{
			mysqli_query("INSERT INTO users ('username', 'password') VALUES ('$username', '$password')");
			print '<script>alert("Successfully Registered!")</script>';
			print '<script>window.location.assign("register.php")</script>';
		}
		
	}
?>