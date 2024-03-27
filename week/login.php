<html>
<head>
<meta charset="utf8">
</head>

<form action="check.php" method="get">

帳號：<input type="text" name="uId" placeholder="Please input your ID"><br/>
密碼：<input type="password" name="uPwd" placeholder="Please input your password" required><br/>
<input type="submit" value="登入">
<input type="reset" value="刪除">
</form>
<?php
date_default_timezone_set("Asia/Taipei");
echo date("y/m/d h:m:s");
?>
</html>
