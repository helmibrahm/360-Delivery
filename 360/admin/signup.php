<?php
	
	session_start();

	include("dbcon.php");

	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password))
		{
			$query= "insert into login (username, password) value('$username','$password')";

			mysqli_query($con, $query);

			echo "<script type='text/javascript'>alert('Successfully Register')</script>";
		}
		else
		{
			echo "<script type='text/javascript'>alert('Please enter valid information')</script>";	
		}
	}
?>

<!DOCTYPE html>
<html  lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Sign Up Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
	<div class="wrapper">
		
		<form method="POST">

			
			<img src="img/logo.jpg" class="img">

			<div class="input-box">
				<input type="text" placeholder="Username" name="username" required>
				<i class='bx bxs-user'></i>
			</div>
			<div class="input-box">
				<input type="password" placeholder="Password" name="password" required>
				<i class='bx bxs-lock-alt' ></i>
			</div>
			
			<button type="submit" class="btn" style="background-color: white; color: black; width: 100%; padding: 10px; border: none; border-radius: 5px; cursor: pointer; display: block; margin: 0 auto;">Sign Up</button><br><br>

			<p style="color: white;">Already have an account? <a href="signup.php" style="color: yellow; text-decoration: underline; transition: color 0.3s;" onmouseover="this.style.color='blue'" onmouseout="this.style.color='yellow'">Click to Login</a></p><br><br>
			

		</form>


	</div>

</body>
</html>