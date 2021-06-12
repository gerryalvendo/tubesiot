<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  
  </head>
  <body>
  <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="/toko">TelcoStore</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="admin.php">Admin <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="about.php">About</a>
                </li>
            </ul>
        </div>
    </nav>
      <form method="POST" action="add_process.php" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleInputEmail1">Nama Produk</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="nama_produk">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Description</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="deskripsi">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Harga</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="harga_jual">
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Thumbnail</label>
          <input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar_produk">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </body>
</html>