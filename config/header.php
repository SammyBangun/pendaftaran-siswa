<?php
$current_page = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary border-primary border-bottom">
    <div class="container">
        <a class="navbar-brand text-primary" href="/projects/pendaftaran-siswa/index.php">Digital Talent</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center ms-5 ps-5" id="navbarSupportedContent">
            <h2 class="mx-auto">Pendaftaran Siswa Baru</h2>
            <ul class="nav nav-pills ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php echo $current_page == '/projects/pendaftaran-siswa/utilities/daftar.php' ? 'active' : ''; ?>" aria-current="page" href="/projects/pendaftaran-siswa/utilities/daftar.php">Daftar Baru</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $current_page == '/projects/pendaftaran-siswa/utilities/lihat_siswa.php' ? 'active' : ''; ?>" href="/projects/pendaftaran-siswa/utilities/lihat_siswa.php">Pendaftar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>