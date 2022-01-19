<?php
include("config.php");

if (isset($_GET['id_buku'])) {

    // ambil id dari query string
    $id = $_GET['id_buku'];

    // buat query hapus
    $sql = "DELETE FROM data_buku WHERE id_buku=$id";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if ($query) {
        header('Location: list_buku.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>