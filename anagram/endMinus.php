<?php
ob_start();
 session_start();
 
 
$wordBank=array();
$randomBank=array();
$playerName =$_SESSION['playerName'];
$playerScore=$_SESSION['playerScore'];
$wordBank =  $_SESSION['wordBank'] ;
$randomBank = $_SESSION['randomBank'];
$pointer = $_SESSION['pointer'];

if (strtolower(trim($playerName))=="test" ||strtolower(trim($playerName))=="test [naughty!]")
{
	
header("location:end.php");
}
else
{
	

//print_r($randomBank);
		date_default_timezone_set('Europe/Athens');
        $mydate=getdate(date("U"));
        $date= "$mydate[weekday] $mydate[hours]:$mydate[minutes], $mydate[month] $mydate[mday], $mydate[year]  " ;


include('../db_connect.php');
$sql="INSERT INTO Anagram (Anagram_Player ,Anagram_Score ,Anagram_Date)
VALUES
('$playerName','$playerScore' ,'$date')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  header("location:end.php");


}


?>