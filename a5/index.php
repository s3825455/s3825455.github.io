<?php
session_start();
require_once('config.php');
require_once('functions.php');
$products = getProducts();
include 'tools.php';
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// preShow($_SESSION);
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <title>Hello, world!</title>
</head>

<body>
    <header>
        <div>
            <div class="logo1">
                <img src="media/logo.png" alt="shoez logo" class="img-fluid" style="vertical-align: middle; max-width: 300px; font-style:italic">$HOEZ
            </div>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cart</a>
                </li>
                <?php
                if ($_SESSION['userdata'] == 'admin') {
                    echo '<li class="nav-item">
                    <a class="nav-link" href="panel.php">Admin panel</a>
                            </li>';
                    echo '<li class="nav-item">
                                <a class="nav-link" href="logout.php">Logout</a>
                            </li>';
                } else {
                    echo '<li class="nav-item">
                                <a class="nav-link" href="login.php">Login</a>
                            </li>';
                }

                ?>
            </ul>
        </div>
    </nav>

    <div class='container'>
        <h1>Products</h1>
        <div class="products-container">
            <?php
            foreach ($products as $key => $value) {
                // preShow($value);
                $name = $value['shoe_name'];
                $pid = $value['pid'];
                $href = "single_product.php?pid=$pid";
                // preShow($value);
                if (isset($value['image_path'])) {
                    $path = $value['image_path'];
                } else {
                    $path = "";
                }
                echo "<div class='card'>
                    <img class='card-img-top' src=$path alt='Card image cap'>
                    <div class='card-body'>
                        <h5 class='card-title'>$name</h5>
                        <a href=$href class='btn btn-primary'>Go somewhere</a>
                    </div>
                </div>";
            }

            ?>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>