<?php
ob_start();

session_start();

$sentence =$_POST['sentence'];

//end with sentence replace
//$lastWord =$_POST['lastWord'];
$lastWord =$_POST['lastWord'];

//$result = $data1 . " " . $data2;
$sentence= $sentence ." ".$lastWord;
//end with last word replace
$pid =$_SESSION['Pid'];
$turn = $_SESSION['turn'];
$sid = $_SESSION['Sid'];
$numOfSubmits = $_SESSION['numOfSubmits'];
$NumSentences = $_SESSION['NumSentences'];
echo " sentence is " .$sentence . "and last word is ".$lastWord;
echo "<br>";
include('../db_connect.php');
//thelw to num of submits apo thn vash
	$tbl_name="Sessions";
	$sid = $_SESSION['Sid'];
	$sql="SELECT * FROM $tbl_name WHERE Sid='$sid'  ";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
       $num_rows = mysql_num_rows($result);
	      
	            while($row = mysql_fetch_assoc($result))
	{   	
	$numOfSubmits=$row['numOfSubmits'];	
	
	}//<- end fetch assoc


//

//telos tou num of submits



//insert into Sentences
//convert variables ???
//$variable = mysql_real_escape_string($variable);

$sentence=mysql_real_escape_string($sentence);
$lastWord=mysql_real_escape_string($lastWord);
$sql="INSERT INTO Sentences (Value,lastWord , Sid , Pid  )
VALUES
('$sentence','$lastWord','$sid','$pid')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  
  	//update Sessions that NumofSubmits is +1
	$numOfSubmits++;
	echo "num of submits now ".$numOfSubmits;
	$_SESSION['numOfSubmits'] =$numOfSubmits;
	//mysql_query("UPDATE Sessions SET NumCurrentPlayers='$NumCurrentPlayers' WHERE Sid ='$sid' ");
  mysql_query("UPDATE Sessions SET numOfSubmits='$numOfSubmits' WHERE Sid ='$sid' ");
 
  	//have to change the turn 
	//first find who has the turn now 
	$tbl_name="Players";
	//, Pid DESC 
	$sql="SELECT * FROM $tbl_name WHERE Sid='$sid'  ORDER BY turn DESC ";
	$result=mysql_query($sql);
	
 	$turn = array();
	$Pid= array();
	$playerName= array();
	$i=0;
	      
	 while($row = mysql_fetch_assoc($result))
	{   
	$i++;
	$turn[$i]=$row['Turn'];
	$playerName[$i]=$row['playerName'];
	$Pid[$i] =$row['Pid'];
	}
	
//thelw order by ID twra
$sql="SELECT * FROM $tbl_name WHERE Sid='$sid'  ORDER BY Pid ASC ";
	$result=mysql_query($sql);
	$PidOrder= array();
	$i=0;
	 while($row = mysql_fetch_assoc($result))
	{   
	$i++;	
	$PidOrder[$i] =$row['Pid'];
	}
//telos order by ID	
	print_r($Pid);
	echo "<br>";
	print_r($turn);
	$len=count($turn);
	echo "<br>" ;
	echo "<br>" ;
	$last =0;
	for($i=1; $i<=$len; $i++){
	echo " for i = " .$i ." turn = ". $turn[$i] ." and Pid = " .$Pid[$i]." me Pid order =  ".$PidOrder[$i];
	echo "<br>" ;		
		if($turn[$i]=='1'){			
		$pointerPid =$Pid[$i];
		if($pointerPid ==$PidOrder[$len]){
		$last = 1;
		}
				}
		}
	echo "the 1  is in = " .$pointerPid."<br>"  ;
		
		if($last=="1"){
		$next=$PidOrder[1];	
		}
				else{		
		$next=$pointerPid;
		$next++;
				}
		echo "the next is  = " .$next."and pointerPid is  ".$pointerPid."<br>"  ;	
		
		
	
	
	//den to vgazei swsta , paei sthn anna meta ston gom kai ksana sthn anna adi gia ton nerd...	
	echo "<br>";
	print_r($Pid);
	echo "<br>";
	print_r($turn);
	mysql_query("set names 'utf8'");
	mysql_query("SET CHARACTER SET 'utf8'");
	for($i=1; $i<=$len; $i++){
	 mysql_query("UPDATE Players SET Turn='0' WHERE Pid ='$Pid[$i]' ")or die(mysql_error());
; //den kanei update ,dokimase mysql error 
	}
	 mysql_query("UPDATE Players SET Turn='1' WHERE Pid ='$next' ")or die(mysql_error());
;
	
	$_SESSION['lastWord']=$lastWord;
	//	
//end checking number of submits and current sentences
	header("location:main.php");
?>