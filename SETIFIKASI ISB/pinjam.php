<?php include "Connection.php"; ?>

<?php
if (isset($_POST['pinjam'])) {

    $id_anggota = $_POST['id_anggota'];
    $id_buku = $_POST['id_buku'];
    $tanggal_peminjaman   = date("Y-m-d");
    $tanggal_pengembalian = date("Y-m-d", strtotime("+7 days"));

    mysqli_query($connection, "
        INSERT INTO peminjaman (id_anggota, id_buku, tanggal_peminjaman, tanggal_pengembalikan)
        VALUES ('$id_anggota','$id_buku','$tanggal_peminjaman','$tanggal_pengembalian')
    ");

    mysqli_query($connection, "
        UPDATE buku SET status='dipinjam' WHERE id_buku='$id_buku'
    ");

    echo "Peminjaman berhasil!";
}
?>

<!DOCTYPE html>
<html>
<body>
<h2>Peminjaman Buku</h2>

<form method="POST">
    ID Anggota: <input type="number" name="id_anggota" required><br><br>
    ID Buku: <input type="number" name="id_buku" required><br><br>
    <button type="submit" name="pinjam">Pinjam</button>
</form>

<br>
<a href="index.html"> Kembali ke Home</a>
</body>
</html>
