<?php
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Select Database
mysqli_select_db($conn,'product');
// Check connection
if ($conn) {
echo "Connected successfully"; 
} 
else
echo "Not connected";

?>