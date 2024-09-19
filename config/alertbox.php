<div class="container">
    <?php if (isset($_GET['status'])) : ?>
        <?php
        if ($_GET['status'] == 'sukses') {
            echo "<div id='alertBox' class='alert alert-success mt-4 alert-dismissible animate__animated animate__fadeInDown' role='alert'>
                        <strong>Sukses!</strong> Pendaftaran Data Baru Berhasil!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
        } elseif ($_GET['status'] == 'edit') {
            echo "<div id='alertBox' class='alert alert-primary mt-4 alert-dismissible animate__animated animate__fadeInDown' role='alert'>
                        <strong>Edited!</strong> Data Berhasil Diedit!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
        } elseif ($_GET['status'] == 'hapus') {
            echo "<div id='alertBox' class='alert alert-warning mt-4 alert-dismissible animate__animated animate__fadeInDown' role='alert'>
                        <strong>Dihapus!</strong> Data Berhasil Terhapus!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
        } else {
            echo "<div id='alertBox' class='alert alert-danger mt-4 alert-dismissible animate__animated animate__fadeInDown' role='alert'>
                        <strong>Ups!</strong> Data gagal ditambahkan!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
        }
        ?>
        <script>
            setTimeout(function() {
                var alertBox = document.querySelector('#alertBox');
                alertBox.classList.remove('animate__fadeInDown');
                alertBox.classList.add('animate__fadeOutUp');

                alertBox.addEventListener('animationend', function() {
                    alertBox.style.display = 'none';
                });
            }, 2500);
        </script>
    <?php endif; ?>
</div>