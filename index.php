<?php

include_once('views/header.php');

?>


    <!-- Navbar -->
    <div class="jumbotron text-center">
      <h1>
    <img class="text-left" src="img/download.jpg" width="50" alt="">
        <b>One-Racing Company</b></h1>
      <!-- <h5>Admin-Page</h5> -->
    </div>

    <nav class="navbar navbar-expand-lg navbar-light fix-top">
      <div class="container-fluid">
        <a class="navbar-brand text-white ps-3 mx-5 " href="index.php?page=dash">Home Dashboard</a>
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
              <a class="nav-link active text-white ms-5 ps-5 " aria-current="page" href="index.php?page=profile"
                ><b>Profil</b></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="index.php?page=visi"
                ><b>Visi & Misi</b></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="index.php?page=product"
                ><b>Produk Kami</b></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="index.php?page=contact"
                ><b>Kontak</b></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="index.php?page=about"
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
      <div class="col-6 col-md-2 layout pe-2">
        <ul class="list-group-flush">
          <a href="index.php?page=articles" class="list-group-item btn m-0.2 rounded-pill btn-outline-light">
            Artikel
          </a>
          <a href="index.php?page=event" class="list-group-item btn rounded-pill  btn-outline-light">
            Event
          </a>
          <a href="index.php?page=gallery" class="list-group-item btn rounded-pill  btn-outline-light">
            Galeri Foto
          </a>
          <a href="index.php?page=klien" class="list-group-item btn rounded-pill  btn-outline-light">
            Klien Kami
          </a>
          <a href="public/login_user.php" class="list-group-item btn rounded-pill  btn-outline-light">
            <b>Log In</b>
          </a>
          <a href="app/register.php" class="list-group-item btn rounded-pill btn-outline-light ms-5 ps-5">
            Sign In
          </a>
          <a href="app/register.php" class="list-group-item btn rounded-pill btn-outline-light ms-5 ps-5">
            Sign Out
          </a>
        </ul>
      </div>


      <!-- Main -->
      <!-- Grid Layout kedua -->
      <div class="col-sm-6 col-md-8 m-auto pt-3">
        <?php
          $page =isset($_GET['page']) ? $_GET['page'] : 'dash';
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
        if ($page == 'articles') include 'public/pages/article.php';

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

