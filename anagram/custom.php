
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
            <a href="#" class="MenuButton"><span>Downloads</span></a></li>|<li>
            <a href="#" class="MenuButton"><span>About</span></a></li></ul>




 </div><div class="Columns"><div class="MainColumn"><div class="Article">
      <p>
       
        </p><center>
        
      <font face="Helvetica Neue" size = '8' color="#006699">  Create your own quiz game
      
       <br /> 
          <img src="http://icons.iconarchive.com/icons/oxygen-icons.org/oxygen/128/Actions-games-config-board-icon.png" />
         </font>
           
      <br />
            <br /> <br /> <br />
          <font face="Helvetica Neue" size = '5' color="#006699">
         <form name="form1" method="post" action="createCheck.php">
        <strong> QUIZ Name :</br>   <input type="text" name="quizName" style='width:120px'></br></strong>
		</input>
        <strong> Your Name : <br>   <input type="text" name="Creator" style='width:120px'></br></strong>
		</input>
        
        
         <strong> Your Pass : <br> 
      <font  size = '3'color='red'>   (Optional! In case you want to secure your test)
        </br></font>
           <input type="password" name="Pass" style='width:120px'></br></strong>
        
		</input>
        
        <strong> Number of Questions <br>
        <select id="num" name="num">
                    <option>10</option>
                    <option>20</option>
                    <option>30</option>
                </select></br></br>
        <span class="ButtonInput"  ><span> <input  type="submit" name="button" value="Create New Quiz"></span></span>
        <span class="ButtonInput"  ><span> <input  type="submit" name="button" value="Edit Your Quiz"></span></span>
         </form>   
            
            </br></br>
            	<hr>
           Or play one of the available user - made quizes below<br/>

<?php
include('../db_connect.php');
$tbl_name="AnagGames";
$sql="SELECT * FROM $tbl_name";
 
  $result=mysql_query($sql);
	  
	   $count=mysql_num_rows($result);
       $num_rows = mysql_num_rows($result);
	  //variables
	    $Creator=array();
		$Gid=array();
		$GameName=array();
		$Password=array();
		$NumOfQ=array();
		$i=0;

           while($row = mysql_fetch_assoc($result))
	{   
	
	$i++;
	$Creator[$i] =  $row['Creator'];
	$Gid[$i]  =  $row['Gid'];
	$GameName[$i]  =  $row['GameName'];
	$Password[$i]  =  $row['Password'];
	$NumOfQ[$i]  =  $NumOfQ;
	
	}//<- end fetch assoc
	
	
	if (empty($Gid[1])){
// if there is no post , go back
//note gia pio katw , thelw forma oxi links , den tha doulepsei etsi ;/
?>
 <font face="Helvetica Neue" size = '4' color="#666666">
<?php
echo " There are no available games yet ";
echo "</font>";
}
else
{

	 for ($i=1; $i<=$num_rows; $i++)
 {
	 
	 
?>	 

<form method="get" action="playcustom.php">
<input type="radio" name="gid" value="<?php echo $Gid[$i]; ?>" checked>
<?php	
echo "<font  size = '5'color='#006699'>"."Game # " .$i. " GAME NAME: " ."<font  size = '6'color='green'>". $GameName[$i] ."</font>"." created by " ."<font  size = '6'color='green'>"."$Creator[$i] "."</font>" ."</br>";
	
	
	
 }//end for







?>

 <strong> Enter your Name :</br>   <input type="text" name="player" style='width:120px'></br></strong>
<span class="ButtonInput"  ><span> <input  type="submit"  value="Play custom game!"></span></span>
</form>

<?php
}//end else if
?>

</center>
 <br /> <br /></font>
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