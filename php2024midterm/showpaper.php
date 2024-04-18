<?php
session_start();
if(isset($_SESSION["login"])){    
    echo "論文標題: ".$_POST['sTitle']. "</br>";
    echo "作者姓名: ".$_POST['sName']. "</br>";
    echo "作者Email: ".$_POST['sEmail']. "</br>";
    $sComment = $_POST["sComment"];
    print "論文摘要: <br/>".nl2br($sComment)."<br/>";
    echo "<a href='showpaper.php ? logout=true'><h3>Logout</h3></a>";
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