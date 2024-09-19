<?php
include('../config/koneksi.php');
include('../config/link.php');
include('../config/popup.php');

$key = isset($_GET['key']) ? $_GET['key'] : '';

if (!empty($key)) {
    $query = $conn->prepare("SELECT * FROM siswa WHERE nama_lengkap LIKE ? OR alamat LIKE ? OR agama LIKE ? OR jenis_kelamin LIKE ? OR asal_sekolah LIKE ?");
    $cari = "%$key%";
    $query->bind_param('sssss', $cari, $cari, $cari, $cari, $cari);
    $query->execute();
    $result = $query->get_result();
} else {
    $result = $conn->query("SELECT * FROM siswa");
}

$data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}
$total_siswa = count($data);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>

<body class="bg-body-secondary">
    <?php include('../config/header.php'); ?>
    <div class="container mt-5">
        <h2>Data Siswa</h2>
        <div class="w-25">
            <form action="cari.php" method="GET" class="d-flex input-group">
                <input type="text" name="key" class="form-control" placeholder="Ketikan pencarian..." aria-label="cari" aria-describedby="button-addon2">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
        <a href="lihat_siswa.php" class="btn btn-primary ms-auto">Kembali</a>
        <?php if (!empty($data)) : ?>
            <!-- Menampilkan data dalam bentuk tabel HTML -->
            <table class='table table-bordered border-primary border-opacity-25 mt-3'>
                <thead class='thead-light table-primary'>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama Lengkap</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>Asal Sekolah</th>
                        <!-- <th>Aksi</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data as $row) : ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row['nama_lengkap']; ?></td>
                            <td><?php echo $row['alamat']; ?></td>
                            <td><?php echo $row['jenis_kelamin']; ?></td>
                            <td><?php echo $row['agama']; ?></td>
                            <td><?php echo $row['asal_sekolah']; ?></td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <p>Total: <?php echo $total_siswa; ?></p>
        <?php else : ?>
            <p class='text-muted'>Tidak ada data yang tersedia.</p>
        <?php endif; ?>
        <?php
        include('../config/footer.php');

        ?>

        <br>
    </div>
</body>

</html>