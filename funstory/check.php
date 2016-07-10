<?php
session_start();
//my basic variables
//hmmmm this 
ob_start();
$sentence =$_POST['sentence'];
$lastword =$_POST['lastword'];
$_SESSION['numOfSubmits']++;
$_SESSION['lastword'] = $lastword;
$numOfSubmits =$_SESSION['numOfSubmits'];

if ($numOfSubmits ==1){	
$numberSentences =$_POST['numberSentences'];
$_SESSION['numberSentences'] =$numberSentences;
}
else
{
	$numberSentences =$_SESSION['numberSentences'];
}


//about story , the ' ' divides the sentences of each user 
//therefore I could change it with a different character 
$story=$_SESSION['story'] . "<br>" .$sentence;
$_SESSION['story'] =$story;
//


//testing the results of variables 
echo " sentence == ".$sentence;
echo " <br>";
echo " lastword == ".$lastword;
echo "<br>";
echo "numOfSubmits == ".$numOfSubmits;
echo "<br>";
echo "num of sentences remaining " .$numberSentences;
echo "<br>";
echo "story so far '" .$_SESSION['story']. "'";






if ( $numOfSubmits < $numberSentences)
{
	//header to main
	header("location:main.php");
}
else
{
	//header to end
	header("location:end.php");
	
}
//header gia main.php 
// 'h end.php
?>