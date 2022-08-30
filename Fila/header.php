<?php require_once 'config.php'; ?>

<!DOCTYPE html>
<!-- navbar, karoucell, card  -->
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="Images/Fila_logo.svg.png" width="100" height="35" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Menu
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="kategori.php?Jenis_Barang=Pakaian">Pakaian</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="kategori.php?Jenis_Barang=Sepatu">Sepatu</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="kategori.php?Jenis_Barang=Aksesoris">Aksesoris</a>
            </div>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="toko.php?Toko">Store <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="admin.php?Admin">Admin <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>
