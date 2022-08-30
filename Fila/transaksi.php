<?php require_once 'header.php'; ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID_Transaksi</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Total Pembayaran</th>
      <th scope="col">ID Pegawai</th>
      <th scope="col">ID Barang</th>
      <th scope="col">ID Pembeli</th>
      <th scope="col">Jumlah Barang</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $result = select("transaksi");
    $i = 1;
    while ($row = mysqli_fetch_array($result)) {?>
      <tr>
        <th scope="row"><?php echo $i ?></th>
        <td><?= $row['ID_Transaksi'] ?></td>
        <td><?= $row['Tanggal'] ?></td>
        <td><?= $row['Total_Pembayaran'] ?></td>
        <td><?= $row['ID_Pegawai'] ?></td>
        <td><?= $row['ID_Barang'] ?></td>
        <td><?= $row['ID_Pembeli'] ?></td>
        <td><?= $row['Jumlah_Barang'] ?></td>
        <td>
          <a class="btn btn-danger" href="delete.php?delete=5&&ID_Transaksi=<?= $row['ID_Transaksi'] ?>" role="button">Delete</a>
          <a class="btn btn-warning" href="update.php?update=5&&ID_Transaksi=<?= $row['ID_Transaksi'] ?>" role="button">update</a>
        </td>
      </tr>
    <?php
    $i++;
    } ?>
  </tbody>
</table>
<a class="btn btn-primary" href="admin.php" role="button"><</a>
<a class="btn btn-primary" href="insert.php?insert=5" role="button">Insert</a>

<?php require_once 'footer.php'; ?>
