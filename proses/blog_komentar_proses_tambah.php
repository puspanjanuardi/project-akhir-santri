<?php
session_start();
if (isset($_SESSION['login'])) {
	
	include 'koneksi.php';
	
	$nama    = isset($_POST['nama']) ? $_POST['nama'] : '';
	$email   = isset($_POST['email']) ? $_POST['email'] : '';
	$artikel_id  = isset($_POST['artikel_id']) ? $_POST['artikel_id'] : '';
	$komentar   = isset($_POST['komentar']) ? $_POST['komentar'] : '';

	if (!empty($nama)) {

		mysqli_query($connect, "INSERT INTO komentar VALUES (null,'$nama', '$email', '$artikel_id', '$komentar')");

		header("location:../blog_komentar.php");

	} else {

		echo "Silahkan lengkapi data <a href='../blog_komentar_tambah.php'>Blog Kategori</a>";

	}


} else {

  	echo "Please <a href='../index.php'>login</a> first.";

}
?>