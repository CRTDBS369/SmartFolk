<?php

$db = mysqli_connect("27.96.134.88", "asdf", "q1w2e3r4!", "sensordata");

$check_uid = $_GET['check_uid'];
$check0 = $_GET['check0'];
$check1 = $_GET['check1'];
$check2 = $_GET['check2'];
$check3 = $_GET['check3'];
$check4 = $_GET['check4'];
$check5 = $_GET['check5'];
$check6 = $_GET['check6'];
$check7 = $_GET['check7'];
$check8 = $_GET['check8'];
$check9 = $_GET['check9'];
$check10 = $_GET['check10'];
$check11 = $_GET['check11'];
$check12 = $_GET['check12'];
$check13 = $_GET['check13'];
$check14 = $_GET['check14'];
$time = $_GET['check_time'];

$sql = "INSERT INTO checklist values($check_uid,$check0,$check1,$check2,$check3,$check4,$check5,$check6,$check7,$check8,$check9,$check10,$check11,$check12,$check13,$check14,$time)";

mysqli_query($db, $sql);
echo "done<br>";
mysqli_close($db);
?>
