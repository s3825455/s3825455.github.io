<?php
// session_start();
// ini_set('display_errors', 1);
// error_reporting(E_ALL|E_STRICT);

// Put your PHP functions and modules here

// function test_input($data)
// {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialChars($data);
//     return $data;
// }

function preShow($arr, $returnAsString = false)
{
    $ret  = '<pre>' . print_r($arr, true) . '</pre>';
    if ($returnAsString)
        return $ret;
    else
        echo $ret;
}

function printMyCode()
{

    $lines = file($_SERVER['SCRIPT_FILENAME']);

    echo "<pre class='mycode'><ol>";

    foreach ($lines as $line)

        echo '<li>' . rtrim(htmlentities($line)) . '</li>';

    echo '</ol></pre>';
}

// if (isset($_POST['session-reset'])) {
//     session_destroy();
// foreach ($_SESSION as $something => &$whatever) {

//     unset($whatever);
// }
// }

function pre_r($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
