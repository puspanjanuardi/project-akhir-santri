<?php
session_start();
if (isset($_SESSION['login'])) {

	// $connect = mysqli_connect("localhost", "root", "123", "pondok_it");
	include 'koneksi.php';
	
	$nama    = isset($_POST['nama']) ? $_POST['nama'] : '';
	$alamat  = isset($_POST['alamat']) ? $_POST['alamat'] : '';
	$tempat  = isset($_POST['tempat_lahir']) ? $_POST['tempat_lahir'] : '';
	$tanggal = isset($_POST['tanggal_lahir']) ? $_POST['tanggal_lahir'] : '';
	$jenis   = isset($_POST['jenis']) ? $_POST['jenis'] : '';

	$tanggal_input 	= date('Y-m-d H:i:s');
	$author_id 		= $_SESSION['author_id'];

	if (!empty($nama) && !empty($alamat) && !empty($tempat) && !empty($tanggal) && !empty($jenis)) {

		mysqli_query($connect, "INSERT INTO comentar VALUES (null,'$nama', '$tempat', '$tanggal', '$alamat', '$jenis', '$author_id', '$tanggal_input')");

		header("location:../comentar.php");

	} else {

		echo "Silahkan lengkapi data <a href='../comentar_tambah.php'>comentar</a>";

	}


} else {

  	echo "Please <a href='../index.php'>login</a> first.";

}
?>