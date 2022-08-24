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

        section.contenta
        {
            position: relative;
            margin-left: 5%;
            margin-right: 5%;
            width: 90%;
            height: 70%;
            background-color: #EEEFF1;
            border: none;
            border-radius: 10px;
    
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
#user_date{
    font-size:20px;
    font-weight: bold;
    text-align: center;
}
#time{
    text-align: center;
    margin-top: 10%;
    margin-left: 5%;
    margin-right: 5%;
}
#dateinfo{
    color:white;
    font: 12px;
    background-color: rgba(56, 186, 247, 0.815);
    width: 150px;
    height: 40px;
    border-radius: 5px;
    border:none;
}

#overview{

    margin-left: auto;
    margin-right: auto;
    width: 80%;
}
#eventtable
{
    margin-left: auto;
    margin-right: auto;
    border: 3px solid black;
    border-radius: 4px;
    width:50%;
}
#table_section
{
    margin-left: auto;
    margin-right: auto;
    text-align: center;
}
#row{
    background-color: blue;
    width: 80%;
}
#col{
    background-color: red;
    width: 20%;
}
#attribute{
    background-color: rgb(187, 220, 243);
    border-radius: 5px;
}
#val{
    font-family: Arial, Helvetica, sans-serif ;
    border-bottom:1px solid black;
    background-color:white;
}
#val:nth-child(4n-4){
   background-color: rgb(250,250,250);
}
#val:nth-child(4n-3){
    background-color: rgb(255, 241, 181);

}
#val:nth-child(4n-2){
    background-color: rgb(250,250,250);
}
#val:nth-child(4n-1){
    background-color: rgb(250,250,250);
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
    <span id="time">
        <h4>확인하려는 사건의 날짜를 입력하세요</h4>
<form id="user_date" method="POST" action="mainb.php">
    From : <input type ="date" id = "From" name ="from" min ="2021-04-23" max ="2021-04-26">
        <br>
    To : <input type ="date" id = "To" name ="to" min ="2021-04-23" max ="2022-05-20">
        </span>
        <br><br>
        <input type ="submit" value = "완료" id="dateinfo">
    </form>
    </span>
<span id="table_section">
    <?php

    echo "<br>";

    $db = mysqli_connect("27.96.134.88", "asdf", "q1w2e3r4!", "sensordata");
      
    mysqli_query($conn, "set names utf8"); 
 
    $from = $_POST[from];
    $to = $_POST[to];
    echo "<h4>기록된 리스트는".$from." 부터 ".$to." 전까지 기록입니다 </h4>";
    $sql = "select event_uid, event_type, event_value, event_time from event";

    $result = mysqli_query($db, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<br>";
        $tabling=0;
        $line=0;
    echo("<table id=\"eventtable\">");
    echo "<tr><th id =\"attribute\">사원 정보</th><th id =\"attribute\">사건정보</th>
    <th id =\"attribute\">사건 값</th><th id =\"attribute\">사건 시간</th></tr>";

        while($row = mysqli_fetch_assoc($result)) {
            $testing = $row["event_time"];
            if($from<=$testing&&$to>=$testing)
            {
                echo  "<tr><td id=\"val\">".$row["event_uid"]. "</td><td id=\"val\">" . $row["event_type"]. 
                "</td><td id=\"val\">" . $row["event_value"]."</td><td id=\"val\">". $row["event_time"]."</td></tr>";
                $tabling=$tabling+1;
            }

        }
        echo("</table>");
        }else{
        echo "등록된 사용자가 없습니다.";
        }
        mysqli_close($db);
    ?>
</span>
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