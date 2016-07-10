<?php
//echo $_POST['button'];
ob_start();
session_start();
$_SESSION['quizname']=$_POST['quizName'];
 $_SESSION['creator']=$_POST['Creator'];
 $salt="my name is george pseiridis and I am building a site";
 $_SESSION['pass']= md5($_POST['Pass'].md5($salt));
 $_SESSION['num']=$_POST['num'];
 $_SESSION['pointer']=0;
 $_SESSION['wordBank'] =array();
 echo $_SESSION['pass'];
if( $_POST['button']=="Edit Your Quiz"){
	header("location:checkEdit.php");
}
else
{
 
 

	if (empty($_POST['quizName'])||empty($_POST['Creator'])) {
	header("location:custom.php");
	}
	else
	{
	header("location:create.php");
	}
}
?>