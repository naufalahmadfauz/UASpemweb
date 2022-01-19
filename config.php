<?php
$server = "sql6.freesqldatabase.com";
$user = "sql6466722";
$password = "QQFLQ6u6Ap";
$nama_database = "sql6466722";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}