<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="css/panel.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    
</head>




<body>
    <?php
    session_start();
    // ini_set('display_errors', 1);
    // error_reporting(E_ALL|E_STRICT);
    include 'tools.php';
    include 'database.php';
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $port = 3307;
    $dbname = "A5DB";
    $conn = mysqli_connect("$servername:$port", $username, $password, $dbname);
    $info_update = "SELECT * FROM shoes";
    $result1 = mysqli_query($conn, $info_update);
    $info_update_2 = "SELECT * FROM admins";
    $result2 = mysqli_query($conn, $info_update_2);
    // pre_r($result1);
    // pre_r($result1 -> fetch_assoc());
    ?>

    <header>
        <div>
            <div id="header1">
                <h1 id="logo">$hoeZ</h1>
            </div>
        </div>
    </header>
    <nav id="navbar" class="navbar sticky-top navbar-expand-sm navbar-dark bg-primary">
    <a id="shoez" href="" class="navbar-brand">$hoeZ</a>
    <div id="nav1" class="collapse navbar-collapse">
      <ul id="nav-items" class="navbar-nav mr-auto">
        <li class="nav-item mx-5">
          <a href="index.php" class="nav-link active">Homepage</a>
        </li>
        <li class="nav-item mx-5">
          <a href="logout.php" class="nav-link">Logout</a>
        </li>
      </ul>
    </div>

  </nav>



    <div class="container-fluid">
        <h1> Admin account</h1>
        <?php if (isset($_SESSION["message2"])) : ?>
            <div class="alert alert-<?= $_SESSION["msg_type2"] ?>">
                <?php echo $_SESSION["message2"];
                unset($_SESSION["message2"]);
                ?>
            </div>
        <?php endif ?>
        <div class="table-responsive">
            <table class="table table-hover table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <?php
                while ($row2 = $result2->fetch_assoc()) : ?>
                    <tr>
                        <td> <?php echo $row2["username"]; ?></td>
                        <td> <?php echo $row2["emails"]; ?></td>
                        <td> <?php echo $row2["passwords"]; ?></td>
                        <td>
                            <a href="panel.php?edit2=<?php echo $row2["id"]; ?>" class="btn btn-info">Edit</a>
                            <a href="database.php?delete2=<?php echo $row2["id"]; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>
        <div>
            <form action="database.php" method="post">
                <input type="hidden" name="id2" value="<?php echo $id2; ?>">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Username</label>
                            <input type="text" name="user_name" class="form-control" value="<?php echo $n_user; ?>" placeholder="Enter username">
                        </div>
                        <div class="col-sm-4">
                            <label>Email</label>
                            <input type="text" name="uemail" class="form-control" value="<?php echo $n_mail; ?>" placeholder="Enter email">
                        </div>
                        <div class="col-sm-4">
                            <label>Password</label>
                            <input type="text" name="upass" class="form-control" value="<?php echo $n_pass; ?>" placeholder="Enter password">
                        </div>
                    </div>
                </div>
                <div class="form-group" style="text-align: center;" >
                    <?php if ($update2 == true) : ?>
                        <button type="submit" class="btn btn-info btn-lg" name="update2">Update</button>
                    <?php else : ?>
                        <a href="admin_account.php" type="button" class="btn btn-info">Create an account</a>
                    <?php endif ?>
                </div>
            </form>




    </div>
    <div class="container-fluid">
        <h1> Shoes database </h1>
        <?php if (isset($_SESSION["message"])) : ?>
            <div class="alert alert-<?= $_SESSION["msg_type"] ?>">
                <?php echo $_SESSION["message"];
                unset($_SESSION["message"]);
                ?>
            </div>
        <?php endif ?>

        <div class="table-responsive">
            <table class="table table-hover table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Description</th>
                        <th scope="col">Specs</th>
                        <th scope="col">Price</th>
                        <th scope="col">Image</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>

                <?php
                while ($row = $result1->fetch_assoc()) : ?>
                    <tr>
                        <td> <?php echo $row["pid"]; ?></td>
                        <td> <?php echo $row["shoe_name"]; ?></td>
                        <td> <?php echo $row["category"]; ?></td>
                        <td> <?php echo $row["shoe_description"]; ?></td>
                        <td> <?php echo $row["specs"]; ?></td>
                        <td> <?php echo $row["price"]; ?></td>
                        <td> <?php echo $row["image_path"]; ?></td>
                        <td>
                            <a href="panel.php?edit=<?php echo $row["id"]; ?>" class="btn btn-info">Edit</a>
                            <a href="database.php?delete=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>
        <div>
            <form action="database.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-4">
                            <label>ID</label>
                            <input type="text" name="pid" class="form-control" value="<?php echo $eid; ?>" placeholder="Enter shoe ID">
                        </div>
                        <div class="col-sm-4">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $ename; ?>" placeholder="Enter shoe name">
                        </div>
                        <div class="col-sm-4">
                            <label>Price</label>
                            <input type="text" name="price" class="form-control" value="<?php echo $eprice; ?>" placeholder="Enter shoe price">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Image</label>
                            <input type="text" name="image" class="form-control" value="<?php echo $epath; ?>" placeholder="Enter image path">
                        </div>
                        <div class="col-sm-4">
                            <label>Specs</label>
                            <input type="text" name="specs" class="form-control" value="<?php echo $especs; ?>" placeholder="Enter shoe specs">
                        </div>
                        <div class="col-sm-4">
                            <label>Category</label>
                            <input type="text" name="category" class="form-control" value="<?php echo $ecate; ?>" placeholder="Enter shoe specs">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="description" class="form-control" value="<?php echo $edes; ?>" placeholder="Enter shoe description">
                </div>
                <div class="form-group" style="text-align: center;" >
                    <?php if ($update == true) : ?>
                        <button type="submit" class="btn btn-info btn-lg" name="update">Update</button>
                    <?php else : ?>
                        <button type="submit" class="btn btn-primary btn-lg" name="save">SAVE</button>
                    <?php endif ?>
                </div>
            </form>
        </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>