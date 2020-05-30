<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <style type="text/css" scoped>
        .badge {
            padding-left: 9px;
            padding-right: 9px;
            -webkit-border-radius: 9px;
            -moz-border-radius: 9px;
            border-radius: 9px;
        }

        .label-warning[href],
        .badge-warning[href] {
            background-color: #c67605;
        }

        #lblCartCount {
            font-size: 12px;
            background: #ff0000;
            color: #fff;
            padding: 0 5px;
            vertical-align: top;
            margin-left: -10px;
        }
    </style>
    <a class="navbar-brand" href="#">$hoeZ</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php if (strpos($_SERVER['REQUEST_URI'], 'index.php') !== false) {
                echo '<li class="nav-item active">';
            } else {
                echo '<li class="nav-item">';
            } ?>
            <a class="nav-link" href="index.php">Home</a>
            </li>
            <?php if (strpos($_SERVER['REQUEST_URI'], 'cart.php') !== false) {
                echo '<li class="nav-item active">';
            } else {
                echo '<li class="nav-item">';
            } ?>
            <a class="nav-link" href="cart.php">Cart</a>
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
                if (strpos($_SERVER['REQUEST_URI'], 'login.php') !== false) {
                    echo '<li class="nav-item active">';
                } else {
                    echo '<li class="nav-item">';
                }
                echo '<a class="nav-link" href="login.php">Login</a>
                            </li>';
            }
            ?>
            <a class="nav-link" href="cart.php">
                <i class="fas fa-shopping-cart">
                </i>
                <span class='badge badge-warning' id='lblCartCount'>
                    <?php if (isset($_SESSION['cart'])) {
                        echo count($_SESSION['cart']);
                    }
                    ?>
                </span>
            </a>

        </ul>
    </div>

</nav>