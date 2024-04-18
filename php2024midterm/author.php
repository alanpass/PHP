<html>
<?php
session_start();
if(isset($_SESSION["login"])){
    echo "<a href='author.php ? logout=true'><h3>Logout</h3></a>";
    if(isset($_GET["logout"])){  
    if($_GET["logout"]==true){
        header("Location: logout.php");
    }
}
}else{
    echo "Illegal access to webpage <br/>";
    header("Refresh:1;url=index.php");
}
?>
</html>
<html>
<form action="showpaper.php" method="post">
<font size ="20", color = "black"><b>Author您好，歡迎進入論文評論網頁</font></b><br/>

論文標題 : <br/><input type="text" name="sTitle" value=""><br/>
作者姓名 : <input type="text" name="sName" value=""><br/>
作者Email : <input type = "text" name = "sEmail" value = "" ><br/>
論文摘要 : <textarea name="sComment" value="" rows="10" cols="50">
</textarea>
<br/>
<input type="submit" value="提交">
</html>