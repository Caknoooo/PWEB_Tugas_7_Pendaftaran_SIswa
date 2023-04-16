<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <!-- Memanggil file CSS Bootstrap -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
  </head>
  <body>
    <header class="bg-dark text-white">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 d-flex justify-content-between">
            <h1>Pendaftaran Siswa Baru</h1>
            <h1>SMK Coding</h1>
          </div>
        </div>
      </div>
    </header>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">SMK Coding</a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="form-daftar.php">Daftar Siswa Baru</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="list-siswa.php">Pendaftar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container my-5">
      <?php
      if(isset($_GET['status'])):
    ?>
      <div
        class="alert alert-<?php echo ($_GET['status'] == 'sukses') ? 'success' : 'danger' ?>"
        role="alert"
      >
        <?php 
    if($_GET['status'] == 'sukses') {
      echo "Pendaftaran Siswa Baru Berhasil";
    } else {
      echo "Pendaftaran Gagal";
    }
  ?>
      </div>
      <?php endif; ?>

      <h4>Menu</h4>
      <p>Silahkan pilih salah satu menu diatas untuk melanjutkan</p>
    </div>

    <!-- Memanggil file JS Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
