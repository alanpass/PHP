<meta charset = "utf8">

<?php
session_start();
?>
<meta charset="utf8">
<?php
$sId="123";
$sPwd="123";
$uId=$_GET["uId"];
$uPwd=$_GET["uPwd"];
if($sId==$uId && $sPwd==$uPwd){
    $_SESSION["check"]="Yes";
    header("Location:success.php");
}else{
    $_SESSION["check"]="No";
    header("Location:fail.php");
}
?>
