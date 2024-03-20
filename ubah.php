<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>
<body>
    <h2>Ubah Data Mahasiswa</h2>
<br>
    <a href="index.php">Kembali</a>

    <?php
    include("koneksi.php");
    $idmahasiswa = $_GET['$idmahasiswa'];
    $data = mysqli_query($koneksi, "select * from mahasiswa where idmahasiswa='$idmahasiswa'");
    while ($list = mysqli_fetch_array($data))
        ?>
        <form action="post" action="ubah.php">
            <table>
                <tr>
                    <td>Nama Mahasiswa</td>
                    <td>
                        <input type="hidden" name="idmahasiswa" value="<?php echo $list['$idmahasiswa']; ?> ">
                        <input  type="text" name="idmahasiswa" value="<?php echo $list['idmahasiswa'];?>">
                    </td>
                <tr>
                    <td> Nama Lengkap</td>  
                   <td> < input type="text" name="namalengkap" value="<?php echo $list['namalengkap'];?>" </td>
                </tr>
                </tr>
            </table>
        </form>
    }


    ?>

</body>
</html>