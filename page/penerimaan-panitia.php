<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Hasil Penerimaan</title>

  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="../css/modern-business.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" style="color:white;">SDN MOJOTENGAH 2</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home-panitia.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="alur_pendaftaran.php">Kelola Alur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="penerimaan-panitia.php">Penerimaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <h1 class="mt-4" style="text-align:center;">Hasil Penerimaan Siswa Baru SDN Mojotengah 2</h1><br>
        <div class="col-lg-12"> <br>
            <div class="card">
                <div class="card-header text-center">
                    <h3>Hasil Penerimaan</h3>
                </div>
                </br></br>
            </div>
            <!-- Title -->
            <div class="card body">
                <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Siswa</th>
                        <th>TTL</th>
                        <th>Jenis Kelamin</th>
                        <th>Asal Sekolah</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                include '../koneksi.php';
                $no=1;
                $data=mysqli_query($koneksi,"SELECT * FROM pendaftaran");
                while($d=mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama_lengkap']; ?></td>
                    <td><?php echo $d['ttl']; ?></td>
                    <td><?php echo $d['jenis_kelamin']; ?></td>
                    <td><?php echo $d['sekolah_asal']; ?></td>
                    <td><?php echo $d['status']; ?></td>
                </tr>
                <?php
                }
                ?>
                </tbody>
                </table>
                </br></br>
            </div>
        </div>
      </div>
    </div>
</body>
</html>