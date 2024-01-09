<?php
	
	session_start();

	include("dbcon.php");

	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password))
		{
			$query = "select * from login where username ='$username' limit 1";
			$result = mysqli_query($connection, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
					$user_data = mysqli_fetch_assoc($result);

					if($user_data['password'] == $password)
					{
						header("location: dashboard.php");
						die;
					}
				}
			}
			echo "<script type='text/javascript'>alert('wrong username or password')</script>";
		}
		else
		{
			echo "<script type='text/javascript'>alert('wrong username or password')</script>";
		}
	}


?>


<!DOCTYPE html>
<html  lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Admin Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
	<div class="wrapper">
		
		<form method="POST">

			<img src="logo.jpg" class="img">

			<div class="input-box">
				<input type="text" placeholder="Username" name="username" required>
				<i class='bx bxs-user'></i>
			</div>
			<div class="input-box">
				<input type="password" placeholder="Password" name="password" required>
				<i class='bx bxs-lock-alt' ></i>
			</div>
			<div class="remember-forgot">
				<label><input type="checkbox">Remember Me</label>
				<a href="#">Forgot Password?</a>
			</div>

			<button type="submit" class="btn" style="background-color: white; color: black; width: 100%; padding: 10px; border: none; border-radius: 5px; cursor: pointer; display: block; margin: 0 auto;">Login</button><br><br>

			<p style="color: white;">Haven't have an account? <a href="signup.php" style="color: yellow; text-decoration: underline; transition: color 0.3s;" onmouseover="this.style.color='blue'" onmouseout="this.style.color='yellow'">Click to Sign Up</a></p><br><br>


		</form>

	</div>

</body>
</html>