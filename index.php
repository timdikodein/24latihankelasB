<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP Sederhana</title>
</head>
<body>
    <h1> Data Mahasiswa</h1>
    <br>
    <br>
    <table border="2">
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>Jenis Kelamin</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    <?php
    include 'koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi, "select * from mahasiswa");
    while ($mhs = mysqli_fetch_array($data)){
      
    echo "<tr>";
    echo "<td>".$no."</td>";
    $no++;
      echo "<td>".$mhs['namalengkap']."</td>";
      echo "<td>".$mhs['jeniskelamin']."</td>";
      echo "<td>".$mhs['kelas']."</td>";
      echo "<td>".$mhs['alamat']."</td>";
      echo "<td> <a href='ubah.php?idmahasiswa=$mhs[idmahasiswa]'> Edit</a> ||<a href='hapus.php?idmahasiswa=$mhs[idmahasiswa]' > Delete</a> </td></tr>";
   
    
      
    }

    ?>
    </table>
    <br>
    <a href="tambah.php"> Tambah Mahasiswa</a>
</body>
</html>