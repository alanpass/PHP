<?php
session_start();
$char=$_POST["char"];
$id=$_POST["id"];
$pwd=$_POST["pwd"];
if($id =="chair" && $pwd == "123" && $char=="chair"){
    $_SESSION["login"]="manager";  
    header("Location: chair.php");
}
elseif($id =="reviewer" && $pwd == "234" && $char=="reviewer"){
    $_SESSION["login"]="using";
    header("Location: reviewer.php");
}
elseif($id =="author" && $pwd == "345" && $char=="author"){
    $_SESSION["login"]="open";
    header("Location: author.php");
}
else{
    $_SESSION["loginFail"]="fail";
    echo "<h3>帳號密碼錯誤</h3>";
    header( "Location: fail.php");
}

?>