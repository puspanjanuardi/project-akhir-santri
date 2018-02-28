<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog - Start Bootstrap Theme</title>

    <?php
    include 'header.php';
    include 'proses/koneksi.php';
    include 'function/library.php';
    ?>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.html">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <?php
          include 'menu_depan.php';
          ?>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('cleanblog/img/post-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <?php
    $sql = mysqli_query($connect, "SELECT * FROM blog_artikel WHERE id = $_GET[id]");
    $row = mysqli_fetch_array($sql);
            ?>
            <div class="post-heading">
              <h1><?= $row['judul'] ?></h1>
              <h2 class="subheading">Kategori : <?= kategori($row['kategori_id']) ?></h2>
              <span class="meta">Posted by
                <a href="#"><?= penulis($row['author_id']) ?></a>
                on <?= date('F d, Y', strtotime($row['tanggal'])) ?></span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <p><?= $row['isi'] ?></p>
          </div>
        </div>
      </div>
    </article>

    <hr>

    

    <?php
    include 'footer.php';
    ?>

  </body>

</html>
