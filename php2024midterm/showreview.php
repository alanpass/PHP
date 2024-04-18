<?php
session_start();
if(isset($_SESSION["login"])){    
    echo "論文評審決定: ".$_POST['score']. "</br>";
    $sComment = $_POST["sComment"];
    print "論文評論評語: <br/>".nl2br($sComment)."<br/>";
    echo "<a href='showreview.php ? logout=true'><h3>Logout</h3></a>";
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