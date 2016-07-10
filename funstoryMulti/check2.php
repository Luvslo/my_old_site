<?php
session_start();
ob_start();
$creator = $_SESSION['creator'];
$pass = $_SESSION['pass'];
echo "youre ".$creator." and your pass is this thing ".$pass;

include('../db_connect.php');
//oops ! goota find the Sid first of the previous entry in database 	
	$tbl_name="Sessions";
	$sessionName=$_SESSION['sessionName'];
	$sql="SELECT * FROM $tbl_name WHERE Creator='$creator' AND sessionName='$sessionName' ORDER BY Sid ASC";
	$result=mysql_query($sql);
	while($row = mysql_fetch_assoc($result))
	{   
	$sid= $row['Sid'];
	}
	echo " .... sid is  " .$sid;
	

	$sql="INSERT INTO Players (playerName  ,playerPass, Turn, Sid,Refresh)
VALUES
('$creator','$pass','1','$sid' , '0')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

 header("location:index.php");

	
	



?>