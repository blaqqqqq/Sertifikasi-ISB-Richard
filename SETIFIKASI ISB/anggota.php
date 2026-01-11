<?php
include "Connection.php";

$query = mysqli_query($connection, "SELECT * FROM anggota");

if (!$query) {
    die("Query error: " . mysqli_error($koneksi));
}
?>

<h2>Data Anggota</h2>

<table border="1">
<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>No Telp</th>
</tr>

<?php while ($row = mysqli_fetch_assoc($query)) { ?>
<tr>
    <td><?= $row['id_anggota'] ?></td>
    <td><?= $row['nama'] ?></td>
    <td><?= $row['alamat'] ?></td>
    <td><?= $row['no_telp'] ?></td>
</tr>
<?php } ?>
</table>

<br>
<a href="index.html">Kembali ke Home</a>