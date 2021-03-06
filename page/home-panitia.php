<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Welcome to SDNMODU</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" style="color:white;">SDN MOJOTENGAH 2</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="home-panitia.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="alur_pendaftaran.php">Kelola Alur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="penerimaan-panitia.php">Penerimaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active" style="background-image: url('../img/lomba.jpg')">
        </div>
        <div class="carousel-item" style="background-image: url('../img/maulid.jpg')">
        </div>
        <div class="carousel-item" style="background-image: url('../img/image.jpg')">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <div class="container">
      <div class="col-lg-12"> <br>
            <div class="card">
                <div class="card-header text-center">
                    <h3>Alur Pendaftaran</h3>
                </div></br></br>
            </div>
            <!-- Title -->
            <div class="card body">
                <table class="table table-bordered table-striped">
                <thead>
                    <tr style="text-align:center;">
                        <th>No</th>
                        <th>Nama Kegiatan</th>
                        <th>Pelaksanaan</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                include '../koneksi.php';
                $no=1;
                $sql = "SELECT * FROM alur_pendaftaran;";
                $data=mysqli_query($koneksi,$sql) or die(mysqli_error($koneksi));
                while($d=mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td style="text-align:center;"><?php echo $no++; ?></td>
                    <td><?php echo $d['nama_kegiatan']; ?></td>
                    <td><?php echo $d['pelaksanaan']; ?></td>
                    <td><?php echo $d['keterangan']; ?></td>
                </tr>
                <?php
                }
                ?>
                </tbody>
                </table>
                </br></br>
            </div>
        </div><br><br>
    <!-- /.row -->
    <div class="row">
      <div class="col-lg-6">
        <h3>Kontak</h3>
        <img style="margin:10px" width="40" height="40" src='../img/telepon.png' alt=""> 085649921130 <br>
        <img style="margin:10px" width="40" height="40" src='../img/envelope.png' alt=""> sdnmojotengah2sukorejo@gmail.com <br>
      </div>
    </div>

    <hr>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Kelompok 10 </p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>