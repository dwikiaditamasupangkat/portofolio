<?php require_once 'header.php'; ?>

  <div class="container">
    <?php
      if (isset($_GET['update'])) {
        $jenis = $_GET['update'];
        if ($jenis == 1) {
          $id = $_GET['ID_Pegawai']
    ?>
    <form method="post">
      <div class="form-group">
        <label for="formnamapegawai">Nama Pegawai</label>
        <input name="namapegawai" type="namapegawai" id="formnamapegawai" class="form-control" placeholder="Nama Pegawai">
      </div>
      <div class="form-group">
        <label for="formidtoko">ID Toko</label>
        <input name="idtoko" type="idtoko" id="formidtoko" class="form-control" placeholder="ID Toko">
      </div>
      <button name="insert" type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php
          if (isset($_POST['insert'])) {
            $namapegawai = strip_tags($_POST['namapegawai']);
            $idtoko = strip_tags($_POST['idtoko']);
            $sql = "pegawai SET Nama_Pegawai = '$namapegawai', ID_Toko = '$idtoko' WHERE ID_Pegawai ='$id'";
            if (update($sql)) {
              message("Data Diupdate");
              pindah("pegawai.php");
            }
            else{
              message("Update Gagal");
            }
          }
        }
        if ($jenis == 2) {
          $id = $_GET['ID_Barang'];
    ?>
    <form method="post">
      <div class="form-group">
        <label for="formnamabarang">Nama Barang</label>
        <input name="namabarang" type="namabarang" id="formnamabarang" class="form-control" placeholder="Nama Barang">
      </div>
      <div class="form-group">
        <label for="formhargabarang">Harga Barang</label>
        <input name="hargabarang" type="hargabarang" id="formhargabarang" class="form-control" placeholder="Harga Barang">
      </div>
      <div class="form-group">
        <label for="formjenisbarang">Jenis Barang</label>
        <input name="jenisbarang" type="jenisbarang" id="formjenisbarang" class="form-control" placeholder="Jenis Barang">
      </div>
      <div class="form-group">
        <label for="formstatusrilis">Status Rilis</label>
        <input name="statusrilis" type="statusrilis" id="formstatusrilis" class="form-control" placeholder="Status Rilis">
      </div>
      <div class="form-group">
        <label for="formgambar">Gambar</label>
        <input name="gambar" type="gambar" id="formgambar" class="form-control" placeholder="Gambar">
      </div>
      <div class="form-group">
        <label for="formdeskripsi">Deskripsi</label>
        <input name="deskripsi" type="deskripsi" id="formdeskripsi" class="form-control" placeholder="Deskripsi">
      </div>
      <div class="form-group">
        <label for="formstokbarang">Stok Barang</label>
        <input name="stokbarang" type="stokbarang" id="formstokbarang" class="form-control" placeholder="Stok Barang">
      </div>
      <button name="insert" type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php
          if (isset($_POST['insert'])) {
            $namabarang = strip_tags($_POST['namabarang']);
            $hargabarang = strip_tags($_POST['hargabarang']);
            $jenisbarang = strip_tags($_POST['jenisbarang']);
            $statusrilis = strip_tags($_POST['statusrilis']);
            $gambar = strip_tags($_POST['gambar']);
            $deskripsi = strip_tags($_POST['deskripsi']);
            $stokbarang = strip_tags($_POST['stokbarang']);
            $sql = "barang SET Nama_Barang = '$namabarang', Harga_Barang = $hargabarang, Jenis_Barang = '$jenisbarang', Status_Rilis = '$statusrilis', Gambar = '$gambar', Deskripsi = '$deskripsi', Stok_Barang = '$stokbarang' WHERE ID_Barang ='$id'";
            if (update($sql)) {
              message("Data Diupdate");
              pindah("barang.php");
            }
            else{
              message("Update Gagal");
            }
          }
        }
        if ($jenis == 3) {
          $id = $_GET['ID_Toko']
    ?>
    <form method="post">
      <div class="form-group">
        <label for="formlokasi">Lokasi</label>
        <input name="lokasi" type="lokasi" id="formlokasi" class="form-control" placeholder="Lokasi">
      </div>
      <div class="form-group">
        <label for="formjumlahpegawai">Jumlah Pegawai</label>
        <input name="jumlahpegawai" type="jumlahpegawai" id="formjumlahpegawai" class="form-control" placeholder="Jumlah Pegawai">
      </div>
      <button name="insert" type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php
          if (isset($_POST['insert'])) {
            $lokasi = strip_tags($_POST['lokasi']);
            $jumlahpegawai = strip_tags($_POST['jumlahpegawai']);
            $sql = "toko SET Lokasi = '$lokasi', Jumlah_Pegawai = '$jumlahpegawai' WHERE ID_Toko ='$id'";
            if (update($sql)) {
              message("Data Diupdate");
              pindah("Data_Toko.php");
            }
            else{
              message("Update Gagal");
            }
          }
        }
        if ($jenis == 4) {
        $id = $_GET['ID_Pembeli'];
    ?>
    <form method="post">
      <div class="form-group">
        <label for="formnamapembeli">Nama Pembeli</label>
        <input name="namapembeli" type="namapembeli" id="formnamapembeli" class="form-control" placeholder="Nama Pembeli">
      </div>
      <button name="insert" type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php
          if (isset($_POST['insert'])) {
            $namapembeli = strip_tags($_POST['namapembeli']);
            $sql = "pembeli SET Nama_Pembeli = '$namapembeli' WHERE ID_Pembeli ='$id'";
            if (update($sql)) {
              message("Data Diupdate");
              pindah("pembeli.php");
            }
            else{
              message("Update Gagal");
            }
          }
        }
        if ($jenis == 5) {
          $id = $_GET['ID_Transaksi'];
    ?>
    <form method="post">
      <div class="form-group">
        <br>
        <label for="formidtransaksiup">ID Transaksi Yang Ingin Diupdate</label>
        <input name="idtransaksiup" type="idtransaksiup" id="formidtransaksiup" class="form-control" placeholder="ID Transaksi Yang Ingin Diupdate">
      </div>
      <div class="form-group">
        <label for="formtanggal">Tanggal</label>
        <input name="tanggal" type="tanggal" id="formtanggal" class="form-control" placeholder="Tanggal">
      </div>
      <div class="form-group">
        <label for="formtotalpembayaran">Total Pembayaran</label>
        <input name="totalpembayaran" type="totalpembayaran" id="formtotalpembayaran" class="form-control" placeholder="Total Pembayaran">
      </div>
      <div class="form-group">
        <label for="formidpegawai">ID Pegawai</label>
        <input name="idpegawai" type="idpegawai" id="formidpegawai" class="form-control" placeholder="ID Pegawai">
      </div>
      <div class="form-group">
        <label for="formidbarang">ID Barang</label>
        <input name="idbarang" type="idbarang" id="formsidbarang" class="form-control" placeholder="ID Barang">
      </div>
      <div class="form-group">
        <label for="formidpembeli">ID Pembeli</label>
        <input name="idpembeli" type="idpembeli" id="formidpembeli" class="form-control" placeholder="ID Pembeli">
      </div>
      <div class="form-group">
        <label for="formjumlahbarang">Jumlah Barang</label>
        <input name="jumlahbarang" type="jumlahbarang" id="formjumlahbarang" class="form-control" placeholder="Jumlah Barang">
      </div>
      <button name="insert" type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php
          if (isset($_POST['insert'])) {
            $tanggal = strip_tags($_POST['tanggal']);
            $totalpembayaran = strip_tags($_POST['totalpembayaran']);
            $idpegawai = strip_tags($_POST['idpegawai']);
            $idbarang = strip_tags($_POST['idbarang']);
            $idpembeli = strip_tags($_POST['idpembeli']);
            $jumlahbarang = strip_tags($_POST['jumlahbarang']);
            $sql = "transaksi SET Tanggal = '$tanggal', Total_Pembayaran = $totalpembayaran, ID_Pegawai = '$idpegawai', ID_Barang = '$idbarang', ID_Pembeli = '$idpembeli', Jumlah_Barang = $jumlahbarang WHERE ID_Transaksi ='$id'";
            if (update($sql)) {
              message("Data Diupdate");
              pindah("transaksi.php");
            }
            else{
              message("Update Gagal");
            }
          }
        }
      }
    ?>
  </div>

<?php require_once 'footer.php'; ?>
