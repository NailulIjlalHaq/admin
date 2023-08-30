<?php
include 'layouts/header.php';
include 'layouts/navbar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kelola Produk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Kelola Produk</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <?php if (isset($_GET['pesan'])) { ?>
                <?php if ($_GET['pesan'] == "berhasil") { ?>
                    <div class="alert alert-primary" role="alert">
                        Berhasil Menambahkan Produk
                    </div>
                <?php } elseif ($_GET['pesan'] == "gagal") { ?>
                    <div class="alert alert-danger" role="alert">
                        Gagal Menambahkan Produk
                    </div>
                <?php } elseif ($_GET['pesan'] == "ekstensi") { ?>
                    <div class="alert alert-warning" role="alert">
                        Ekstensi File Harus PNG Dan JPG
                    </div>
                <?php } elseif ($_GET['pesan'] == "size") { ?>
                    <div class="alert alert-warning" role="alert">
                        Size File Tidak Boleh Lebih Dari 2 MB
                    </div>
                <?php } ?>
            <?php } ?>

            <form action="proses_tambah_produk.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card card-danger">
                            <div class="card-header">
                                <h3 class="card-title">Keterangan &amp; Detail Produk</h3>
                            </div>
                            <div class="card-body">

                                <div class="form-group">
                                    <label>Nama Produk</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-file-alt"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="nama_produk">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Garansi</label>
                                            <select class="form-control select2" name="garansi" style="width: 100%;">
                                                <option selected>Mendapatkan Garansi?</option>
                                                <option value="0">Ya</option>
                                                <option value="1">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Return</label>
                                            <select class="form-control select2" name="return" style="width: 100%;">
                                                <option selected>Apa Bisa di Return?</option>
                                                <option value="0">Ya</option>
                                                <option value="1">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select class="form-control select2" name="kategori" style="width: 100%;">
                                        <option selected>Pilih Kategori Produk</option>
                                        <option value="1">Lampu</option>
                                        <option value="2">Alat Listrik</option>
                                        <option value="3">Kabel</option>
                                        <option value="4">Lain-lain</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Detail Produk</label>
                                    <textarea class="form-control" name="deskripsi" cols="30" rows="10"></textarea>
                                </div>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col (left) -->

                    <div class="col-lg-3">
                        <div class="card card-danger">
                            <div class="card-header">
                                <h3 class="card-title">Tambahkan Foto Produk</h3>
                            </div>
                            <div class="card-body">
                                <!-- <div class="card">
                                    <div class="card-body">
                                        <img class="img-fluid" src="../dist/img/portfolio-100.jpg" alt="">
                                    </div>
                                </div> -->
                                <div class="form-group">
                                    <label>Foto</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-image"></i></span>
                                        </div>
                                        <input type="file" name="foto" class="form-control">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-success btn-block">Simpan</button>
                                    </div>
                                    <div class="col-6">
                                        <a href="produk.php" class="btn btn-warning btn-block">Batal</a>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col (right) -->

                </div>
                <!-- /.row -->
            </form>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include 'layouts/footer.php';
?>