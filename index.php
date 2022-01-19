<html>
<head>
    <title>Perpus</title>
</head>

<body>
    <header>
        <h3>perpustakaan N</h3>
        <h1>UNIKOM</h1>
    </header>
    <h4>Menu</h4>
    <nav>
        <?php if(isset($_GET['status'])): ?>
            <p>
                <?php
                if($_GET['status'] == 'sukses'){
                    echo "buku berhasil ditambahkan!";
                } else {
                    echo "Buku gagal Ditambahkan!";
                }
                ?>
            </p>
        <?php endif; ?>
        <ul>
            <li><a href="list_buku.php">Data Buku</a></li>
            <li><a href="list_siswa.php">Data Siswa</a></li>
            <li><a href="list_peminjaman.php">Data Peminjaman</a></li>
        </ul>
    </nav>
    </body>
</html>