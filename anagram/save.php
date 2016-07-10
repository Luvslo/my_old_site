<?php
ob_start();
session_start();

//print_r($_SESSION['wordBank']);
$Creator= $_SESSION['creator'];
$GameName= $_SESSION['quizname'];
$Password=$_SESSION['pass'];
$NumOfQ= $_SESSION['num'];
echo $NumOfQ;


include('../db_connect.php');


$sql="INSERT INTO AnagGames (Creator  ,GameName  ,Password ,NumOfQ )
VALUES
('$Creator','$GameName' ,'$Password','$NumOfQ')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  header("location:save2.php");



?>