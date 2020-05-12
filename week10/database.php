<?php
$servername = "localhost";
$username = "root";
$password = "root";
$port = 3307;
$dbname = "myDB";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// // Create database
// $sql = "CREATE DATABASE myDB";
// if (mysqli_query($conn, $sql)) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . mysqli_error($conn);
// }


// $sql = "CREATE TABLE student (
//     firstName VARCHAR(100),
//     lastName VARCHAR(100),
//     studentID VARCHAR(10),
//     school VARCHAR(100),
//     enrolled YEAR
//     )";

// if (mysqli_query($conn, $sql)) {
// echo "<p> Table student created successfully </p>";
// } else {
// echo "Error creating table: " . mysqli_error($conn);
// }

// // $sql = "INSERT INTO student VALUES('Jane', 'Doe', 's8645753','Physics', 2013 ); ";
// $sql = "INSERT INTO student VALUES('Thien', 'An', 's8632753','IT', 2020 ); ";

// if (mysqli_query($conn, $sql)) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//   }

$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {

    echo $row["firstName"]. " | " . $row["lastName"]. " | " . $row["studentID"]. " | " . $row["enrolled"].   "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>