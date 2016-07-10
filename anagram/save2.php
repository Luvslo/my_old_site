<?php
ob_start();
session_start();
//find foreign key Gid
include('../db_connect.php');
$tbl_name="AnagGames";
$creator=$_SESSION['creator'];
$sql="SELECT * FROM $tbl_name WHERE Creator='$creator'";
 
       $result=mysql_query($sql);
	   
	    while($row = mysql_fetch_assoc($result))
	{   	
	$gid =  $row['Gid'];	
	}
 echo "$gid  <br>";  

$_SESSION['gid']=$gid;
//save to AnagWordBank
foreach ($_SESSION['wordBank'] as $Value )
  {
  echo "$Value  <br>";  
  $sql="INSERT INTO AnagWordBank (Value  ,Gid)
VALUES
('$Value','$gid')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  
  
  
  }

 header("location:saved.php");


?>