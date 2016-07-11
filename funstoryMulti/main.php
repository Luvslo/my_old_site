<?php
ob_start();
session_start();

$pid =$_SESSION['Pid'];
$playerName =$_SESSION['playerName'];
$sid = $_SESSION['Sid'];
$pass =$_SESSION['pass'];
$_SESSION['counter']=0;

//thelw to turn na to vrw apo thn database
include('../db_connect.php');
	$tbl_name="Players";
	$sql="SELECT * FROM $tbl_name WHERE Sid='$sid' AND playerName='$playerName' AND playerPass ='$pass'  ";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
       $num_rows = mysql_num_rows($result);
	      
	            while($row = mysql_fetch_assoc($result))
	{   	
	$turn=$row['Turn'];	
	$Pid =$row['Pid'];
	}

//check if it finished
	$tbl_name="Sessions";
	$sql="SELECT * FROM $tbl_name WHERE Sid='$sid'  ";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
       $num_rows = mysql_num_rows($result);
	      
	            while($row = mysql_fetch_assoc($result))
	{   	
	$numOfSubmits=$row['numOfSubmits'];	
	$NumSentences= $row['NumSentences'];	
	$NumSentences= $row['NumSentences'];
	$sessionIsFull =$row['sessionIsFull'];
	
	}
//
if($numOfSubmits>= $NumSentences){
	echo "stop here " .$numOfSubmits." num of sentences is " .$NumSentences;
	header("location:end.php");
}


if (empty($playerName)){
header("location:index.php");	
}
//uncomment this echo for debugging purposes.
//echo "your Pid is " .$pid . " your playername is " .$playerName ." your turn is " .$turn. " your session id you play is  " .$sid . " num of submits " .$numOfSubmits ." sessionIsFull value ".$sessionIsFull;

//initialize lastWord 
if (empty($lastWord)) {
	$lastWord = " ";
	
	$_SESSION['lastWord']= " ";
}
else{
	
}

if($turn >0){
	$tbl_name="Sentences";
	$sql="SELECT * FROM $tbl_name WHERE Sid='$sid' ";
	$result=mysql_query($sql);     	      
	            while($row = mysql_fetch_assoc($result))
					{   	
	$lastWord=$row['lastWord'];	
	}
}else{
	//do nothing	
//if (empty($lastWord)) {
$lastWord=$_SESSION['lastWord'];
}
/* if (empty($lastWord)) {
	$lastWord = " ";
} */
if($turn ==0 || $sessionIsFull==0)
{
	//echo " haha not your turn!" ;
	$readOnly ="readonly='true'  style=background-color:#E4E4E4;inset #F0F0F0; padding:2px;  display:block;'";
	$button="disabled";
	$message = "It's not your turn yet, please wait ";
	$color='red';
}
else
{
	$readOnly=" ";
	$button = " ";
	$message = " It's now your turn !";
	$color = "green";
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Pseiridis - Pseiras Georgios </title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="../style.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script> 
<script> 
var auto_refresh = setInterval(
function()
{


$('#resultsss').load('newEntry.php');
}, 1000);

</script>


</head>

<body>


<div class="BackgroundGradient"> </div>
    <div class="BodyContent">

    <div class="BorderBorder"><div class="BorderBL"><div></div></div><div class="BorderBR"><div></div></div><div class="BorderR"><div></div></div><div class="BorderB"><div></div></div><div class="BorderL"></div><div class="BorderC"></div><div class="Border">

        <div class="Menu">
          <ul><li><a href="index.php" class="MenuButton"><span>Home</span></a></li>|<li>
            <a href="../projects.html" class="ActiveMenuButton"><span>My Projects</span></a></li>|<li>
             <a href="../downloads.html" class="MenuButton"><span>Downloads</span></a></li>|<li>
            <a href="../aboutme.html" class="MenuButton"><span>About Me</span></a></li></ul>



<center>

 </div><div class="Columns"><div class="MainColumn"><div class="Article">
      <p>
       
        </p>
		<b>
		<font face="Helvetica Neue" size = '6' color="orange">		
		 <?php echo "Hello  (". $playerName. " !) ";?>		
		 </font> </b>
        <center>
         <b> 
		  
		<br />
        <font face="Helvetica Neue" size = '7' color=" <?php echo $color;?>">
		
	   <?php echo $message;  ?>
        </b><br/></font>
        <font face="Helvetica Neue" size = '6'>
       <b>Continue the story ! <br />
       
       the last word from previous sentence is :</b>
         <br /><br />
         <!----DIV for autorefresh! aka div id="resultsss" ----->
                  <b>  <blockquote> <font size="6" color="green">  <div id="resultsss">" <?php echo $lastWord;?> "
				  </font></b>
           <br /></blockquote></div>

           
       </center>
<br />

<font face="Helvetica Neue" size = '5'>
<b> Your sentence : </b></font><br/>
<form name="form1" method="post" action="checkNext.php" onsubmit="return checkvalue(this)">

<textarea onkeyup="textCounter(this,'counter',200);" id="message" name="sentence" align="center" rows="4" cols="50" maxlength="200" <?php echo $readOnly;?> >
</textarea>
<input disabled  maxlength="3" size="3" value="200" id="counter"> 
<script>
function textCounter(field,field2,maxlimit)
{
 var countfield = document.getElementById(field2);
 if ( field.value.length > maxlimit ) {
  field.value = field.value.substring( 0, maxlimit );
  return false;
 } else {
  countfield.value = maxlimit - field.value.length;
 }
}
</script>


<b><br/><br/>
<font face="Helvetica Neue" size = '5'>
Last Words : </b>
</font><br/>
<textarea onkeyup="textCounterr(this,'counterr',20);" id="message2" name="lastWord" align="center" rows="1" cols="20" maxlength="20" <?php echo $readOnly;?>>
</textarea>
<input disabled  maxlength="2" size="2" value="20" id="counterr" >
<script>
function textCounterr(field,field2,maxlimit)
{
 var countfield = document.getElementById(field2);
 if ( field.value.length > maxlimit ) {
  field.value = field.value.substring( 0, maxlimit );
  return false;
 } else {
  countfield.value = maxlimit - field.value.length;
 }
}
</script>
<script>
function checkvalue() { 
    var mystring = document.getElementById('message2').value; 
	 var mystringg = document.getElementById('message').value; 
    if(!mystring.match(/\S/)) {
        alert ('You forgot to type the Last Words ');
        return false;
    } else {
        //alert("correct input");
      //  return true;
		
    }
    if(!mystringg.match(/\S/)) {
        alert ('You forgot to submit a sentence');
        return false;
    } else {
        //alert("correct input");
        return true;
    }
    
    }//end function
	
</script>
 <span class="ButtonInput"  ><span> <input  <?php echo $button; ?> type="submit" name="start"  value="   Continue the Story!   "></span></span></center>
  
  
</p></td>
</form>

 <br /> <br />
  
</body>


<br /><center>
<font face="Helvetica Neue" color='#666666' size = '4'> Keep in mind that 'Last Words' is part of the sentence you submit :)<br />
It is saved as ' Your sentence : ' + ' Last Words : '
</font></center>
<font face="Helvetica Neue" color='#333333' size = '5'><center>Should you experience any problems, hit the refresh button </font>
 <form>
   <input type="image" src="Button-Refresh-icon.png" alt="Submit" onClick="history.go(0)"  >
</form>
</center>
</font>
</font>
 </div></div></div>
        <div class="Footer">
            <a href="mailto:g.pseiridis@gmail.com">Contact Me</a>
        </div>                

    </div></div>
    </div>
    <span class="BackLink"><a href="http://george-pseiridis.com/"> </a> </span>

</html>