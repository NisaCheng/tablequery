<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Connect to MySQL</title>
</head>
<body>
<?php

//Connect to the database - use these values if you are using my webserver, just change your db name to your own
$host = "denal.sgedu.site"; // My website hosting for those using my cpanel, if you are using your own, just use 127.0.0.1 to indicate your local host
$user = "denal305_class"; //Your database username 
$pass = "cosw30"; // Your database user password
$db = "denal305_stud17"; //Your database name you want to connect to - add your number to the end of this
$port = 3306; //The port #. It is always 3306

// Try to make a database connection
$connection = mysqli_connect($host, $user, $pass, $db, $port); // Catch any connection errors
if(mysqli_connect_errno()) {
 die("Database connection failed: " .
  mysqli_connect_error() .
  " (" .mysqli_connect_errno() . ")"
 );
 }	

// If no errors, you can proceed with your sql queries

?>

</body>
</html>