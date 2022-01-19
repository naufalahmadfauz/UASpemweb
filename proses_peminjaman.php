<?php


include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if (isset($_POST['tambah'])) {

    // ambil data dari formulir
    $id_siswa = $_POST['id_siswa'];
    $id_buku = $_POST['id_buku'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_deadline = $_POST['tgl_deadline'];
    $status_pinjam = $_POST['status_pinjam'];

    // buat query
    $sql = "INSERT INTO data_pinjaman (id_siswa,id_buku,tgl_pinjam,tgl_deadline,status_pinjam) VALUE ('$id_siswa','$id_buku','$tgl_pinjam','$tgl_deadline','$status_pinjam')";
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

