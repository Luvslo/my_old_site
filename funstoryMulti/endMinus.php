<?php
ob_start();
$sid =$_GET['sid'];
include('../db_connect.php');
$tbl_name="Sessions";
$pass= $_GET['pass'];
$sql="SELECT * FROM $tbl_name WHERE Sid='$sid' AND sessionPass ='$pass'  ";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
    $num_rows = mysql_num_rows($result);
		while($row = mysql_fetch_assoc($result))
	{
	$sessionName=$row['sessionName'];
	}//<- end fetch assoc
if (empty($sessionName)){
	header("location:index.php");
}else{



session_start();
$_SESSION['Sid']=$sid;
header("location:end.php");
}
?>