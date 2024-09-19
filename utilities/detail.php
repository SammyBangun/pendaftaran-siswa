<?php
include('../config/link.php');
include('../config/koneksi.php');

$id = $_GET['id'];

$sql = "SELECT * FROM siswa WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Data tidak ditemukan.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Siswa</title>
</head>

<body class="bg-body-secondary">
    <?php include('../config/header.php'); ?>
    <div class="container card w-50 p-5 mt-5 border-primary">
        <h2 class="text-center">Detail Siswa</h2>

        <table class="table table-striped mt-4">
            <tr>
                <th>Nama Lengkap:</th>
                <td><?php echo $row['nama_lengkap']; ?></td>
            </tr>
            <tr>
                <th>Alamat:</th>
                <td><?php echo $row['alamat']; ?></td>
            </tr>
            <tr>
                <th>Jenis Kelamin:</th>
                <td><?php echo $row['jenis_kelamin']; ?></td>
            </tr>
            <tr>
                <th>Agama:</th>
                <td><?php echo $row['agama']; ?></td>
            </tr>
            <tr>
                <th>Asal Sekolah:</th>
                <td><?php echo $row['asal_sekolah']; ?></td>
            </tr>
        </table>

        <a href="lihat_siswa.php" class="btn btn-primary w-25 mt-4 mx-auto">Kembali</a>
    </div>
    <?php
    include('../config/footer.php');

    ?>
</body>

</html>