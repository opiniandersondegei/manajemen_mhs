<?php
include("../conf/config.php");
$query = mysqli_query($koneksi, "SELECT id,
(SELECT count(id) FROM tb_mahasiswa WHERE status='Aktif')AS Aktif,
(SELECT count(id) FROM tb_mahasiswa WHERE status='Lulus')AS Lulus
   FROM tb_mahasiswa");
$view = mysqli_fetch_array($query); ?>
<div class="col-lg-6 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
        <div class="inner">
            <h3><?php echo $view['Aktif']; ?></h3>

            <p>Selamat Datang <Strong>Admin</Strong></p>
        </div>
        <div class="icon">
            <i class="fas fa-users"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

<div class="col-lg-6 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
        <div class="inner">
            <h3><?php echo $view['Aktif']; ?></h3>

            <p>Selamat Datang <Strong>Admin</Strong></p>
        </div>
        <div class="icon">
            <i class="fas fa-users"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

<!-- ./col -->