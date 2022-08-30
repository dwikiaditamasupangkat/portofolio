<?php require_once 'header.php'; ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID_Pembelii</th>
      <th scope="col">Nama_Pembeli</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $result = select("pembeli");
    $i = 1;
    while ($row = mysqli_fetch_array($result)) {?>
      <tr>
        <th scope="row"><?php echo $i ?></th>
        <td><?= $row['ID_Pembeli'] ?></td>
        <td><?= $row['Nama_Pembeli'] ?></td>
        <td>
          <a class="btn btn-danger" href="delete.php?delete=4&&ID_Pembeli=<?= $row['ID_Pembeli'] ?>" role="button">Delete</a>
          <a class="btn btn-warning" href="update.php?update=4&&ID_Pembeli=<?= $row['ID_Pembeli'] ?>" role="button">update</a>
        </td>
      </tr>
    <?php
    $i++;
    } ?>
  </tbody>
</table>
<a class="btn btn-primary" href="admin.php" role="button"><</a>
<a class="btn btn-primary" href="insert.php?insert=4" role="button">Insert</a>

<?php require_once 'footer.php'; ?>
