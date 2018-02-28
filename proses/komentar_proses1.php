<?php
session_start();
if (isset($_SESSION['login'])) {

	// $connect = mysqli_connect("localhost", "root", "123", "pondok_it");
	include 'koneksi.php';
	
	$id    = isset($_POST['id']) ? $_POST['id'] : '';
	$nama  = isset($_POST['nama']) ? $_POST['nama'] : '';
	$email   = isset($_POST['email']) ? md5($_POST['email']) : '';
	$author_id = isset($_POST['author_id']) ? md5($_POST['author_id'] : '');


	if (!empty($id) && !empty($nama) && !empty($email) && !empty($author_id)) {

		mysqli_query($connect, "INSERT INTO author VALUES (null,'$id', '$nama', '$email', $author_id)");

		header("location:../author.php");

	} else {

		echo "Silahkan lengkapi data <a href='../author_tambah.php'>author</a>";

	}


} else {

  	echo "Please <a href='../index.php'>login</a> first.";

}
?>