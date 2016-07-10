
<!DOCTYPE html>
<html>
<head>
    <title>Gom Solutions </title>
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
<font size = '4'color='black'>
<center>
<h1>Your words have been saved!</h1></center>

<br /> 
<?php
ob_start();
session_start();


//echo $_SESSION['gid'];
$gid=$_SESSION['gid'];
include('../db_connect.php');
$tbl_name="AnagWordBank";
$sql="SELECT * FROM $tbl_name WHERE Gid ='$gid' ORDER BY  Wid  ASC";

$result=mysql_query($sql);
	   $count=mysql_num_rows($result);
       $num_rows = mysql_num_rows($result);
	  //variables
	    $values=array();
		
		
		$i=0;

           while($row = mysql_fetch_assoc($result))
	{   
	
	$i++;
	$values[$i] =  $row['Value'];
	
		
	}
	



?>
<center>
<h2> <b>Your words are  : </b> </h2>  
 
 </br> 
<table border="2">

<tr>
<td> <b> <center> no </b></center></td>
<td width="150"> <b><center> Word </center></b> </td>


</tr>

<?php

for ($i=1; $i<=$_SESSION['num']; $i++)
 {
	 
	

echo "<tr>";
echo "<td>"."<center>".$i."</center>"."</td>";  
echo "<td>"."<center>". $values[$i]."</center>" ."</td>";
 

	 
echo "</tr>";	 
 }
	 ?>



</table> 
 
 
 

 </br> </br> </br>
<form name="form1" method="post" action="custom.php">



  

 <span class="ButtonInput"   ><span> <input  type="submit"  value=" Return "></span></span>
  
  
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