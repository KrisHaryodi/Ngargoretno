<?php 
include "../lib/koneksi.php";
$username = $_POST ['username'];
$password = $_POST ['password'];
if (!ctype_alnum($username) OR !ctype_alnum($password)) {
	echo "<center>LOGIN GAGAL! <br>
	Username atau password anda tidak benar.<br>
	Atau akun anda sedang diblokir.<br>";
	echo "<a href=index.php><b>ULANGI LAGI</b></a></center>";
} else {
	$login = mysqli_query($konek, "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'");
	$ketemu = mysqli_num_rows($login);
	$r = mysqli_fetch_array($login);
	if ($ketemu > 0 ) {
		session_start();

		$_SESSION['namauser'] = $r['username'];
		$_SESSION['passuser'] = $r['password'];
		$_SESSION['id_admin'] = $r['id_admin'];

		header('location:adminweb.php?module=home');
	} else {
		echo "<center>LOGIN GAGAL! <br>
		Username atau password anda tidak benar.<br>
		Atau akun anda sedang diblokir.<br>";
		echo "<a href=index.php><b>ULANGI LAGI</b></a></center>";
	}
}
 ?>