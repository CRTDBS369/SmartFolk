<?php
    if($_POST["ID"] == "")
    {
        echo '<script> alert("아이디나 패스워드 입력하세요"); history.back(); </script>';
    }
    else{
        $db = mysqli_connect("27.96.134.88", "asdf", "q1w2e3r4!", "sensordata");
        mysqli_query($db, "set names utf8"); 
        
        $sql = "select user_id from user";
        
        $result = mysqli_query($db, $sql);

        $check_id=$_POST['ID'];
        $check_name=$_POST['NAME'];
        if (mysqli_num_rows($result) > 0){

           while($row = mysqli_fetch_assoc($result)) {//데이터 스크립트로 이동
           $user_id=$row["user_id"];
           $user_name=$row["user_name"];
           if($user_id==$check_id)
            {
                echo "<script>alert('$check_name 님으로 로그인되었습니다.'); 
                location.href='maina.php';</script>";
                
            }
            }
            echo "<script>alert('아이디 혹은 비밀번호를 확인하세요.'); history.back();</script>";
        }
        else
        {
            echo "<script>alert('버근가');</script>";
        }
        mysqli_close($db);  
    }
?>
