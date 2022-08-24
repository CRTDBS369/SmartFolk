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
            height: 700px;
            background-color: #EEEFF1;
            border: none;
    
        }

        li{
            border-bottom: 1px solid #dcdcdc;
        }
        h1 {
        height: 40px;text-align: center;color: #fff;
        font-size: 20px;line-height: 1.8;letter-spacing: -2px;
         background: #d71a21;}
         
    ul.upper {

    list-style-type: none;
    margin: 0;
    padding: 0;
    background-color: #f1f1f1;
}
    ul:after{
    content:'';
    display: block;
    clear:both;
}
li{
    text-align: center;
    border-bottom: 1px solid #dcdcdc;
    }
li.menua {

float: left;
width: 34%;

}
li.menub {

    float: left;
    width: 33%;
 
}
li.menuc {

    float: left;
    width: 33%;
  
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
    color: white;
}
#demo{
    position: relative;
            margin-left: 5%;
            margin-right: 5%;
}
    </style>
</head>
<body>
<header>
    <div>
        
    </div>
    <ul class="upper">
      <li class="menua"><a href="maina.php">유저확인</a></li>
      <li class="menub"><a href="mainb.html">데이터확인</a></li>
      <li class="menuc"><a href="mainc.html">체크리스트</a></li>
    </ul>
</header>
    <!--<div class='profile'>
        <p>

            <button type="button" id="login" onclick="location.href='login.html'">로그인</button>
            <br>
        </p>
    </div>-->
    <section class='contenta'>  
</form></span>
<p class="demo">
<?php

$db = mysqli_connect("27.96.134.88", "asdf", "q1w2e3r4!", "sensordata");

mysqli_query($conn, "set names utf8");

$sql = "select user_id, user_name, user_auth from user";

$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
        echo("<table border=\"1\">");
   while($row = mysqli_fetch_assoc($result)) {
   echo "<tr><td>아이디: " . $row["user_id"]. "</td><td>이름: " . $row["user_name"]. "</td><td>권한: " . $row["user_auth"]."</td></tr>";

   }
   echo("</table>");
   }
   else{
   echo "등록된 사용자가 없습니다.";
   }
   mysqli_close($db);   
?>
</p>
    </section>
    <br>
</body>
</html>