<?php
include 'layouts/header.php';
include 'layouts/navbar.php';
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <h5 class="mb-2">Fitur Website</h5>
      <div class="card card-success">
        <div class="card-body">
          <div class="row">
            <div class="col-md-12 col-lg-6 col-xl-4">
              <div class="card mb-2 bg-gradient-dark">
                <img class="card-img-top" src="../dist/img/photo1.png" alt="Dist Photo 1">
                <div class="card-img-overlay d-flex flex-column justify-content-end">
                  <h5 class="card-title text-primary text-white">Card Title</h5>
                  <p class="card-text text-white pb-2 pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.</p>
                  <a href="#" class="text-white">Last update 2 mins ago</a>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-4">
              <div class="card mb-2">
                <img class="card-img-top" src="../dist/img/photo2.png" alt="Dist Photo 2">
                <div class="card-img-overlay d-flex flex-column justify-content-center">
                  <h5 class="card-title text-white mt-5 pt-2">Card Title</h5>
                  <p class="card-text pb-2 pt-1 text-white">
                    Lorem ipsum dolor sit amet, <br>
                    consectetur adipisicing elit <br>
                    sed do eiusmod tempor.
                  </p>
                  <a href="#" class="text-white">Last update 15 hours ago</a>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-4">
              <div class="card mb-2">
                <img class="card-img-top" src="../dist/img/photo3.jpg" alt="Dist Photo 3">
                <div class="card-img-overlay">
                  <h5 class="card-title text-primary">Card Title</h5>
                  <p class="card-text pb-1 pt-1 text-white">
                    Lorem ipsum dolor <br>
                    sit amet, consectetur <br>
                    adipisicing elit sed <br>
                    do eiusmod tempor. </p>
                  <a href="#" class="text-primary">Last update 3 days ago</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'layouts/footer.php'; ?>