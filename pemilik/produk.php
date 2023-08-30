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
                        Produk berhasil di tambahkan ke dalam sistem.
                    </div>
                <?php } elseif ($_GET['pesan'] == "gagal") { ?>
                    <div class="alert alert-danger" role="alert">
                        Gagal mengubah Produk.
                    </div>
                <?php } elseif ($_GET['pesan'] == "ekstensi") { ?>
                    <div class="alert alert-warning" role="alert">
                        Ekstensi file harus PNG atau JPG.
                    </div>
                <?php } elseif ($_GET['pesan'] == "size") { ?>
                    <div class="alert alert-warning">\
                        Size file tidak boleh lebih dari 2 Mb.
                    </div>
                <?php } elseif ($_GET['pesan'] == "hapus") { ?>
                    <div class="alert alert-primary">
                        Produk berhasil di hapus dari sistem.
                    </div>
                <?php } elseif ($_GET['pesan'] == "gagalhapus") { ?>
                    <div class="alert alert-danger">
                        Gagal menghapus Produk.
                    </div>
                <?php } ?>
            <?php } ?>

            <div class="row">
                <div class="col-lg-10"></div>
                <div class="col-lg-2">
                    <a href="tambah_produk.php" class="btn btn-primary btn-block mb-4">
                        <i class="nav-icon fas fa-plus"></i>
                        Tambah Produk
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h4 class="card-title">Semua Produk</h4>
                        </div>
                        <div class="card-body">
                            <div>
                                <div class="btn-group w-100 mb-2">
                                    <a class="btn btn-info active" href="javascript:void(0)" data-filter="all"> All items </a>
                                    <a class="btn btn-info" href="javascript:void(0)" data-filter="1"> Lampu </a>
                                    <a class="btn btn-info" href="javascript:void(0)" data-filter="2"> Alat Listrik </a>
                                    <a class="btn btn-info" href="javascript:void(0)" data-filter="3"> Kabel </a>
                                    <a class="btn btn-info" href="javascript:void(0)" data-filter="4"> Lain-lain </a>
                                </div>
                                <div class="mb-2">
                                    <a class="btn btn-secondary" href="javascript:void(0)" data-shuffle> Acak Item </a>
                                    <div class="float-right">
                                        <select class="custom-select" style="width: auto;" data-sortOrder>
                                            <option value="index"> Urutkan Berdasarkan Posisi </option>
                                            <option value="sortData"> Urutkan Berdasarkan Data Kustom </option>
                                        </select>
                                        <div class="btn-group">
                                            <a class="btn btn-default" href="javascript:void(0)" data-sortAsc> Naik </a>
                                            <a class="btn btn-default" href="javascript:void(0)" data-sortDesc> Menurun </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="filter-container p-0 row">

                                    <?php
                                    include 'konfigurasi/koneksi.php';
                                    $data = mysqli_query($koneksi, "SELECT * FROM produk");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>

                                        <div class="filtr-item col-sm-2" data-category="<?= $d['kategori_produk'] ?>" data-sort="white sample">
                                            <a href="detail_produk.php?id=<?= $d['id'] ?>" data-title="<?= $d['nama_produk'] ?>">
                                                <img src="uploads/<?= $d['foto_produk'] ?>" class="img-fluid mb-2" alt="Foto Produk" />
                                            </a>
                                        </div>

                                    <?php
                                    }
                                    ?>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include 'layouts/footer.php'; ?>