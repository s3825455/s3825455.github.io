<?php
$servername = "localhost";
$username = "root";
$password = "root";
$port = 3307;

// Create connection
$conn = mysqli_connect("$servername:$port", $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";



// Create database
// $sql = "CREATE DATABASE A5DB";
// if (mysqli_query($conn, $sql)) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . mysqli_error($conn);
// }

mysqli_close($conn);
?>
?>