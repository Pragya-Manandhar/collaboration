<?php 
// Database configuration 
$server = "localhost"; 
$username = "root"; 
$password = ""; 
$db = "gallery"; 
 
// Create database connection 
$con = new mysqli($server, $username, $password, $db); 
 
// Check connection 
if ($con) { 
    echo "Connection successful"; 
}
else{
    echo "No connection";
}
?>