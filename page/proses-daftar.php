<?php
include '../koneksi.php';

$nama_lengkap   = $_POST['nama_lengkap'];
$nik            = $_POST['nik'];
$sekolah_asal   = $_POST['sekolah_asal'];
$ttl            = $_POST['ttl'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$agama          = $_POST['agama'];
$alamat         = $_POST['alamat'];
$telepon        = $_POST['telepon'];
$no_akta_lahir  = $_POST['no_akta_lahir'];
$tb_siswa       = $_POST['tb_siswa'];
$bb_siswa       = $_POST['bb_siswa'];
$jml_saudara    = $_POST['jml_saudara'];
$jarak          = $_POST['jarak'];
$foto           = $_FILES['foto']['name'];
$nama_ayah      = $_POST['nama_ayah'];
$nik_ayah       = $_POST['nik_ayah'];
$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
$pend_ayah      = $_POST['pend_ayah'];
$nama_ibu       = $_POST['nama_ibu'];
$nik_ibu        = $_POST['nik_ibu'];
$pekerjaan_ibu  = $_POST['pekerjaan_ibu'];
$pend_ibu       = $_POST['pend_ibu'];

if($foto != ""){
    $ekstensi_diperbolehkan = array('png','jpeg','jpg');
    $x = explode('.', $foto);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['foto']['tmp_name'];
    $angka_acak     = rand(1,999);
    $nama_foto_baru = $angka_acak.'-'.$foto;

    if(in_array($ekstensi, $ekstensi_diperbolehkan) == true){
        move_uploaded_file($file_tmp, '../img/'.$foto);
        $query = "INSERT INTO pendaftaran (
            nama_lengkap, foto, jenis_kelamin, ttl, nik, no_akta_lahir, agama, sekolah_asal,
            alamat, telepon, tb_siswa, bb_siswa, jml_saudara, jarak, nama_ayah, nik_ayah, pekerjaan_ayah,
            pend_ayah, nama_ibu, nik_ibu, pekerjaan_ibu, pend_ibu
            ) VALUES (
                '$nama_lengkap', '$nama_foto_baru', '$jenis_kelamin', '$ttl', '$nik',
                '$no_akta_lahir', '$agama', '$sekolah_asal', '$alamat', '$telepon',
                '$tb_siswa', '$bb_siswa', '$jml_saudara', '$jarak', '$nama_ayah',
                '$nik_ayah', '$pekerjaan_ayah', '$pend_ayah', '$nama_ibu', '$nik_ibu',
                '$pekerjaan_ibu', '$pend_ibu'
            )";
        if(mysqli_query($koneksi, $query)){
            echo "<script>alert('Berhasil melakukan pendaftaran');window.location='../page/penerimaan.php';</script>";
        } else {
            echo "<script>alert('Cant run Query');window.location='../page/pendaftaran.php';</script>". mysqli_error($koneksi);
        }
    } else {     
           echo "<script>alert('Image Extension must be .jpg/.png/.jpeg');window.location='../page/pendaftaran.php';</script>";
    }
} else {
    echo "<script>alert('Field wajib diisi!');window.location='../page/pendaftaran.php';</script>". mysqli_error($koneksi);
}
mysqli_close($koneksi);