
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bed room</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/custom.css"> 
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">

    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.5.0/css/bootstrap4-toggle.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../assets/css/font-awesome-4.7.0/css/font-awesome.min.css">

   
</head>
<body>
  
	<div class="container-fluid">
			
			<div class="row">
				<div class="col-lg-12 col-md-6 co-sm-6 ">
					<img class="img-responsive photo" src="../assets/images/gr1.jpg">
				</div>
			</div>
		<div class="row">
			<div class="col-md-4 ">
				<div class="abc">
						<img class="rounded-circle" id="myImage1" src="../assets/images/fan.jpeg">
						<h3 class="fanStatus"></h3>

					<div class="row">
						<div class="col-md-6">
							<button class="btn btn-success btn1 fanButton" type="button">Click Me</button>
						</div>
						<!-- <div class="col-md-6">
							<button class="btn btn-success btn1" onclick="document.getElementById('myImage1').src='../assets/images/fan.jpeg'">OFF</button>
						</div> -->
					</div>
				</div>
			</div>
			<div class="col-md-4 ">
				<div class="abc">
						<img class="img-thumbnail" id="myImage2" src="../assets/images/ledtvoff.jpeg">
						<h2 class="tvStatus"></h2>
					<div class="row">
						<div class="col-md-6">
							<button class="btn btn-success btn1 tvButton" type="button">Click Me</button>
						</div>
						<!-- <div class="col-md-6">
							<button class="btn btn-success btn1" onclick="document.getElementById('myImage2').src='../assets/images/ledtvoff.jpeg'">OFF</button>
						</div>
						 -->
					</div>
				</div>
				
			</div>
			<div class="col-md-4 ">
				<div class="abc">
					<img class="img-thumbnail" id="myImage3" src="../assets/images/bulboff1.jpeg">
				<h3 class="lightStatus"></h3>

				<div class="row">
					<div class="col-md-12">
						<button class="btn btn-success btn1 buttonStatus" type="button" >Click Me</button>
					</div>
					<!-- <div class="col-md-6">
						<button class="btn btn-success btn1" onclick="document.getElementById('myImage3').src='../assets/images/bulboff1.jpeg'">OFF</button>
					</div>	 -->
				</div>
				</div>
			</div>
		</div><hr>
		
		
		
	</div>
	


<script type="text/javascript" src="../assets/js/jquery-3.3.1.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>


	<script src="https://www.gstatic.com/firebasejs/5.8.2/firebase.js"></script>
	<script type="text/javascript" src="../assets/js/script.js"></script>

	 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.5.0/js/bootstrap4-toggle.min.js"></script> -->
</body>
</html>