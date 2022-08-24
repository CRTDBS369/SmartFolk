<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>데이터 삽입</title>
</head>
<body>
<br>
<?php
$db = mysqli_connect("27.96.134.88", "asdf", "q1w2e3r4!", "sensordata");

$event_uid=$_GET['event_uid'];
$event_type=$_GET['event_type'];
$event_value=$_GET['event_value'];
$event_time=$_GET['event_time'];

$sql = "insert into event values($event_uid, $event_type, $event_value, $event_time)";

mysqli_query($db, $sql);

mysqli_close($db);
?>
</body>
</html>
