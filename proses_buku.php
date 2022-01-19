<?php
include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if (isset($_POST['tambah'])) {

    // ambil data dari formulir
    $isbn = $_POST['isbn'];
    $judul = $_POST['judul'];
    $jenis = $_POST['jenis'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $no_rak = $_POST['no_rak'];
    $kondisi_buku = $_POST['kondisi_buku'];

    // buat query
    $sql = "INSERT INTO data_buku (isbn,judul, jenis, penulis, penerbit, tahun_terbit, no_rak, kondisi_buku) VALUE ('$isbn','$judul', '$jenis', '$penulis', '$penerbit', '$tahun_terbit', '$no_rak', '$kondisi_buku')";
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

?>