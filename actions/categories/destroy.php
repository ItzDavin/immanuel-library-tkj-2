<?php

 if (isset($_GET['id'])) {
    $id = $_GET['id'];
    echo "Data kategori ID $id berhasil dihapus.";
    echo "<br>";
    echo "<a href='../../pages/categories/index.php'>Kembali ke daftar kategori</a>";
 } else {
    echo "ID tidak ditemukan.";
}