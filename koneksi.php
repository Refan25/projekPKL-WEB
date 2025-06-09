<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "r2runn";


$koneksi = mysqli_connect($server, $username, $password, $database);

if ($koneksi) {
    echo "berhasil";
} else {
    echo "gagal terkoneksi ke database";
}
