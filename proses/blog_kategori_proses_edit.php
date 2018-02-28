<?php
session_start();
if (isset($_SESSION['login'])) {

	// $connect = mysqli_connect("localhost", "root", "123", "pondok_it");
	include 'koneksi.php';
	
	$nama    = isset($_POST['nama']) ? $_POST['nama'] : '';
	$status  = isset($_POST['status']) ? $_POST['status'] : '';
	
	$id   = isset($_POST['id']) ? $_POST['id'] : '';

	$tanggal_input 	= date('Y-m-d H:i:s');
	$author_id 		= $_SESSION['author_id'];

	if (!empty($nama) && !empty($status)) {

		mysqli_query($connect, "
			UPDATE blog_kategoir
			SET nama = '$nama', status = '$status'
			WHERE id = '$id'
			");

		header("location:../blog_kategori.php");

	} else {

		echo "Silahkan lengkapi data <a href='../blog_kategori_tambah.php'>blog_kategori</a>";

	}


} else {

  	echo "Please <a href='../index.php'>login</a> first.";

}
?>