<!DOCTYPE html>
<html>
<head>
    <title>perpus</title>
</head>
<body>
<header>
    <h3>Tambah Siswa</h3>
</header>
<form action="proses_siswa.php" method="POST">
    <fieldset>
        <p>
            <label for="nisn">NISN: </label>
            <input type="number" name="nisn" placeholder="NISN Siswa"/>
        </p>
        <p>
            <label for="nama">Nama Siswa: </label>
            <input type="text" name="nama" placeholder="Nama Siswa"/>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <select name="jenis_kelamin">
                <option>L</option>
                <option>P</option>
            </select>

        </p>

        <p>
            <label for="kelas">Kelas: </label>
            <select name="kelas">
                <option>7</option>
                <option>8</option>
                <option>9</option>
            </select>

        </p>

        <p>
            <label for="nama_kelas">Nama Kelas: </label>
            <select name="nama_kelas">
                <option>A</option>
                <option>B</option>
                <option>C</option>
            </select>

        </p>
        <p>
            <label for="tanggal_lahir">Tanggal Lahir: </label>
            <input type="date" name="tgl_lahir" placeholder="Tanggal Lahir"/>
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat" placeholder="Alamat"></textarea>
        </p>
        <p>
            <label for="no_telp">Nomer Telepon: </label>
            <input type="number" name="no_telp" placeholder="Nomer Telepon"/>
        </p>
        <p>
            <label for="foto_siswa">Foto Siswa</label>
            <input type="file" name="foto_siswa">
        </p>
        <p>
            <input type="submit" value="Tambah" name="tambah"/>
        </p>
    </fieldset>
</form>
</body>
</html>