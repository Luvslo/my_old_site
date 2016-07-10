<?php
ob_start();
session_start();
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
        <font face="Times New Roman, Times, serif">
        <h1>Welcome <?php echo $_SESSION['creator']; ?>  !</h1>
        <h2>Create a new word bank </h2><br />
             <br /><font face="Times New Roman, Times, serif" size = '4'color='black'>
         <form name="form1" method="post" action="createNext.php">
        <strong> Word no : <?php echo $_SESSION['pointer']+1; ?> </br>   <input type="text" name="word" style='width:120px'></br></strong>
		</input>
<span class="ButtonInput"  ><span> <input  type="submit" name="button" value="Next Word"></span></span>
         </form>   
            
            </br></br>
            
           






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