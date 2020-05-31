<?php
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



    <title >SHOEZ</title>
</head>

<body>
    <header>
        <div>
            <div id="header2">
                <h1 id="logo">$hoeZ</h1>
            </div>
        </div>
    </header>
    <?php include 'navbar.php' ?>

    <div class='container'>
        <h1>Products</h1>
        <div class="products-container">
            <?php
            foreach ($products as $key => $value) {
                // preShow($value);
                $name = $value['shoe_name'];
                $pid = $value['pid'];
                $href = "single_product.php?pid=$pid";
                setlocale(LC_MONETARY, "en_US");
                // $price = money_format("The price is %i", $value['price']);
                $price = "$ " . number_format($value['price'], 2);
                // preShow($value);
                if (isset($value['image_path'])) {
                    $path = $value['image_path'];
                } else {
                    $path = "";
                }
                echo "<div class='product-card card '>
                    <img class='card-img-top' src=$path alt='Card image cap'>
                    <div class='card-body'>
                        <div>
                            <h5 class='card-title'>$name</h5>
                            <h6 class='card-text'>$price</h6>
                        </div>
                        <a href=$href class='stretched-link d-hidden'></a>
                    </div>
                </div>";
            }

            ?>
        </div>
    </div>

    <footer id="footer">
        <div style="text-align: center;">
            <i class="fas fa-globe-americas"></i>
            <span>88 Lazy Lane Boulevard, Texas</span>
            <br>
            <i class="fas fa-phone"></i>
            <span>1900 8888</span>
            <br>
            <i class="fas fa-envelope"></i>
            <span>$hoeZ@gmail.com</span>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>