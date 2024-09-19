<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'pendaftaran';


// membuat koneksi 
$conn = new mysqli($servername, $username, $password, $dbname);

// mengecek kondisi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// $conn->close();
