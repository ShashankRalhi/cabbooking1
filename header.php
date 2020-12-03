<!DOCTYPE html>
<html>

<head>
  <title>CedCab</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
   <script src = "http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src = "http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head>

<body>



	<?php 
			if(isset($_SESSION['username'])){
	?>
			<div class="topnav">
				<a href="#" style="float: left;margin-left: 12%; text-transform: uppercase;">
					<?php echo "WELCOME"." ".$_SESSION['username']; ?>
				</a>
    			<!-- <a class="active" href="login.php">Login</a>
    			<a href="registration.php">Registration</a> -->
    			<a class="active" href="logout.php">Logout</a>
  			</div>
	<?php
			}
			else
			{
	?>
			<div class="topnav">
				<a class="logo" href="index.php" style="float: left;text-transform: uppercase;">
					CED-CAB
				</a>
    			
    			<a class="active" href="registration.php">Registration</a>
    			<a class="active" href="login.php">Login</a>
    			<!-- <a id="logout">Logout</a> -->
  			</div>
	<?php 
			}
	?>










