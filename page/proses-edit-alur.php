<?php
include '../koneksi.php';

$id_alur        = $_GET['id_alur'];
$nama_kegiatan  = $_POST['nama_kegiatan'];
$pelaksanaan    = $_POST['pelaksanaan'];
$keterangan     = $_POST['keterangan'];

$query = "UPDATE alur-pendaftaran SET id_alur='$id_alur', nama_kegiatan='$nama_kegiatan', 
          pelaksanaan='$pelaksanaan', keterangan='$keterangan'
          WHERE id_alur='$id_alur'   
         ";

if(mysqli_query($koneksi, $query)){
    echo "<script>alert('Data alur berhasil diupdate!');window.location='../page/alur_pendaftaran.php';</script>";
} else {
    echo "<script>alert('Data alur gagal diupdate!');window.location='../page/edit-alur.php';</script>";
}
mysqli_close($koneksi);