<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $namaBarang = $_POST['nama_barang'];
    $hargaBarang = $_POST['harga_barang'];
    $stok = $_POST['stok'];

    $query = "INSERT INTO barang (nama_barang, harga_barang, stok) VALUES ('$namaBarang', '$hargaBarang', '$stok')";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Barang berhasil ditambahkan!'); window.location.href='home.php';</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan: " . mysqli_error($koneksi) . "'); window.location.href='home.php';</script>";
    }
}
