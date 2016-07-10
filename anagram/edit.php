<?php
ob_start();
session_start();
//print_r($_SESSION['wordBank']);
$wordbank=$_SESSION['wordBank'];
$NumOfQ =$_SESSION['numOfQ'] ;
$quizname=$_SESSION['quizname'];
$creator = $_SESSION['creator'];
$pass =  $_SESSION['pass'];


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




 </div><div class="Columns"><div class="MainColumn"><div class="Article">
      <p>
       
        </p><center>
       <font face="Helvetica Neue" size = '8' color="#006699">
       Edit your quiz game <br /></font>
        <font face="Helvetica Neue" size = '5' color="#006699">
        <form method="post" action="saveEdit.php">
        <?php
		$value=array();
        for ($i=1; $i<=$NumOfQ ; $i++)
  {
	  ?>
      <b>  Word no: </b><?php echo $i;?> <input type="text" align="middle" name="<?php echo "value"."$i"; ?>" value="<?php echo $wordbank[$i];?>"><br>
        <?php
  }
		?>
        <span class="ButtonInput"   ><span> <input  type="submit"  value=" Edit "></span></span>
        </form>
        
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