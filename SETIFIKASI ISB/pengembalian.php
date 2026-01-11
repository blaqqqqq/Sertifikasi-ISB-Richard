<?php
include "Connection.php";

/* PROSES PENGEMBALIAN */
if (isset($_POST['kembali'])) {

    $id_buku = $_POST['id_buku'];

    // hapus data peminjaman
    mysqli_query(
        $connection,
        "DELETE FROM peminjaman WHERE id_buku = '$id_buku'"
    );

    // update status buku
    mysqli_query(
        $connection,
        "UPDATE buku SET status = 'tersedia' WHERE id_buku = '$id_buku'"
    );

    echo "<p style='color:green'>Buku berhasil dikembalikan</p>";
}

/* AMBIL DATA BUKU YANG DIPINJAM */
$query = mysqli_query($connection, "
    SELECT 
        p.id_buku,
        a.nama,
        b.judul,
        p.tanggal_peminjaman
    FROM peminjaman p
    JOIN anggota a ON p.id_anggota = a.id_anggota
    JOIN buku b ON p.id_buku = b.id_buku
");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pengembalian Buku</title>
</head>
<body>

<h2>Pengembalian Buku</h2>

<table border="1" cellpadding="5">
<tr>
    <th>Nama Anggota</th>
    <th>Judul Buku</th>
    <th>Tanggal Pinjam</th>
    <th>Aksi</th>
</tr>

<?php
if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
?>
<tr>
    <td><?= $row['nama'] ?></td>
    <td><?= $row['judul'] ?></td>
    <td><?= $row['tanggal_peminjaman'] ?></td>
    <td>
        <form method="POST" style="display:inline;">
            <input type="hidden" name="id_buku" value="<?= $row['id_buku'] ?>">
            <button type="submit" name="kembali">Kembalikan</button>
        </form>
    </td>
</tr>
<?php
    }
} else {
?>
<tr>
    <td colspan="4" align="center">Tidak ada buku yang sedang dipinjam</td>
</tr>
<?php } ?>

</table>

<br>
<a href="index.html">Kembali ke Home</a>

</body>
</html>
