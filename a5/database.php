<?php
session_start();
include_once 'tools.php';
$servername = "localhost";
$username = "root";
$password = "root";
$port = 3307;
$dbname = "A5DB";


// Create connection
$conn = mysqli_connect("$servername:$port", $username, $password, $dbname);
// Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";



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
//     price INTEGER NOT NULL,
//     image_path TEXT NOT NULL
//     )";

// if ($conn->query($sql) === TRUE) {
//     echo "Table created successfully";
//   } else {
//     echo "Error creating table: " . $conn->error;
//   }

// $sql = "INSERT INTO Shoes (pid, shoe_name, shoe_description, specs, price, image_path)
// VALUES ('G27504', 'ULTRABOOST 19', 'Ultraboost reinvented. These running shoes reboot key performance technologies to give you a confident and energy-filled run. The knit upper has a second-skin fit and is built with motion-weave technology for adaptive stretch and support. Dual-density cushioning delivers medial support and an energised ride.', 'Lace closure\n adidas Primeknit 360 upper\n Synthetic lining; Stretchweb outsole flexes naturally for an energised ride and Continental™ Rubber gives you superior traction\n Dual-density Boost cushioning under arch\n Natural feel like a second skin\n Weight: 309 g (size UK 8.5)\n Midsole drop: 10 mm (heel: 29 mm / forefoot: 19 mm)\n Arch type: Normal; Lightweight 3D heel frame for personalised fit; Stabilising Torsion Spring\n Color','300','./media/images/ultraboost-19/Ultraboost_19_Shoes_Beige_G27504_02_standard.jpg')";

// $sql = "INSERT INTO Shoes (pid, shoe_name, shoe_description, specs)
// VALUES ('EG4316', 'ULTRABOOST 20','Always one step ahead of the curve. Since the release of the Ultraboost in 2015, the world of running shoes has never been the same. These adidas shoes refine the legendary fit and feel of Ultraboost. The foot-hugging knit upper has stitched-in reinforcement for a locked-in fit. Responsive cushioning adds energy to your stride for that I-could-run-forever feeling.\n Good for the oceans\n Primeblue features Parley Ocean Plastic® which is made from recycled waste that is intercepted from beaches and coastal communities before it reaches the ocean.')

// $sql = "INSERT INTO Shoes (pid, shoe_name, shoe_description, specs, price, image_path)
// VALUES ('EG4316', 'MAVIA X SHOES','Lace into these adidas shoes for long days on the go. The Mavia X Shoes have a soft midsole for cushioned strides. Seamless 3-Stripes give these running-inspired shoes a sporty look. The sleek, elevated style spreads confidence wherever you roam.','Regular fit\n Lace closure\n Adaptive-fit knit and suede details\n Supportive shoes with ultra-soft cushioning\n Cushioned Cloudfoam midsole and sockliner\n Durable Adiwear outsole\n Color','250', './media/images/mavia_x_shoes/Mavia_X_Shoes_Purple_EG4316_01_standard.jpg')";

// $sql .= "INSERT INTO Shoes (pid, shoe_name, shoe_description, specs, price, image_path)
// VALUES ('EF1060','CRAZYCHAOS SHOES', 'A runner look fuelled by confidence. These shoes show off uncompromising style in a bulky, retro-inspired build. The smooth leather upper is contrasted with textured suede overlays. Plush cushioning ensures a smooth, comfortable ride.', 'Regular fit\n Lace closure\n Leather upper with suede overlays\n Rubber outsole; Textile lining\n Cushioned Cloudfoam midsole\n Color','600','./media/images/crazychaos-shoes/Crazychaos_Shoes_White_EF1049_010_hover_standard.jpg')";

// $sql .= "INSERT INTO Shoes (pid, shoe_name, shoe_description, specs, price, image_path)
// VALUES ('FW0536', 'ULTRABOOST S&L STAR WARS', 'Inspired by Star Wars™, built for comfort and performance. Designed for everyday running, these shoes have a soft textile upper with leather overlays. Responsive cushioning works with a flexible outsole to return energy to your stride.', 'Regular fit\n Lace closure\n Textile and leather upper\n Textile lining; Stretchweb outsole flexes naturally for an energised ride; Continental™ Rubber gives you superior traction\n Responsive Boost midsole; Stabilizing Torsion System\n Lightweight and adaptive\n Midsole drop: 10 mm (heel: 29 mm, forefoot: 19 mm)\n Arch type: Normal; Fitcounter heel for unrestricted fit\n Color','1000', './media/images/ultraboost-star-wars/Ultraboost_SandL_Star_Wars_Beige_FW0536_01_standard.jpg')";


// if (mysqli_query($conn, $sql)) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//   }


// $sql = "SELECT pid, shoe_name, shoe_description, specs FROM Shoes";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//   // output data of each row
//   while($row = mysqli_fetch_assoc($result)) {
//     echo "id: " . $row["pid"]. " - Name: " . $row["shoe_name"]. " - Description " . $row["shoe_description"]. " - Specs:" .$row["specs"]. "<br>"."<br>";


//   }
// } else {
//   echo "0 results";
// }
// session_destroy();


// sql to create table
// $sql = "CREATE TABLE admins (
//     username VARCHAR(30) PRIMARY KEY,
//     passwords TEXT NOT NULL,
//     emails TEXT NOT NULL
//     )";

// if ($conn->query($sql) === TRUE) {
//     echo "Table created successfully";
//   } else {
//     echo "Error creating table: " . $conn->error;
//   }

/////////////////////////////////////////////////////////////////////////////////////////
// CREATE NEW ACCOUNT

$username = "";
$email = "";
$username_error_count = 0;
$email_error_count = 0;
if (isset($_POST["register"])) {
  $username = $_POST["Username"];
  $password = $_POST["Password"];
  $email = $_POST["email"];

  $sql_u = "SELECT * FROM admins WHERE username='$username'";
  $sql_e = "SELECT * FROM admins WHERE emails='$email'";
  $res_u = mysqli_query($conn, $sql_u);
  $res_e = mysqli_query($conn, $sql_e);

  if (mysqli_num_rows($res_u) > 0) {
    $name_error = "Username is already taken!"; 
    $username_error_count++;
  }

  if(mysqli_num_rows($res_e) > 0){
    $email_error = "Email is already taken!"; 	
    $email_error_count++;
  }
 if ($username_error_count == 0 && $email_error_count== 0) {
         $query = "INSERT INTO admins (username, emails, passwords) 
              VALUES ('$username', '$email', '$password')";
         $results = mysqli_query($conn, $query);
        $success = "Account created successfully!";
  }
}
/////////////////////////////////////////////////////////////////////////////////////////
// lOG IN 

if (isset($_POST["Submit"])) {
  $username1 = $_POST["Username1"];
  $password1 = $_POST["Password1"];
  
  // $sql2 = "SELECT username FROM admins WHERE username='$username1'";
  $sql = "SELECT passwords FROM admins WHERE username='$username1'";
  $result = mysqli_query($conn, $sql);
  // $result2 = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
      if ($row["passwords"] == $password1) {
        $_SESSION["userdata"] = "admin";
        header("Location: index.php");
      } else {
        $_SESSION["userdata"] = "user";
      $msg = "INVALID ACCOUNT";
      }
  }
} else {
  $msg = "INVALID ACCOUNT";
}

}
/////////////////////////////////////////////////////////////////////////////////////////
// Create items

if (isset($_POST["save"])) {
  $u_id = $_POST["pid"];
  $u_name = $_POST["name"];
  $u_des = $_POST["description"];
  $u_specs = $_POST["specs"];
  $u_price = $_POST["price"];
  $u_path = $_POST["image"];



  $query = "INSERT INTO shoes (pid, shoe_name, shoe_description, specs, price, image_path)
  VALUES ('$u_id', '$u_name', '$u_des', '$u_specs', '$u_price', '$u_path')";
  $update = mysqli_query($conn, $query);
  $_SESSION["message"] = "Record has been created!";
  $_SESSION["msg_type"] = "success";
  header("location: panel.php");
}

/////////////////////////////////////////////////////////////////////////////////////////
// DELETE itemes

if (isset($_GET["delete"])) {
  $del_info = $_GET["delete"];
  // $del_info = 'MH370';
  $query = "DELETE FROM shoes WHERE id = '$del_info' ";
  mysqli_query($conn, $query);
  $_SESSION["message"] = "Record has been deleted!";
  $_SESSION["msg_type"] = "danger";
  header("location: panel.php");
  
}

/////////////////////////////////////////////////////////////////////////////////////////
//Delete admin

if (isset($_GET["delete2"])) {
  $del_ad = $_GET["delete2"];
  $query = "DELETE FROM admins WHERE id = '$del_ad' ";
  mysqli_query($conn, $query);
  $_SESSION["message2"] = "Record has been deleted!";
  $_SESSION["msg_type2"] = "danger";
  header("location: panel.php");
}


/////////////////////////////////////////////////////////////////////////////////////////
// Edit items

$eid = '';
$ename = '';
$edes = '';
$especs = '';
$eprice = '';
$epath = '';
$update = false;
$id = 0;

if (isset($_GET["edit"])){
  $id = $_GET["edit"];
  $update = true;
  $query = "SELECT * FROM shoes WHERE id = '$id' ";
  $uinfo = mysqli_query($conn, $query);
  if (count($uinfo) == 1) {
    $row = $uinfo -> fetch_array();
    $eid = $row['pid'];
    $ename = $row['shoe_name'];
    $ecate = $row['category'];
    $edes = $row["shoe_description"];
    $especs = $row["specs"];
    $eprice = $row["price"];
    $epath = $row["image_path"];
  
  }
}

if (isset($_POST["update"])) {
  $id = $_POST["id"];
  $nid = $_POST["pid"];
  $nname = $_POST["name"];
  $ncate = $_POST["category"];
  $ndes = $_POST["description"];
  $nspecs = $_POST["specs"];
  $nprice = $_POST["price"];
  $npath = $_POST["image"];

  $query = "UPDATE shoes SET pid = '$nid', shoe_name = '$nname', category = '$ncate', shoe_description = '$ndes', specs = '$nspecs', price = '$nprice', image_path = '$npath' WHERE id = '$id'";
  mysqli_query($conn, $query);

  $_SESSION["message"] = "Record has been updated!";
  $_SESSION["msg_type"] = "warning";
  header("location: panel.php");

}

/////////////////////////////////////////////////////////////////////////////////////////
// edit admins

$update2 = false;
$id2 = 0;
$n_user = '';
$n_pass = '';
$n_mail = '';

if (isset($_GET["edit2"])){
  $id2 = $_GET["edit2"];
  $update2 = true;
  $query = "SELECT * FROM admins WHERE id = '$id2' ";
  $n_admin = mysqli_query($conn, $query);
  if (count($n_admin) == 1) {
    $row2 = $n_admin -> fetch_array();
    $n_user = $row2['username'];
    $n_mail = $row2['emails'];
    $n_pass = $row2["passwords"];
  }
}

if (isset($_POST["update2"])) {
  $id2 = $_POST["id2"];
  $nun = $_POST["user_name"];
  $nem = $_POST["uemail"];
  $npw = $_POST["upass"];


  $query = "UPDATE admins SET username = '$nun', emails = '$nem', passwords = '$npw'  WHERE id = '$id2'";
  mysqli_query($conn, $query);

  $_SESSION["message2"] = "Record has been updated!";
  $_SESSION["msg_type2"] = "warning";
  header("location: panel.php");

}
/////////////////////////////////////////////////////////////////////////////////////////
if (isset($_FILES["shoe_image"])) {
$ext_error = false;
$extension = array('jpg', 'jpeg', 'gif', 'png');



  move_uploaded_file($_FILES["shoe_image"]['tmp_name'], 'media/images/'.$_FILES["shoe_image"]['name']);
  }


// preShow($_FILES);



mysqli_close($conn);
?>