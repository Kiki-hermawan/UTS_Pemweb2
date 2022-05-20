<?php
  include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <!-- Own CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>PEREKAMAN TOKO BUKU  | CRUD</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-uppercase">
        <div class="container">
            <a class="navbar-brand" href="index.php">PEREKAMAN TOKO BUKU | CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Close Navbar -->
    <!-- Container -->
    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                <h3 class="fw-bold text-uppercase"><i class="bi bi-person-plus-fill"></i>&nbsp;Tambah Toko Buku</h3>
            </div>
            <hr>
        </div>
        <section class="row">
        <div class="col-md-6 offset-md-3 align-self-center"> 
        <h1 class="text-center mt-4">Form Tambah Data</h1><br>
        <div class="row my-2">
            <div class="col-md">
                <form action="" method="post" enctype="multipart/form-data">
          <div class="mb-3">
          <label for="inputjudul" class="form-label">Judul Buku</label>
          <input type="text" class="form-control" id="inputpenulis" name="judul" placeholder="Masukan Judul Buku">
        </div>
        <div class="mb-3">
          <label for="inputpenulis" class="form-label">Penulis</label>
          <input type="text" class="form-control" id="inputpenulis" name="penulis" placeholder="Masukan Penulis">
        </div>
        <div class="mb-3">
          <label for="inputpenerbit" class="form-label">Penerbit</label>
          <input type="text" class="form-control" id="inputpenerbit" name="penerbit" placeholder="Masukan Penerbit">
        </div>
        <input name="rekam" type="submit" class="btn btn-primary" value="Tambah">
        <a href="index.php" type="button" class="btn btn-info text-white">Kembali</a>
      </form>
    </div>
  </section>

  <?php
    
    // Buat kondisi jika tombol data di klik
    if(isset($_POST['rekam'])){
      // Membuat variable setiap field inputan agar kodingan lebih rapi.
      $judul = $_POST['judul'];
      $penulis = $_POST['penulis'];
      $penerbit = $_POST['penerbit'];

      // Membuat Query
      $query = "INSERT INTO tbbuku (judul, penulis, penerbit) VALUES('".$judul."', '".$penulis."', '".$penerbit."')";

      $result = mysqli_query($koneksi, $query);

      if($result){
        header("location: index.php");
      } else {
        echo "<script>alert('Data Gagal di tambahkan!')</script>";
      }

    }    

  ?>

   <!-- Footer -->
    <div class="container-fluid" style="margin-top: 30px;">
        <div class="row bg-dark text-white">
            <div class="col-md-6 my-2" id="about">
                <h4 class="fw-bold text-uppercase">About</h4>
                <p>Politeknik Harapan Bersama Tegal, Program Studi Teknik Informatika</p>
            </div>
            <div class="col-md-6 my-2 text-center link">
                <h4 class="fw-bold text-uppercase">Social Media</h4>
                <a href="https://www.facebook.com/profile.php?id=100008455207809" target="_blank"><i class="bi bi-facebook fs-3"></i></a>
                <a href="https://github.com/Kiki-hermawan" target="_blank"><i class="bi bi-github fs-3"></i></a>
                <a href="https://www.instagram.com/kihrmwn_/?hl=id" target="_blank"><i class="bi bi-instagram fs-3"></i></a>
                <a href="#" target="_blank"><i class="bi bi-twitter fs-3"></i></a>
            </div>
        </div>
    </div>
    <footer class="bg-dark text-white text-center" style="padding: 5px;">
        <p>Created with <i class="bi bi-suit-heart-fill" style="color: whitesmoke;"></i> Kiki Hermawan </p>
    </footer>
    <!-- Close Footer -->
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

 
</body>
</html>