<?php
    $array1 = ['A', 'B', 'C'];
    $array2 = array('A', 'B', 'C');
    $array3[0] = 'A';
    $array3[1] = 'B';
    $array3[2] = 'C';


    print_r($array1);
    echo "<br>";
    var_dump($array1);
    echo "<br>";


    $assoc1 = ['A' => 'Apple', 'B' => 'Bear', 'C' => 'Chair'];
    $assoc2 = array('A' => 'Apple', 'B' => 'Bear', 'C' => 'Chair');
    $assoc3['A'] = 'Apple';
    $assoc3['B'] = 'Bear';
    $assoc3['C'] = 'Chair';


    $output = print_r($assoc1, true);
    echo "<pre> $output </pre>";


?>