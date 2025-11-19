<?php

include('connect.php');
$email = $_REQUEST['email'];
$pass = $_REQUEST['password'];

$sql = "select * from rahul_user where email = '$email' AND password = '$pass'";
$result = mysqli_query($con, $sql);

$num = mysqli_num_rows($result);

if ($num > 0) {
    $fetch = mysqli_fetch_object($result);
    echo json_encode(['code' => 200, 'message' => 'Login successful']);
} else {
    echo json_encode(['code' => 401, 'message' => 'Email and password required']);
}
