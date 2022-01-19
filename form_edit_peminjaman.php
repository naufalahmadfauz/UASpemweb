<?php
include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['no_pinjam']) ){
    header('Location: list_pinjam.php');
}

//ambil id dari query string
$id = $_GET['no_pinjam'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM data_pinjaman WHERE no_pinjam=$id";
$sql2 = "SELECT * FROM `data_pinjaman` JOIN data_siswa on data_siswa.id_siswa=data_pinjaman.id_siswa";
$sql3 = "SELECT * FROM `data_pinjaman` JOIN data_buku ON data_buku.id_buku=data_pinjaman.id_buku;";

$query = mysqli_query($db, $sql);
$query2 = mysqli_query($db, $sql2);
$query3 = mysqli_query($db, $sql3);

$pinjaman = mysqli_fetch_assoc($query);
$siswa = mysqli_fetch_assoc($query2);
$buku = mysqli_fetch_assoc($query3);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>perpus</title>
</head>
<body>
<header>
    <h3>Edit Pinjaman</h3>
</header>
<form action="proses_edit_peminjaman.php" method="POST">
    <fieldset>
        <input type="hidden" name="no_pinjam" value="<?php echo $pinjaman['no_pinjam'];?>">
        <p>
            <label  for="id_buku">Nama Siswa: </label>
            <input disabled type="text" name="id_siswa" value="<?= $siswa['nama'] ?>">

<!--            <select name="id_siswa">-->
<!--                <option value="--><?//= $siswa['id_siswa'] ?><!--">--><?//= $siswa['nama'] ?><!--</option>-->
<!--            </select>-->
        </p>

        <p>
            <label for="id_buku">Judul Buku: </label>
            <input disabled type="text" name="id_siswa" value="<?= $buku['judul'] ?>">
<!--            <select name="id_buku">-->
<!--                <option value="--><?//= $buku['id_buku'] ?><!--">--><?//= $buku['judul'] ?><!--</option>-->
<!--            </select>-->
        </p>

        <p>
            <label for="tgl_pinjam">Tanggal Pinjam: </label>
            <input type="date" name="tgl_pinjam" value="<?php echo $pinjaman['tgl_pinjam']?>">
        </p>

        <p>
            <label for="tgl_deadline">Tanggal Deadline: </label>
            <input type="date" name="tgl_deadline" value="<?php echo $pinjaman['tgl_deadline']?>">
        </p>

        <p>
            <label for="status_pinjam">Status Peminjaman: </label>
            <select name="status_pinjam">
                <option <?php echo ($pinjaman['status_pinjam'] === 'Dipinjam' ? "selected" : "")?> >Dipinjam</option>
                <option <?php echo ($pinjaman['status_pinjam'] === 'Dikembalikan' ? "selected" : "")?> >Dikembalikan</option>
                <option <?php echo ($pinjaman['status_pinjam'] === 'Diperpanjang' ? "selected" : "")?> >Diperpanjang</option>
                <option <?php echo ($pinjaman['status_pinjam'] === 'Terlambat' ? "selected" : "")?> >Terlambat</option>
            </select>
        </p>

        <p>
            <input type="submit" value="Edit" name="edit"/>
        </p>
    </fieldset>
</form>
</body>
</html>
