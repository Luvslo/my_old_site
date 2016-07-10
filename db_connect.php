<?php

	   $dbhost = "localhost";
	   $dbuser = "root";
	   $dbpass = "";
	   $db	= "gom"; 
	 
	   
	   
	    $con = mysql_connect($dbhost,$dbuser,$dbpass);
        if (!$con)
       {
        die('Could not connect: ' .mysql_error());
		
        }

$db_selected = mysql_select_db($db, $con);
mysql_select_db("$db")or die("couldn't connect to DB :("  );




?>
