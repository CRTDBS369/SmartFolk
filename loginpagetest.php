<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        div{            
            
        }
        
        button{
            background-color: #EEEFF1;
            width: 100px;
        }
        fieldset{
            border: 3px solid;
            width: 300px;
            height: 200px;
        }
        h1{
            font-family: "맑은 고딕";
            color: black;
        }
        body {
        margin: 0;
        background-color: #ffffff;
}
        .login{
        width: 350px;
        background-color: #EEEFF1;
        margin-right: auto;
        margin-left: auto;
        margin-bottom: 30px;
        margin-top: 100px;
        padding: 20px;
        text-align: center;
        border: blue 1px solid;
        font-size: 14px;
        border: none;
        color: black;
}
.logo{
    margin-top: 10%;
    width: 350px;
    margin-right: auto;
    margin-left: auto;
    text-align: center;
    border: none;
}
.text-field {
      font-size: 14px;
      padding: 10px;
      border: none;
      width: 260px;
      margin-bottom: 10px;
 
}
#logininfo
{
    width: 60px;
    height: 30px;
}
    </style>
</head>
<body>
    <div class="logo">
    <h1>스마트 지게차 시스템</h1>
    </div>
    <div class="login">
    <form id="user_login" method="POST" action="checkid.php">
        <p><input type ="text" id="user_id" name="ID" class="text-field" placeholder="사원번호" size ="15" required></input></p>
        <input type ="submit" value = "로그인" id="logininfo"></input>
        <br>
    <button type="button" onclick="location.href='regist.html'">회원가입</button>
    </form>
</div>

</body>
</html>