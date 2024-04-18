<html>
<meta charset="UTf-8">
<form action="check.php" method="post">
<h1><b>高大資管論文投稿系統</b></h1>

請選擇您的角色:
<select name=char>
    <option value="chair">Chair
    <option value="reviewer">Reviewer
    <option value="author">Author
</select></br>

帳號:<input type="text" name="id" >
<br/>

密碼:<input type="password" name="pwd" >
<br/>

<input type="submit">

</html>
<?php

if(isset($_POST["id"])){
    $user=$_POST["id"];
    if(!isset($_COOKIE["id"])){
        setcookie("id", $user, time()+604800);
    }
    else{
        echo"歡迎 ".$_COOKIE["id"]." 再次回到網站</br>";
    }
    date_default_timezone_set("Asia/Taipei");
}
?>
