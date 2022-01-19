<?php


include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if (isset($_POST['tambah'])) {

    // ambil data dari formulir
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $kelas = $_POST['kelas'];
    $nama_kelas = $_POST['nama_kelas'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];

    // buat query
    $sql = "INSERT INTO data_siswa (nisn,nama,jenis_kelamin,nama_kelas, kelas, tgl_lahir, alamat, no_telp) VALUE ('$nisn','$nama','$jenis_kelamin','$nama_kelas', '$kelas', '$tgl_lahir', '$alamat', '$no_telp')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

