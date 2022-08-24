<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>등록된 사용자</title>
  <style>
          #attribute{
              background-color: rgb(187, 220, 243);
              border-radius: 5px;
          }
          #tuple{
              background-color: rgb(223, 243, 230);
              border-radius: 5px;
          }
          #val{
            background-color: rgb(251, 241, 231);
              border-radius: 5px;
          }
          #list
          {
              margin-left: auto;
              margin-right: auto;
              width: 20%;
          }
      </style>
</head>
<body>
<a href="http://27.96.134.88/main.php">
주 화면으로 돌아가기
</a>
<br>
<?php
$db = mysqli_connect("27.96.134.88", "asdf", "q1w2e3r4!", "sensordata");

mysqli_query($db, "SET NAMES utf8");

$sql = "select * from checklist";

$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
   while($row = mysqli_fetch_assoc($result)) {
    echo("<table id=\"list\">");
    echo "<tr><th id=\"attribute\">아이디 </th><td id=\"val\">" . $row["check_uid"]. "</td></tr>";
    echo "<tr><th id=\"attribute\">작성날짜 </th><td id=\"val\">" . $row["check_time"]. "</td></tr>";
    $i=0;
    while($i<15)
    {
        $clist="check".$i;
        switch($i){
            case 0:
                echo "<tr><th id=\"tuple\">외관</th>";
                break;
            case 1:
                echo "<tr><th id=\"tuple\">타이어</th>";
                break;
            case 2:
                echo "<tr><th id=\"tuple\">배터리</th>";
                break;
            case 3:
                echo "<tr><th id=\"tuple\">헤드 가드</th>";
                break;
            case 4:
                echo "<tr><th id=\"tuple\">작동유</th>";
                break;
            case 5:
                echo "<tr><th id=\"tuple\">라디에이터</th>";
                break;
            case 6:
                echo "<tr><th id=\"tuple\">방향지시기 및 각 램프</th>";
                break;
            case 7:
                echo "<tr><th id=\"tuple\">후사경</th>";
                break;
            case 8:
                echo "<tr><th id=\"tuple\">경보장치</th>";
                break;
            case 9:
                echo "<tr><th id=\"tuple\">각 계기류</th>";
                break;
            case 10:
                echo "<tr><th id=\"tuple\">엔진</th>";
                break;
            case 11:
                echo "<tr><th id=\"tuple\">클러치</th>";
                break;
            case 12:
                echo "<tr><th id=\"tuple\">발 브레이크</th>";
                break;
            case 13:
                echo "<tr><th id=\"tuple\">주차 브레이크</th>";
                break;
            case 14:
                echo "<tr><th id=\"tuple\">핸들</th>";
                break;
            default:
                echo "<tr><th id=\"tuple\">기타등등</th>";
                break;
        }
    if($row[$clist]==1)
    {
        echo "<td id=\"val\">yes</td>";
    }
    else
    {
        echo "<td id=\"val\">no</td>";
    }
    $i=$i+1;
    echo "</tr>";
    }
    echo("</table>");
    echo "<br>";
}
}
else
{
echo "등록된 사용자가 없습니다.";
}
mysqli_close($db);
?>
</body>
</html>
