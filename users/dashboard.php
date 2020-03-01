<?php
	 include('auth.php');
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dorje | Dashboard</title>   
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
		<link rel="stylesheet" href="../assets/css/font-awesome-4.7.0/css/font-awesome.min.css">		    
		<link rel="stylesheet" type="text/css" href="../assets/css/style.css">		    
</head>
<body>
	<nav class="navbar navbar-light bg-dark">  
    	<h5 class="brand">Dorje</h5>
    	<div class="logout">
    		<h4>Namaste, <?php echo $_SESSION['username']; ?></h4>
    		<a href="logout.php">Logout</a>
		</div>
	</nav>
	<div class="container-fluid">
		<!-- bedroom section -->
		<div class="row">
			<div class="col-md-4 dorje">
					<h1>BEDROOM</h1>
					<div class="alert alert-primary" role="alert">
						<h3 class="fanStatus"></h3>						
					</div>
					<button class="btn btn-success btn-lg fanButton" type="button">ON | OFF</button>	

					<div class="alert alert-primary" role="alert">
						<h3 class="tvStatus"></h3>						
					</div>
					<button class="btn btn-success btn-lg tvButton" type="button">ON | OFF</button>

					<div class="alert alert-primary" role="alert">
						<h3 class="lightStatus"></h3>						
					</div>
					<button class="btn btn-success btn-lg buttonStatus" type="button">ON | OFF</button>
				
			</div>
			<!-- kitchen -->
			<div class="col-md-4 dorje">
				<h1>KITCHEN</h1>
				<div class="alert alert-secondary">
					<h3 class="fanStatus"></h3>
				</div>
				<button class="btn btn-success btn-lg fanButton" type="button">ON | OFF</button>	
				
				<div class="alert alert-secondary">
					<h3 class="tvStatus"></h3>
				</div>
				<button class="btn btn-success  btn-lg tvButton" type="button">ON | OFF</button>

				<div class="alert alert-secondary">
					<h3 class="lightStatus"></h3>
				</div>
				<button class="btn btn-success btn-lg buttonStatus" type="button">ON | OFF</button>

			</div>
			<!-- garage -->
			<div class="col-md-4 dorje">
				<h1>GARAGE</h1>
				<div class="alert alert-success">
					<h3 class="fanStatus"></h3>
				</div>
				<button class="btn btn-success btn-lg fanButton" type="button">ON | OFF</button>	

				<div class="alert alert-success">
					<h3 class="tvStatus"></h3>
				</div>
				<button class="btn btn-success btn-lg tvButton" type="button">ON | OFF</button>

				<div class="alert alert-success">
					<h3 class="lightStatus"></h3>
				</div>	
				<button class="btn btn-success btn-lg buttonStatus" type="button">ON | OFF</button>

			</div>

		</div>
	</div>
	<script type="text/javascript" src="../assets/js/jquery-3.3.1.js"></script>
	<script src="https://www.gstatic.com/firebasejs/5.8.2/firebase.js"></script>
	<script type="text/javascript" src="../assets/js/script.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>