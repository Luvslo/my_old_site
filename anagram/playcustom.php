<?php
ob_start();
//echo $_GET["player"];

if (empty($_GET['player'])) {
header("location:custom.php");
}
else
{
	//initialize values
$playerName=$_GET['player'];
$playerScore=0;
//need word bank from database
include('../db_connect.php');
$gid=$_GET["gid"];

$tbl_name="AnagWordBank";
$sql="SELECT * FROM $tbl_name WHERE Gid ='$gid' ORDER BY  Wid  ASC";
$result=mysql_query($sql);
	   $count=mysql_num_rows($result);
       $num_rows = mysql_num_rows($result);
	  //variables
	    $wordBank=array();	
		$i=0;

           while($row = mysql_fetch_assoc($result))
	{   	
	$i++;
	$wordBank[$i] =  $row['Value'];
			
	}
	

//print_r($values);
// acquiring WordBank = complete ...wordbank = $values
$randomBank= array();
//initializing	 shuffled letters 
$length = count($wordBank);
 for ($i=1; $i<=$length; $i++)
 {
$randomString = str_shuffle($wordBank[$i]);

echo $randomString;
	echo "<br>";
	$randomBank[$i]=$randomString;
	
}//end for
 session_start();
 $_SESSION['playerName']=$playerName;
 $_SESSION['playerScore']=$playerScore;
 $_SESSION['wordBank'] = $wordBank;
 $_SESSION['randomBank'] = $randomBank;
 $_SESSION['pointer'] = 1;
 $_SESSION['penis'] = 0;
 $_SESSION['gid'] = $gid;
 
header("location:anagramCustom.php");
}//end second if










?>