<?php
include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['edit'])){

    // ambil data dari formulir
    $id_buku = $_POST['id_buku'];
    $isbn = $_POST['isbn'];
    $judul = $_POST['judul'];
    $jenis = $_POST['jenis'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $no_rak = $_POST['no_rak'];
    $kondisi_buku = $_POST['kondisi_buku'];

    // buat query update
    $sql = "UPDATE data_buku SET id_buku ='$id_buku', isbn='$isbn', judul='$judul', jenis='$jenis', penulis='$penulis', penerbit='$penerbit', tahun_terbit='$tahun_terbit', no_rak='$no_rak',kondisi_buku='$kondisi_buku' WHERE id_buku=$id_buku";
    $query = mysqli_query($db, $sql);
    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list_buku.php');
//        header("Location: index.php?status=$isbn2");
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>