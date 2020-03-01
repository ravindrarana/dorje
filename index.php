
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">


</head>
<body>
	<?php

	require('users/config.php');


	session_start();

	// Check if User is logedin then redirect to index page

	if(isset($_SESSION["username"]))
	{
		header("Location: users/dashboard.php");
		exit();
	}



	if(isset($_POST['username']))
	{
		$username = stripslashes($_REQUEST['username']);

		$username = mysqli_real_escape_string($conn, $username);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($conn,$password);

		$query = "SELECT *FROM `users` WHERE username='$username' AND password='$password'";



		$result = mysqli_query($conn,$query);



		$rows = mysqli_num_rows($result);

		if($rows==1)
		{
			$_SESSION['username'] = $username;
			header("Location: users/dashboard.php");
		}
		else
		{
			// header("Location: index.php");
		}

	}

	else{


	

	
?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 project-brand">
				<h1>Dorje</h1>
				<div>
					<img src="assets/images/lock.png" height="150px" width="150px">
				</div>
				<p>Home Automation Project</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 login-form">
				<h2>System Login</h2>
				<form action="" method="POST">
					<div class="form-group">
						<input type="text" name="username" placeholder="Username"  class="form-control" required="">
					</div>
					<div class="form-group">
						<input type="password" name="password" placeholder="password" class="form-control" required="">
					</div>
					<div class="form-group">
						<input type="submit" name="submit" value="Login" class="btn btn-success">
						<p>Account Registration <a href="users/registration.php">Click Here</a></p>
					</div>
				</form>
			</div>
		</div>
	</div>

<?php } ?>
</body>
</html>