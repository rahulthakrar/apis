<?php

include('connect.php');

$sql = "select * from rahul_products";
$response = array(); // response is array name
$result = mysqli_query($con, $sql);

while ($data = mysqli_fetch_array($result)) {
    $row['id'] = $data['id'];
    $row['p_name'] = $data['p_name'];
    $row['p_price'] = $data['p_price'];
    $row['p_des'] = $data['p_des'];

    array_push($response, $row);
}
echo json_encode($response);
