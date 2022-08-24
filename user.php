<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr"/>
  <title>등록된 사용자</title>
</head>
<body>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>스마트 지게차 시스템</title>
    <style>
        p{

        }
        body{
            background-color: #1BBC9B;
        }
        div.profile
        {
            float: left;
            width: 200px;
            height: 100px;
            background-color: #EEEFF1;
            padding: 20px;
            border: none;
    
        }
        section.contenta
        {
            position: relative;
            right: -300px;
            width: 500px;
            height: 700px;
            background-color: #ffffff;
            padding: 50px;
            border: none;
    
        }
        nav.menu{
            overflow: auto;
            position: relative;
            top:-600px;
            left:40px;
            background-color: #EEEFF1;
            width: 200px;
        }
        li{
            border-bottom: 1px solid #dcdcdc;
        }
        h1 {
        height: 40px;text-align: center;color: #fff;
        font-size: 20px;line-height: 1.8;letter-spacing: -2px;
        background: #d71a21;}
        h1.abc
        {
        }
    </style>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<?php
        $db = mysqli_connect("27.96.134.88", "asdf", "q1w2e3r4!", "sensordata");
        echo "<button id="abc" onclick="fdgdg()">dfdgdfgfhfhfgh</h1>"
        mysqli_query($conn, "set names utf8"); 
        
        $sql = "select user_id, user_name, user_auth from user";
        
        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) > 0) {
           while($row = mysqli_fetch_assoc($result)) {
           $user_id=$row["user_id"]; 
           $user_name=$row["user_name"];
           $user_auth=$row["user_auth"];
            }
        }
        else{
           echo "등록된 사용자가 없습니다.";
           }
           mysqli_close($db);
           $dataary[]=array("user_id"=> $user_id,"user_name"=>$user_name,"user_auth"=>$user_auth);
        ?>
    <div class='profile'>
        <p>
            <script>
                function printuser(msg){
                    document.write("안녕하십니까 "+ "<strong>"+msg+"</strong>" +"님"+"<br>");
                }
                printuser('사용자');
            </script>
        </p>
    </div>
    <section class='contenta'>
    <a href="http://27.96.134.88/main.php">주 화면으로 돌아가기</a>
    <span>
      <form>
    From : <input type ="date" id = "From" name ="from" min ="2021-04-10" max ="2021-04-16">
    <br>
    To : <input type ="date" id = "To" name ="from" min ="2021-04-17" max ="2021-05-22">
    </form>
    <button id="decide" onclick="doing()">확인</button> 
</span>
<p id="demo">
this is demo
<br>
        <script>
        var fdate,fday,fmonth,fyear;
        var tdate,tday,tmonth,tyear;

        function showData()
        {
        
        document.write("일단 종료<br>");
        var gate_info='<? echo json_encode($dataary);?>'; 
        document.write("값 넣기 성공<br>");
        document.write(gate_info);
        document.write("값 넣기 성공<br>");
        var user_data = JSON.parse(gate_info);//
        document.write("변환 성공<br>");

        for(var i=0;i<user_data.length;i++)
        {
            document.write("출력 성공1<br>");
            document.write("유저정보 : " + user_data[i][user_id]);
        }
        document.write("넘어 갔음<br>");
        }

        function doing(){
        var fdate = new Date($('#From').val());
        var tdate = new Date($('#To').val());
        fday = fdate.getDate();
        fmonth = fdate.getMonth() + 1;
        fyear = fdate.getFullYear();
        tday = tdate.getDate();
        tmonth = tdate.getMonth() + 1;
        tyear = tdate.getFullYear();//비교군 시간 설정
        document.getElementById("demo").innerHTML = "Hello World";
        //시간 형태 설정
        showData();//데이터 가져오기
        }

            </script>
            </p>
    </section>
    <br>
    <nav class='menu'>
        <h1>메뉴</h1>
        <ul>
            <li class='atype'><a href="page_menua.html">지게차 체크 리스트 확인</a></li>
        </ul>
        <ul>
            <li class='btype'><a href="page_menub.html">지게차 현황 보고</a></li>
        </ul>
        <ul>
            <li class='ctype'><a href="27.96.134.88/users.php">사용자 정보</a></li>

        </ul>
    </nav>

</body>
<?php
mysqli_prepare($con, "SELECT * FROM user WHERE user_id = ? and user_name = '?'");\
?>
$db = mysqli_connect("27.96.134.88", "asdf", "q1w2e3r4!", "sensordata");
      
    mysqli_query($conn, "set names utf8"); 

    $sql = "select event_uid, event_type, event_value, event_time from event";

    $result = mysqli_query($db, $sql);

    echo "<tr><th>사원 정보</th><th>사건정보</th><th>사건 값</th><th>사건 시간</th></tr>"
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo  "<tr><td>".$row["event_uid"]. "</td><td>" . $row["event_type"]. "</td><td>" . $row["event_value"]."</td><td>". $row["event_time"]."</td></tr>";
        }
        }else{
        echo "등록된 사용자가 없습니다.";
        }
        mysqli_close($db);

$from = strtotime($_POST[from]);
    $to = strtotime($_POST[to]);
    echo $from;
    echo $to;