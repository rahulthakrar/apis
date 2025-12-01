
<?php

include('connect.php');

$p_name = $_POST['p_name'];
$p_price = $_POST['p_price'];
$p_des = $_POST['p_des'];


// -----  Image upload logic ---------

//this is our upload folder
$upload_path = 'images/';

// Full URL (stored in database)
$upload_url = 'https://' . $_SERVER['SERVER_NAME'] . "/rahul/" . $upload_path;


// ========== GETTING IMAGE INFO ========== // 

$fileinfo = pathinfo($_FILES["p_img"]["name"]); // word name is tmp 
$extension = $fileinfo["extension"]; // jpg, png, etc

// generate image name uniquely

$random = "product_" . rand(1, 9999);

// URL that will be stored in database

$file_url = $upload_url . $random . '.' . $extension;

// Path where the file will be saved physically
$file_path = $upload_path . $random . '.' . $extension;

// ========== MOVE IMAGE TO SERVER ========== //

if (move_uploaded_file($_FILES["p_img"]["tmp_name"], $file_path)) {
    echo "Image uploaded successfully";
}


// ========== INSERT INTO DATABASE ========== //


$sql = "INSERT INTO rahul_products(p_name , p_price , p_des , p_img) VALUES ('$p_name','$p_price','$p_des','$file_url')";

if (mysqli_query($con, $sql)) {
    echo "Product added successfully";
} else {
    echo "Failed to add product";
}

mysqli_close($con);


?>