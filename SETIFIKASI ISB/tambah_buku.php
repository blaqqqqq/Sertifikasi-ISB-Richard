<?php
include "Connection.php";

if (isset($_POST['simpan'])) {

    $judul     = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $status    = "tersedia"; // default

    $sql = "
        INSERT INTO buku (judul, pengarang, status)
        VALUES ('$judul', '$pengarang', '$status')
    ";

    if (mysqli_query($connection, $sql)) {
        echo "<p style='color:green'>Buku berhasil ditambahkan</p>";
    } else {
        echo "<p style='color:red'>Gagal: " . mysqli_error($connection) . "</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
</head>
<body>

<h2>Input Buku Baru</h2>

<form method="POST">
    Judul Buku:<br>
    <input type="text" name="judul" required><br><br>

    Pengarang:<br>
    <input type="text" name="pengarang" required><br><br>

    <button type="submit" name="simpan">Simpan Buku</button>
</form>

<br>
<a href="buku.php">Lihat Katalog Buku</a>

</body>
</html>
