<?php
session_start();
include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>E-Arsip</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3">Menu</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link active" href="penerimaan-admin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-star"></i></div>
                                Data Penerimaan
                                <hr>
                            </a>
                            <a class="nav-link" href="laporan-user.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-about"></i></div>
                                Data User
                                <hr>
                            </a>
                            <a class="nav-link" href="logout.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-arrow-alt-circle-left"></i></div>
                                Logout
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Data Diri Siswa Baru SDN Mojotengah 2</h1><br>
                    <div class="col-lg-8"> <br>
                        <?php
                        $id_pendaftaran = ($_GET['id_pendaftaran']);

                        $query = "SELECT * FROM pendaftaran WHERE id_pendaftaran='$id_pendaftaran'";
                        $result = mysqli_query($koneksi, $query);
                        $d = mysqli_fetch_array($result);
                        ?>
                        <form method="POST" enctype="multipart/form-data">
                            <h4>IDENTITAS SISWA</h4>
                            <div class="form-grup">
                                <label>Nama Siswa</label><br>
                                <input type="text" name="nama_lengkap" class="form-control" readonly value="<?php echo $d['nama_lengkap'];?>"><br>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label><br>
                                <input type="text" name="jenis_kelamin" class="form-control" readonly value="<?php echo $d['jenis_kelamin'];?>"><br>
                            </div>
                            <div class="form-group">
                                <label>TTL</label><br>
                                <input type="text" name="ttl" class="form-control" readonly value="<?php echo $d['ttl'];?>"><br>
                            </div>
                            <div class="form-group">
                                <label>Agama</label><br>
                                <input type="text" name="agama" class="form-control" readonly value="<?php echo $d['agama'];?>"><br>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label><br>
                                <input type="text" name="alamat" class="form-control" readonly value="<?php echo $d['alamat'];?>"><br>
                            </div>
                            <div class="form-group">
                                <label>Asal Sekolah</label><br>
                                <input type="text" name="sekolah_asal" class="form-control" readonly value="<?php echo $d['sekolah_asal'];?>"><br>
                            </div>
                            <div class="form-group">
                                <label>Nomor Induk Kependudukan</label><br>
                                <input type="text" name="nik" class="form-control" readonly value="<?php echo $d['nik'];?>"><br>
                            </div>
                            <div class="form-group">
                                <label>Nomor Akta Kelahiran</label><br>
                                <input type="text" name="no_akta_lahir" class="form-control" readonly value="<?php echo $d['no_akta_lahir'];?>"><br>
                            </div>
                            <div class="form-group">
                                <label>Nomor Telepon</label><br>
                                <input type="text" name="telepon" class="form-control" readonly value="<?php echo $d['telepon'];?>"><br>
                            </div><br>
                            <h4>DATA PERIODIK</h4>
                            <div class="form-group">
                                <label>Tinggi Badan (cm)</label><br>
                                <input type="text" name="tb_siswa" class="form-control" readonly value="<?php echo $d['tb_siswa'];?>"><br>
                            </div>
                            <div class="form-group">
                                <label>Berat Badan (kg)</label><br>
                                <input type="text" name="bb_siswa" class="form-control" readonly value="<?php echo $d['bb_siswa'];?>"><br>
                            </div>
                            <div class="form-group">
                                <label>Jarak Rumah ke Sekolah (km)</label><br>
                                <input type="text" name="jarak" class="form-control" readonly value="<?php echo $d['jarak'];?>"><br>
                            </div><br>
                            <h4>DATA AYAH KANDUNG</h4>
                            <div class="form-group">
                                <label>Nama Ayah</label><br>
                                <input type="text" name="nama_ayah" class="form-control" readonly value="<?php echo $d['nama_ayah'];?>"><br>
                            </div>
                            <div class="form-group">
                                <label>NIK Ayah</label><br>
                                <input type="text" name="nik_ayah" class="form-control" readonly value="<?php echo $d['nik_ayah'];?>"><br>
                            </div>
                            <div class="form-group">
                                <label>Pekerjaan Ayah</label><br>
                                <input type="text" name="pekerjaan_ayah" class="form-control" readonly value="<?php echo $d['pekerjaan_ayah'];?>"><br>
                            </div>
                            <div class="form-group">
                                <label>Pendidikan Ayah</label><br>
                                <input type="text" name="pend_ayah" class="form-control" readonly value="<?php echo $d['pend_ayah'];?>"><br>
                            </div><br>
                            <h4>DATA IBU KANDUNG</h4>
                            <div class="form-group">
                                <label>Nama Ibu</label><br>
                                <input type="text" name="nama_ibu" class="form-control" readonly value="<?php echo $d['nama_ibu'];?>"><br>
                            </div>
                            <div class="form-group">
                                <label>Pekerjaan Ibu</label><br>
                                <input type="text" name="pekerjaan_ibu" class="form-control" readonly value="<?php echo $d['pekerjaan_ibu'];?>"><br>
                            </div>
                            <div class="form-group">
                                <label>Pendidikan Ibu</label><br>
                                <input type="text" name="pend_ibu" class="form-control" readonly value="<?php echo $d['pend_ibu'];?>"><br>
                            </div><br>
                            <h4>LAIN-LAIN</h4>
                            <div class="form-group">
                                <label>Foto 3x4</label><br>
                                <input type="file" name="foto" class="form-control" readonly value="<?php echo $d['foto'];?>"><br>
                            </div>
                            <div class="form-group">
                                <label>Status</label><br>
                                <input class="form-control" name="status" readonly value="<?php echo $d['status'];?>">
                            </div><br>
                        </form><br>
                        <a href="penerimaan-admin.php" class="btn btn-info">Kembali</a>
                    </div>
                </div>
            </div>
</div>
</div>
                </main>
                <!-- <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; by Kelompok 10 - Shafa Venina</div>
                        </div>
                    </div>
                </footer> -->
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
