<?php

function penulis($id) 
{
	include 'proses/koneksi.php';
	
	$sql = mysqli_query($connect, "SELECT * FROM author WHERE id = $id");
	$row = mysqli_fetch_array($sql);

	return $row['nama'];
}


function kategori($id)
{
	include 'proses/koneksi.php';
	
	$sql = mysqli_query($connect, "SELECT * FROM blog_kategori WHERE id = $id");
	$row = mysqli_fetch_array($sql);

	return $row['nama'];
}

// function short_str($str, $limit)
// {
//     if ($limit < 3) $limit = 3;

//     if (strlen($str) > $limit) {
//     	$str = substr($str, 0, strpos(wordwrap($str, $limit), "\ "));
//     }

//     return $str;
// }
// ?>