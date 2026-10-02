<?php

 if (isset($_GET['id'])) {
    $id = $_GET['id'];
    echo "Data buku ID $id berhasil dihapus.";
    echo "<br>";
    echo "<a href='../../pages/books/index.php'>Kembali ke daftar buku</a>";
 } else {
    echo "ID tidak ditemukan.";
}