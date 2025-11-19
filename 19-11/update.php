<?php

include('connect.php');

$id = $_POST['id'];
$p_name = $_POST['p_name'];
$p_price = $_POST['p_price'];
$p_des = $_POST['p_des'];

$sql_Query = "UPDATE rahul_products SET p_name = '$p_name' , p_price = '$p_price' , p_des = '$p_des' WHERE id = '$id'";

if (mysqli_query($con, $sql_Query)) {
    echo 'Records updated successfully';
} else {
    echo 'try again';
}

mysqli_close($con);
