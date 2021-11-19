<?php
require 'function.php';

if (isset($_POST["submit"])) {
    if (insert($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan!');
                document.location.href = 'insert.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>
                Dashboard Mahasiswa
            </h1>
        </header>
        <div class="content">
            <aside>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="index.php">Daftar Mahasiswa</a></li>
                    <li><a href="edit.php">Ubah Data</a></li>
                </ul>
            </aside>
            <div class="form">
                <div>
                    <div>
                        <h4>Registrasi Mahasiswa</h4>
                        <form action="" method="post">
                            <table>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td><input type="text" name="nama" id="nama" required></td>
                                </tr>
                                <tr>
                                    <td>NIM</td>
                                    <td>:</td>
                                    <td><input type="text" name="nim" id="nim" required></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>:</td>
                                    <td><input type="date" name="tanggal_lahir" id="tanggal_lahir" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>:</td>
                                    <td>
                                        <input type="radio" value="Laki-laki" name="jenis_kelamin"
                                            id="jenis_kelamin">Laki-Laki
                                        <input type="radio" value="Perempuan" name="jenis_kelamin"
                                            id="jenis_kelamin">Perempuan
                                    </td>
                                </tr>
                                <tr>
                                    <td>Fakultas</td>
                                    <td>:</td>
                                    <td>
                                        <select name="fakultas" value="fakultas" id="fakultas" required>
                                            <option value="FTI">FTI</option>
                                            <option value="FTSP">FTSP</option>
                                            <option value="FIAI">FIAI</option>
                                            <option value="FMIPA">FMIPA</option>
                                            <option value="FPSB">FPSB</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td><textarea name="alamat" id="alamat" cols="24" rows="4" required></textarea></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <button type="submit" name="submit">Tambah Data</button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <i>Copyright &copy; 2021 PABW</i><br>
            <a href="mailto:pabw2021@uii.ac.id">pabw2021@uii.ac.id</a>
        </footer>
    </div>
</body>

</html>