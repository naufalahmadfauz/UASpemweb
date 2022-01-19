<!DOCTYPE html>
<html>
<head>
    <title>perpus</title>
</head>
<body>
<header>
    <h3>Tambah Buku</h3>
</header>
<form action="proses_buku.php" method="POST">
    <fieldset>
        <p>
            <label for="judul">ISBN: </label>
            <input type="number" name="isbn" placeholder="ISBN"/>
        </p>

        <p>
            <label for="judul">Judul Buku: </label>
            <input type="text" name="judul" placeholder="judul buku"/>
        </p>
        <p>
            <label for="jenis">Jenis Buku: </label>
            <select name="jenis">
                <option>Agama</option>
                <option>Teknologi</option>
                <option>IPA</option>
                <option>IPS</option>
                <option>Matematika</option>
                <option>Sejarah</option>
                <option>Bahasa</option>
                <option>Seni</option>
                <option>Olahraga</option>
            </select>
        </p>
        <p>
            <label for="penulis">Penulis: </label>
            <input type="text" name="penulis" placeholder="penulis"/>
        </p>
        <p>
            <label for="penerbit">Penerbit: </label>
            <input type="text" name="penerbit" placeholder="penerbit"/>
        </p>
        <p>
            <label for="tahun_terbit">Tahun Terbit: </label>
            <input type="number" name="tahun_terbit" placeholder="tahun terbit"/>
        </p>
        <p>
            <label for="no_rak">Nomer Rak: </label>
            <input type="number" name="no_rak" placeholder="nomer rak"/>
        </p>
        <p>
            <label for="kondisi_buku">Kondisi Buku: </label>
            <select name="kondisi_buku">
                <option>Kurang Layak</option>
                <option>Layak</option>
                <option>Tidak Layak</option>
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