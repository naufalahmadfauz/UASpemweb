<?php
include("config.php");

// kalau tidak ada id di query string
if (!isset($_GET['id_siswa'])) {
    header('Location: list_buku.php');
}

//ambil id dari query string
$id = $_GET['id_siswa'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM data_siswa WHERE id_siswa = $id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
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
    <h3>Edit Siswa</h3>
</header>
<form action="proses_edit_siswa.php" method="POST">
    <fieldset>
        <input type="hidden" name="id_siswa" value="<?php echo $siswa['id_siswa'] ?>"
        <p>
            <label for="nisn">NISN:</label>
            <input type="number" name="nisn" placeholder="NISN Siswa" value="<?php echo $siswa['nisn'] ?>"/>
        </p>
        <p>
            <label for="nama">Nama Siswa: </label>
            <input value="<?php echo $siswa['nama'] ?>" type="text" name="nama" placeholder="Nama Siswa"/>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <?php $jenis_kelamin = $siswa['jenis_kelamin'] ?>
            <select name="jenis_kelamin">
                <option <?php echo($jenis_kelamin === 'L' ? "selected" : "") ?> >L</option>
                <option <?php echo($jenis_kelamin === 'P' ? "selected" : "") ?> >P</option>
            </select>
        </p>
        <p>
            <label for="kelas">Kelas: </label>
            <?php $kelas = $siswa['kelas'] ?>
            <select name="kelas">
                <option <?php echo($kelas === '7' ? "selected" : "") ?> >7</option>
                <option <?php echo($kelas === '8' ? "selected" : "") ?> >8</option>
                <option <?php echo($kelas === '9' ? "selected" : "") ?> >9</option>
            </select>
        </p>
        <p>
            <label for="nama_kelas">Nama Kelas: </label>
            <?php $kelas = $siswa['nama_kelas'] ?>
            <select name="nama_kelas">
                <option <?php echo($kelas === 'A' ? "selected" : "") ?> >A</option>
                <option <?php echo($kelas === 'B' ? "selected" : "") ?> >B</option>
                <option <?php echo($kelas === 'C' ? "selected" : "") ?> >C</option>
            </select>
        </p>
        <p>
            <label for="tgl_lahir">Tanggal Lahir: </label>
            <input value="<?php echo $siswa['tgl_lahir'] ?>" type="date" name="tgl_lahir" placeholder="Tanggal Lahir"/>
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat" placeholder="Alamat"><?php echo $siswa['alamat'] ?></textarea>
        </p>
        <p>
            <label for="no_telp">Nomer Telepon: </label>
            <input value="<?php echo $siswa['no_telp'] ?>" type="number" name="no_telp" placeholder="Nomer Telepon"/>
        </p>
        <p>
            <label for="foto_siswa">Foto Siswa</label>
            <input type="file" name="foto_siswa">
        </p>
        <p>
            <input type="submit" value="Edit" name="edit"/>
        </p>
    </fieldset>
</form>
</body>
</html>