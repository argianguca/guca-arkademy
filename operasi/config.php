<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "arkademy";

$db = mysqli_connect($host, $user, $password, $database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>