<?php
session_start();
ob_start();
$creator = $_SESSION['creator'];
$pass = $_SESSION['pass'];
echo "youre ".$creator." and your pass is this thing ".$pass;

include('../db_connect.php');
//Find the sid	
	
	$sessionName=$_SESSION['sessionName'];
	$sql="SELECT * FROM Sessions WHERE Creator='$creator' AND sessionName='$sessionName' ORDER BY Sid ASC";
	$result=mysql_query($sql);
	while($row = mysql_fetch_assoc($result))
	{   
	$sid= $row['Sid'];
	//2016
	$NumCurrentPlayers= $row['NumCurrentPlayers'];
	$numPlayers= $row['numPlayers'];
	$NumSentences = $row['NumSentences'];
	
	
	}
	echo " .... sid is  " .$sid;
	echo "  .. and numCurrentPlayers =" .$NumCurrentPlayers." and numPlayers = ". $numPlayers. " NumSentences is " .$NumSentences;
	

	$sql="INSERT INTO Players (playerName  ,playerPass, Turn, Sid,Refresh)
VALUES
('$creator','$pass','1','$sid' , '0')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }


 // the code to redirect you to the main.php with needed session values 

	$tbl_name="Players";
	$sql="SELECT * FROM $tbl_name WHERE Sid='$sid' AND playerName='$creator' AND playerPass ='$pass'  ";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);

       $num_rows = mysql_num_rows($result);
	      
	            while($row = mysql_fetch_assoc($result))
	{   
	
	$turn=$row['Turn'];
	$Pid =$row['Pid'];
	}

echo "turn = ". $turn. "  playerName = ". $playerName. " and Pid = ". $Pid;


// session variables init


$_SESSION['Pid']=$Pid;
$_SESSION['playerName']=$creator;
$_SESSION['turn']=$turn;
$_SESSION['Sid']=$sid;
$_SESSION['NumSentences'] =$NumSentences;
$_SESSION['pass']=$pass;
$_SESSION['counter']=0; 

header("location:main.php");
ob_end_flush(); 

?>