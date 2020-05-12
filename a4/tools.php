<?php
  session_start();

// Put your PHP functions and modules here

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialChars($data);
  return $data;
}

function preShow($arr, $returnAsString = false)
{
    $ret  = '<pre>' . print_r($arr, true) . '</pre>';
    if ($returnAsString)
        return $ret;
    else
        echo $ret;
}

