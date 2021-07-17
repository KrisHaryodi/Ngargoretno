<?php 
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'desangar_wp769';

$konek = mysqli_connect($server, $username, $password) or die('koneksi gagal');
mysqli_select_db($konek, $database) or die('database tidak bisa dibuka');

$mysqli = new mysqli($server, $username, $password , $database);
if($mysqli->connect_error) {
  exit('Error connecting to database'); //Should be a message a typical user could understand in production
}
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli->set_charset("utf8mb4");
?>