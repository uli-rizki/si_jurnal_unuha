<?php 
$server = 'localhost';
$username = 'uli';
$password = 'homedata123';
$db_name = 'db_jurnal_unuha';

$koneksi = new mysqli($server, $username, $password, $db_name);

if ($koneksi->connect_error) {
    die("<script>alert('Tidak tersambung dengan database')</script>");
}

?>