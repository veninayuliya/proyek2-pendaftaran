<?php
include '../koneksi.php';

mysqli_query($db,"DELETE FROM alur-pendaftaran WHERE id_alur='$_GET[id_alur]'");

echo "<script>alert('Data alur pendaftaran terhapus');
window.location='../page/alur_pendaftaran.php';</script>";
?>