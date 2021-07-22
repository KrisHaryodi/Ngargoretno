<?php 
include "../lib/koneksi.php";
$username = $_POST ['username'];
$password = $_POST ['password'];
if (!ctype_alnum($username) OR !ctype_alnum($password)) {
	
	echo "<script> alert ('Username atau password Anda salah'); window.location = 'index.php'; </script>";

} else {
	$login = mysqli_query($konek, "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'");
	$ketemu = mysqli_num_rows($login);
	$r = mysqli_fetch_array($login);
	if ($ketemu > 0 ) {
		session_start();

		$_SESSION['username'] = $r['username'];
		$_SESSION['password'] = $r['password'];
		$_SESSION['id_admin'] = $r['id_admin'];
		$_SESSION['nama']=$r['nama'];
    	$_SESSION['level_user']=$r['level_user'];
		
		$level_user=$r['level_user'];

		if($level_user=='Admin Super'){
            header('location:adminweb.php?module=home');
        }
		else{
			header('location:../adminweb.php?module=home');
		}

	} else {
		echo "<script> alert ('Username atau password Anda salah'); window.location = 'index.php'; </script>";
	}
}
 ?>