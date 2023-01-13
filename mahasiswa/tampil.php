<?php
include_once('../config.php');
include_once('../database/koneksi.php');

require "../layout/header.php";
require "../layout/navbar.php";

$query_mhs = "SELECT * FROM mahasiswa";
$mahasiswa = $koneksi->query($query_mhs);
$koneksi->close();

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
                <tbody>
                <?php 
                if ($mahasiswa->num_rows > 0) {
                    while($row = $mahasiswa->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row['nim']; ?></td>
                    <td><?php echo $row['nama_lengkap']; ?></td>
                    <td><?php echo $row['asal_kelas']; ?></td>
                    <td>
                        <button>Edit</button> | <button>Hapus</button>
                    </td>
                </tr>
                <?php 
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require "../layout/footer.php"; ?>