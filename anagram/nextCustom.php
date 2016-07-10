<?php
ob_start();
session_start();

$playerAnswer=$_POST['playerAnswer'];
echo $playerAnswer;
$pointer= $_SESSION['pointer'];
$wordBank[$pointer]=$_SESSION['wordBank'][$pointer];
echo $wordBank[$pointer];

if ( strtolower(trim($playerAnswer)) == strtolower(trim($wordBank[$pointer]))){
echo "correct answer ! ";
$_SESSION['playerScore']++;	
}
else
{
	echo " wrong answur fagget " ;
	if ( strtolower(trim($playerAnswer)) =="penis"){
		$_SESSION['penis'] = 1;
		$_SESSION['playerName']= $_SESSION['playerName']." [naughty!]";
	}
	
}



 $_SESSION['pointer']++;


	header("location:anagramCustom.php");


?>