<?php
session_start();
include_once("db_connect.php");
if(isset($_SESSION['user_id'])!="") {
	header("Location: index.php");
}
if (isset($_POST['login'])) {
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$result = mysqli_query($conn, "SELECT * FROM users WHERE email = '" . $email. "' and pass = '" . md5($password). "'");
	if ($row = mysqli_fetch_array($result)) {
		$_SESSION['user_id'] = $row['uid'];
		$_SESSION['user_name'] = $row['user'];
		$_SESSION['e_mail'] = $row['email'];
		header("Location: index.php");
	} else {
		$error_message = "Email atau Password Salah!";
	}
}
?>
<html>
<head>
	<title>ParkON - Silahkan Masuk ke Akun anda terlebih dahulu</title>
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
<div class="container pt-5 pb-5">
	<div class="row">
		<div class="col-12 col-md-12 col-lg-4 col-xl-4">
			<div class="container pt-4">
				<h1 class="card-title mt-3 text-center">Login</h1>
				<form role="form" class="pt-3" method="post" name="loginform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
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
				        <input name="password" class="form-control" placeholder="Password" type="password" required>
				    </div> <!-- form-group// -->
				    <span class="text-danger"><?php if (isset($error_message)) { echo $error_message; } ?></span>
						<input name="login" class="btn btn-success btn-lg btn-block" type="submit" value="Login">
						<p class="divider-text">
		        			<span class="bg-light">OR</span>
		   				 </p>
						
				</form>
				<button class="btn btn-primary btn-lg btn-block" onclick="window.location.href = '/signup.php';">Daftar</button>
		</div>
	</div>
	<div class="col" style="font-family: sans-serif, roboto; height: 200px;">
		<h3 class="text-center pt-5">Quotes of The Day</h3>
		<div class="container">
    <div id="carouselContent" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active text-center p-4">
                 <p>"Kehidupan akan lebih baik apabila semua dilakukan dengan rapi, tetapi namanya juga manusia yang akan selalu dan selalu berbuat salah"<br>~Daanii~</p>
            </div>
            <div class="carousel-item text-center p-4">
                
                <p">"Memaafkan membuat anda menjadi pribadi yang semakin kuat"</p>
            </div>
            <div class="carousel-item text-center p-4">
                
                <p>"Tak ada seorangpun yang dapat merubah orang lain, Tapi seseorang dapat menjadi alasan orang lain untuk berubah" <br> ~Spongebob~</p>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
	<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">

  <!-- Footer Elements -->
<div class="container text-center pt-4 pb-5">
	
  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 bg-dark text-white">
		<span>ParkON - © 2019 TeamEliteSVProject</span>
  </div>
  <!-- Copyright -->

</footer>
</body>
</html>