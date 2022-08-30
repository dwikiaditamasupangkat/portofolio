<?php require_once 'header.php'; ?>
  <div class="container">
    <?php
      if (isset($_GET['delete'])){
        $jenis = $_GET['delete'];
        if ($jenis == 1) {
          $id = $_GET['ID_Pegawai'];
          if (delete("pegawai WHERE ID_Pegawai = '$id'")) {
            message("Data Berhasil Dihapus");
            pindah("pegawai.php");
          }
          else {
            message("Penghapusan Gagal");
          }
        }
        if ($jenis == 2) {
          $id = $_GET['ID_Barang'];
          if (delete("barang WHERE ID_Barang = '$id'")) {
            message("Data Berhasil Dihapus");
            pindah("barang.php");
          }
          else{
            message("Penghapusan Gagal");
          }
        }
        if ($jenis == 3) {
          $id = $_GET['ID_Toko'];
          if (delete("toko WHERE ID_Toko = '$id'")) {
            message("Data Berhasil Dihapus");
            pindah("Data_Toko.php");
          }
          else{
            message("Penghapusan Gagal");
          }
        }
        if ($jenis == 4) {
          $id = $_GET['ID_Pembeli'];
          if (delete("pembeli WHERE ID_Pembeli = '$id'")) {
            message("Data Berhasil Dihapus");
            pindah("pembeli.php");
          }
          else{
            message("Penghapusan Gagal");
          }
        }
        if ($jenis == 5) {
          $id = $_GET['ID_Transaksi'];
          if (delete("transaksi WHERE ID_Transaksi = '$id'")) {
            message("Data Berhasil Dihapus");
            pindah("transaksi.php");
          }
          else{
            message("Penghapusan Gagal");
          }
        }
      }
    ?>
  </div>
<?php require_once 'footer.php'; ?>
