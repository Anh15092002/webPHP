<?php

$host = "127.0.0.1";
$user = "root";
$password = "root";
$database = "giaythethao";
$con = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno()) {
    echo "Connection Fail: " . mysqli_connect_errno();
    exit;
}
