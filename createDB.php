<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   echo 'Connected successfully ';
   
   $sql = 'CREATE Database gom';
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
     // die('Could not create database: ' . mysql_error());
	 header("location:createTables.php"); 
	   }
   
   echo "Database gom created successfully \n";
   mysql_close($conn);
   
   header("location:createTables.php"); 
 ?>
