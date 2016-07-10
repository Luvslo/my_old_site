<?php
session_start();
ob_start();
include('../db_connect.php');
$sid = $_SESSION['Sid'];
$tbl_name="Sentences";
	$sql="SELECT * FROM $tbl_name WHERE Sid='$sid'  ";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
    $num_rows = mysql_num_rows($result);
	 
	 $story=array();
	 $Pid=array();
	 $i=0;
	            while($row = mysql_fetch_assoc($result))
	{   
	 $i++;	
	$story[$i]=$row['Value'];	
	$Pid[$i] =$row['Pid'];
	}//<- end fetch assoc
//find players for every value
$tbl_name="Players";
$players = array();
for ($i=1; $i<=$num_rows; $i++) {
$sql="SELECT * FROM $tbl_name WHERE Sid='$sid' AND Pid='$Pid[$i]' ";

 $result=mysql_query($sql);
   while($row = mysql_fetch_assoc($result))
	{   
	 
	 $players[$i]=$row['playerName'];
	
	}
}

//closed  = 1 
mysql_query("UPDATE Sessions SET Closed='1' WHERE Sid ='$sid' ");


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
             <ul><li><a href="../index.php" class="MenuButton"><span>Home</span></a></li>|<li>
            <a href="../projects.html" class="ActiveMenuButton"><span>My Projects</span></a></li>|<li>
            <a href="../downloads.html" class="MenuButton"><span>Downloads</span></a></li>|<li>
            <a href="../aboutme.html" class="MenuButton"><span>About Me</span></a></li></ul>


<center>

 </div><div class="Columns"><div class="MainColumn"><div class="Article">
      <p>
       
        </p>
        <center>
        <font face="Times New Roman, Times, serif">
        <h1>Story is Complete! Congratulations!</h1><br />
        </center>
        <h2>Your story is :
        
         <br />
          <b>  <blockquote>
         
           <?php		
	 for ($i=1; $i<=$num_rows; $i++) {
		  ?>
           <br/> 
           
          <font size="5" color="#3366FF">
           <?php		   	   
		   echo $players[$i]." - ";
		    ?>
          </font>
           <font size="5" color="coral">"
           <?php
		    echo $story[$i]; 
		   echo "\"";     
		  }
		  
		  //end for?>  
          <br/> </font></b></h2>
           
           </blockquote>
           
       
<br />

<form name="form1" method="post" action="index.php">

<center>
 <span class="ButtonInput"  ><span> <input  type="submit" name="start" value="   Start Again!   "></span></span></center>
  
  
</p></td>
</form>



 <br /> <br />
 <h3>  </h3>
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