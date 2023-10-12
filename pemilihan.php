<?php
  require_once "./header.php";
  require_once "./navbar.php";
?>

    <div class="container-fluid">
      <div class="row mt-3">
        <div class="col-md-8 offset-md-2">
          <div class="row">

            <?php
              $sql = "SELECT * FROM calon;";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
            ?>
              <div class="col-md-4 mt-3">
                <div class="card">
                  <img src="./assets/img/<?php echo $row['calo_gambar'] ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title mt-4 text-center"><?php echo $row['calo_nama'] ?></h5>
                    
                    <form action="config.php" method="POST">
                      <input type="hidden" name="calon" value="1">
                      <div class="d-grid gap-2 mt-5">
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-secondary btn-fluid" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['calo_id'] ?>">
                            Lihat Visi Misi
                          </button>
                          <button type="submit" class="btn btn-success" name="kirimvalue">
                            Pilih Calon
                          </button>
                      </div>
                    </form>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?php echo $row['calo_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Visi & Misi</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <h3 class="text-center">Visi</h3>
                            <?php echo $row['calo_visi'] ?>
                            <h3 class="text-center">Misi</h3>
                            <?php echo $row['calo_misi'] ?>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php } }else{echo "tidak ada calon!";} ?>
          </div>
        </div>
      </div>
    </div>

<?php
  require_once "./footer.php";
?>