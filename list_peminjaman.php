<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Perpus</title>
</head>

<body>
<header>
    <h3>Daftar Peminjaman</h3>
</header>

<nav>
    <a href="form_peminjaman.php">[+] Tambah Baru</a>
</nav>

<br>

<table border="1">
    <thead>
    <tr>
        <th>Nama Siswa</th>
        <th>Judul Buku</th>
        <th>Nomer Pinjaman</th>
        <th>Tanggal Pinjaman</th>
        <th>Tanggal Deadline</th>
        <th>Status Pinjaman</th>
    </tr>
    </thead>
    <tbody>

    <?php
//    $sql = "SELECT * FROM data_pinjaman";
    $sql = "SELECT * FROM `data_pinjaman` JOIN data_siswa on data_siswa.id_siswa=data_pinjaman.id_siswa JOIN data_buku ON data_buku.id_buku=data_pinjaman.id_buku;";
    $query = mysqli_query($db, $sql);

    while($pinjaman = mysqli_fetch_array($query)){
        echo "<tr>";

        echo "<td>".$pinjaman['nama']."</td>";
        echo "<td>".$pinjaman['judul']."</td>";
        echo "<td>".$pinjaman['no_pinjam']."</td>";
        echo "<td>".$pinjaman['tgl_pinjam']."</td>";
        echo "<td>".$pinjaman['tgl_deadline']."</td>";
        echo "<td>".$pinjaman['status_pinjam']."</td>";
        echo "<td>";
        echo "<a href='form_edit_peminjaman.php?no_pinjam=".$pinjaman['no_pinjam']."'>Edit</a> | ";
        echo "<a href='hapus_pinjaman.php?no_pinjam=".$pinjaman['no_pinjam']."'>Hapus</a>";
        echo "</td>";

        echo "</tr>";
    }
    ?>

    </tbody>
</table>

<p>Total: <?php echo mysqli_num_rows($query) ?></p>

</body>
</html>