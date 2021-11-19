<?php
$conn = mysqli_connect("localhost","root","","pertemuan16");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function insert($data){
    global $conn;
    $nama = htmlspecialchars($data["nama"]); 
    $nim = htmlspecialchars($data["nim"]);
    $tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
    $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
    $fakultas = htmlspecialchars($data["fakultas"]);
    $alamat = htmlspecialchars($data["alamat"]);

    $query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$nim', '$tanggal_lahir', '$jenis_kelamin', '$fakultas', '$alamat')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function delete($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function edit($data){
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]); 
    $nim = htmlspecialchars($data["nim"]);
    $tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
    $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
    $fakultas = htmlspecialchars($data["fakultas"]);
    $alamat = htmlspecialchars($data["alamat"]);

    $query = "UPDATE mahasiswa SET 
                nama = '$nama',
                nim = '$nim',
                tanggal_lahir = '$tanggal_lahir',
                jenis_kelamin = '$jenis_kelamin',
                fakultas = '$fakultas',
                alamat = '$alamat'
            WHERE id = $id
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>