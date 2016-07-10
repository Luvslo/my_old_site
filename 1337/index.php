<?php
ob_start();

if (empty($_GET)) {
    $textbox ="type your text here and press convert now! " ;
}
else
{
	$textbox=$_GET['leettext'];
	if ($_GET['convert']=="Try both ways convert script!"){
		header("location:moreleet/index.php");
	}
	
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pseiris - Pseiras Georgios </title>
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
<img src="coollogo_com-2666079.jpg"  ></center>
 </div><div class="Columns"><div class="MainColumn"><div class="Article">
      <p>
       
        </p>
        <font face="Times New Roman, Times, serif">
        <h2>One way L33T converter  </h2><br />
            <br />

<form name="form1" method="get" action="index.php">


<textarea name="leettext" align="center" rows="5" cols="50">
<?php echo $textbox;?>
</textarea>

<td><p>

  <span class="ButtonInput"><span><input align type="submit"name="convert" value="Simple convert!"></span></span>

 <span class="ButtonInput"  style="margin-left: 145px;"><span> <input  type="submit"name="convert" value="   Full Convert!   "></span></span>
  
  
</p></td>
</form>
 <br /> <br />
</body>

<?php

if (empty($_GET)) {
    // $_GET is empty
}
else
{
	//echo $_GET['convert'];
	
	if ($_GET['convert']=="Simple convert!"){//simple convert
		$mystring=strtolower($_GET['leettext']);
		$mystring=trim($mystring);
		
		
		//if ($mystring=="gom"){
			//echo "<font size = '8'color='orange'>";
			$mystring= str_replace("gom","G0D!!!!",$mystring);
			 //echo "</font>";
			//$mystring="";
	//	}
		
		
		//echo $mystring;
		//echo ($_GET['leettext']);
		$leet=str_split($mystring);
		//check new lines
		
		//end check new lines
		$convertedstring[] ="";
		?>
          <blockquote>
		<font size="6" color="green">
        
        <?php
		foreach ($leet as &$value) {
			
			switch ($value) {
   		case 'a':
        echo "4";
		
		
		
        break;
		case 'o':
        echo "0";
		
		
        break;
		
		case 'l':
        echo "1";
		
        break;
		case 't':
        echo "7";
		
        break;
		case 'e':
        echo "3";
		
        break;
		//case new line "\n"
		//case '<br>':
        //echo "</br>";
        //break;
		//faiil
		
		 default:
       echo "<font color='blue'>";
	   echo $value;
	   
	   echo "</font>";
	   if(strpos($value, "\n") !== FALSE) {
 	 echo "</br>";
			}	
			}
		}
	
	}//end simple convert
	else
	{
		
		
	

$mystring=strtolower($_GET['leettext']);
$mystring=trim($mystring);
$mystring= str_replace("gom","god",$mystring);

//echo $mystring;
$leet=str_split($mystring);
	?>  
    <blockquote>  
    <font size="6" color="green">
     
       <?php
foreach ($leet as &$value) {
////switch case field	

 
    
    
	switch ($value) {
    case 'a':
        echo " 4 ";
        break;
    case 'b':
        echo " 13 ";
        break;
    case 'c':
        echo " ( ";
        break;
		 case 'd':
        echo " [) ";
        break;
		    case 'e':
        echo " 3 ";
        break;
		    case 'f':
        echo " /= ";
        break;
		    case 'g':
        echo " (_+ ";
        break;
		    case 'h':
        echo " ]~[ ";
        break;
		    case 'i':
        echo " ! ";
        break;
		    case 'j':
        echo " _| ";
        break;
		    case 'k':
        echo " lX ";
        break;
		    case 'l':
        echo " 1 ";
        break;
		    case 'm':
        echo " ]V[ ";
        break;
		    case 'n':
        echo " /V ";
        break;
		    case 'o':
        echo " () ";
        break;
		    case 'p':
        echo " l> ";
        break;
		    case 'q':
        echo " ()_ ";
        break;
		    case 'r':
        echo " /2 ";
        break;
		    case 's':
        echo " $ ";
        break;
		    case 't':
        echo " 7 ";
        break;
		    case 'u':
        echo " l_l ";
        break;
		    case 'v':
        echo " \/ ";
        break;
		    case 'w':
        echo " VV ";
        break;
		    case 'x':
        echo " >< ";
        break;
		
		    case 'y':
			echo "<b>";
        echo " '/ ";
		echo "</b>";
        break;
		    case 'z':
			echo "<b>";
        echo " 7_ ";
			echo "</b>";
        break;
		case '!':
			echo "<b>";
			
        echo "<font size = '7' color='blue'>!</font>";
			echo "</b>";
        break;
		case '?':
			echo "<b>";
			
        echo "<font size = '7' color='blue'>?</font>";
			echo "</b>";
        break;
			case '.':
			echo "<b>";
			
        echo "<font size = '7' color='blue'>.</font>";
			echo "</b>";
			
        break;
		
			case ',':
			echo "<b>";
			
        echo "<font size = '7' color='blue'>,</font>";
			echo "</b>";
			
        break;
			  
		?>
        
        
        
        <?php
		    default:
			 if(strpos($value, "\n") !== FALSE) {
 	 echo "</br>";}
	 else{
       echo "<font size='7' color='red'>_</font>";
	  
	 }
			
}
	
////end switch case	
    //echo $value; <-print converted value
	
}
	}//end else if gia simple 'h full
//end converting
//test for new line 
	/*	if(strpos($mystring, "\n") !== FALSE) {
 	 echo "newline";
			}
			else {
 			 echo "no new line";
				}
		*/
		//end test for new line to simple convert
}
?>
</blockquote> 
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