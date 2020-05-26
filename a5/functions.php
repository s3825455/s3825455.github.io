<?php 
/* * * * * * * * * * * * * * *
* Returns all published posts
* * * * * * * * * * * * * * */
function getPublishedPosts() {
	// use global $conn object in function
	global $conn;
	$sql =  "SELECT pid, shoe_name, shoe_description, specs, image_path FROM Shoes";
	$result = mysqli_query($conn, $sql);

	// fetch all posts as an associative array called $posts
	$products = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $products;
}

// more functions to come here ...
