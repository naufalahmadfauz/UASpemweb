<?php
include("config.php");

$sql = "SELECT * FROM data_buku";
$query = mysqli_query($db, $sql);

$sql2 = "SELECT * FROM data_siswa";
$query2 = mysqli_query($db, $sql2);

?>

<!DOCTYPE html>
<html>
<head>
    <title>perpus</title>
</head>
<body>
<header>
    <h3>Tambah Peminjaman</h3>
</header>
<form action="proses_peminjaman.php" method="POST">
    <fieldset>
        <p>
            <label for="siswa">Nama Siswa: </label>
            <select name="id_siswa">
                <?php
                foreach($query2 as $siswa) { ?>
                    <option value="<?= $siswa['id_siswa'] ?>"><?= $siswa['nama'] ?></option>
                    <?php
                } ?>
            </select>
        </p>
        <p>
            <label for="buku">Judul Buku: </label>
            <select name="id_buku">
                <?php
                foreach($query as $buku) { ?>
                    <option value="<?= $buku['id_buku'] ?>"><?= $buku['judul'] ?></option>
                    <?php
                } ?>
            </select>
        </p>
        <p>
            <label for="tgl_pinjam">Tanggal Pinjam: </label>
            <input type="date" name="tgl_pinjam" placeholder="Tanggal Pinjam"/>
        </p>
        <p>
            <label for="tgl_deadline">Tanggal Deadline: </label>
            <input type="date" name="tgl_deadline" placeholder="Tanggal Deadline"/>
        </p>
        <p>
            <label for="status_pinjam">Status Pinjaman: </label>
            <select name="status_pinjam">
                <option>Dipinjam</option>
                <option>Dikembalikan</option>
                <option>Diperpanjang</option>
                <option>Terlambat</option>
            </select>
        </p>

        <p>
            <input type="file" name="foto_buku">
        </p>
        <p>
            <input type="submit" value="Tambah" name="tambah"/>
        </p>
    </fieldset>
</form>
</body>
</html>