<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>
<body>
    <?php
    $name = "Thien An";     // student name
    $year = 1;
    define("pi", 3.14);
    echo "<h1> Hello World </h1>";
    echo "<p>My name is $name. I am a year $year student </p>" ;
    echo pi;

    $helloworld = "hello" . "world";
    echo "<p> $helloworld </p>";

    $year++;
    $year+=1;
    echo "$year";

    echo "<br>";

    if(5 !=  5.0) echo "Not equal";
    if(5 !== 5.0) echo "Not identical";

    echo "<br>";

    $array = ['A', 'B', 'C'];
    for ($i =0; $i<count($array); $i++) {
        echo "$array[$i]";
    }

    echo "<br>";

    $array1 = ['A' => 'Apple', 'B' => 'Bear', 'C' => 'Car'];

    foreach ($array1 as $key => $value) {
        echo " <p> Element " . $key . " has the value " . $value . " or " . $array1[$key] . "</p>";
    }

    $love = 'I love you';
    $greeting1 = 'Hello World,\n$love';
    $greeting2 = "Hello World,\n$love";

    echo $greeting1;

    echo "<br>";

    echo $greeting2;

    function hello($name1, $year1 ) {
        $name = "student 1";
        $year = 2;
        echo "<p>My name is $name. I am a year $year student </p>" ;
    }

    hello($name, $year);

    function divide($num, $den) {
        return ($den == 0) ?
            "Denominator can't be zero" :
            ($num / $den);
    }

    $result = divide(10,4);
    echo "$result";
    ?>

  
</body>
</html>