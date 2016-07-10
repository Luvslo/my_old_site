<?php
ob_start();
$mystring=strtolower($_GET['leettext']);

//echo $mystring;
$leet=str_split($mystring);
echo "\n";
foreach ($leet as &$value) {
////switch case field	
	
	switch ($value) {
    case 'a':
        echo " @ ";
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
        echo " 1 ";
        break;
		    case 'j':
        echo " _! ";
        break;
		    case 'k':
        echo " lX ";
        break;
		    case 'l':
        echo " l_ ";
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
		    default:
       echo "<font color='red'>__</font>";
	   
}
	
////end switch case	
    //echo $value; <-print converted value
	
}
?>
