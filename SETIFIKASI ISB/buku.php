<?php include "connection.php"; ?>
<!DOCTYPE html>
<html>
<body>
<h2>Katalog Buku</h2>

<table border="1">
<tr>
    <th>ID Buku</th>
    <th>Judul</th>
    <th>Pengarang</th>
    <th>Status</th>
</tr>

<?php
$query = mysqli_query($connection, "SELECT * FROM buku");
while ($buku = mysqli_fetch_assoc($query)) {
?>
<tr>
    <td><?= $buku['id_buku'] ?></td>
    <td><?= $buku['judul'] ?></td>
    <td><?= $buku['pengarang'] ?></td>
    <td><?= $buku['status'] ?></td>
</tr>
<?php } ?>

</table>

<br>
<a href="index.html">⬅ Kembali ke Home</a>

</body>
</html>
