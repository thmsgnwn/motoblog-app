<?php
session_start();
require_once "db.php";

if( !isset($_SESSION['submit']) ) {
    header('Location: public/login_user.php');
    exit;
} 

?>

<?php

include_once('views/header.php');

?>


    <!-- Navbar -->

    <div class="jumbotron text-center">
      <h1>
        <img class="text-left mx-3" src="img/logo.png" width="90" alt="">
        <b>Yamaha MT Indonesia Company</b>
      </h1>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light fix-top">
      <div class="container-fluid">
    <img class="text-left mx-5" src="img/mt.jpg" width="35" alt="">
        <a class="navbar-brand text-white ps-3 mx-3 " href="admin.php?page=dash">Home</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
              <a class="nav-link active text-white ms-5 ps-5 " aria-current="page" href="admin.php?page=profile"
                >Profile</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="admin.php?page=visi"
                >Visi & Misi</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="admin.php?page=product"
                >Product</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="admin.php?page=contact"
                >Contact</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="admin.php?page=about"
                ><b>About Us</b></a
              >
            </li>


          </ul>

          <!-- Form Seacrh -->
          <form class="d-flex" role="search">
            <input
              class="search form-control me-2"
              type="search"
              placeholder="Cari disini"
              aria-label="Search"
            />
            <button class="btn btn-outline-light me-2" type="button">
              Pencarian
            </button>
           
          </form>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- layout -->
    <!-- Grid Layout Pertama -->
    <div class="row g-0 text-center">
      <div class="col-6 col-md-3 layout pe-2">
        <ul class="list-group-flush">
          <a href="admin.php?page=article" class="list-group-item btn m-0.2 rounded-pill btnlist btn-outline-light">
            Kelola Artikel
          </a>
          
          <a href="admin.php?page=event" class="list-group-item btn rounded-pill btnlist btn-outline-light">
            Kelola Event
          </a>
          <a href="admin.php?page=galeri" class="list-group-item btn rounded-pill btnlist btn-outline-light">
            Kelola Galeri
          </a>
          <hr>
          <br>
          <!-- <li class="list-group-item">Laporan</li> -->
          <a href="admin.php?page=klien" class="list-group-item btn rounded-pill btnlist btn-outline-light">
            Kelola Data Klien
          </a>
          <a href="admin.php?page=produk" class="list-group-item btn rounded-pill btnlist btn-outline-light">
            Kelola Data Produk
          </a>
          <a href="logout.php" class="list-group-item btn rounded-pill btnlist btn-outline-light">
            <b>Log Out</b>
          </a>

          <li class="list-group-item btn btnlist btn-outline-light"></li>
        </ul>
      </div>


      <!-- Main -->
      <!-- Grid Layout kedua -->
      <div class="col-sm-6 col-md-8 m-auto pt-3">
        <?php
          $page = isset($_GET['page']) ? $_GET['page'] : 'dash';
          if ($page == 'dash') include 'views/dashboard.php';

        //   Data Produk
          if ($page == 'produk') include 'pages/list_produk.php';
          if ($page == 'entrip') include 'entriProduk.php';
         

        //   Data Klien
        if ($page == 'klien') include 'pages/list_klien.php';
        if ($page == 'entrik') include 'pages/entriKlien.php';
        if ($page == 'editk') include 'pages/editKlien.php';

        
        //   Data Gallery
        if ($page == 'galeri') include 'pages/list_galeri.php';
        if ($page == 'entrig') include 'pages/entriGaleri.php';
        if ($page == 'editg') include 'pages/editGaleri.php';

        // Data Artikel
        if ($page == 'article') include 'public/pages/article.php';

        // Data Event
        if ($page == 'event') include 'public/pages/event.php';

        // Navbar Layout
        if ($page == 'profile') include 'public/pages/profile.php';
        if ($page == 'visi') include 'public/pages/visi_misi.php';
        if ($page == 'product') include 'public/pages/product.php';
        if ($page == 'contact') include 'public/pages/contact.php';
        if ($page == 'about') include 'public/pages/about.php';
          
        ?>
      </div>
    <!-- end layout -->
 

<?php

include_once('views/footer.php');

?>