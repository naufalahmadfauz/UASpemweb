<?php
include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id_buku']) ){
    header('Location: list_buku.php');
}

//ambil id dari query string
$id = $_GET['id_buku'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM data_buku WHERE id_buku=$id";
$query = mysqli_query($db, $sql);
$buku = mysqli_fetch_assoc($query);

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
    <h3>Tambah Buku</h3>
</header>
<form action="proses_edit_buku.php" method="POST">
    <fieldset>
        <input type="hidden" name="id_buku" value="<?php echo $buku['id_buku'];?>">
        <p>
            <label for="judul">ISBN: </label>
            <input type="number" name="isbn" placeholder="ISBN" value="<?php echo $buku['isbn']?>"/>
        </p>
        <p>
            <label for="judul">Judul Buku: </label>
            <input type="text" name="judul" placeholder="judul buku" value="<?php echo $buku['judul']?>"/>
        </p>
        <p>
            <label for="jenis">Jenis Buku: </label>
            <?php $jenis = $buku['jenis'] ?>
            <select name="jenis">
                <option <?php echo ($jenis === 'Agama' ? "selected" : "")?> >Agama</option>
                <option <?php echo ($jenis === 'Teknologi' ? "selected" : "")?> >Teknologi</option>
                <option <?php echo ($jenis === 'IPA' ? "selected" : "")?> >IPA</option>
                <option <?php echo ($jenis === 'IPS' ? "selected" : "")?> >IPS</option>
                <option <?php echo ($jenis === 'Matematika' ? "selected" : "")?> >Matematika</option>
                <option <?php echo ($jenis === 'Sejarah' ? "selected" : "")?> >Sejarah</option>
                <option <?php echo ($jenis === 'Bahasa' ? "selected" : "")?> >Bahasa</option>
                <option <?php echo ($jenis === 'Seni' ? "selected" : "")?> >Seni</option>
                <option <?php echo ($jenis === 'Olahraga' ? "selected" : "")?> >Olahraga</option>
            </select>
        </p>
        <p>
            <label for="penulis">Penulis: </label>
            <input type="text" name="penulis" placeholder="penulis" value="<?php echo $buku['penulis']?>"/>
        </p>
        <p>
            <label for="penerbit">Penerbit: </label>
            <input type="text" name="penerbit" placeholder="penerbit" value="<?php echo $buku['penerbit']?>"/>
        </p>
        <p>
            <label for="tahun_terbit">Tahun Terbit: </label>
            <input type="number" name="tahun_terbit" placeholder="tahun terbit" value="<?php echo $buku['tahun_terbit']?>"/>
        </p>
        <p>
            <label for="no_rak">Nomer Rak: </label>
            <input type="number" name="no_rak" placeholder="nomer rak" value="<?php echo $buku['no_rak']?>"/>
        </p>
        <p>
            <label for="kondisi_buku">Kondisi Buku: </label>
            <select name="kondisi_buku">
                <?php $kondisi_buku =  $buku['kondisi_buku']; ?>
                <option <?php echo ($kondisi_buku === 'Kurang Layak' ? "selected" : "")?> >Kurang Layak</option>
                <option <?php echo ($kondisi_buku === 'Layak' ? "selected" : "")?> >Layak</option>
                <option <?php echo ($kondisi_buku === 'Tidak Layak' ? "selected" : "")?> >Tidak Layak</option>
            </select>
        </p>
        <p>
            <input type="submit" value="Edit" name="edit"/>
        </p>
    </fieldset>
</form>
</body>
</html>
