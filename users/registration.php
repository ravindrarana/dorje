<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
	<?php
		require('config.php');

		if(isset($_REQUEST['username']))
		{
			$username = stripslashes($_REQUEST['username']);

			$username = mysqli_real_escape_string($conn,$username);

			$email = stripslashes($_REQUEST['email']);
			$email = mysqli_real_escape_string($conn,$email);

			$password = stripslashes($_REQUEST['password']);
			$password = mysqli_real_escape_string($conn,$password);

			$created = date("Y-m-d H:i:s");

			// validation for registration

			$sql_user = "SELECT *FROM users WHERE username='$username'";
			$sql_email = "SELECT *FROM users WHERE email='$email'";

			$res_user = mysqli_query($conn, $sql_user);
			$res_email = mysqli_query($conn, $sql_email);
			if(mysqli_num_rows($res_user) > 0)
			{
				$name_error = "username already taken";

				// echo"<h1>";
				// echo($name_error);
				// echo"</h1>";
				// var_dump($name_error);
			}
			else if (mysqli_num_rows($res_email) > 0) 
			{
				$email_error = "email already exist";
			}
			else
			{
				$query = "INSERT into `users` (username, password, email, created) VALUES ('$username', '$password', '$email', '$created')";

			$result = mysqli_query($conn,$query);

			}


			

			if($result)
			{
				// echo "<div class='form'>
				// 	  <h3>You are registered</h3>
				// 	  <a href='login.php'>Login</a></div>";

				header("Location: ../index.php");
			}
		}

		else{

	?>

<?php } ?>


	<div class="container">
		<div class="row">
			<div class="col-md-12 project-brand">
				<h1>SmartHome</h1>
				<p>Home Automation Project</p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-8 registration-form">
				<h2>Account Registration</h2>
				<form name="registration" action="" method="post">
					<div class="form-group ">
						<label>Username</label><input type="text" name="username" placeholder="Username" class="form-control" required="" value="<?php  echo($username); ?>">
						<div class="warnning">
							<span><?php echo $name_error; ?></span>
						</div>
					</div>

					<div class="form-group">
						<label>Email Address</label><input type="email" name="email" placeholder="Email" class="form-control" required="" value="<?php echo($email); ?>">
						<div class="warnning">
							<span><?php echo $email_error; ?></span>
						</div>
					</div>
					
					<div class="form-group">
						<label>Password</label><input type="password" name="password" placeholder="Password" class="form-control" required="" value="<?php echo($password); ?>">
					</div>

					<div>
						<input type="submit" name="submit" value="Register" class="btn btn-success">
					</div>
				</form>
			</div>
		</div>
	</div>


</body>
</html>