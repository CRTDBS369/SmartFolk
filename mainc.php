<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>스마트 지게차 시스템</title>
    <style>

        body{
            background-color: white;
        }
        #regist{
        font-size: 10px;     
        }

        #login{
        font-size: 14px;
        width: 180px;
        height: 40px;
        margin-top: 20px;
        background-color: black;
        color: white;
        }

        section.contenta
        {
            position: relative;
            margin-left: 5%;
            margin-right: 5%;
            width: 90%;
            height: 70%;
            background-color: #EEEFF1;
            border: none;
    
        }

        li{
            border-bottom: 1px solid #dcdcdc;
        }
        h1 {
        height: 60px;text-align: center;color: #fff;
        font-size: 30px;line-height: 1.8;letter-spacing: -2px;
         background: #d71a21; border-radius:  4px ;
         }
         ul.upper {

list-style-type: none;
margin: 0;
padding: 0;
background-color: #f1f1f1;
border-radius: 10px;
}
ul:after{
content:'';
display: block;
clear:both;
}
li{
margin: 1%;
text-align: center;
border: 1px solid black;
border-radius: 30px;
}
li.menua {

float: left;
width: 30%;

}
li.menub {

float: left;
width: 30%;

}
li.menuc {

float: left;
width: 30%;

}
li.menua a{
color: black;
display: block;
text-align: center;
padding: 14px 16px;
text-decoration: none;

}

li.menub a{
color: black;
display: block;
text-align: center;
padding: 14px 16px;
text-decoration: none;
}

li.menuc a{
color: black;
display: block;
text-align: center;
padding: 14px 16px;
text-decoration: none;
}
header{
position: relative;
margin-bottom: 60px;
margin-top: 80px;
margin-left: 20%;
margin-right: 20%;
width : 60%;
}

li a:hover:not(.active) {
background-color: #555;
border-radius: 30px;
color: white;
}
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
#list{
              margin-left: auto;
              margin-right: auto;
              width: 80%;
}
#overview{
    margin-left: auto;
    margin-right: auto;
    width: 80%;
}
#input_id
{
    text-align: center;
    margin-left: auto;
    margin-right: auto;
    font-size:20px;
    font-weight: bold;
}
#textbox{
    height: 30px;
    border-radius: 3px;
    border:3px solid skyblue;
}
#subtophp{
    height: 50px;
    width: 150px;
    font-size: 20px;
    font-family: sans-serif;
    background-color: darkslategrey;
    color:white;
    border-radius: 10px;

}
#slot{
    border:3px solid black;
    border-radius:5px;
}
    </style>
</head>
<body>
<header>
    <div id = "logo">
        <h1>스마트 지게차 시스템</h1>
    </div>
</header>
    <section class='contenta'>
    <ul class="upper">
        <li class="menua"><a href="maina.php">유저확인</a></li>
        <li class="menub"><a href="mainb.php">데이터확인</a></li>
        <li class="menuc"><a href="mainc.php">체크리스트</a></li>
    </ul>
    <span id="input_id">
        <br><br>
    <p id="quest"><h4>찾고자 하는 체크리스트의 사번을 입력하세요</h4></p>
        <form id = "input_slot" method = "POST" action="mainc.php">
            사원번호 : <input id="textbox" type="text" size="30" name="search_uid">
            <br>
            <br>
            <br>
        <input type="submit" id="subtophp" value="재출">
        </form>
    </span>
    <div>

<?php
$db = mysqli_connect("27.96.134.88", "asdf", "q1w2e3r4!", "sensordata");

mysqli_query($db, "SET NAMES utf8");

$check_value = $_POST["search_uid"];

$sql = "select * from checklist where check_uid=$check_value";

$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table id=\"overview\">";
    echo "<tr>";
    $tabling=0;
   while($row = mysqli_fetch_assoc($result)) {
    echo "<td id=\"slot\">";
    echo "<table id=\"list\">";
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
    echo "</table>";
    echo "</td>";
    $tabling=$tabling+1;
    if($tabling==3)
    {
        echo "</tr><br><br><tr>";
        $tabling=0;
    }

}
echo "</table>";
}
else
{
echo "조건에 맞는 사용자가 없습니다.";
}
mysqli_close($db);
?>

</div>
<p id="demo">

</p>
<a href="http://27.96.134.88/login.php">돌아가기</a>
    </section>
    <footer>
<small>
&nbsp;&nbsp;(주)세중아이에스 &nbsp;
&nbsp;&nbsp; &reg; 2021
</small>
</footer>
    <br>
</body>
</html>