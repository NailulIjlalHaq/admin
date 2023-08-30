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
          <h1>Pengaturan Website</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Pengaturan Website</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Pengaturan yang bisa dirubah</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead class="text-center">
                  <tr>
                    <th>No</th>
                    <th>Pengaturan</th>
                    <th>Isi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                  <tr>
                    <td>1</td>
                    <td>Logo</td>
                    <td style="width: 1000px;">logos.png</td>
                    <td style="width: 50px;">
                      <a href="edit-logo.php" class="btn btn-warning btn-block"><i class="fas fa-edit"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Header</td>
                    <td style="width: 1000px;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate cumque aspernatur numquam atque quis facere sapiente sed magnam ipsa repellat officiis voluptatem qui incidunt nemo blanditiis, eligendi ut esse illo?</td>
                    <td style="width: 50px;">
                      <a href="edit-header.php" class="btn btn-warning btn-block"><i class="fas fa-edit"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Kemitraan</td>
                    <td style="width: 1000px;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate cumque aspernatur numquam atque quis facere sapiente sed magnam ipsa repellat officiis voluptatem qui incidunt nemo blanditiis, eligendi ut esse illo?</td>
                    <td style="width: 50px;">
                      <a href="edit-kemitraan.php" class="btn btn-warning btn-block"><i class="fas fa-edit"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Klien</td>
                    <td style="width: 1000px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, quaerat optio. Esse veniam minima debitis consectetur! Amet quibusdam molestias ducimus quod laborum quia magni eum, beatae molestiae earum blanditiis! Sit?</td>
                    <td style="width: 50px;">
                      <a href="edit-klien.php" class="btn btn-warning btn-block"><i class="fas fa-edit"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include 'layouts/footer.php';
?>