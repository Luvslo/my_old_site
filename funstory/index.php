<?php
session_start();
$_SESSION['numOfSubmits']=0;
$_SESSION['story']="";

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

 </div><div class="Columns"><div class="MainColumn"><div class="Article">
      <p>
    
        </p>
        <center>
        <font face="Helvetica Neue" size = '6'>
        Create a NEW Fun Interactive Story!<br /></font><br />
        <img src="http://icons.iconarchive.com/icons/hopstarter/sleek-xp-basic/128/Document-Write-icon.png" />
          <br /> </center></font>
        
         
           <font  size = '4'color='orange' face="Helvetica Neue"><p>DESCRIPTION: </font> <font face="Helvetica Neue" size = '4'color='grey'> This game is played in 1 device . The first person starts by writing the first sentence and the last word then clicks submit. Last word is what is going to be visible to the next person ,either a word or small sentence. Then the person should continue the story based on the last word . When you reach the limit ,the complete , amazing story is going to be revelead.
  </br></font>
 <center> <font face="Helvetica Neue" size = '2'color='grey'>This game demonstrates use of php and javascript code. Please let me know if you come across any bugs           </font></center><br/>
      <font face="Helvetica Neue" size = '5'color='#333333'>  Write a sentence of no more than 150 characters , enter the last word of your sentence and press the start button! 
           <br />
           
       
            <br />
<b> First Sentence : </b>
<form name="form1" method="post" action="check.php">

<textarea onkeyup="textCounter(this,'counter',150);" id="message" name="sentence" align="center" rows="4" cols="50" maxlength="150">
</textarea>
<input disabled  maxlength="3" size="3" value="150" id="counter">
<script>
function textCounter(field,field2,maxlimit)
{
 var countfield = document.getElementById(field2);
 if ( field.value.length > maxlimit ) {
  field.value = field.value.substring( 0, maxlimit );
  return false;
 } else {
  countfield.value = maxlimit - field.value.length;
 }
}
</script>
<br><br>
<b>

Last Word : </b><textarea onkeyup="textCounterr(this,'counterr',15);" id="message2" name="lastword" align="center" rows="1" cols="15" maxlength="15">
</textarea>
<input disabled  maxlength="2" size="2" value="15" id="counterr">
<script>
function textCounterr(field,field2,maxlimit)
{
 var countfield = document.getElementById(field2);
 if ( field.value.length > maxlimit ) {
  field.value = field.value.substring( 0, maxlimit );
  return false;
 } else {
  countfield.value = maxlimit - field.value.length;
 }
}
</script>

<td><p>
<b>
Number of Sentences 
<br>
<input type="radio" name="numberSentences" value="10" checked>10<br>
<input type="radio" name="numberSentences" value="20">20<br>
<input type="radio" name="numberSentences" value="40">40<br></b>
  
<center>
 <span class="ButtonInput"  ><span> <input  type="submit" name="start" value="   START NOW!!!   "></span></span></center>
  
  
</p></td>
</form>

 <br /> <br />
</font>
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