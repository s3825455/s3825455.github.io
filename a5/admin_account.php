<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an account</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/create.css">
</head>

<body>
    <?php
    session_start();
    include 'database.php';
    ?>
    <div class="create-container">
        <form action="" method="post" name="create_form">
            <h1>CREATE AN ACCOUNT</h1>
            <div class="user-input">
                <i class="fas fa-user"></i>
                <input name="Username" type="text" placeholder="Username">
                <span><?php echo $name_error; ?></span>

            </div>

            <div class="user-input">
                <i class="fas fa-envelope"></i>
                <input name="email" type="text" placeholder="Email">
                <span><?php echo $email_error; ?></span>
            </div>

            <div class="user-input">
                <i class="fas fa-lock"></i>
                <input name="Password" type="password" placeholder="Password">
            </div>
            <span style="color: green; font-size: large"><?php echo $success ?> </span>
            <input name="register" type="submit" class="btn" value="CREATE ACCOUNT">
        </form>

    </div>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>