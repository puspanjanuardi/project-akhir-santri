<?php
session_start();
if (isset($_SESSION['login'])) {

	// $connect = mysqli_connect("localhost", "root", "123", "ujian_2");
	include 'koneksi.php';
	
	$nama    = isset($_POST['nama']) ? $_POST['nama'] : '';
	$email   = isset($_POST['email']) ? $_POST['email'] : '';
	$artikel_id  = isset($_POST['artikel_id']) ? $_POST['artikel_id'] : '';
	$komentar   = isset($_POST['komentar']) ? $_POST['komentar'] : '';


	if (!empty($nama) && !empty($email)) {

		mysqli_query($connect, "
			UPDATE kategori
			SET nama = '$nama', email = '$email', artikel_id = '$artikel_id', komentar = '$komentar'
			WHERE id = '$id'
			");

		header("location:../blog_komentar.php");

	} else {

		echo "Silahkan lengkapi data <a href='../blog_komentar_tambah.php'>blog_kategori</a>";

	}


} else {

  	echo "Please <a href='../index.php'>login</a> first.";

}
?>