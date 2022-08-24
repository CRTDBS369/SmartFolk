<?php
$servername = "smart-car-sensor";
$username = "root";
$password = "q1w2e3r4";
$dbname = "sensordata";
 
$conn = mysqli_connect($servername, $username, $password, $dbname);

$Userid = $_GET['UserID'];
$Username = $_GET['UserName'];
$Auth = $_GET['Auth'];

$sql = "INSERT INTO user values($Userid, $Username, $Auth)"

mysqli_query($conn, $sql);
mysqli_close($conn);
?>