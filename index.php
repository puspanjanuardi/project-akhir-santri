<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>project_triulan_2</title>
		<?php
	    include 'header.php';
	    include 'proses/koneksi.php';
	    include 'function/library.php';
	    ?>
		<link rel="stylesheet" type="text/css" href="css/style.css" >
		<link rel="stylesheet" type="text/css" href="css/style_responsip.css" >
		<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" /> 
		<link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet" />
		<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/css?family=Kavivanar" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
		<script src="belajar_jquery/jquery-3.2.1.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script type="js/pencarian.js"></script>
</head>
<body>
	<ul class="muncul clearfix" style="background-color: blue; padding-top: 5%; max-width: 450px; display: none; font-size: 20px;">
		<span class="closebtn1" onclick="closeSearch()" title="Close Overlay" style="font-size: 50px; margin: 0px; float: right; padding-bottom: 30px; ">
			×
		</span>
				<li style="padding-top: 10%;">
					<hr>
					<a href="#" style="color: white;" >HOME</a>
				</li>
					<hr>
				<li style="padding-top: 1%;">
					<a href="#" style="color: white;" >ABOUT</a>
				</li><hr>
				<li style="padding-top: 1%;">
					<a href="#" style="color: white;" >ARCHIVE</a>
				</li><hr>
				<li style="padding-top: 1%; padding-bottom: 100%;">
					<a href="#" style="color: white;" >CONTAC</a><hr>
				</li>
		</ul>
<div div="container" class="clearfix" />
	<div id="header" class="clearfix">
		<div class="logo clearfix">
			<ul class="clearfix">
				<li>
					<a href="#"> Al-Wahdah</a>
				</li>
			</ul>
		</div>
		<div class="list clearfix">
			<ul class="clearfix">
				<li>
					<a href="#">HOME</a>
				</li>
				<li>
					<a href="#">ABOUT</a>
				</li>
				<li>
					<a href="#">ARCHIVE</a>
				</li>
				<li>
					<a href="#">CONTAC</a>
				</li>
				<li class="cari">
					<a href="#">
						<i class="fa fa-search openBtn" onclick="openSearch()" aria-hidden="true"></i>
					</a>
				</li>
			</ul>

			<div id="pencarian" class="overlay">
			  	<span class="closebtn" onclick="closeSearch()" title="Close Overlay">
			  		<li class="kali">
			  			<a href="#">X</a>
			  		</li>
	    		<?php

				


				?>

			  	</span>
			  		<div class="overlay-content">
			    		<form action="index.php" method="POST">
			      			<input type="text" placeholder="Search.." name="cari">
			      				<button type="submit">
			      					<i class="fa fa-search"></i>
			      				</button>
			    		</form>
	
			  		</div>
			</div>
		</div>
		<div class="justife clearfix">
			<ul class="clearfix" style="float: right;">
				<li>
					<a href="#">
						<i class="fa fa-align-justify" aria-hidden="true"></i>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<?php
		include 'proses/koneksi.php';

		$cari = isset($_POST['cari']) ? $_POST['cari'] : '';
		if (!empty($cari)){
			$sql = mysqli_query($connect, "SELECT * FROM blog_artikel WHERE judul LIKE '%$cari%' OR isi LIKE '%$cari%' ORDER BY id DESC");
		} else {
			$sql = mysqli_query($connect, "SELECT * FROM blog_artikel ORDER BY id DESC");
		}
		while ($row = mysqli_fetch_array($sql)) {
	?>
<div id="img" class="clearfix">
	<div id="images clearfix">
		<img src="gambar/<?php echo $row['gambar']?>" width="100%">
	</div>
</div>
	
<dir id="articel" class="clearfix">
	<div class="story clearfix">
		Story
	</div>
	<div class="tanggal clearfix">
		sep 18
	</div><br>
	<dir id="footer-text clearfix">
		<div class="articel clearfix">
			<h1><p> <?= $row['judul'] ?> </p> </h1>
			<br><hr>
			<div class="isi clearfix">
				<p>
					<?= $row['isi'] ?>
				</p>
			</div>
			<div class="read">
				<a href="<?php echo "destop_komentar.php?id=$row[id]"; ?>"><h3>>Read more</h3></a>
				<div class="pagar_index">
					<h4>#yosemite #peak #xplore</h4>
				</div>
			</div>
		</div>
	</dir>
</dir>
<?php 
}
 ?>
<br>
<div id="tolbar">
	<div id="menu" class="clearfix">
		<div id="Wahdah clearfix">
			<ul>
				<li>
					<a href="#"><h1>Al-Wahdah<h1></a>
				</li>
			</ul>
		</div>
	</div>
	<div id="home clearfix">
		<ul class="clearfix">
			<li>
				<a href="#">HOME</a>
			</li>
			<li>
				<a href="#">ABOUT</a>
			</li>
			<li>
				<a href="#">ARCHIVE</a>
			</li>
			<li>
				<a href="#">CONTACT</a>
			</li>
			<li>
				<i class="fa fa-search" aria-hidden="true"></i>
			</li>
		</ul>
	</div>
	<hr>
	<div id="tolbar_bawa">
		<div class="pointer">
			<p>you kwon, l'd rather ague with you, then laugh anyoe else,Hidup adalah perjalanan panjang yang harus kita tempuh</p>
		</div>
	</div>
	<hr>
	<div id="tolbar_bawa">
		<div class="pointer">
			<p>(c) 2018 Al-Wahdah .All Ringhts Reserved </p>
		</div>
	</div>
	<div id="home clearfix">
		<ul class="clearfix">
			<li>
				<a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
			</li>
			<li>
				<i class="fa fa-twitter" aria-hidden="true"></i>
			</li>
			<li>
				<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			</li>
			<li>
				<a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
			</li>
		</ul>
	</div>
</div>
</div>
	<script>
		function openSearch() {
		    document.getElementById("pencarian").style.display = "block";
		}

		function closeSearch() {
		    document.getElementById("pencarian").style.display = "none";
		}
		$(document).ready(function() {
		     $(".justife").click(function() {
		     $("#container").hide();
		       $(".muncul").show();

		     });
		 $(".closebtn1l").click(function() {
		     $("ul:muncul").hide();
		       $("#container").show();
		     });
		});

	// 	$(document).ready(function(){
	// 	    $(".closebtn1").click(function(){
	// 	        $("#container").animate({
	// 	            height: 'toggle'
	// 	        });
	// 	    });
	// });
	</script>

</body>
</html> 