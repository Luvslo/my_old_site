<?php
include('../db_connect.php');
//echo "new entry";
session_start();
ob_start();
$pid =$_SESSION['Pid'];
$playerName =$_SESSION['playerName'];
$sid = $_SESSION['Sid'];
$pass =$_SESSION['pass'];

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
	$Refresh =$row['Refresh'];
	}//<- end fetch assoc

//check if it finished
//thelw to num of submits apo thn vash
//
	$tbl_name="Sessions";
	$sql="SELECT * FROM $tbl_name WHERE Sid='$sid'  ";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
       $num_rows = mysql_num_rows($result);
	      
	            while($row = mysql_fetch_assoc($result))
	{   	
	$numOfSubmits=$row['numOfSubmits'];	
	$NumSentences= $row['NumSentences'];
	$sessionIsFull =  $row['sessionIsFull'];	
	}
	
//evresh lastword mono an einai h seira sou 
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

if (empty($lastWord)) {
	$lastWord=" ";
	}
	
	echo " <font size='6' color='green'> ";
	echo "<b>";
	 //debugging
	  echo "\" ".$lastWord." \"" ;
	//echo "\" ".$lastWord." \"" ;
	echo "</b>";
	echo " </font> ";



		
	
	//an exei ginei refreshed
	//if($turn >0 && $Refresh<1 && $sessionIsFull >0){
	if($turn >0  && $sessionIsFull >0){
		if($turn >0 && $Refresh<1)
		{	
		mysql_query("UPDATE Players SET Refresh='1' WHERE Pid ='$Pid' ");
		//$_SESSION['counter']++;
	
		echo "your sessionCounter is ".$_SESSION['counter']."<br>";
		
	?>	
		<script>	
	//location.reload();    
	  history.go(0);  
        </script>
	<?php
   		}
		else
		{
		//echo "your sessionCounter is ".$_SESSION['counter']."<br>";
		
		//	
		}
	}else{
		mysql_query("UPDATE Players SET Refresh='0' WHERE Pid ='$Pid' ");
	}
?>