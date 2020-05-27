<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <?php
    session_start();
    include 'database.php';


    ?>
    <div class="login-container">
        <form action="" method="post" name="Login_Form">
            <h1>LOGIN</h1>
            <div class="user-input">
                <i class="fas fa-user"></i>
                <input name="Username1" type="text" placeholder="Username" value="<?php echo $username1 ?>">
            </div>

            <div>
            <div class="user-input">
                <i class="fas fa-lock"></i>
                <input name="Password1" type="password" placeholder="Password">
            </div>
            <span style="font-size:x-large; color:blue"> <?php echo $msg; ?> </span>
            <input name="Submit" type="submit" class="btn" value="Sign in">
        </form>

    </div>

</body>

</html>