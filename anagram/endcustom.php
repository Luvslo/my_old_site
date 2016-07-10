<?php
ob_start();
 session_start();
 include('../db_connect.php');
 
$wordBank=array();
$randomBank=array();
$playerName =$_SESSION['playerName'];
$playerScore=$_SESSION['playerScore'];
$wordBank =  $_SESSION['wordBank'] ;
$randomBank = $_SESSION['randomBank'];
$pointer = $_SESSION['pointer'];
//print_r($randomBank);
$gid = $_SESSION['gid'];
	
$tbl_name="AnagGames";
$sql="SELECT * FROM $tbl_name WHERE Gid ='$gid'";
 
  $result=mysql_query($sql);
	  
	   $count=mysql_num_rows($result);
       $num_rows = mysql_num_rows($result);
	 
	  
		$i=0;

           while($row = mysql_fetch_assoc($result))
	{   	
	$i++;
	$Creator=  $row['Creator'];	
	$GameName  =  $row['GameName'];	
	$NumOfQ  =  $row['NumOfQ'];	
	
	}
	


?>


<!DOCTYPE html>
<html>
<head>
    <title>Pseiridis - Pseiras Georgios </title>
    <link rel="stylesheet" href="../style.css" />
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
<font face="Helvetica Neue">
<font size = '6'color='blue'>
<h1> >> Game Over ! <<</h1></font>
<h2> You have successfully completed the quiz <font size = '5'color='green'> "<?php echo $GameName; ?>  "</font> created by <font size = '5'color='green'> "<?php echo $Creator; ?> " </font></h2>
<br /> 
<font size = '5'color='black'>
<center>
<h2> 
Your Final Score is : <font size = '8'color='red'> <?php echo     $playerScore;    ?>  </font> out of <font size = '8'color='red'> <?php echo     $NumOfQ;    ?>  </font> Questions!</h2></center>
 <br /> <br /> <br /> <br />
 
 <center>

 
 
 <?php
 
 $tbl_name="AnagramCustom";
$sql="SELECT * FROM $tbl_name  WHERE Gid ='$gid' ORDER BY Anagram_Score  DESC";
 
       $result=mysql_query($sql);
	   $count=mysql_num_rows($result);
       $num_rows = mysql_num_rows($result);
	  //variables
	    $anagramPlayer=array();
		$anagramScore=array();
		$anagramDate=array();
		
		$i=0;

           while($row = mysql_fetch_assoc($result))
	{   
	
	$i++;
	$anagramPlayer[$i] =  $row['Anagram_Player'];
	$anagramScore[$i]  =  $row['Anagram_Score'];
	$anagramDate[$i]  =  $row['Anagram_Date'];
		
	}
 

 $sql="SELECT * FROM $tbl_name  WHERE Gid ='$gid' ORDER BY  Anagram_Id  DESC";
 
       $result=mysql_query($sql);
	   $count=mysql_num_rows($result);
       $num_rows = mysql_num_rows($result);
	  //variables
	    $recentPlayer=array();
		$recentScore=array();
		$recentDate=array();
		$i=0;
 
 	   while($row = mysql_fetch_assoc($result))
	{   
	
	$i++;
	$recentPlayer[$i] =  $row['Anagram_Player'];
	$recentScore[$i]  =  $row['Anagram_Score'];
	$recentDate[$i]  =   $row['Anagram_Date'];
		
	}
 
 ?>
 
 <h2> <b>HALL OF FAME : </b> </h2> 


<table border="1">

<tr>
<td> <b> <center> Place </b></center></td>
<td width="150"> <b><center> Name </center></b> </td>
<td width="50"><b><center>  Score</b> </center></td>
<td width="250"><b> <center> Date</b></center> </td>
</tr>

<?php

for ($i=1; $i<=5; $i++)
 {
	 
	if (empty($anagramPlayer[$i]))
 {
	//echo " gia to noumero ".$i." exoume empty egrafi ";
	$anagramPlayer[$i]= "---";
	$anagramScore[$i]="---";
	$anagramDate[$i]="---";
	//echo " kai sinepws to onoma einai "  .$username[$i]." kai va8mo ".$highscores[$i];
	//echo "</br>";	
 } 

echo "<tr>";
echo "<td>"."<center>".$i."</center>"."</td>";  
echo "<td>"."<center>". $anagramPlayer[$i]."</center>" ."</td>";
echo "<td>"."<center>". $anagramScore[$i]."</center>"."</td>";    
echo "<td>"."<center>". $anagramDate[$i]."</center>"."</td>";

 
	 
	 
echo "</tr>";	 
 }
	 ?>



</table>
 </center>
 
 </br> </br> </br>
 <center>
 
 
 
 	 <h2> <b>Recent Games : </b> </h2> 
 <table border="1">

<tr>
<td> <b> <center> Most Recent </b></center></td>
<td width="150"> <b><center> Name </center></b> </td>
<td width="50"><b><center>  Score</b> </center></td>
<td width="250"><b> <center> Date</b></center> </td>
</tr>
 
 <?php

for ($i=1; $i<=5; $i++)
 {
	 
	if (empty($recentPlayer[$i]))
 {
	//echo " gia to noumero ".$i." exoume empty egrafi ";
	$recentPlayer[$i]= "---";
	$recentScore[$i]="---";
	$recentDate[$i]="---";
	//echo " kai sinepws to onoma einai "  .$username[$i]." kai va8mo ".$highscores[$i];
	//echo "</br>";	
 } 

echo "<tr>";
echo "<td>"."<center>".$i."</center>"."</td>";  
echo "<td>"."<center>". $recentPlayer[$i]."</center>" ."</td>";
echo "<td>"."<center>". $recentScore[$i]."</center>"."</td>";    
echo "<td>"."<center>". $recentDate[$i]."</center>"."</td>";

 
	 
	 
echo "</tr>";	 
 }
	 ?>



</table>
 </br> </br> </br>
<form name="form1" method="post" action="index.php">



  

 <span class="ButtonInput"  ><span> <input  type="submit"  value=" Play Again! "></span></span>
  
  
</p></td>
</form>



 </center>
 
 </div><div class="Columns"><div class="MainColumn"><div class="Article">
      <p>
       
        </p>
        
         <br /> <br />
</body>

 
</font>
</font>
 </div></div></div>
          <div class="Footer">
            <a href="mailto:g.pseiridis@gmail.com">Contact Me</a>
        </div>                

    </div></div>
    </div>
    <span class="BackLink"><a href="http://george-pseiridis.com/"> </a> </span>
</body>
</html>