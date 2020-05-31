<?php
require_once('config.php');
require_once('functions.php');
include 'navbar.php';
include 'tools.php';
$total = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/cart.css">
</head>

<body>
    <div class="container p-2">
        <div class="cart-header">
            <h1 class="cart-header-content">Your cart | <?php echo count($_SESSION['cart']); ?> ITEM(s)</h1>
            <p class="mb-1 cart-header-content text-muted"><a href="index.php">CONTINUE SHOPPING</a></p>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="container ">
                    <?php
                    foreach ($_SESSION['cart'] as $index => $productArray) {
                        // $image = $productArray['image_path'];
                        foreach ($productArray as $key => $value) {
                            $$key = $value;
                        }
                        $formated_price = "$ " . number_format($price * $amount, 2);
                        $total += $price * $amount;
                        echo
                            "<div class='row p-1 product-list'>
                                <div class='col-lg-3 col-md-12'>
                                    <img class='product-image' src=$image_path>
                                </div>
                                <div class='col-lg-9 col-md-12'>
                                    <p>Product name: <b>$shoe_name</b></p>
                                    <p>size: <b>$size</b></p>
                                    <p>Amount: <b>$amount</b></p>
                                    <p>Price: $amount*$price = <b>$formated_price</b></p>
                                </div>
                            </div>";
                    }
                    ?>
                </div>
            </div>

            <div class='modal' tabindex='1' role='dialog'>
                <div class='modal-dialog' role='document'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <h5 class='modal-title'>Modal title</h5>
                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>
                        <div class='modal-body'>
                            <p>Modal body text goes here.</p>
                        </div>
                        <div class='modal-footer'>
                            <button type='button' class='btn btn-primary'>Save changes</button>
                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                        </div>
                    </div>
                </div>
            </div>




            <div class="col-lg-4 col-md-12">
                <div class="summary-container jumbotron p-2">
                    <h2>ORDER SUMMARY</h2>
                    <div class="container summary-box">
                        <div class="non-breaker"></div>
                        <p><?php echo count($_SESSION['cart']); ?> PRODUCTS</p>
                        <div class="breaker"></div>
                        <div class="cart-header">
                            <p>Products Total:</p>
                            <p><b><?php echo "$ " . number_format($total, 2); ?></b></p>
                        </div>
                        <div class="breaker"></div>
                        <div class="cart-header">
                            <p>Delivery:</p>
                            <p><b>Free</b></p>
                        </div>
                        <div class="breaker"></div>
                        <div class="cart-header">
                            <p><b>ORDER TOTAL:</b></p>
                            <p><b><?php echo "$ " . number_format($total, 2); ?></b></p>
                        </div>
                    </div>
                </div>
                <div class="summary-container jumbotron p-2">
                    <div class="container summary-box p-2">
                        <?php
                        // for form validation
                        if (!empty($_POST)) {
                            preShow($_POST['cust']['name']);
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                if (empty($_POST['cust']['name'])) {
                                    $nameErr = "Name is required!";
                                } else {
                                    if (!preg_match("/^[a-zA-Z \-.']{1,100}$/", $_POST['cust']['name'])) {
                                        $nameErr = "Only letters and whitespace are allowed.";
                                    }
                                }
                                if (empty($_POST['cust']['address'])) {
                                    $addressErr = "Address is required";
                                } else {
                                    if (!preg_match("/^\s*\S+(?:\s+\S+){2}/", $_POST['cust']['address'])) {
                                        $addressErr = "Please type the correct address format.";
                                    }
                                }
                                if (isset($nameErr) || isset($addressErr)) {
                                    // returns to index.php if error detected
                                } else {
                                    echo "<div class='modal' tabindex='-1' role='dialog'>
                                        <div class='modal-dialog' role='document'>
                                            <div class='modal-content'>
                                            <div class='modal-header'>
                                                <h5 class='modal-title'>Modal title</h5>
                                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                                </button>
                                            </div>
                                            <div class='modal-body'>
                                                <p>Modal body text goes here.</p>
                                            </div>
                                            <div class='modal-footer'>
                                                <button type='button' class='btn btn-primary'>Save changes</button>
                                                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                                            </div>
                                            </div>
                                        </div>
                                        </div>";

                                    // $_SESSION["booking"] = $_POST;
                                    // session_destroy();
                                    // session_regenerate_id(true);
                                    // header("location: login.php");
                                    // echo "<script>\n
                                    //     window.location.href = 'receipt.php';\n
                                    // </script>";
                                }
                            }
                        }
                        ?>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                            <?php
                            foreach ($_SESSION['cart'] as $key => $productArray) {
                                $pid = $productArray['pid'];
                                $size = $productArray['size'];
                                $amount = $productArray['amount'];
                                // preShow($key);
                                echo "<input type='hidden' name='products[$key][pid]' value=$pid >";
                                echo "<input type='hidden' name='products[$key][size]' value=$size >";
                                echo "<input type='hidden' name='products[$key][amount]' value=$amount >";
                            }
                            ?>
                            <div class="form-group">
                                <label for="cust-name">Name</label>
                                <input type="text" class="form-control" name="cust[name]" id="cust-name" aria-describedby="name field" placeholder="Enter name" value="<?= isset($_POST['cust']['name']) ? $_POST['cust']['name'] : ''; ?>">
                                <span class="error">* <?php echo $nameErr; ?></span>
                                <small id="name-help" class="form-text text-muted">We'll never share your credentials with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="cust-address">Address</label>
                                <input type="text" class="form-control" name="cust[address]" id="cust-address" placeholder="address" value="<?= isset($_POST['cust']['address']) ? $_POST['cust']['address'] : ''; ?>">
                                <span class="error">* <?php echo $addressErr; ?></span>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="cust[verify]" required class="form-check-input" id="cust-verify">
                                <label class="form-check-label" for="cust-verify">Confirm purchase</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST)) {
        $file = fopen('orders.csv', 'a');
        foreach ($_POST['products'] as $fields) {
            fputcsv($file, $fields);
        }
        fputcsv($file, $_POST['cust']);
        fclose($file);
        unset($_SESSION['cart']);
        header("location: index.php");
    }
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>