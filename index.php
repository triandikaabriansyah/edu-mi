<?php
session_start();
if(!isset($_SESSION["login"])){
    header("location: loginedumi/index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edu Mi</title>
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Navbar -->
    <nav>
        <div class="logo">
            <img src="img/lampu.png" alt="">
        </div>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#fasilitas">Fasilitas</a></li>
            <li><a href="#library">Library</a></li>
            <li><a href="#kategori">Kategori</a></li>
            <li><a href="#info">Info</a></li>
            <li><a href="loginedumi/index.php">Login</a></li>
            <li><a href="sign-up/index.php">Sign Up</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <div class="menu-toggle">
            <input type="checkbox">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
    <!-- Akhir Navbar -->
    <!-- Home -->
    <div class="home" id="home">
    <div class="container">
    <div class="row">
        <div class="col-lg-6 d-flex align-items-center">
             <div class="app-text">
                <h1>Akademi Pendidikan<br>Untuk Indonesia</h1><br>
                <small>Membantu Anda Meningkatkan Akademi Anda di semua sektor<br>Sediakan fasilitas yang baik dan tempat yang nyaman</small>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="img">
                <img src="img/gambar.png" alt="">
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Akhir Home -->
    <!-- Facility -->
    
    <div class="facilty m-3" id="facilty">
                <b><p>FASILITAS</p></b>
                <hr width="2.5%" color="#676E72">
    </div>

    <div class="container">
        <div class="row m-3">
            <div class="col-md-6">
            <div class="card" style="width: 18rem;">
                <img src="img/kursi.png" class="card-img-top m-3" alt="..." style="width: 50px;
                height: 50px;
                background-repeat: no-repeat;
                background-size: cover;
                border-radius: 50%;
                text-align: center;
                background-color: #3633d6;">
                <div class="card-body">
                    <p class="card-text" style="color: #259bde;">Lebih nyaman</p>
                    <small>Sediakan tempat yang nyaman untuk mempelajari beberapa materi</small>
            </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="card" style="width: 18rem;">
                <img src="img/book2.png" class="card-img-top m-3" alt="..." style="width: 50px;
                height: 50px;
                background-repeat: no-repeat;
                background-size: cover;
                border-radius: 50%;
                text-align: center;
                background-color: #3633d6;">
                <div class="card-body">
                    <p class="card-text" style="color: #259bde;">SEDERHANA</p>
                    <small>Materinya sederhana dan mudah dipahami semua orang</small>
            </div>
            </div>
            </div>
        </div>
        <div class="row m-3">
            <div class="col-md-6">
            <div class="card" style="width: 18rem;">
                <img src="img/gambar3.png" class="card-img-top m-3" alt="..." style="width: 50px;
                height: 50px;
                background-repeat: no-repeat;
                background-size: cover;
                border-radius: 50%;
                text-align: center;
                background-color: #3633d6;">
                <div class="card-body">
                    <p class="card-text" style="color: #259bde;">Tidak ada pembayaran</p>
                    <small>Jangan membayar dan nikmati pelajaran Anda ambillah sekarang</small>
            </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="card" style="width: 18rem;">
                <img src="img/gambar4.png" class="card-img-top m-3" alt="..." style="width: 50px;
                height: 50px;
                background-repeat: no-repeat;
                background-size: cover;
                border-radius: 50%;
                text-align: center;
                background-color: #3633d6;">
                <div class="card-body">
                    <p class="card-text" style="color: #259bde;">Catatan Gratis</p>
                    <small>Anda bisa mendapatkan beberapa catatan gratis tentang pelajaran</small>
            </div>
            </div>
            </div>
        </div>
    </div>
       
    <!-- Akhir Facility -->
    <!-- Library -->
    <section id="library">
    <div class="library m-3">
        <b><p>LIBRARY</p></b>
        <hr width="2.5%" color="#676E72">
    </div>
 

    <div class="container">
    <div class="row">
        <div class="col-md read">
        <img src="img/read.png" alt="">
        </div>
        <div class="col-md-6 d-flex align-items-center">
             <div class="read">
                <p class="mt-5">Akademi Pendidikan<br>Untuk Indonesia</p><br>
                <small>Membantu Anda Meningkatkan Akademi Anda di semua sektor<br>Sediakan fasilitas yang baik dan tempat yang nyaman</small>
            </div>
        </div>
    </div>
    </section>

    <!-- Akhir Library -->
    <!-- Category -->
    <div class="kategori" id="kategori">
            <b><p>KATEGORI</p></b>
            <hr width="2.5%" color="#676E72">
    </div>    
   
    <div class="container">
    <div class="row">
        <div class="col m-3">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="img/html.png" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Belajar Dasar-dasar</h5>
            <p class="card-text">HTML, CSS, dan JavaScript</p>
            <a href="#" class="btn btn-primary">Mulai Belajar</a>
        </div>
        </div>
        </div>
        <div class="col m-3">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="img/mat.png" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Belajar Rumus-rumus</h5>
            <p class="card-text">Matematika</p>
            <a href="#" class="btn btn-primary">Mulai Belajar</a>
        </div>
    </div>
        </div>
        <div class="col m-3">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="img/eng.png" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Belajar Bahasa Inggris</h5>
            <p class="card-text">Bahasa Inggris</p>
            <a href="#" class="btn btn-primary">Mulai Belajar</a>
        </div>
        </div>
        </div>
    </div>
    </div>

    <!-- Akhir category -->
    <!-- More info -->

    <div class="more mt-5" id="info">
        <b><p>Info</p></b>
        <hr width="2.5%" color="#676E72">
    </div>

    <section class="info text-center">

    <div class="container">
    <div class="row">
        <div class="col">
        <ul>
        <li><a href="#"><i class="fa fa-whatsapp"> Edu MI</a></i></li>
        <li><a href="#"><i class="fa fa-facebook"> Edu MI</a></i></li>
        <li><a href="#"><i class="fa fa-twitter"> Edu MI</a></i></li>
        </ul>
        </div>
        <div class="col">
        <ul>
        <li><a href="#"><i class="fa fa-envelope"> Edu MI</a></i></li>
        <li><a href="#"><i class="fa fa-instagram"> Edu MI</a></i></li>
        <li><a href="#"><i class="fa fa-map-marker"> Edu MI</a></i></li>
        </ul>
        </div>
        </div>
    </div>   
    </section>

    <footer class="d-flex align-items-center">
    <p>CopyRight @ Edu Mi 2021</p>
    </footer>
    
    <!-- Akhir more -->
    <!-- Copyright -->
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="script.js"></script>

</html>