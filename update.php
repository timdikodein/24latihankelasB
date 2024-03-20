<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Nama Mahasiswa</title>
</head>
<body>
    <h2> Ubah Data </h2>
    <br>
    <a href="index.php">Kembali Ke Awal</a>
    <br>
    <table>
        <form action="" method="post">
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
        </form>
    </table>

    <?php

    include 'koneksi.php';
    $idmahasiswa = $_GET['idmahasiswa'];
    $data = mysqli_query($koneksi, "select * from mahasiswa where idmahasiswa = '$idmahasiswa'");
    while ($mhs = mysqli_fetch_array($data)){
        ?>
        <form action="update.php" method="post">
            <table>
                <tr>
                    <td>Id mahasiswa</td>
                    <td><input type="int" name="idmahasiswa" value="<?php echo $mhs['idmahasiswa'] ?>"></td>
                </tr>
                <tr>
                    <td>Nama Mahasiswa</td>
                    <td><input type="text" name="namalengkap" value="<?php echo $mhs['namalengkap'] ?>"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><input type="text" name="jeniskelamin" value="<?php echo $mhs['jeniskelamin'] ?>"></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td><input type="text" name="kelas" value="<?php echo $mhs['kelas'] ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?php echo $mhs['alamat'] ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
    }

</body>
</html>