<?php
include '../koneksi.php';

$id_alur = $_GET['id_alur'];
$query = "DELETE FROM alur_pendaftaran WHERE id_alur='$id_alur'";
$result = mysqli_query($koneksi, $query);
if(!$result) {
    die ("Error deleting data. ".mysqli_errno($koneksi).
    " - ".mysqli_error($koneksi));
} else {
    echo "<script>alert('Data alur pendaftaran terhapus');window.location='alur_pendaftaran.php';</script>";    
}
mysqli_close($koneksi);