<?php
/* * * * * * * * * * * * * * *
* Returns all products
* * * * * * * * * * * * * * */


function getProducts()
{
    // use global $conn object in function
    global $conn;
    $sql =  "SELECT * FROM shoes";
    $result = mysqli_query($conn, $sql);

    // fetch all posts as an associative array called $posts
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $products;
}

function getProductsCate($cate)
{
    global $conn;
    // Get single post slug
    $cate = $_GET['category'];
    $sql = "SELECT * FROM shoes WHERE category='$cate'";
    $result = mysqli_query($conn, $sql);

    // fetch query results as associative array.
    $product = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $product;
}

function getProduct($pid)
{
    global $conn;
    // Get single post slug
    $pid = $_GET['pid'];
    $sql = "SELECT * FROM shoes WHERE pid='$pid'";
    $result = mysqli_query($conn, $sql);

    // fetch query results as associative array.
    $product = mysqli_fetch_assoc($result);
    return $product;
}

function getTopicNameById($id)
{
    global $conn;
    $sql = "SELECT * FROM shoes WHERE pid=$id";
    $result = mysqli_query($conn, $sql);
    $product = mysqli_fetch_assoc($result);
    return $product;
}
