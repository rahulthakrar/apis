
<?php

include('connect.php');

$p_name = $_POST['p_name'];
$p_price = $_POST['p_price'];
$p_des = $_POST['p_des'];

if ($p_name == '' && $p_price == '' && $p_des == '') {
    echo '0';
} else {
    $sql = "insert into rahul_products (p_name , p_price, p_des) VALUES ('$p_name' , '$p_price' , '$p_des' )";
    if (mysqli_query($con, $sql)) {
        echo 'Data added successfully';
    } else {
        echo 'Failed to add';
    }
}
?>