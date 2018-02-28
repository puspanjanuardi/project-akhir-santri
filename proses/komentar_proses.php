<?php 

session_start();


include 'koneksi.php';

$nama    = isset($_POST['nama']) ? $_POST['nama'] : '';
$email   = isset($_POST['email']) ? $_POST['email'] : '';
$nomer  = isset($_POST['nomer']) ? $_POST['nomer'] : '';
$komentar = isset($_POST['komentar']) ? $_POST['komentar'] : '';

$id 		= $_POST['id'];
$artikel 	= $id;

if (!empty($nama) && !empty($email) && !empty($nomer) && !empty($komentar)) {
	
	mysqli_query($connect, "INSERT INTO komentar VALUES (null, '$nama', '$email', '$nomer', '$komentar', '$artikel')");

	header("location:../destop_komentar.php?id=$id");
	
} else {


	echo "silahkan lengkapi data anda <a href='../post.php'>komentar</a>" ;


}

?>