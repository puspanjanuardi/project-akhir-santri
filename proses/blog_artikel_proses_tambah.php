<?php
session_start();
include 'koneksi.php';

if (isset($_SESSION['login'])) {
	$judul    = isset($_POST['judul']) ? $_POST['judul'] : '';
	$isi    = isset($_POST['isi']) ? $_POST['isi'] : '';
	
	$gambar_nama    = isset($_FILES['gambar']['name']) ? $_FILES['gambar']['name'] : '';
	$gambar_size    = $_FILES['gambar']['size'];
	$gambar_type    = $_FILES['gambar']['type'];
	$gambar_tmp_name    = $_FILES['gambar']['tmp_name'];
	$ext = explode('.', $gambar_nama);

	$kategori    = isset($_POST['kategori']) ? $_POST['kategori'] : '';
	$penulis    = $_SESSION['author_id'];
	$tanggal    = date('Y-m-d H:i:s');
	$status   = isset($_POST['status']) ? $_POST['status'] : '';
	$folder = "../gambar/";

	if (!empty($judul) && !empty($isi) && !empty($kategori)) {

		if (!is_dir($folder)) {
			mkdir($folder, 0777);
		}

		if (!empty($gambar_nama)) {
			$newName = rand(11111,99999);
			$nama_file = $newName.'.'.end($ext);

			move_uploaded_file($gambar_tmp_name, $folder.$nama_file);
		}


		mysqli_query($connect, "
			INSERT INTO blog_artikel VALUES (null,'$judul', '$isi', '$gambar_nama', '$kategori', '$penulis', '$tanggal', '$status')
		");

		header("location:../blog_artikel.php");

	} else {

		echo "Silahkan lengkapi data <a href='../blog_artikel_tambah.php'>Blog artikel</a>";

	}


} else {

  	echo "Please <a href='../index.php'>login</a> first.";

}
?>