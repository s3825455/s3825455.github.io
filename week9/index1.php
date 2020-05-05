<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'tools.php' ?>
</head>

<body>
    <?php
    php2js($pricesObject, 'pricesArrayJS');   // ie echos javascript equivalent code
    ?>
<script>
    for (key in pricesArrayJS) {
        value = pricesArrayJS[key];
        document.Write(key + '<br>');
        for (key1 in value) {
            value1 = value[key1];
            document.write(key1 + ": " + value1 + '<br>');
        }
    }
</script>
</body>
<footer style="position: fixed; bottom: 0px;">
    <?php
    preShow($_GET);
    preShow($_POST);
    preShow($_SESSION);
    $aaarg = preShow($my_bad_array, true);
    echo "Why is \n $aaarg \n not working?";
    ?>
</footer>

</html>