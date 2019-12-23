<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="new.css">
</head>
<body>

	<div class="container">
		<div class="header">
			<div class="logo">
				<img src="image/logo.png" style="width: 50%; height: 50%;">
			</div>
			<div class="menu">
				<ul style="display: flex;">
					<li style="font-weight:bold;"><a href="">Home</a></li>
					<li style="font-weight:bold;"><a href="aboutus.html">About</a></li>
					<?php
					if(!isset($_SESSION['username'])){
						echo "<li style='font-weight:bold;'><a href='login.php'>Login</a></li>
							 <li style='font-weight:bold;'><a href='register.php'>Register</a></li>";
					}
					else{
						echo '<li style="font-weight:bold;"><a href="productlist.html">Catalogue</a></li>
						<div style = "display:flex;"><p style="font-weight:bold;">Welcome</p><form action="logout.php" style="margin-left:10px;">
						<input type="submit" value="Logout" style="border:none; background-color:white;font-size:14px;font-weight:bold;margin-top:-2px;cursor: pointer;"></input>
						</form></div>';
					}
					?>
				</ul>
			</div>
		</div>
	</div>
	

	<div class="slider" style="background-image: url('image/mercedes.jpg');background-size: cover;">
		<div class="slider-text">
			<h1>Latest Cars<br>Collection</h1>
			<p>Cars that you want you can by from our site</p>
			<a href="productlist.html">Explore</a>
		</div>
	</div>
	<?php
	if(isset($_SESSION['username'])){
		include('cars.php');
	}
	else{
	}
	?>


	<div class="footer">
		<div class="container">
			<div class="footer-menu">
				<ul>
					<li><a href="aboutus.html">about us</a></li>
					<li><a href="">faq</a></li>
					<li><a href="">contact us</a></li>
					<li><a href="">privacy policy</a></li>
					<li><a href="">terms of service</a></li>
				</ul>
			</div>
			<p class="copyright">Copyright 2019 Car Dealer. All Rights Reserved.</p>
		</div>
	</div>
</body>
</html>
