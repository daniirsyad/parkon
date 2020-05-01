
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
<div class="container pt-4" style="height: 550px;">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-8 col-xl-6">
        <h1 class="card-title mt-3 text-center">STRUK BOOKING</h1>
			<div>
				<table align="center" style="width: 100%; margin-top: 50px;">
					<tr>
						<td>
							<b>Nama</b>
						</td>
						<td>
							:
						</td>
						<td>
							<?php echo( $_SESSION['user_name']); ?>
						</td>
					</tr>
					<tr>
						<td>
							<b>Nomor Parkir</b>
						</td>
						<td>
							:
						</td>
						<td>
							00-000-00
						</td>
					</tr>
					<tr>
						<td>
							<b>Location</b>
						</td>
						<td>
							:
						</td>
						<td>
							Beskalan or <a href="maps/maps3.html">Disini</a>
						</td>
					</tr>
					<tr>
						<td>
							<b>Barcode</b>
						</td>
						<td>
							:
						</td>
						<td>
							
						</td>
					</tr>
					<tr><td>
						
						</td>
						<td>
							
						</td>
						<td>
							<img src="css/images/barcode.png" style="width: 150px;">
						</td>
					</tr>
				</table>
				<span style="color: red;">*Screenshot atau simpan halaman ini untuk bukti bahwa anda telah melakukan booking</span>
			</div>
		</div>
	</div>
		</div>
	<!-- Footer -->
<footer class="page-footer font-small special-color-dark">

  <!-- Footer Elements -->
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 bg-dark text-white">
		<span>ParkON -© 2019 TeamEliteSVProject</span>
  </div>
  <!-- Copyright -->

</footer>
</body>
</html>