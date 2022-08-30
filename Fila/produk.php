<?php require_once 'header.php'; ?>

  <div class="container">

    <?php
      if(isset($_GET['ID_Barang'])){
        $id = $_GET['ID_Barang'];
        $result = select("barang WHERE ID_Barang = $id");
        $row = mysqli_fetch_array($result);
        if (mysqli_num_rows($result) > 0) {
          // $result2 = select("jenis WHERE id_jenis = $row[7]");
          // $row2 = mysqli_fetch_array($result2);
    ?>
    <br>
    <div class="card mb-3" style="max-width: 1000px;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="Images/<?= $row['Gambar'] ?>" class="card-img" alt="..." height="500px" width="1000px">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h3 class="card-title"><?= $row['Nama_Barang']  ?></h3>
            <p class="card-text"><?= $row['Deskripsi'] ?></p>
            <p class="card-text"><small class="text-muted">@ 2013 Fila Inc</small></p>
          </div>
        </div>
      </div>
    </div>
    <?php
        } else {
          echo '<h1 class="display-4 text-center w-100">Maaf, Data Tidak Ditemukan</h1>';
        }
      }else{
        // pindah("index.php");
      }
    ?>
  </div>

<?php require_once 'footer.php'; ?>
