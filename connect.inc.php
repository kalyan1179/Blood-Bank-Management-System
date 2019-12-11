<?php
// $v=mysqli_connect('localhost','kalyan','','BBM') or die("couldn't connect");
$servername = "localhost";
$username = "kalyan";
$password = "";
$dbname = "BBM";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
?>