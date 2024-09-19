<?php
include('../config/link.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru</title>

</head>

<body class="bg-body-secondary">
    <?php
    include('../config/header.php');
    ?>
    <div class="container w-50 mt-5 mx-auto card border-primary p-4">
        <h2 class="text-center">Daftar Siswa</h2>


        <form action="proses_daftar.php" class="row g-3 mt-4 " method="post">
            <div class="form-group col-6">
                <label for="nama_lengkap">Nama Lengkap :</label>
                <input type="text" class="form-control" name="nama_lengkap" placeholder="Tuliskan nama lengkap..." required>
            </div>

            <div class="form-group col-6">
                <label for="agama">Agama :</label>
                <select class="form-control" name="agama" required>
                    <option value="" disabled selected hidden>Pilih Agama...</option>
                    <option value="Islam">Islam</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
            </div>

            <div class="form-group col-6">
                <label for="jenis_kelamin">Jenis Kelamin :</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input " type="radio" name="jenis_kelamin" id="laki_laki" value="Laki-laki" required>
                        <label class="form-check-label" for="laki_laki">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" required>
                        <label class="form-check-label" for="perempuan">
                            Perempuan
                        </label>
                    </div>
                </div>
                <div class="form-text" id="basic-addon4">Isi salah satu opsi.</div>
            </div>



            <div class="form-group col-6">
                <label for="asal_sekolah">Asal Sekolah :</label>
                <input type="text" class="form-control" name="asal_sekolah" placeholder="Tuliskan asal sekolah..." required>
            </div>

            <div class="form-group col-6 mx-auto">
                <label for="alamat">Alamat :</label>
                <textarea name="alamat" cols="3" rows="3" class="form-control" placeholder="Tuliskan alamat lengkap..." id=""></textarea>
            </div>

            <div class="form-group col-12 text-center">
                <button type="submit" class="btn btn-primary" value="daftar" name="tambah"><i class="fa fa-plus"></i><span class="ms-2">Tambah Data</span></button>
            </div>
        </form>
    </div>

    <?php
    include('../config/footer.php');

    ?>



</body>

</html>