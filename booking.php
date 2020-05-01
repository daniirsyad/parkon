<?php
session_start();
include_once("db_connect.php");
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
            <script type="text/javascript">
/* <![CDATA[ */
function sub() {
window.location.href = site;
}
function goTo(URL) {
site = URL;
}   
/* ]]> */
</script>  
    <style>
    .radio-toolbar {
  margin: 10px;
}

.radio-toolbar input[type="radio"] {
  opacity: 0;
  position: fixed;
  width: 0;
}

.radio-toolbar label {
    width: 100%;
    margin-bottom: 10px;
    display: inline-block;
    background-color: white;
    padding: 10px 20px;
    font-family: sans-serif, Arial;
    font-size: 16px;
    color: #2f3640;
    cursor: pointer;
    border: 2px solid #2f3640;
    border-radius: 4px;
    transition-duration: .4s;
}

.radio-toolbar label:hover {
  background-color: #2f3640;
  color: white;
  border-radius: 0; 
}

.radio-toolbar input[type="radio"]:checked + label {
            background-color: #2f3640;
            color: white;
            border-color: #2f3640;
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
<div class="container pt-4" style="height: 500px">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-8 col-xl-6">
        <h1 class="card-title mt-3 text-center">LOKASI BOOKING</h1>

        <form name="booking" method="post">
            <div class="radio-toolbar">
            <input type="radio" name="site" id="Ngabean" value="ngabean" onchange="if(this.checked){goTo('ngabean.php')}"><label for="Ngabean">Ngabean</label><br>
            <input type="radio" name="site" id="AbuBakarAli" value="abubakar" onchange="if(this.checked){goTo('abubakar.php')}"><label for="AbuBakarAli">Abu Bakar Ali</label><br>
            <input type="radio" name="site" id="Beskalan" value="beskalan" onchange="if(this.checked){goTo('beskalan.php')}"><label for="Beskalan">Beskalan</label><br>
            <input  class="btn btn-primary btn-lg btn-block" type="button" name="submit" value="Submit" onclick="sub()">
        </div>
        </form>
    </div>
</div>
</div>
    <!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">

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