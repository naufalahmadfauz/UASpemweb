<?php
include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['edit'])){

    // ambil data dari formulir
    $no_pinjam = $_POST['no_pinjam'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_deadline = $_POST['tgl_deadline'];
    $status_pinjam = $_POST['status_pinjam'];


    // buat query update
    $sql = "UPDATE data_pinjaman SET no_pinjam ='$no_pinjam',tgl_pinjam = '$tgl_pinjam',tgl_deadline = '$tgl_deadline',status_pinjam = '$status_pinjam' WHERE no_pinjam=$no_pinjam";
    $query = mysqli_query($db, $sql);
    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list_peminjaman.php');
//        header("Location: index.php?status=$isbn2");
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>