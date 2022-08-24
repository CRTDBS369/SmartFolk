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

#demo{
    margin-left:auto;
    margin-right:auto;
}
#user_tabel
{
    border-top: 1px solid rgb(39, 39, 39);
    border-bottom: 1px solid rgb(39, 39, 39);
    width:60%;
    text-align: center;
    margin-left:auto;
    margin-right:auto;
    border-spacing: 1px;
}
#tuple{
    font-weight: bold;
    border-bottom: 3px solid #036;
    padding: 10px;
    background-color: white;
    border:3px solid black;
    border-radius: 30px;
}
#values{
    border-bottom: 1px solid #ccc;
}
#values:nth-child(2n+1){
    background-color: rgb(255, 246, 205);
}
#values:nth-child(2n){
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
</form></span>
<p class="demo">
<?php

$db = mysqli_connect("27.96.134.88", "asdf", "q1w2e3r4!", "sensordata");

mysqli_query($db, "set names utf8");

$sql = "select user_id, user_name, user_auth from user";

$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
        echo"<table id=\"user_tabel\">";
        echo"<tr id=\"tuple\"><th>사원번호</th><th>이름</th><th>권한</th>";
   while($row = mysqli_fetch_assoc($result)) {
   echo "<tr id=\"values\"><td>" . $row["user_id"]. "</td><td>" . $row["user_name"]. "</td>";
   if($row["user_auth"]==1)
   { 
    echo "<td>관리자</td></tr>";
   }
   else
   {
    echo "<td>사용자</td></tr>";
   }
   }
   echo("</table>");
   }
   else{
   echo "등록된 사용자가 없습니다.";
   }
   mysqli_close($db);   
?>
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