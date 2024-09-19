<?php
include('../config/koneksi.php');

if (isset($_POST['tambah'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $asal_sekolah = $_POST['asal_sekolah'];

    $sql = "INSERT INTO siswa (nama_lengkap, alamat, jenis_kelamin, agama, asal_sekolah) VALUES ('$nama_lengkap', '$alamat', '$jenis_kelamin', '$agama', '$asal_sekolah')";

    if ($conn->query($sql) == TRUE) {
        header('Location: ../index.php?status=sukses');
        exit();
    } else {
        header('Location: ../index.php?status=gagal');
    }
} else
    die("Akses dilarang...");
$conn->close();
