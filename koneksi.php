<?php

$host = "localhost";
$user = "root";
$password = "";
$database_name = "books";

$koneksi = mysqli_connect($host, $user, $password, $database_name);

if(!$koneksi) {
    echo("Koneksi gagal");
}

?>