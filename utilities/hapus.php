<?php
include('../config/koneksi.php');


$id = $_GET['id'];


$sql = "DELETE FROM siswa WHERE id = '$id'";

if ($conn->query($sql) == TRUE) {
    header('Location: ../index.php?status=hapus');
    exit();
} else {
    header('Location: ../index.php?status=gagal');
}

$conn->close();
