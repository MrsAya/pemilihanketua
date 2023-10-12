<?php
session_start();

// Periksa apakah pengguna sudah login atau belum
if (isset($_SESSION['pese_id'])) {
    header("Location: pemilihan.php");
    exit;
}

require_once "./navbar.php";
?>


    <div class="container-fluid">
      <div class="row mt-3">
        <div class="col-md-12">
          
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-6">
                <img src="./assets/img/00011-592687551.png" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="offset-md-1 col-md-4">
                <div class="card-body mt-5">
                  <h5 class="card-title">Portal Login!</h5>
                  <p class="card-text">

                  <?php
                    if(isset($_GET['error'])){
                  ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="info">
                      <strong><?php echo $_GET['error']?>!</strong>
                      <button type="button" class="btn-close" data-bs-dismiss="info" aria-label="Close"></button>
                    </div>
                  <?php
                    }
                  ?>

                    <form action="validasi.php" method="POST">
                      <div class="mb-3">
                        <label for="nim" class="form-label">NIM/NIP</label>
                        <input type="number" class="form-control" name="nim" id="nim" placeholder="XXXXXXX" autofocus>
                      </div>
                      <div class="mb-3">
                        <label for="inputPassword5" class="form-label">Token</label>
                        <input type="password" id="inputPassword5" name="password" class="form-control" aria-describedby="passwordHelpBlock">
                        <div id="passwordHelpBlock" class="form-text">
                          Masukan Token yang sudah diberikan oleh panitia melalui email.
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Masuk</button>
                    </form>
                  </p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    
<?php
  require_once "./footer.php";
?>