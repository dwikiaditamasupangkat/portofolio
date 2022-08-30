<?php require_once 'header.php'; ?>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">ID_Barang</th>
        <th scope="col">Nama_Barang</th>
        <th scope="col">Harga_Barang</th>
        <th scope="col">Jenis_Barang</th>
        <th scope="col">Status_Rilis</th>
        <th scope="col">Gambar</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Stok_Barang</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $result = select("barang");
      $i = 1;
      while ($row = mysqli_fetch_array($result)) {?>
        <tr>
          <th scope="row"><?php echo $i ?></th>
          <td><?= $row['ID_Barang'] ?></td>
          <td><?= $row['Nama_Barang'] ?></td>
          <td><?= $row['Harga_Barang'] ?></td>
          <td><?= $row['Jenis_Barang'] ?></td>
          <td><?= $row['Status_Rilis'] ?></td>
          <td><?= $row['Gambar'] ?></td>
          <td><?= $row['Deskripsi'] ?></td>
          <td><?= $row['Stok_Barang'] ?></td>
          <td>
            <a class="btn btn-danger" href="delete.php?delete=2&&ID_Barang=<?= $row['ID_Barang'] ?>" role="button">Delete</a>
            <br>
            <br>
            <a class="btn btn-warning" href="update.php?update=2&&ID_Barang=<?= $row['ID_Barang'] ?>" role="button">update</a>
          </td>
        </tr>
      <?php
      $i++;
      } ?>
    </tbody>
  </table>
  <a class="btn btn-primary" href="admin.php" role="button"><</a>
  <a class="btn btn-primary" href="insert.php?insert=2" role="button">Insert</a>

<?php require_once 'footer.php'; ?>
