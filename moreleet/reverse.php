<?php
echo $_GET['converted'];

		$mystring=strtolower($_GET['converted']);
		$mystring=trim($mystring);
		//$mystring= str_replace("gom","(_+ 0 [)!!!!",$mystring);
		$leet=str_split($mystring);
		
		
			$mystring= str_replace("!!!","!",$mystring);
		$mystring= str_replace("(,)","q",$mystring);
		
		$mystring= str_replace("4","a",$mystring);
		$mystring= str_replace("8","b",$mystring);
		$mystring= str_replace("(","c",$mystring);
		$mystring= str_replace("[)","d",$mystring);		
		$mystring= str_replace("3","e",$mystring);
		$mystring= str_replace("/=","f",$mystring);
		$mystring= str_replace("6","g",$mystring);
		$mystring= str_replace("]~[","h",$mystring);
		
		$mystring= str_replace("!","i",$mystring);
		$mystring= str_replace("_|","j",$mystring);
		$mystring= str_replace("|<","k",$mystring);
		$mystring= str_replace("1","l",$mystring);
		
		$mystring= str_replace("|\/|","m",$mystring);
		$mystring= str_replace("/\/","n",$mystring);		
		$mystring= str_replace("0","o",$mystring);
		$mystring= str_replace("l>","p",$mystring);
		
		
		$mystring= str_replace("/2","r",$mystring);
		$mystring= str_replace("$","s",$mystring);
		$mystring= str_replace("7","t",$mystring);
		$mystring= str_replace("l_l","u",$mystring);
		
		$mystring= str_replace("\x/","w",$mystring);
		$mystring= str_replace("\/","v",$mystring);
		
		
		$mystring= str_replace("><","x",$mystring);
		$mystring= str_replace("'/","y",$mystring);	
		$mystring= str_replace("2","z",$mystring);
		$mystring= str_replace(" ","[]",$mystring);
		
		
		
echo "<br>";
echo "my string is ";
echo "<br>";

echo $mystring;

$query ="converted=".$mystring;
$query=trim($query);
$query= str_replace(" ","=",$query);

//echo $query
//session_start();




header("location:index.php"."?".$query);

?>