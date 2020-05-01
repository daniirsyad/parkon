<?php
include_once("db_connect.php");
session_start();
if(isset($_SESSION['user_id'])) {
	header("Location: index.php");
}
$error = false;
if (isset($_POST['signup'])) {
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
		$error = true;
		$uname_error = "Name must contain only alphabets and space";
	}
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$error = true;
		$email_error = "Please Enter Valid Email ID";
	}
	if(strlen($password) < 6) {
		$error = true;
		$password_error = "Password must be minimum of 6 characters";
	}
	if (!$error) {
		if(mysqli_query($conn, "INSERT INTO users(user, email, pass) VALUES('" . $name . "', '" . $email . "', '" . md5($password) . "')")) {
			$success_message = "Successfully Registered! <a href='login.php'>Click here to Login</a>";
		} else {
			$error_message = "Error in registering...Please try again later!";
		}
	}
}
?>
<html>
<head>
	<title>ParkON - Daftar Akun</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"/>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="fontawesome/css/all.css">
	<script src="js/bootstrap.min.js" ></script>
	<script src="js/jquery.slim.min.js"></script>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style>
.divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}
.divider-text span {
    padding: 7px;
    font-size: 12px;
    position: relative;   
    z-index: 2;
}
.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}
:focus::-webkit-input-placeholder {
			opacity: 0;
			-webkit-transition: opacity 0.4s ease-in-out;
			transition: opacity 0.4s ease-in-out;
}

:focus:-moz-placeholder {
			opacity: 0;
			-moz-transition: opacity 0.4s ease-in-out;
			transition: opacity 0.4s ease-in-out;
}

:focus::-moz-placeholder {
			opacity: 0;
			-moz-transition: opacity 0.4s ease-in-out;
			transition: opacity 0.4s ease-in-out;
}

:focus:-ms-input-placeholder {  
			opacity: 0;
			-ms-transition: opacity 0.4s ease-in-out;
			transition: opacity 0.4s ease-in-out;
}
</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="#">
          <img src="css/images/head.png" width="250px;">
        </a>
      	<div class="nav-item">
      		<button class="btn btn-light" onclick="window.location.href = '/index.php';">Home</button>
  		</div>
  </div>
</nav>
	<div class="container pt-4">
		<div class="row justify-content-center">
			<div class="col-12 col-md-8 col-lg-8 col-xl-6">
		<h1 class="card-title mt-3 text-center">Daftar akun</h1>
		<form role="form" class="pt-3" method="post" name="signupform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<div class="form-group input-group">
				<div class="input-group-prepend">
				    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
				 </div>
		        <input name="name" class="form-control" placeholder="Full name" type="text" required>
		    </div> <!-- form-group// -->
		    <div class="form-group input-group">
		    	<div class="input-group-prepend">
				    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
				 </div>
		        <input name="email" class="form-control" placeholder="Email address" type="email" required>
		    </div> <!-- form-group// -->
		    <div class="form-group input-group">
		    	<div class="input-group-prepend">
				    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
				</div>
		        <input name="password" class="form-control" placeholder="Create password" type="password" required>
		    </div> <!-- form-group// -->
				<input name="signup" class="btn btn-primary btn-lg btn-block" type="submit" value="Daftar">
		<span class="text-success"><?php if (isset($success_message)) { header("Location: redirect.php"); } ?></span>
			<span class="text-danger"><?php if (isset($error_message)) { echo $error_message; } ?></span>
				<p class="divider-text">
        <span class="bg-light">OR</span>
    </p>
				
		</form>
		<button class="btn btn-success btn-lg btn-block" onclick="window.location.href = '/login.php';">Masuk</button>
		</div>
		</div>
	</div>
</body>
<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">

  <!-- Footer Elements -->
  <div class="container text-center pt-4 pb-5" style="font-family: sans-serif, roboto;">
	<h3>Quote of The Day</h3>
		<p>
			"Kerja muluk, Liburan kapan? Hidup itu jangan kerja terus, nikmatin hasil yang ada"
		</p>
  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 bg-dark text-white">
		<span>ParkON - © 2019 TeamEliteSVProject</span>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</html>