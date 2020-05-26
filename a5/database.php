<?php
$servername = "localhost";
$username = "root";
$password = "root";
$port = 3307;
$dbname = "A5DB";

// Create connection
$conn = mysqli_connect("$servername:$port", $username, $password, $dbname);

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


// sql to create table
// $sql = "CREATE TABLE Shoes (
//     pid VARCHAR(30) PRIMARY KEY,
//     shoe_name VARCHAR(30) NOT NULL,
//     shoe_description TEXT NOT NULL,
//     specs TEXT NOT NULL,
//     image_path TEXT NOT NULL
//     )";

// if ($conn->query($sql) === TRUE) {
//     echo "Table created successfully";
//   } else {
//     echo "Error creating table: " . $conn->error;
//   }

$sql = "INSERT INTO Shoes (pid, shoe_name, shoe_description, specs)
VALUES ('G27504', 'ULTRABOOST 19', 'Ultraboost reinvented. These running shoes reboot key performance technologies to give you a confident and energy-filled run. The knit upper has a second-skin fit and is built with motion-weave technology for adaptive stretch and support. Dual-density cushioning delivers medial support and an energised ride.', 'Lace closure\n adidas Primeknit 360 upper\n Synthetic lining; Stretchweb outsole flexes naturally for an energised ride and Continental™ Rubber gives you superior traction\n Dual-density Boost cushioning under arch\n Natural feel like a second skin\n Weight: 309 g (size UK 8.5)\n Midsole drop: 10 mm (heel: 29 mm / forefoot: 19 mm)\n Arch type: Normal; Lightweight 3D heel frame for personalised fit; Stabilising Torsion Spring\n Color')";

// $sql = "INSERT INTO Shoes (pid, shoe_name, shoe_description, specs)
// VALUES ('EG4316', 'ULTRABOOST 20','Always one step ahead of the curve. Since the release of the Ultraboost in 2015, the world of running shoes has never been the same. These adidas shoes refine the legendary fit and feel of Ultraboost. The foot-hugging knit upper has stitched-in reinforcement for a locked-in fit. Responsive cushioning adds energy to your stride for that I-could-run-forever feeling.\n Good for the oceans\n Primeblue features Parley Ocean Plastic® which is made from recycled waste that is intercepted from beaches and coastal communities before it reaches the ocean.')

// $sql = "INSERT INTO Shoes (pid, shoe_name, shoe_description, specs)
// VALUES ('EG4316', 'MAVIA X SHOES','Lace into these adidas shoes for long days on the go. The Mavia X Shoes have a soft midsole for cushioned strides. Seamless 3-Stripes give these running-inspired shoes a sporty look. The sleek, elevated style spreads confidence wherever you roam.','Regular fit\n Lace closure\n Adaptive-fit knit and suede details\n Supportive shoes with ultra-soft cushioning\n Cushioned Cloudfoam midsole and sockliner\n Durable Adiwear outsole\n Color')";

// $sql .= "INSERT INTO Shoes (pid, shoe_name, shoe_description, specs)
// VALUES ('EF1060','CRAZYCHAOS SHOES', 'A runner look fuelled by confidence. These shoes show off uncompromising style in a bulky, retro-inspired build. The smooth leather upper is contrasted with textured suede overlays. Plush cushioning ensures a smooth, comfortable ride.', 'Regular fit\n Lace closure\n Leather upper with suede overlays\n Rubber outsole; Textile lining\n Cushioned Cloudfoam midsole\n Color')";

// $sql .= "INSERT INTO Shoes (pid, shoe_name, shoe_description, specs)
// VALUES ('FW0536', 'ULTRABOOST S&L STAR WARS', 'Inspired by Star Wars™, built for comfort and performance. Designed for everyday running, these shoes have a soft textile upper with leather overlays. Responsive cushioning works with a flexible outsole to return energy to your stride.', 'Regular fit\n Lace closure\n Textile and leather upper\n Textile lining; Stretchweb outsole flexes naturally for an energised ride; Continental™ Rubber gives you superior traction\n Responsive Boost midsole; Stabilizing Torsion System\n Lightweight and adaptive\n Midsole drop: 10 mm (heel: 29 mm, forefoot: 19 mm)\n Arch type: Normal; Fitcounter heel for unrestricted fit\n Color')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  

mysqli_close($conn);
?>
?>