
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
            <ul><li><a href="../index.php" class="MenuButton"><span>Home</span></a></li>|<li>
            <a href="../projects.html" class="ActiveMenuButton"><span>My Projects</span></a></li>|<li>
            <a href="../downloads.html" class="MenuButton"><span>Downloads</span></a></li>|<li>
            <a href="../aboutme.html" class="MenuButton"><span>About Me</span></a></li></ul>


<center>

 </div><div class="Columns"><div class="MainColumn"><div class="Article">
      <p>
       <font face="Helvetica Neue">
        </p>
        <center>
        <font face="Helvetica Neue" size = '6'>
        Welcome to the multiplayer version of a fun interactive story!!! <br /></font><br />
        <img src="http://icons.iconarchive.com/icons/hopstarter/soft-scraps/128/Document-Copy-icon.png" />
          </center>
           <font  size = '4'color='orange'><p>DESCRIPTION: </font> <font  size = '4'color='grey'>The game is simple . You  a session and by the time you do , your friends can join . The game will start only when all your friends have joined in your session . The creator of the session starts writing a story and then chooses the last word . Last word or last sentence is what is going to be visible to the other player. When the session is finished , the complete story will be revealed ! You can review your stories in the closed sessions.
  </br>
 <center> </font>
 
 <a onClick="toggle();" ><font  size = '4'color='#006699'>
 
  <i> Click here to show How to play</i></font> </a></center>
  <div id="newpost" style="display:none" >
 <font  size = '4' color='#666666' face="Helvetica Neue">
 <ul>
 1. Create a New Session<br/>
 2. Give a name for the session, your name and a password if you want to secure your name <br/> 		          
 3. Select the session you created and enter. It's good idea to invite your friends to join .  <br/> 	
 4. The session won't start until all players have joined . First plays the creator of the session <br/>
 5. Type a sentence and a last word . Last word is what's going to be visible to the next player<br/>
 6. When you submit you just wait your turn and the next player writes his sentence based on the last word you gave <br/>
 7. Repeat until the story is complete. When it does the complete story will appear and the session will be available in the closed sessions  
   </ul>
 </div> 
 <script>
  var toggle = function() {
  var mydiv = document.getElementById('newpost');
  if (mydiv.style.display === 'block' || mydiv.style.display === '')
    mydiv.style.display = 'none';
  else
    mydiv.style.display = 'block'
  }
</script>
  
  </font>
 <br/><br/>

 
 <center>
<font  size = '2'color='grey'>This game demonstrates use of php -mysql - javascript and basic ajax & jquery code . Please let me know if you come across any bugs           </font>
           </center>
            </p> 
           <center>
    
          <strong> <font  size = '6'>   Create a new Session </font><br/><br/></strong>
<form name="form1" method="post" action="check.php">
 <strong><font  size = '4'>Type Session Name here  :</strong> </br>
 <input type="text" name="sessionName"></input></br></br>
<strong>Type your name here :</strong> </br>
 <input type="text" name="Creator"></input></br></br>


 <strong>  Session Pass :  
      <font  size = '3'color='red' >   ( </font><font  size = '2'color='red' >Optional!</font> <font  size = '3'color='red' >) 
       </font> </strong> </br> </font>
 <input type="text" name="sessionPass"></input></br>

<td><p>
<strong> Number of Sentences <br>
        	  <select id="numSentences" name="numSentences">
                    <option>10</option>
                    <option>20</option>
                    <option>30</option>
                    <option>40</option>
                    <option>50</option>
                    <option>60</option>
                    <option>70</option>
                    <option>80</option>
                </select></br></br>
                Number of Players </br>
                <select id="numPlayers" name="numPlayers">
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                </select></br></br>
</font>
  

 <span class="ButtonInput"  ><span> <input  type="submit" name="" value="   New Session   "></span></span>
  
  
</p></td>
</form>

<hr>
<font face="Helvetica Neue">

<font face="Helvetica Neue" size='6'>Available Sessions so far....</br></br></font>
<?php
ob_start();
include('../db_connect.php');
	$tbl_name="Sessions";
	$sql="SELECT * FROM $tbl_name WHERE Closed='0'";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
 
       $num_rows = mysql_num_rows($result);
	  //variables
	    $Creator=array();
		$Sid=array();
		$sessionName=array();
		$numPlayers=array();
		$NumSentences=array();//vale to se form 'h akoma kai invisible
		$i=0;

           while($row = mysql_fetch_assoc($result))
	{   
	
	$i++;
	$Creator[$i] =  $row['Creator'];
	$Sid[$i]  =  $row['Sid'];
	$sessionName[$i]  =  $row['sessionName'];
	$numPlayers[$i]  =  $row['numPlayers'];
	$NumSentences[$i]  =  $row['NumSentences'];
	$NumCurrentPlayers [$i]  =  $row['NumCurrentPlayers'];
	$numOfSubmits[$i] = $row['numOfSubmits'];
	}//<- end fetch assoc
	
	
	if (empty($Sid[1])){
// if there is no post , go back
//note gia pio katw , thelw forma oxi links , den tha doulepsei etsi ;/
echo " There are no available sessions yet ";
}
else
{

	 for ($i=1; $i<=$num_rows; $i++)
 {
	 
	 
?>	 


<form method="get" action="playCheck.php">
<input type="hidden" name="sessionName"  value="<?php echo $sessionName[$i]; ?>" >
<input type="hidden" name="Creator"  value="<?php echo $Creator[$i]; ?>" >
<input type="hidden" name="NumCurrentPlayers"  value="<?php echo $NumCurrentPlayers[$i]; ?>" >
<input type="hidden" name="numPlayers"  value="<?php echo $numPlayers[$i]; ?>" >
<input type="hidden" name="numOfSubmits"  value="<?php echo $numOfSubmits[$i]; ?>" >
<input type="hidden" name="NumSentences"  value="<?php echo $NumSentences[$i]; ?>" >


<input type="radio" name="sid" value="<?php echo $Sid[$i]; ?>" checked>
<font  size = '4'>
<?php	
echo "Session # " .$i. "  NAME: " ."<font  size = '4'color='green'>". $sessionName[$i] ."</font>"." created by " ."<font  size = '4'color='green'>"."$Creator[$i] "."</font>"."<font  size = '4'color='#0000FF'>"." (".$NumCurrentPlayers [$i]." / ".$numPlayers[$i]."  )"."</font>"."</br>"."</br>";
	


	
 }//end for
?>
</font>
</br>
 <strong> Enter your Name :</br>   <input type="text" name="player" style='width:120px'></br></strong></br>
 <strong> Enter Session password : </br><font  size = '3'color='red' >   ( </font><font  size = '2'color='red' ><i>Leave empty if session doesn't require password</font> </i><font  size = '3'color='red' >)
       </font></br>   <input type="pass" name="pass" style='width:120px'></br></strong>
       
<span class="ButtonInput"  ><span> <input  type="submit"  value="Start the Fun!"></span></span>

</form>

<?php
}//end else if
?>




<hr>
<font face="Helvetica Neue" size='6'>Closed sessions</font><br/><br/><br/>
<?php


$tbl_name="Sessions";
	$sql="SELECT * FROM $tbl_name WHERE Closed='1'";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
 
       $num_rows = mysql_num_rows($result);
	  //variables
	    $Creator=array();
		$Sid=array();
		$sessionName=array();
		$numPlayers=array();
		$NumSentences=array();//vale to se form 'h akoma kai invisible
		$i=0;

           while($row = mysql_fetch_assoc($result))
	{   
	
	$i++;
	$Creator[$i] =  $row['Creator'];
	$Sid[$i]  =  $row['Sid'];
	$sessionName[$i]  =  $row['sessionName'];
	$numPlayers[$i]  =  $row['numPlayers'];
	$NumSentences[$i]  =  $row['NumSentences'];
	$NumCurrentPlayers [$i]  =  $row['NumCurrentPlayers'];
	$numOfSubmits[$i] = $row['numOfSubmits'];
	}//<- end fetch assoc
	
	
	if (empty($Sid[1])){
// if there is no post , go back
//note gia pio katw , thelw forma oxi links , den tha doulepsei etsi ;/
echo " There are no available sessions yet ";
}
else
{

	 for ($i=1; $i<=$num_rows; $i++)
 {
	 
	 
?>	 
</center>

<form method="get" action="endMinus.php">
<input type="hidden" name="sessionName"  value="<?php echo $sessionName[$i]; ?>" >
<input type="hidden" name="Creator"  value="<?php echo $Creator[$i]; ?>" >
<input type="hidden" name="NumCurrentPlayers"  value="<?php echo $NumCurrentPlayers[$i]; ?>" >
<input type="hidden" name="numPlayers"  value="<?php echo $numPlayers[$i]; ?>" >
<input type="hidden" name="numOfSubmits"  value="<?php echo $numOfSubmits[$i]; ?>" >
<input type="hidden" name="NumSentences"  value="<?php echo $NumSentences[$i]; ?>" >


<input type="radio" name="sid" value="<?php echo $Sid[$i]; ?>" checked style="vertical-align: middle; margin: 0px;">
<font  size = '4'>

<?php	
echo "Session # " .$i. "  NAME: " ."<font  size = '4'color='green'>". $sessionName[$i] ."</font>"." created by " ."<font  size = '4'color='#006699'>"."$Creator[$i] "."</font>"."<font  size = '4'color='#0000FF'>". "</font>"."</br>"."</br>";
	


	
 }//end for




}


?>

</font>
<br/>
<center>
 <strong> Enter Session password : </br><font  size = '3'color='red' >   ( </font><font  size = '2'color='red' ><i>Leave empty if session doesn't require password</font> </i><font  size = '3'color='red' >)
       </font></br>   <input type="pass" name="pass" style='width:120px'></br></strong>
<span class="ButtonInput"  ><span> <input  type="submit"  value="Read an Amazing Story!"></span></span>

</form>
</br></br>

 <br /> <br />
</body>

 </center>
</font>
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