<?php require_once 'header.php'; ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID_Pegawai</th>
      <th scope="col">Nama_Pegawai</th>
      <th scope="col">ID_Toko</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $result = select("pegawai");
    $i = 1;
    while ($row = mysqli_fetch_array($result)) {?>
      <tr>
        <th scope="row"><?php echo $i ?></th>
        <td><?= $row['ID_Pegawai'] ?></td>
        <td><?= $row['Nama_Pegawai'] ?></td>
        <td><?= $row['ID_Toko'] ?></td>
        <td>
          <a class="btn btn-danger" href="delete.php?delete=1&&ID_Pegawai=<?= $row['ID_Pegawai'] ?>" role="button">Delete</a>
          <a class="btn btn-warning" href="update.php?update=1&&ID_Pegawai=<?= $row['ID_Pegawai'] ?>" role="button">update</a>
        </td>
      </tr>
    <?php
    $i++;
    } ?>
  </tbody>
</table>
<a class="btn btn-primary" href="admin.php" role="button"><</a>
<a class="btn btn-primary" href="insert.php?insert=1" role="button">Insert</a>

<?php require_once 'footer.php'; ?>
