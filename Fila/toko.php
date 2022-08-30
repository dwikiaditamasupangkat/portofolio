<?php require_once 'header.php'; ?>
<br>
  <div class="container">
    <?php
      $result = select("toko");
    ?>
    <div class="row">
      <?php while ($row = mysqli_fetch_array($result)) {?>
        <div class="col-sm">
          <div class="card">
              <div class="card-body">
                <h5 style="text-align:center"; > <?= $row['Lokasi'] ?> </h5>
              </div>
            </div>
        </div>
      <?php } ?>
    </div>
  </div>
  <?php require_once 'footer.php'; ?>
