<?php

 if (isset($_GET['id'])) {
    $id = $_GET['id'];
    echo "Data penulis ID $id berhasil dihapus.";
    echo "<br>";
    echo "<a href='../../pages/authors/index.php'>Kembali ke daftar penulis</a>";
 } else {
    echo "ID tidak ditemukan.";
}