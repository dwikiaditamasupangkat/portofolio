<?php require_once 'header.php'; ?>
  <div class = "container">
    <?php
      if(isset($_GET['Jenis_Barang'])){
        $id = $_GET['Jenis_Barang'];
        $result = select("barang WHERE Jenis_Barang = '$id'");
        if (mysqli_num_rows($result) > 0) {
    ?>

      <div class="text">
        <div>
          <h1 class="display-4 pl-3"><a type="button" href="index.php" class="btn btn-light"><</a><?php echo $id; ?></h1>

        </div>
      </div>

    <div class="row">

      <?php while ($row = mysqli_fetch_array($result)) {?>
        <div class="col-xs-12 col-sm-4 col-md-3 mt-3"  style="height: 345px;">
          <div class="card">
            <a href="produk.php?ID_Barang=<?= $row['ID_Barang'] ?>">
              <img src="Images/<?= $row['Gambar'] ?>" class="card-img-top" alt="<?= $row['Nama_Barang'] ?>">
            </a>
            <div class="card-body">
              <span class="text-break pr-5" style="font-weight: 500; font-size: .8em;"><?= substr($row['Nama_Barang'],0,55) ?></span>
              <br>
              <span style="font-weight: bold; font-size: .8em; position: absolute; right:7%; bottom: 4%;">Rp. <?= $row['Harga_Barang'] ?></span>
              <br>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>

    <?php
        } else {
          echo '<h1 class="display-4 text-center w-100">Maaf, Stok Kosong</h1>';
        }
      }else{
        pindah("index.php");
      }
    ?>
  </div>
<?php require_once 'footer.php'; ?>
