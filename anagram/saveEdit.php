<?php
ob_start();
session_start();

print_r($_SESSION['wordBank']);
$wordbank=$_SESSION['wordBank'];
$newWordbank=array();
$NumOfQ =$_SESSION['numOfQ'] ;
$quizname=$_SESSION['quizname'];
$creator = $_SESSION['creator'];
$pass =  $_SESSION['pass'];
$Gid = $_SESSION['Gid'];
///////
//echo $_POST["value1"];
//////
include('../db_connect.php');

	$Wid = array();
for ($i=1; $i<=$NumOfQ ; $i++)
	  {	  
	  ///database search for Wids
	  $sql="SELECT * FROM AnagWordBank WHERE Gid='$Gid' AND Value='$wordbank[$i]'";
	   $result=mysql_query($sql);	  
	   $count=mysql_num_rows($result);
       $num_rows = mysql_num_rows($result);	  
	    while($row = mysql_fetch_assoc($result))
			{   
	$Wid[$i]  =  $row['Wid'];	
	}
	  //find the new edited words
	 $newWordbank[$i]=$_POST["value".$i];
	 
	 
	 //update newWord to specific Wid
	 mysql_query("UPDATE AnagWordBank SET Value='$newWordbank[$i]' WHERE Wid='$Wid[$i]'");
	  }


print_r($Wid); 
header("location:custom.php");

?>