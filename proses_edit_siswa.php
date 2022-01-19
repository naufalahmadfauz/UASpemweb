<?php
include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['edit'])){

    // ambil data dari formulir
    $id_siswa = $_POST['id_siswa'];
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $nama_kelas = $_POST['nama_kelas'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];

    // buat query update
    $sql = "UPDATE data_siswa SET id_siswa ='$id_siswa',nisn = '$nisn',nama = '$nama',kelas = '$kelas',nama_kelas = '$nama_kelas',jenis_kelamin = '$jenis_kelamin',tgl_lahir = '$tgl_lahir',alamat = '$alamat',no_telp = '$no_telp' WHERE id_siswa=$id_siswa";
    $query = mysqli_query($db, $sql);
    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list_siswa.php');
//        header("Location: index.php?status=$isbn2");
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>