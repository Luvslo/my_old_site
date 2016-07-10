<?php
ob_start();
if (empty($_POST['playerName'])) {
header("location:index.php");
}
else
{
	$playerName=$_POST['playerName'];
	echo $playerName;
	$playerScore=0;
	echo "<br>";
	//initializing word bank
	$wordBank= array("Cucumber",
	"Phone",
	"Forest" ,
	"Father",
	"Desk",
	"chess",
	"radio"
	,"Hedgehog"
	, "spine"
	, "monster"			);
	
	$randomBank= array();
	// echo "I like " . $wordBank[0] . ", " . $wordBank[1] . " and " . $wordBank[2] . ".";
	 echo "<br>";
	
	 
	 
//initializing	 shuffled letters 
$length = count($wordBank)-1;
 for ($i=0; $i<=$length; $i++)
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
 $_SESSION['pointer'] = 0;
 $_SESSION['penis'] = 0;
header("location:anagram.php");
}//end second if

?>