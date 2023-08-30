<?php
include 'layouts/header.php';
include 'layouts/navbar.php';
include 'konfigurasi/koneksi.php';

$id_produk = $_GET['id'];
$produk = mysqli_query($koneksi, "SELECT * FROM produk WHERE id = '$id_produk'");
$data = mysqli_fetch_array($produk);

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detail Produk <b><?= $data['nama_produk'] ?></b></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Detail Produk</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="uploads/<?= $data['foto_produk'] ?>" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center"><?= $data['nama_produk'] ?></h3>

                            <?php if ($data['kategori_produk'] == '1') { ?>
                                <p class="text-muted text-center">Lampu</p>
                            <?php } elseif ($data['kategori_produk'] == '2') { ?>
                                <p class="text-muted text-center">Alat Listrik</p>
                            <?php } elseif ($data['kategori_produk'] == '3') { ?>
                                <p class="text-muted text-center">Kabel</p>
                            <?php } elseif ($data['kategori_produk'] == '4') { ?>
                                <p class="text-muted text-center">Lain lain</p>
                            <?php } ?>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Garansi</b> <a class="float-right">
                                        <?php
                                        if ($data['garansi_produk'] == '0') { ?>
                                            Tersedia Garansi
                                        <?php } else { ?>
                                            Tidak Tersedia Garansi
                                        <?php } ?>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <b>Return</b> <a class="float-right">
                                        <?php if ($data['return_produk'] = '0') { ?>
                                            Tersedia Return
                                        <?php } else { ?>
                                            Tidak Tersedia Return
                                        <?php } ?>
                                    </a>
                                </li>
                            </ul>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2 bg-info">
                            <h1 class="text-center"> Detail Produk <?= $data['nama_produk']?></h1>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <!-- Post -->
                                    <div class="post">
                                        <div class="user-block">
                                            <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                                            <span class="username">
                                                <a href="#">Jonathan Burke Jr.</a>
                                                <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                            </span>
                                            <span class="description">Shared publicly - 7:30 PM today</span>
                                        </div>
                                        <!-- /.user-block -->
                                        <p>
                                            Lorem ipsum represents a long-held tradition for designers,
                                            typographers and the like. Some people hate it and argue for
                                            its demise, but others ignore the hate as they create awesome
                                            tools to help create filler text for everyone from bacon lovers
                                            to Charlie Sheen fans.
                                        </p>
                                    </div>
                                    <!-- /.post -->
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include 'layouts/footer.php';
?>