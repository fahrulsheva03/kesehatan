<!-- Koneksi ke Database -->

<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "puskesmas";

$koneksi = mysqli_connect($server, $username, $password, $database);
session_start();


if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}