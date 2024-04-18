<html>
<?php
session_start();
if(isset($_SESSION["login"])){
    echo "<a href='reviewer.php ? logout=true'><h3>Logout</h3></a>";
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
<form action="showreview.php" method="post">

<font size ="20", color = "black"><b>Reviewer您好，歡迎進入論文評論網頁</font></b><br/>
論文評審決定:
<input type = "radio" name = "score" value = "accept">Accept
<input type = "radio" name = "score" value = "minor revision">Minor revision
<input type = "radio" name = "score" value = "major revision">Major revision
<input type = "radio" name = "score" value = "reject">Reject
<br/>
論文評論評語:
<textarea name="sComment" value="" rows="10" cols="50">
</textarea>
<br/>
<input type="submit" value="提交">
</html>
