<?php
include 'koneksi.php';
$idmahasiswa = $_GET['idmahasiswa'];
$query = "DELETE FROM mahasiswa WHERE idmahasiswa = '$idmahasiswa'";
mysqli_query($koneksi, $query);
header("location:index.php");

?>