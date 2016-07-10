<?php
ob_start();
 session_start();
 
 
$wordBank=array();
$randomBank=array();
$playerName =$_SESSION['playerName'];
$playerScore=$_SESSION['playerScore'];
$wordBank =  $_SESSION['wordBank'] ;
$randomBank = $_SESSION['randomBank'];
$pointer = $_SESSION['pointer'];
//print_r($randomBank);


if (empty($wordBank[$pointer])){
	
	header("location:endMinusCustom.php");
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
</br>
<center>
<font face="Helvetica Neue" size='7'>
Hello <b><?php echo $playerName; ?> !!!</b> <br/></font>
 <font face="Helvetica Neue" size='4'>
 Guess the hidden word! 
 <h3> TIP : the first letter of the word starts with capital letter. However not all word's are going use a capital letter </h3>
<br /> <br /> <br /> <br />

<blockquote>
<center>
<h2>
<?php echo $randomBank[$pointer];  ?>
</h2>
</center>
</blockquote>
 <br /> <br /> <br /> <br />

<form name="form1" method="post" action="nextCustom.php">
 <font face="Times New Roman, Times, serif" size = '5'color='black'>Type the correct word: 
</font>
 <input type="text" name="playerAnswer"><br>

</textarea>

<td><p>

  

 <span class="ButtonInput"  ><span> <input  type="submit"name="convert" value=" OK! "></span></span>
  
  
</p></td>
</form>

</center>
 <br /> <br /> <br /> <br /> <br /> <br />
<strong>
<center>
<font size = '5'color='black'>
YOUR SCORE <b> </b><font size = '6'color='red'>: <?php echo     $playerScore;    ?>  </font></b>
 </strong></center>
 
 
 
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