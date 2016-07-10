<?php
ob_start();
session_start();
$pointer= $_SESSION['pointer'];
$_SESSION['wordBank'][$pointer]=$_POST['word'];
echo $_SESSION['wordBank'][$pointer];

$pointer++;
$_SESSION['pointer']=$pointer;
echo $_SESSION['pointer'];
echo $_SESSION['num'];

if ($_SESSION['num']> $_SESSION['pointer']){
header("location:create.php");
}
else
{
	header("location:save.php");
}
?>