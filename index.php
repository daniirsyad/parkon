<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first
session_start();

if ( isset( $_SESSION['user_id'] ) ) {
    // Grab user data from the database using the user_id
    // Let them access the "logged in only" pages

} else {
    // Redirect them to the login page
    header("Location: test.php");
}
?>
<html>
<head>
	<title>ParkON</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"/>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
				<div class="navbar_top">
					
				<a class="navbar_link navbar_link_reg" href="logout.php"><span><?php echo( $_SESSION['user_name']); ?></span> (Keluar)</a>
			</div>
			<div class="top-container">
				<img src="css/images/head.png" class="head-img">
				<a class="here" href="#menu">Here</a>
			</div>
			<div class="menu" id=menu>
				<div class="container">
					<a class="section" href="maps/maps1.html">NGABEAN <span class="bg-white">0/50</span></a>
					<a class="section" href="maps/maps2.html">ABU BAKAR ALI <span class="bg-white">0/50</span></a>
					<a class="section" href="maps/maps3.html">BESKALAN <span class="bg-white">0/50</span></a>
				</div>
				<br>
				<div class="container-bottom">
					<a class="section-bottom" href="/maps.html">MAPS</a>
					<a class="section-bottom" href="/booking.php">BOOKING</a>
				</div>
			</div>
			<div class="footer1"></div>
			<div class="footer2">
				<span>ParkON - © 2019 TeamEliteSVProject</span>
			</div>
			<script src="js/script.js"></script>
</body>
</html>
