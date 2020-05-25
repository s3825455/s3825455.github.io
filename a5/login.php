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
    $login = array('admin1' => 'test1', 'admin2' => 'test2', 'An' => '123456');
    if (isset($_POST['Submit'])) {

        $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
        $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
        if (isset($login[$Username]) &&  $login[$Username] == $Password) {
            $_SESSION['Userdata']['Username'] = $Username;
            header("location: index.php");
            exit;
        } else {
            $Msg = "<span style='color: red'> Invalid Login Details </span>";
        }
    }
    ?>
    <div class="login-container">
        <form action="" method="post" name="Login_Form">
            <h1>LOGIN</h1>
            <div class="user-input">
                <i class="fas fa-user"></i>
                <input name="Username" type="text" placeholder="Username">
            </div>

            <div>
            <div class="user-input">
                <i class="fas fa-lock"></i>
                <input name="Password" type="password" placeholder="Password">
            </div>
            <span style="font-size:x-large;"> <?php echo $Msg; ?> </span>
            <input name="Submit" type="submit" class="btn" value="Sign in">
        </form>

    </div>

</body>

</html>