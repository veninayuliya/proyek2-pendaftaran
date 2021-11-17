<?php
    session_start();
    include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Form Pendaftaran</title>

  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">

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
            <a class="nav-link" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../page/pendaftaran.php">Pendaftaran</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="../page/penerimaan.php">Penerimaan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../page/logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="col-md-6">
    <h3 class="my-4">Formulir Pendaftaran Siswa Baru SDN Mojotengah 2</h3>
    <div class="container">
	<form method="POST" enctype="multipart/form-data">
            <h4>IDENTITAS SISWA</h4>
            <div class="form-grup">
                <label>Nama Lengkap</label><br>
                <input type="text" name="nama_lengkap" placeholder="Masukkan nama lengkap" class="form-control" required><br>
            </div><br>
            <div class="form-group">
                <label>Foto 3x4 Background Merah</label><br>
                <input type="file" name="foto" required>
            </div><br>
            <div class="form-group">
                <label>Jenis Kelamin</label><br>
                <select class="form-control" name="jenis_kelamin">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div><br>
            <div class="form-group">
                <label>Tempat, Tanggal Lahir</label><br>
                <input type="text" name="ttl" placeholder="Tempat, (dd-mm-yyyy)" class="form-control" required><br>
            </div>
            <div class="form-group">
                <label>Nomor Induk Kependudukan</label><br>
                <input type="text" name="nik" placeholder="Masukkan Nomor Induk Kependudukan" class="form-control" required><br>
            </div>
            <div class="form-group">
                <label>Nomor Akta Kelahiran</label><br>
                <input type="text" name="no_akta_lahir" placeholder="Masukkan nomor akta kelahiran" class="form-control" required><br>
            </div>
            <div class="form-group">
                <label>Agama</label><br>
                <select class="form-control" name="agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
            </div><br>
            <div class="form-group">
                <label>Asal Sekolah</label><br>
                <input type="text" name="sekolah_asal" placeholder="Masukkan Asal Sekolah" class="form-control" required><br>
            </div>
            <div class="form-group">
                <label>Alamat</label><br>
                <textarea name="alamat" placeholder="Masukkan alamat" style="border-radius:5px;width:615px;height:200px;" required>
                </textarea>
            </div><br>
            <div class="form-group">
                <label>No. Telepon</label><br>
                <input type="text" name="telepon" placeholder="Masukkan nomor telepon yang dapat dihubungi" class="form-control" required><br>
            </div><br>
            <h4>DATA PERIODIK</h4>
            <div class="form-group">
                <label>Tinggi Badan (cm)</label><br>
                <input type="number" name="tb_siswa" min="100" max="170" step="1" placeholder="Masukkan tinggi badan (cm)" class="form-control" required><br>
            </div>
            <div class="form-group">
                <label>Berat Badan (kg)</label><br>
                <input type="number" name="bb_siswa" min="25" max="250" step="1" placeholder="Masukkan berat badan (kg)" class="form-control" required><br>
            </div>
            <div class="form-group">
                <label>Jumlah Saudara</label><br>
                <input type="number" name="jml_saudara" min="0" max="20" step="1" placeholder="Masukkan jumlah saudara kandung" class="form-control" required><br>
            </div>
            <div class="form-group">
                <label>Jarak Rumah ke Sekolah (km)</label><br>
                <input type="number" name="jarak" min="0" max="30" step="1" placeholder="Masukkan jarak rumah ke sekolah (km)" class="form-control" required><br>
            </div><br>
            <h4>DATA AYAH KANDUNG</h4>
            <div class="form-group">
                <label>Nama Ayah</label><br>
                <input type="text" name="nama_ayah" placeholder="Masukkan nama ayah kandung" class="form-control" required><br>
            </div>
            <div class="form-group">
                <label>NIK Ayah</label><br>
                <input type="text" name="nik_ayah" placeholder="Masukkan NIK ayah" class="form-control" required><br>
            </div>
            <div class="form-group">
                <label>Pekerjaan Ayah</label><br>
                <input type="text" name="pekerjaan_ayah" placeholder="Masukkan pekerjaan ayah" class="form-control" required><br>
            </div>
            <div class="form-group">
                <label>Pendidikan Ayah</label><br>
                <select class="form-control" name="pend_ayah">
                    <option value="tidak_bersekolah">Tidak Bersekolah</option>
                    <option value="sd">SD/MI</option>
                    <option value="smp_sltp_mts">SMP/SLTP/MTs</option>
                    <option value="sma_smk_slta_ma">SMA/SLTA/SMK/MA</option>
                    <option value="d1">D1</option>
                    <option value="d2">D2</option>
                    <option value="d3">D3</option>
                    <option value="d4_s1">D4/S1</option>
                    <option value="s2">S2</option>
                    <option value="s3">S3</option>
                </select>
            </div><br>
            <h4>DATA IBU KANDUNG</h4>
            <div class="form-group">
                <label>Nama Ibu</label><br>
                <input type="text" name="nama_ibu" placeholder="Masukkan nama ibu kandung" class="form-control" required><br>
            </div>
            <div class="form-group">
                <label>NIK Ibu</label><br>
                <input type="text" name="nik_ibu" placeholder="Masukkan NIK ibu" class="form-control" required><br>
            </div>
            <div class="form-group">
                <label>Pekerjaan Ibu</label><br>
                <input type="text" name="pekerjaan_ibu" placeholder="Masukkan pekerjaan ibu" class="form-control" required><br>
            </div>
            <div class="form-group">
                <label>Pendidikan Ibu</label><br>
                <select class="form-control" name="pend_ibu">
                    <option value="tidak_bersekolah">Tidak Bersekolah</option>
                    <option value="sd">SD/MI</option>
                    <option value="smp_sltp_mts">SMP/SLTP/MTs</option>
                    <option value="sma_smk_slta_ma">SMA/SLTA/SMK/MA</option>
                    <option value="d1">D1</option>
                    <option value="d2">D2</option>
                    <option value="d3">D3</option>
                    <option value="d4_s1">D4/S1</option>
                    <option value="s2">S2</option>
                    <option value="s3">S3</option>
                </select>
            </div><br><br>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button><br><br>
        </form>
        <?php
        if(isset(($_POST['submit'])))
        {
            $nama = $_FILES['foto']['name'];
            $lokasi = $_FILES['foto']['tmp_name'];
            $ukuran = $_FILES['foto']['size'];
            $ukuran_max = 1044070;
            if($ukuran < $ukuran_max){
                move_uploaded_file($lokasi, "../img/".$nama);
                $status="Sudah Terdaftar";
                $koneksi->query("INSERT INTO pendaftaran (
                    nama_lengkap, foto, jenis_kelamin, ttl, nik, no_akta_lahir, agama, sekolah_asal,
                    alamat, telepon, tb_siswa, bb_siswa, jml_saudara, jarak, nama_ayah, nik_ayah, pekerjaan_ayah,
                    pend_ayah, nama_ibu, nik_ibu, pekerjaan_ibu, pend_ibu, status
                    ) VALUES (
                        '$_POST[nama_lengkap]', '$nama', '$_POST[jenis_kelamin]', '$_POST[ttl]', '$_POST[nik]',
                        '$_POST[no_akta_lahir]', '$_POST[agama]', '$_POST[sekolah_asal]', '$_POST[alamat]', '$_POST[telepon]',
                        '$_POST[tb_siswa]', '$_POST[bb_siswa]', '$_POST[jml_saudara]', '$_POST[jarak]', '$_POST[nama_ayah]',
                        '$_POST[nik_ayah]', '$_POST[pekerjaan_ayah]', '$_POST[pend_ayah]', '$_POST[nama_ibu]', '$_POST[nik_ibu]',
                        '$_POST[pekerjaan_ibu]', '$_POST[pend_ibu]', '$status'
                    )");
                echo "<script>alert('Berhasil melakukan pendaftaran. Silakan cek alur pendaftaran untuk informasi lebih lanjut');window.location='../page/alur.php';</script>";
            } else {
                echo "<script>alert('Masukkan foto dengan ukuran dibawah 100mb');window.location='../page/pendaftaran.php;</script>'";
            }
        }
        ?>

    </div>
  </div>

  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Kelompok 10</p>
    </div>
  </footer>
</body>
</html>
