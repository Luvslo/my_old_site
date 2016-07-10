<?php
ob_start();
session_start();

$quizname=$_SESSION['quizname'];
$creator = $_SESSION['creator'];
$pass =  $_SESSION['pass'];

//echo $pass;
include('../db_connect.php');
$tbl_name="AnagGames";
$sql="SELECT * FROM $tbl_name WHERE Creator='$creator' AND Password='$pass' AND GameName='$quizname'";
	   $result=mysql_query($sql);	  
	   $count=mysql_num_rows($result);
       $num_rows = mysql_num_rows($result);
echo $num_rows;

	  while($row = mysql_fetch_assoc($result))
	{   
	
	$Gid  =  $row['Gid'];
	$NumOfQ  = $row['NumOfQ'];
	
	}


echo "<br>"."number gid is " . $Gid . " number of question is " .$NumOfQ;
$tbl_namee="AnagWordBank";
$sqll="SELECT * FROM $tbl_namee WHERE Gid='$Gid'";
		$resultt=mysql_query($sqll);	  
	   $countt=mysql_num_rows($resultt);
       $num_rowss = mysql_num_rows($resultt);
		$wordBank=array();
		$i=0;
 	while($roww = mysql_fetch_assoc($resultt))
	{   
	$i++;
	$wordBank[$i] =  $roww['Value'];
	}
	echo "<br>";
	
	
for ($i=1; $i<=$NumOfQ ; $i++)
  {
   $_SESSION['wordBank'][$i]=$wordBank[$i];
  }
print_r($_SESSION['wordBank']);
$_SESSION['numOfQ']=$NumOfQ ;
$_SESSION['Gid']=$Gid ;
echo "<br>" . " that worked  " ;
header("location:edit.php");
?>