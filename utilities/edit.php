<?php
include('../config/koneksi.php');
include('../config/link.php');
$id = $_GET['id'];

$sql = "SELECT * FROM siswa WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $siswa = $result->fetch_assoc();
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
    <title>Edit Data Siswa</title>
</head>

<body class="bg-body-secondary">
    <?php include('../config/header.php'); ?>
    <div class="container w-50 mt-5 mx-auto card border-primary p-4">
        <h2 class="text-center">Edit Siswa</h2>

        <form action="update.php" class="row g-3 mt-4" method="post">
            <div class="form-group col-6 d-none">
                <label for="id">ID :</label>
                <input type="text" class="form-control" name="id" value="<?php echo $siswa['id']; ?>" hidden>
            </div>

            <div class="form-group col-6">
                <label for="nama_lengkap">Nama Lengkap :</label>
                <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $siswa['nama_lengkap']; ?>" required>
            </div>

            <div class="form-group col-6">
                <label for="agama">Agama :</label>
                <select class="form-control" name="agama" required>
                    <option value="">Pilih Agama</option>
                    <option value="Islam" <?php if ($siswa['agama'] == 'Islam') echo 'selected'; ?>>Islam</option>
                    <option value="Katolik" <?php if ($siswa['agama'] == 'Katolik') echo 'selected'; ?>>Katolik</option>
                    <option value="Protestan" <?php if ($siswa['agama'] == 'Protestan') echo 'selected'; ?>>Protestan</option>
                    <option value="Hindu" <?php if ($siswa['agama'] == 'Hindu') echo 'selected'; ?>>Hindu</option>
                    <option value="Buddha" <?php if ($siswa['agama'] == 'Buddha') echo 'selected'; ?>>Buddha</option>
                    <option value="Konghucu" <?php if ($siswa['agama'] == 'Konghucu') echo 'selected'; ?>>Konghucu</option>
                </select>
            </div>

            <div class="form-group col-6">
                <label for="jenis_kelamin">Jenis Kelamin :</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="Laki-laki" <?php if ($siswa['jenis_kelamin'] == 'Laki-laki') echo 'checked'; ?> required>
                        <label class="form-check-label" for="laki_laki">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" <?php if ($siswa['jenis_kelamin'] == 'Perempuan') echo 'checked'; ?> required>
                        <label class="form-check-label" for="perempuan">
                            Perempuan
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group col-6">
                <label for="asal_sekolah">Asal Sekolah :</label>
                <input type="text" class="form-control" name="asal_sekolah" value="<?php echo $siswa['asal_sekolah']; ?>" required>
            </div>

            <div class="form-group col-6 mx-auto">
                <label for="alamat">Alamat :</label>
                <textarea name="alamat" cols="3" rows="3" class="form-control"><?php echo $siswa['alamat']; ?></textarea>
            </div>

            <div class="form-group col-12 mx-auto text-center">
                <button type="submit" class="btn btn-primary" value="edit" name="edit"><i class="fa fa-save"></i><span class="ms-2">Simpan Perubahan</span></button>
            </div>
        </form>
    </div>
    <?php
    include('../config/footer.php');

    ?>
</body>

</html>