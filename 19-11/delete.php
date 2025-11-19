<?php

include('connect.php');

$id = $_POST['id'];

$sql_query = "DELETE FROM rahul_products WHERE id = '$id'";

if (mysqli_query($con, $sql_query)) {
    echo 'Record deleted successfully';
} else {
    'Try again';
}
mysqli_close($con);
