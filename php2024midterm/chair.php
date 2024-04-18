<?php
session_start();
if(isset($_SESSION["login"])){
    echo "帳號密碼為第一組";
    echo "<a href='chair.php ? logout=true'><h3>Logout</h3></a>";  
    if(isset($_GET["logout"])){
    if($_GET["logout"]==true){
        header("Location: logout.php");
    }
}
}
else{
echo "Illegal access to webpage <br/>";
echo "<a href='index.php'><h3>Back to Login</h3></a>";
}
?>