<?php require_once 'header.php'; ?>

  <?php
    if (isset($_GET['insert'])) {
    $jenis = $_GET['insert'];
      if ($jenis ==1) {
  ?>
      <div class="container">
        <form method="post">
            <div class="form-group">
              <label for="formidpegawai">ID Pegawai</label>
              <input name="idpegawai" type="idpegawai" id="formidpegawai" class="form-control" placeholder="ID Pegawai">
            </div>
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
      </div>
      <?php
      if (isset($_POST['insert'])) {
        $idpegawai = strip_tags($_POST['idpegawai']);
        $namapegawai = strip_tags($_POST['namapegawai']);
        $idtoko = strip_tags($_POST['idtoko']);
        $sql = "pegawai VALUES('$idpegawai','$namapegawai', '$idtoko')";
        if (insert($sql)) {
          message("Data Ditambah");
          pindah("pegawai.php");
        }
        else{
          message("Penambahan Gagal");
        }
      }
      ?>
      <?php
        }
      elseif ($jenis == 2) {
        ?>
        <div class="container">
          <form method="post">
              <div class="form-group">
                <label for="formidbarang">ID Barang</label>
                <input name="idbarang" type="idbarang" id="formidbarang" class="form-control" placeholder="ID Barang">
              </div>
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
        </div>
        <?php
        if (isset($_POST['insert'])) {
          $idbarang = strip_tags($_POST['idbarang']);
          $namabarang = strip_tags($_POST['namabarang']);
          $hargabarang = strip_tags($_POST['hargabarang']);
          $jenisbarang = strip_tags($_POST['jenisbarang']);
          $statusrilis = strip_tags($_POST['statusrilis']);
          $gambar = strip_tags($_POST['gambar']);
          $deskripsi = strip_tags($_POST['deskripsi']);
          $stokbarang = strip_tags($_POST['stokbarang']);

          $sql = "barang VALUES('$idbarang','$namabarang', $hargabarang, '$jenisbarang', '$statusrilis', '$gambar', '$deskripsi', $stokbarang)";
          if (insert($sql)) {
            message("Data Ditambah");
            pindah("barang.php");
          }
          else{
            message("Penambahan Gagal");
          }
        }
        ?>
    <?php
      }
      elseif ($jenis == 3) {
        ?>
        <div class="container">
          <form method="post">
              <div class="form-group">
                <label for="formidtoko">ID Toko</label>
                <input name="idtoko" type="idtoko" id="formidtoko" class="form-control" placeholder="ID Toko">
              </div>
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
        </div>
        <?php
        if (isset($_POST['insert'])) {
          $idtoko = strip_tags($_POST['idtoko']);
          $lokasi = strip_tags($_POST['lokasi']);
          $jumlahpegawai = strip_tags($_POST['jumlahpegawai']);
          $sql = "toko VALUES('$idtoko','$lokasi', $jumlahpegawai)";
          if (insert($sql)) {
            message("Data Ditambah");
            pindah("Data_Toko.php");
          }
          else{
            message("Penambahan Gagal");
          }
        }
        ?>
    <?php
      }
      elseif($jenis == 4){
      ?>
      <div class="container">
        <form method="post">
            <div class="form-group">
              <label for="formidpembeli">ID Pembeli</label>
              <input name="idpembeli" type="idpembeli" id="formidpembeli" class="form-control" placeholder="ID Pembeli">
            </div>
            <div class="form-group">
              <label for="formnamapembeli">Nama Pembeli</label>
              <input name="namapembeli" type="namapembeli" id="formnamapembeli" class="form-control" placeholder="Nama Pembeli">
            </div>
            <button name="insert" type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <?php
      if (isset($_POST['insert'])) {
        $idpembeli = strip_tags($_POST['idpembeli']);
        $namapembeli = strip_tags($_POST['namapembeli']);
        $sql = "pembeli VALUES('$idpembeli','$namapembeli')";
        if (insert($sql)) {
          message("Data Ditambah");
          pindah("pembeli.php");
        }
        else{
          message("Penambahan Gagal");
        }
      }
       ?>
    <?php
      }
      elseif ($jenis == 5) {
     ?>
     <div class="container">
       <form method="post">
           <div class="form-group">
             <label for="formidtransaksi">ID Transaksi</label>
             <input name="idtransaksi" type="idtransaksi" id="formidtransaksi" class="form-control" placeholder="ID Transaksi">
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
     </div>
     <?php
     if (isset($_POST['insert'])) {
       $idtransaksi = strip_tags($_POST['idtransaksi']);
       $tanggal = strip_tags($_POST['tanggal']);
       $totalpembayaran = strip_tags($_POST['totalpembayaran']);
       $idpegawai = strip_tags($_POST['idpegawai']);
       $idbarang = strip_tags($_POST['idbarang']);
       $idpembeli = strip_tags($_POST['idpembeli']);
       $jumlahbarang = strip_tags($_POST['jumlahbarang']);

       $sql = "transaksi VALUES('$idtransaksi','$tanggal', $totalpembayaran, '$idpegawai', '$idbarang', '$idpembeli', $jumlahbarang)";
       if (insert($sql)) {
         message("Data Ditambah");
         pindah("transaksi.php");
       }
       else{
         message("Penambahan Gagal");
       }
     }
     ?>
  <?php
      }
    }?>

<?php require_once 'footer.php'; ?>
