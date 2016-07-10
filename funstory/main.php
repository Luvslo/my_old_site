<?php
session_start();
//$_SESSION['numOfSubmits']=0;
//$_SESSION['story']="";

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
        <font face="Helvetica Neue" size = '4'color='#333333'>
        <h1>Continue the story !</h1><br />
        
        <h2>the last word from previous sentence is :
         <br />
          <b>  <blockquote> <font size="6" color="green">" <?php echo $_SESSION['lastword'];?> " </font></b></h2>
           <br /></blockquote>
           
       </center>
<br />
<h1><b> First Sentence : </b></h1>
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
<h1><b>

Last Words : </b></h1><textarea onkeyup="textCounterr(this,'counterr',15);" id="message2" name="lastword" align="center" rows="1" cols="15" maxlength="15">
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


 <span class="ButtonInput"  ><span> <input  type="submit" name="start" value="   Continue   "></span></span></center>
  
  
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