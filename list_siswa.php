<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Perpus</title>
</head>

<body>
<header>
    <h3>Daftar Siswa</h3>
</header>

<nav>
    <a href="form_siswa.php">[+] Tambah Baru</a>
</nav>

<br>

<table border="1">
    <thead>
    <tr>
        <th>NISN</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Nama Kelas</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Nomer Telepon</th>
        <th>Jenis Kelamin</th>
    </tr>
    </thead>
    <tbody>

    <?php
    $sql = "SELECT * FROM data_siswa";
    $query = mysqli_query($db, $sql);

    while($siswa = mysqli_fetch_array($query)){
        echo "<tr>";

        echo "<td>".$siswa['nisn']."</td>";
        echo "<td>".$siswa['nama']."</td>";
        echo "<td>".$siswa['kelas']."</td>";
        echo "<td>".$siswa['nama_kelas']."</td>";
        echo "<td>".$siswa['tgl_lahir']."</td>";
        echo "<td>".$siswa['alamat']."</td>";
        echo "<td>".$siswa['no_telp']."</td>";
        echo "<td>".$siswa['jenis_kelamin']."</td>";

        echo "<td>";
        echo "<a href='form_edit_siswa.php?id_siswa=".$siswa['id_siswa']."'>Edit</a> | ";
        echo "<a href='hapus_siswa.php?id_siswa=".$siswa['id_siswa']."'>Hapus</a>";
        echo "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>

<p>Total: <?php echo mysqli_num_rows($query) ?></p>

</body>
</html>