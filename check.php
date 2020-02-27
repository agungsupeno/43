<?php 
session_start();
include 'koneksi.php';
$nik = $_POST['nik'];
$password = md5 ($_POST['password']);
$login = mysqli_query($koneksi,"select * from user where nik='$nik' and password='$password'");
$cek = mysqli_num_rows($login);
if($cek > 0){

	$data = mysqli_fetch_assoc($login);
	if($data['level']=="1"){
		$_SESSION['nik'] = $nik;
		$_SESSION['level'] = "1";
		header("location:1admin/home-admin.php");
	}
	else if($data['level']=="2"){
		$_SESSION['nik'] = $nik;
		$_SESSION['level'] = "2";
		header("location:2user/home-user.php");
	}
	else if($data['level']=="3"){
		$_SESSION['nik'] = $nik;
		$_SESSION['level'] = "3";
		header("location:2user/home-user.php");
	}
	else if($data['level']=="4"){
		$_SESSION['nik'] = $nik;
		$_SESSION['level'] = "4";
		header("location:2user/home-user.php");
	}
	else if($data['level']=="5"){
		$_SESSION['nik'] = $nik;
		$_SESSION['level'] = "5";
		header("location:2user/home-user.php");
	}
	else if($data['level']=="6"){
		$_SESSION['nik'] = $nik;
		$_SESSION['level'] = "6";
		header("location:2user/home-user.php");
	}
	else if($data['level']=="7"){
		$_SESSION['nik'] = $nik;
		$_SESSION['level'] = "7";
		header("location:2user/home-user.php");
	}
	else{
		header("location:logininven.php?pesan=gagal");
	}	
}else{
	header("location:logininven.php?pesan=gagal");
}

?>
