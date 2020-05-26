<?php
session_start();
// include 'tools.php';
$servername = "localhost";
$username = "root";
$password = "root";
$port = 3307;
$dbname = "A5DB";

// Create connection
$conn = mysqli_connect("$servername:$port", $username, $password, $dbname);
$sql = "SELECT pid, shoe_name, shoe_description, specs, image_path FROM Shoes";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $products = [];
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($products, $row);
    }
} else {
    echo "0 results";
}
// session_destroy();
$_SESSION['products'] = $products;
// preShow($_SESSION['products']);

mysqli_close($conn);
