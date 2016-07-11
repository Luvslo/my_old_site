<?php
session_start();
ob_start();

if (empty($_POST['Creator'])||empty($_POST['sessionName'])) {
header("location:index.php");
}
else
{
//have to put some sessions	
	$Creator=strtolower($_POST['Creator']);
	echo $Creator;	
 //$salt="my name is george pseiridis and I am building a site";
 //$Pass= md5($_POST['playerPass'].md5($salt)); 
 $Pass=$_POST['sessionPass'];
  $numSentences=$_POST['numSentences'];
  $numPlayers=$_POST['numPlayers'];
  $sessionName=$_POST['sessionName'];
  echo $Pass;
//save to database table= sessions 
include('../db_connect.php');
	//numPlayers = total of players that can join
	//numCurrentPlayers = current players enrolled, of course starts with 1 with the creator participating
	//numOfSubmits = how many submits have been so far , starts with 0 
	//$variable = mysql_real_escape_string($variable);
	$sessionName =mysql_real_escape_string($sessionName);
	$Creator =mysql_real_escape_string($Creator);	
	
	$sql="INSERT INTO Sessions (sessionName  ,Creator, numPlayers, NumSentences, Closed,NumCurrentPlayers , numOfSubmits, sessionIsFull,sessionPass )
VALUES
('$sessionName','$Creator','$numPlayers','$numSentences','0','1' , '0','0','$Pass')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
//save some values to sessions
 $_SESSION['creator']=$Creator; 
 $_SESSION['pass']=$Pass;
 $_SESSION['sessionName']= $sessionName;
 header("location:check2.php");
	
	
}





?>