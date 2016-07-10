<?php
if (empty($_GET)) {
    $textbox ="type your text here and press convert now!";
	
}
else
{	
	if (empty($_GET['converted'])) {
	$textbox=$_GET['leettext'];
	}
	else
	{
		$textbox=$_GET['converted'];
	}
	
}
?>

<style type="text/css">

textarea {
	color: #3333FF;
	background-color: #FFFFFF;
	cursor: text;
	font-family:"Times New Roman", Times, serif;
	font-size: 14pt;
}

</style>
<!DOCTYPE html>
<html>

<body>
<br>
<center>
<img src="coollogo_com-2666079.jpg"  ></center>
<form name="form1" method="get" action="index.php">


<textarea name="leettext"  rows="7" cols="70">
<?php echo $textbox;?>
</textarea>

<td><p>

  <input align type="submit"name="convert" value="Simple convert!">
  <input align type="submit"name="convert" value="Full Convert!">
  
  
</p></td>
</form>

</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>

<form name="form2" method="get" action="reverse.php">


<textarea name="converted" align="right" rows="7" cols="175">
<?php

if (empty($_GET['leettext'])) {
    // $_GET is empty
	
}
else
{
	
	
	if ($_GET['convert']=="Simple convert!"){//simple convert
		$mystring=strtolower($_GET['leettext']);
		$mystring=trim($mystring);
		
		$mystring= str_replace("gom","G0D!",$mystring);
		$leet=str_split($mystring);
		$mystring= str_replace("e","3",$mystring);
		$mystring= str_replace("a","4",$mystring);
		$mystring= str_replace("o","0",$mystring);
		$mystring= str_replace("l","1",$mystring);
		$mystring= str_replace("t","7",$mystring);
		$mystring= str_replace("i","!",$mystring);
		
	
	echo $mystring;
	
	
	
		
		
	
  $converted = $mystring;
	}//end if gia simple convert
	else
	{
		//echo "this is complicated";
		$mystring=strtolower($_GET['leettext']);
		$mystring=trim($mystring);
		
		$mystring= str_replace("gom","g0d",$mystring);
		$leet=str_split($mystring);
		$mystring= str_replace(" ","__",$mystring);
		
		
		$mystring= str_replace("a"," 4 ",$mystring);
		$mystring= str_replace("b"," 8 ",$mystring);
		$mystring= str_replace("c","(",$mystring);
		$mystring= str_replace("d"," [) ",$mystring);		
		$mystring= str_replace("e"," 3 ",$mystring);
		$mystring= str_replace("f"," /= ",$mystring);
		$mystring= str_replace("g"," 6 ",$mystring);
		$mystring= str_replace("h"," ]~[ ",$mystring);
		$mystring= str_replace("h"," ]~[ ",$mystring);
		$mystring= str_replace("i"," ! ",$mystring);
		$mystring= str_replace("j"," _| ",$mystring);
		$mystring= str_replace("k"," |< ",$mystring);
		$mystring= str_replace("l"," 1 ",$mystring);
		$mystring= str_replace("m"," |\/| ",$mystring);
		$mystring= str_replace("n"," /\/ ",$mystring);		
		$mystring= str_replace("o","0",$mystring);
		$mystring= str_replace("p"," l> ",$mystring);
		$mystring= str_replace("q"," (,) ",$mystring);
		$mystring= str_replace("r"," /2 ",$mystring);
		$mystring= str_replace("s"," $ ",$mystring);
		$mystring= str_replace("t","7",$mystring);
		$mystring= str_replace("u"," l_l ",$mystring);
		$mystring= str_replace("v"," \/ ",$mystring);
		$mystring= str_replace("w"," \X/ ",$mystring);
		$mystring= str_replace("x"," >< ",$mystring);
		$mystring= str_replace("y"," '/ ",$mystring);	
		$mystring= str_replace("z"," 2 ",$mystring);
		$mystring= str_replace("!"," !!! ",$mystring);
		
			
				
		
		echo $mystring;
	}//end full convert
	
	
	
	
}//end else if  gia GET empty





	?>
</textarea>

<td><p>

  <input align type="submit"name="leet" value="C0nv3rt T0 N0rm4l!!!">
 
  
  
</p></td>
</form>
</font>

</body>


</font>


</html>

