<?php 
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'desangar_wp769';

$konek = mysqli_connect($server, $username, $password) or die('koneksi gagal');
mysqli_select_db($konek, $database) or die('database tidak bisa dibuka');
?>