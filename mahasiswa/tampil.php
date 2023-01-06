<?php
include_once('../config.php');
include_once('../database/koneksi.php');

require "../layout/header.php";
require "../layout/navbar.php";
?>

<div class="wrap">
    <?php require "../layout/sidebar.php"; ?>

    <div class="content">
        <h2 class="title">Daftar Mahasiswa</h2>
        <div class="card">
            <table border="1" style="width: 100%;">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama Lengkap</th>
                        <th>Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<?php require "../layout/footer.php"; ?>