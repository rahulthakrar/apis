<?php
// same as insert
include('connect.php');

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$pass = $_POST['password'];

if ($name == '' && $email == '' && $mobile == '' && $pass == '') {
    echo '0';
} else {
    $sql = "insert into rahul_user (name , email, mobile , password) VALUES ('$name' , '$email' , '$mobile' , '$pass' )";
    //mysqli_query($con, $sql);
    if (mysqli_query($con, $sql)) {
        echo 'Data added successfully';
    } else {
        echo 'Failed to add';
    }
}
