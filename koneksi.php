<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "proyek2_pendaftaran";
$koneksi = mysqli_connect($server,$username,$password,$database);

  if(!$koneksi){
    die ("Error connecting to database: ".mysql_connect_error());
  }
?>