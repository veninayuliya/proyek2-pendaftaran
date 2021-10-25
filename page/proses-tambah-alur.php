<?php
include '../koneksi.php';

$nama_kegiatan  = $_POST['nama_kegiatan'];
$pelaksanaan    = $_POST['pelaksanaan'];
$keterangan     = $_POST['keterangan'];

$query = "INSERT INTO alur-pendaftaran (nama_kegiatan, pelaksanaan, keterangan)
          VALUES ('$nama_kegiatan', '$pelaksanaan', '$keterangan')
         ";
if(mysqli_query($koneksi, $query)){
    echo "<script>alert('Alur pendaftaran berhasil ditambahkan!');window.location='../page/home-panitia.php';</script>";
} else {
    echo "<script>alert('Cant run Query');window.location='../page/tambah-alur.php';</script>". mysqli_error($koneksi);
}
mysqli_close($koneksi);