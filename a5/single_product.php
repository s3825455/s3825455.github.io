<?php include('config.php'); ?>
<?php include('functions.php'); ?>
<?php include 'tools.php' ?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_GET['pid'])) {
    $product = getProduct($_GET['pid']);
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/single_product.css">
    </link>
    <title> <?php echo $product['shoe_name'] ?> | Sneakers</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cart</a>
                </li>
                <?php
                if (isset($_SESSION['Userdata'])) {
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

    <div class="container">
        <h2><a href="index.php" class="back-button"><i class="fas fa-arrow-left"></i> Back</a></h2>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <img class="product-image" src=<?php echo $product['image_path'] ?>>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="jumbotron">
                    <h1><?php echo $product['shoe_name'] ?> </h1>
                    <p>AVAILABLE COLOURS: <span class="badge badge-primary">Blue</span>
                        <span class="badge badge-secondary">Gray</span>
                        <span class="badge badge-success">Green</span>
                        <span class="badge badge-danger">Red</span>
                        <span class="badge badge-warning">Orange</span>
                        <span class="badge badge-info">Teal</span>
                        <span class="badge badge-light">Light</span>
                        <span class="badge badge-dark">Dark</span>
                    </p>
                    <p>STARTING AT: <b><?php echo "$ " . number_format($product['price'], 2); ?></b></p>
                    <form>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="exampleFormControlSelect1">Select Size:</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>6 UK</option>
                                    <option>7 UK</option>
                                    <option>8 UK</option>
                                    <option>9 UK</option>
                                    <option>10 UK</option>
                                    <option>11 UK</option>
                                    <option>12 UK</option>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label for="exampleFormControlSelect1">Amount:</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" disabled class="btn-block btn btn-secondary">ADD TO CART</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <!-- <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link " href="#description">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#specs">specs</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                <h3><?php echo $product['shoe_description'] ?></h3>
            </div>
            <div class="tab-pane fade" id="specs" role="tabpanel" aria-labelledby="specs-tab">
                <p><?php echo $product['specs'] ?></p>
            </div>
        </div> -->
        <ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="specs-tab" data-toggle="tab" href="#specs" role="tab" aria-controls="specs" aria-selected="false">Specs</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                <div class="container">
                    <p><?php echo $product['shoe_description'] ?></p>
                </div>
            </div>
            <div class="tab-pane fade" id="specs" role="tabpanel" aria-labelledby="specs-tab">
                <div class="container">

                    <p><?php echo $product['specs'] ?></p>
                </div>
            </div>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>