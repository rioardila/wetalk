<?php

function Connect()
{
   $dbhost = "localhost";
   $dbuser = "wetalkio_user";
   $dbpass = "LKjY8E4JkUxeQ23to3PQ";
   $dbname = "wetalkio_db";

   // Create connection
   $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

   return $conn;
}

?>
