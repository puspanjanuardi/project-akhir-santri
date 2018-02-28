<?php
session_start();
if(isset($_SESSION['login'])) {

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>project_triulan_2</title>
	<?php
    include 'header.php';
    include 'proses/koneksi.php';
    include 'function/library.php';
    ?>
		<link rel="stylesheet" type="text/css" href="css/style.css" >
		<link rel="stylesheet" type="text/css" href="css/styledestop.css">
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
		<script type="text/javascript">

		var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i; // untuk memeriksa email address
		
		function validateNewsletter() {
			if( document.newsletterForm.name.value == "" ) {
				alert( "Please enter your name" );
				document.newsletterForm.name.focus(); // letakkan cursor di text input
            	return false;
         	}
         	if( document.newsletterForm.email.value == "" ) {
            	alert( "Please enter your email address" );
            	document.newsletterForm.email.focus();
            	return false;
         	}
         	if (document.newsletterForm.email.value.search(emailRegEx) == -1) {
          		alert("Please enter a valid email address.");;
            	document.newsletterForm.email.focus();
            	return false;
     		}
     		document.getElementById("senderName").innerHTML = document.newsletterForm.name.value;
     		document.getElementById("contact-form").classList.add("sent"); // tambah class sent ketika form disubmit
     		//setTimeout(showForm, 5000); // fungsi untuk menghilangkan class setelah 5 detik 
         	return false;
		} 
		function showForm(){
			document.newsletterForm.name.value = ''; // clear value
			document.newsletterForm.email.value = ''; // clear value
  			document.getElementById("contact-form").classList.remove("sent"); // remove class
		}
		
		function validateForm() {
			if( document.contactForm.name.value == "" ) {
				alert( "Please enter your name" );
				document.contactForm.name.focus() ; // letakkan cursor di text input
            	return false;
         	}
         	if( document.contactForm.email.value == "" ) {
            	alert( "Please enter your email address" );
            	document.contactForm.email.focus() ;
            	return false;
         	}
         	if (document.contactForm.email.value.search(emailRegEx) == -1) {
          		alert("Please enter a valid email address.");;
            	document.contactForm.email.focus() ;
            	return false;
     		}
         	if( document.contactForm.question.value == "" ) {
            	alert( "Please enter your question" );
            	document.contactForm.question.focus() ;
            	return false;
         	}
         	return true;
		} 
	</script>
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
		</ul
<div id="container" class="clearfix">
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
			  	</span>
			  		<div class="overlay-content">
			    		<form action="/action_page.php">
			      			<input type="text" placeholder="Search.." name="search">
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
	<div id="articel" class="clearfix">

	<?php
		$id = $_GET['id'];
		$sql = mysqli_query($connect, "SELECT * FROM blog_artikel WHERE id = $id ORDER BY  id DESC");
		while ($row = mysqli_fetch_array($sql)) {
			
		?>
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
				<img src="" alt="">
				<div class="isi clearfix">
					<p>
						<?= $row['isi'] ?>
					</p>
				</div>
				<div class="read">
					<a href="<?php echo 'destop_komentar.php?id='.$row['id']; ?>"><h3>>Read more</h3></a>
				</div>
			</div>
		</dir>
	<?php 
	}
	 ?>

						<div class="read">
							<div class="icon">
								<ul class="icon_dumai">
									<li class="clearfix">
										<a href="#">
											<button class="tweet">
												<i class="fa fa-twitter" aria-hidden="true"> 
													Tweet
												</i>
											</button>
										</a>
									</li>
									<li class="clearfix">
										<a href="#">
											<button class="feceboox">
												<i class="fa fa-facebook-square" aria-hidden="true">
													Like
												</i>
											</button>
										</a>
									</li>
									<li class="clearfix">
										<a href="#">
											<button class="google">
												<i  class="fa fa-google-plus" aria-hidden="true">
													1
												</i>
											</button>
										</a>
									</li>
								</ul>
							</div>
							<div class="pagar">
								<h4>
									#yosemite #peak #xplore
								</h4>
							</div>
						</div>
					</ul>
				</div>
			</div>
	</div>
		<dir id="articel" class="clearfix">
			<div class="tanggal clearfix">
				<a href="#">
					  12 commets 
				</a>
			</div><br>
			<div id="content">
				<form class="contact-us" name="contactForm" action="proses/komentar_proses.php" method="post" onsubmit="return validateForm()">
					<ul>
						<li class="clearfix">
							<input type="hidden" name="id" value="<?= $_GET['id'] ?>" >
						</li>

						<li class="clearfix">
							<label for="input-name"><span>*</span>Your Name</label>
							<input type="text" name="nama" id="input-name" class="text-input">
						</li>
						<li class="clearfix">
							<label for="input-email"><span>*</span>Email</label>
							<input type="text" name="email" id="input-email" class="text-input">
						</li>
						<li class="clearfix">
							<label for="input-phone">Phone Number</label>
							<input type="text" name="nomer" id="input-phone" class="text-input" placeholder="eg. (+32).81.81.37.00">
						</li>
						<li class="clearfix">
							<label for="textarea-question"><span>*</span>Your Question</label>
							<textarea name="komentar" rows="5" cols="40" id="textarea-question" class="text-input"></textarea>
						</li>
						<li class="clearfix">
							<button type="submit" class="btn btn-submit">Submit</button>
						</li>
					</ul>
				</form>
			</div>
				<div class="articel clearfix">
					<?php
						include'proses/koneksi.php';
						$sql = mysqli_query($connect, "SELECT * FROM komentar WHERE artikel_id = $_GET[id] ORDER BY id DESC");
						while ($row = mysqli_fetch_array($sql)) {
					?>


					<div id="content">
						<ul class="komentar">
							<li class="clearfix">
								<div class="garis">
								<div class="garis_none">
									<div class="image">
										<a href="#">
											<img src="images/male-sillhoute.png" alt="Gambar Sementara">
										</a>
									</div>
									<div class="lable-2">
										<ul class="data_komentar">
											<li class="clearfix">
												<a href="#">
													Philpe 
													<span>
														01 horse algo
													</span>
												</a>
												<p class="text_komentar">
													<?= $row['komentar'] ?>
												</p>
											</li>
										</ul>
									</div>
								</div>
							<div class="label">
								<div class="atas">
									
								</div>
							</div>
							<div class="submit">
								<input type="submit" onclick="fungsiKu()" value="load more comments" >
							  </div>
						</ul>
					</div>
<?php 
}
?>

				</div>
		</dir>
</div>
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

</div>
</body>
</html>

<<?php 
}

 ?>