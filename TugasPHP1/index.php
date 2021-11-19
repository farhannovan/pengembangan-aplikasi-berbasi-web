<?php
require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Daftar Mahasiswa</h1>

    <a class="button" href="insert.php">Tambah data mahasiswa</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No. </th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Fakultas</th>
            <th>Alamat</th>
        </tr>

        <?php $i = 1 ?>
        <?php foreach ($mahasiswa as $row) : ?>
        <tr>
            <td class="index"><?= $i;?></td>
            <td>
                <a href="edit.php?id=<?=$row["id"] ?>">Edit</a> |
                <a href="delete.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin ingin menghapus data?')">Delete</a>
            </td>
            <td class="index"><?= $row["nama"];?></td>
            <td class="index"><?= $row["nim"];?></td>
            <td class="index"><?= $row["tanggal_lahir"];?></td>
            <td class="index"><?= $row["jenis_kelamin"];?></td>
            <td class="index"><?= $row["fakultas"];?></td>
            <td class="index"><?= $row["alamat"];?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>

</body>

</html>