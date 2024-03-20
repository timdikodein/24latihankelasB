<?php
$conn = mysqli_connect("localhost","root","root","belajarphp");
if (isset( $_POST['submit'])){

    $namalengkap = $_POST['namalengkap'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    $query = "insert into mahasiswa values(null,'$namalengkap','$jeniskelamin','$kelas','$alamat')";
    mysqli_query($conn, $query);
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h2>Tambah Data</h2>
    <form action="" method="post">
        <table>
        <tr>
                <td>Id mahasiswa</td>
                <td><input type="int" name="idmahasiswa" placeholder="Otomatis"></td>
            </tr>
            <tr>
                <td>Nama Mahasiswa</td>
                <td><input type="text" name="namalengkap"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="text" name="jeniskelamin"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Simpan"></td>
            </tr>
        </table>
</body>
</html>