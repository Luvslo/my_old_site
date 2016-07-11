<?php

//dem gets
include('../db_connect.php');
ob_start();

$NumCurrentPlayers=$_GET['NumCurrentPlayers'];
$numPlayers=$_GET['numPlayers'];
$NumSentences = $_GET['NumSentences'];
$sid =$_GET['sid'];
$player = $_GET['player'];

$pass= $_GET['pass'];

$tbl_name="Sessions";

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


if (empty($player)){
echo "no entries found	";
//insert into database 
header("location:index.php");
}//end if empty playername
else
{


echo "current players  ".$NumCurrentPlayers . " while num of players avaialble is " .$numPlayers."<br>";
//must do following 
//1) if player who typed his/her name and pass have been enrolled then proceed
//if not, check if there's available spot to include that player 
//if the session is full, header to some " sorry! Session's full " 

	$tbl_name="Players";
	$sql="SELECT * FROM $tbl_name WHERE Sid='$sid' AND playerName='$player' AND playerPass ='$pass'  ";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);

       $num_rows = mysql_num_rows($result);
	      
	            while($row = mysql_fetch_assoc($result))
	{   
	
	$turn=$row['Turn'];
	$playerName=$row['playerName'];
	$Pid =$row['Pid'];
	}

if (empty($playerName)){
echo "no entries found	";

	//check if there are available seats
	if($NumCurrentPlayers ==$numPlayers){
	echo "OMG FULL  and sessionIsFull value is ";	
	header("location:index.php");
	}	
	else{
	
$sql="INSERT INTO Players (playerName   ,playerPass , Turn , Sid  )
VALUES
('$player','$pass','0','$sid')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  //additionally, inform-UPDATE the Sessions table that NumCurrentPlayers =+ 1
  $NumCurrentPlayers++;
  mysql_query("UPDATE Sessions SET NumCurrentPlayers='$NumCurrentPlayers' WHERE Sid ='$sid' ");
   //find the Pid of new entry 
 $sql="SELECT * FROM $tbl_name WHERE Sid='$sid' AND playerName='$player' AND playerPass ='$pass'  ";
 $result=mysql_query($sql);
 $count=mysql_num_rows($result);
 $num_rows = mysql_num_rows($result);	      
     while($row = mysql_fetch_assoc($result))
	{   
	
	$turn=$row['Turn'];
	$playerName=$row['playerName'];
	$Pid =$row['Pid'];
	}//<- end fetch assoc
}//end checking if full
}



echo " your turn is " .$turn . " and your name is " .$playerName ." available current playesr ".$NumCurrentPlayers . " out of " .$numPlayers ;

//2) check sentences so far to initialize the story 
//fetch assoc for Values[$i] and lastWord[$i] 
// if Values[$i] = Null then  Values[$i]=" ";  ,lastWord same 
//NumOfSubmits ++;
//basika den xreiazetai tha to kanei afto allo scriptaki
// afou den yparxei logos na apothikefsw kati keno sto Sentences 
// sto main tha psaxnei an yparxei kati sto Sentences gia to sigekrimeno Pid kai Sid
//


//3) sessions gia to main.php
//thelw Pid , Sid , playername , turn 
session_start();
$_SESSION['Pid']=$Pid;
$_SESSION['playerName']=$playerName;
$_SESSION['turn']=$turn;
$_SESSION['Sid']=$sid;
$_SESSION['NumSentences'] =$NumSentences;
$_SESSION['pass']=$pass;
$_SESSION['counter']=0;

//need last word before proceeding
if($NumCurrentPlayers ==$numPlayers){
	
	echo "OMG FULL  and sessionIsFull value is ";
	//header("location:index.php");
 mysql_query("UPDATE Sessions SET NumCurrentPlayers='$NumCurrentPlayers' WHERE Sid ='$sid' ")or die(mysql_error());
;
 mysql_query("UPDATE Sessions SET sessionIsFull='1' WHERE Sid ='$sid' ")or die(mysql_error());
;
}
else
{
	echo " num of current is " .$NumCurrentPlayers. " and available is " .$numPlayers;
	
}


header("location:main.php");
ob_end_flush(); 
}//empty player get
}//end for session check
?>