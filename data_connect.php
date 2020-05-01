<?php
/* Database connection start */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "datalokasi";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>