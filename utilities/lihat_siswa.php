<?php
include('../config/koneksi.php');
include('../config/link.php');

$sql = "SELECT * FROM siswa";
$result = $conn->query($sql);

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
    <?php
    include('../config/header.php');
    include('../config/popup.php');
    ?>
    <div class="container mt-5">
        <h2>Data Siswa</h2>

        <div class="w-25">
            <form action="cari.php" method="GET" class="h-10 input-group">
                <input type="text" name="key" class="form-control input-group" placeholder="Ketikan pencarian...">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
        <a href="daftar.php" class="btn btn-success ms-auto"><i class="fa fa-plus"></i> Input siswa baru</a>

        <?php if (!empty($data)) : ?>
            <!-- Menampilkan data dalam bentuk tabel HTML -->
            <table class='table table-bordered border-primary border-opacity-25 mt-3'>
                <thead class='thead-dark table-primary'>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama Lengkap</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>Asal Sekolah</th>
                        <th class="text-center">Aksi</th>
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
                            <td class="d-flex justify-content-evenly px-0 mx-0">
                                <a href='detail.php?id=<?php echo $row['id']; ?>' class='btn btn-sm btn-primary mx-1 my-1'><i class="fa fa-search"></i>Detail</a>
                                <a href='edit.php?id=<?php echo $row['id']; ?>' class='btn btn-sm btn-warning text-white mx-1 my-1'><i class="fa fa-edit"></i>Edit</a>
                                <a href='#' onclick="confirmDelete(<?php echo $row['id']; ?>)" class='btn btn-sm btn-danger mx-1 my-1'><i class="fa fa-remove"></i>Hapus</a>
                            </td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <p>Total: <?php echo $total_siswa; ?></p>
        <?php else : ?>
            <p class='text-muted'>Tidak ada data yang tersedia.</p>
        <?php endif; ?>
        <br>
        <?php
        include('../config/footer.php');
        ?>
    </div>
</body>

</html>