<head>
<metad>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr"/>
  <title>사용자 등록</title>
</head>
<body>
<form method="POST" action="list_insert.php">
<table border="1">
<tr>
<td>사원번호</td>
<td><input type="text" size="30" name="check_uid"></td>
</tr>
<tr>
<td>이름</td>
<td><input type="text" size="30" name="user_name"></td>
</tr>
<tr>
<td>권한</td>
<td>
<input type="radio" id="auth_1" name="user_auth" value="1">
  <label for="auth_1">관리자</label><br>
  <input type="radio" id="auto_0" name="user_auth" value="0">
  <label for="auth_0">노동자</label><br>
  </td>
</body>