<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Perpus</title>
</head>

<body>
<header>
    <h3>Daftar Buku</h3>
</header>

<nav>
    <a href="form_buku.php">[+] Tambah Baru</a>
</nav>

<br>

<table border="1">
    <thead>
    <tr>
        <th>ISBN</th>
        <th>Judul</th>
        <th>Jenis</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>tahun_terbit</th>
        <th>Tahun Terbit</th>
        <th>Status Buku</th>
    </tr>
    </thead>
    <tbody>

    <?php
    $sql = "SELECT * FROM data_buku";
    $query = mysqli_query($db, $sql);

    while($buku = mysqli_fetch_array($query)){
        echo "<tr>";

        echo "<td>".$buku['isbn']."</td>";
        echo "<td>".$buku['judul']."</td>";
        echo "<td>".$buku['jenis']."</td>";
        echo "<td>".$buku['penulis']."</td>";
        echo "<td>".$buku['penerbit']."</td>";
        echo "<td>".$buku['tahun_terbit']."</td>";
        echo "<td>".$buku['no_rak']."</td>";
        echo "<td>".$buku['kondisi_buku']."</td>";

        echo "<td>";
        echo "<a href='form_edit_buku.php?id_buku=".$buku['id_buku']."'>Edit</a> | ";
        echo "<a href='hapus_buku.php?id_buku=".$buku['id_buku']."'>Hapus</a>";
        echo "</td>";

        echo "</tr>";
    }
    ?>

    </tbody>
</table>

<p>Total: <?php echo mysqli_num_rows($query) ?></p>

</body>
</html>