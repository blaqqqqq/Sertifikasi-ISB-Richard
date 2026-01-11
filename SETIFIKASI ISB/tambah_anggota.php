<?php
include "Connection.php";
include "class/Anggota.php";

if (isset($_POST['simpan'])) {

    $anggota = new Anggota(
        $_POST['nama'],
        $_POST['alamat'],
        $_POST['no_telp']
    );

    mysqli_query(
        $connection,
        "INSERT INTO anggota (nama, alamat, no_telp)
         VALUES (
            '{$anggota->getNama()}',
            '{$anggota->getAlamat()}',
            '{$anggota->getNoTelp()}'
         )"
    );

    echo "Anggota berhasil didaftarkan";
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Anggota</title>
</head>
<body>

<h2>Pendaftaran Anggota Perpustakaan</h2>

<form method="POST">
    Nama Lengkap:<br>
    <input type="text" name="nama" required><br><br>

    Alamat:<br>
    <textarea name="alamat" required></textarea><br><br>

    No Telepon:<br>
    <input type="text" name="no_telp" required><br><br>

    <button type="submit" name="simpan">Daftarkan</button>
</form>

<br>
<a href="anggota.php">Lihat Data Anggota</a> |
<a href="index.html"> Kembali ke Home</a>
</body>
</html>