<?php
//check if there's actually a comment posted
if (empty($_POST['newsText'])) {
	//header se ena page pou tha leei ERROR ! Den exete eisagei comment prospa8hste ksana
	//kapoio px comment_error.php
	header("location:comment_error.php");
        }
else
{
	$newsText=$_POST['newsText'];


	//check if there is a name of poster
	if (empty($_POST['newsPerson'])) {
	$newsPerson= " Anonymous ";
	}
	else
	{
	$newsPerson =$_POST['newsPerson'];
	
	}

	//check if there's a title
	if (empty($_POST['newsTitle'])) {
	$newsTitle="NO SUBJECT";
	}
	else
	{
	$newsTitle=$_POST['newsTitle'];
	
	}
}
	echo "onoma poster == " .$newsPerson ." || titles is== " .$newsTitle ." ||news text is == " .	$newsText;
	echo "<br>";
	date_default_timezone_set('Europe/Athens');
        $mydate=getdate(date("U"));
        $date= "$mydate[weekday] $mydate[hours]:$mydate[minutes], $mydate[month] $mydate[mday], $mydate[year] , " ;
        echo $date;
echo "onoma poster == " .$newsPerson ." || titles is== " .$newsTitle ." ||news text is == " .	$newsText;
	echo "<br>";
	date_default_timezone_set('Europe/Athens');
$mydate=getdate(date("U"));
$date= "$mydate[weekday] $mydate[hours]:$mydate[minutes], $mydate[month] $mydate[mday], $mydate[year] , " ;
echo $date;
    if (empty($_POST['newsText'])) {
	//do nothing
    }
    else
    {
    include('db_connect.php');
	//$lastWord=mysql_real_escape_string($lastWord);
$newsTitle=mysql_real_escape_string($newsTitle);
$newsText=mysql_real_escape_string($newsText);
$newsPerson=mysql_real_escape_string($newsPerson);
	$sql="INSERT INTO News (News_Title,News_Text,News_Person,News_Date )
VALUES
('$newsTitle','$newsText' ,'$newsPerson' ,'$date')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  header("location:post_succesful.php");


}

?>
