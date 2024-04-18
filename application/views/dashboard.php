<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>DASHMIN - Bootstrap Admin Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="<?= base_url(); ?>assets/img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="<?= base_url(); ?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
</head>

<body>
  <div class="container-xxl position-relative bg-white d-flex p-0">

    <!-- Sidebar Start -->
    <div class="sidebar pe-4 pb-3">
      <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
          <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
          <div class="position-relative">
            <img class="rounded-circle" src="<?= base_url(); ?>assets/img/testimonial-2.jpg" alt="" style="width: 40px; height: 40px;">
            <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
          </div>
          <div class="ms-3">
            <h6 class="mb-0">Aplikasi Sertifikat</h6>
          </div>
        </div>
        <div class="navbar-nav w-100">
          <a href="admin" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
          <a href="generate" class="nav-item nav-link "><i class="fa fa-th me-2"></i>Cetak Sertifikat</a>
          <a href="<?= base_url(); ?>auth/logout" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Logout</a>
        </div>
      </nav>
    </div>
    <!-- Sidebar End -->


    <!-- Content Start -->
    <div class="content">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
        <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
          <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
        </a>
        <a href="#" class="sidebar-toggler flex-shrink-0">
          <i class="fa fa-bars"></i>
        </a>
        <form class="d-none d-md-flex ms-4">
          <input class="form-control border-0" type="search" placeholder="Search">
        </form>
        <div class="navbar-nav align-items-center ms-auto">
          <div class="nav-item dropdown">
            <a href="#" class="nav-link" data-bs-toggle="dropdown">
              <img class="rounded-circle me-lg-2" src="<?= base_url(); ?>assets/img/testimonial-2.jpg" alt="" style="width: 40px; height: 40px;">
              <span class="d-none d-lg-inline-flex"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
              <button data-bs-toggle="modal" data-bs-target="#logout" href="<?php echo base_url(); ?>auth/logout" class="dropdown-item">Log Out</button>
            </div>
          </div>
        </div>
      </nav>
      <!-- Navbar End -->

      <!-- Content Start -->
      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid">
            <h1 class="mt-1 text-body"><br>
              <h1 class="text-body text-center">Selamat Datang  Di Aplikasi Sertifikat</h1>
            </h1>
            <br>
        </main>
        <!-- Content End -->


        <div class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="<?= base_url('auth/logout                                                                                                                                                                ') ?>" method="post">
                  apakah anda yakin ingin Logout?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">kembali</button>
                <button type="submit" class="btn btn-primary">logout</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
      </div>

      <!-- JavaScript Libraries -->
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
      <script src="<?= base_url(); ?>assets/lib/chart/chart.min.js"></script>
      <script src="<?= base_url(); ?>assets/lib/easing/easing.min.js"></script>
      <script src="<?= base_url(); ?>assets/lib/waypoints/waypoints.min.js"></script>
      <script src="<?= base_url(); ?>assets/lib/owlcarousel/owl.carousel.min.js"></script>
      <script src="<?= base_url(); ?>assets/lib/tempusdominus/js/moment.min.js"></script>
      <script src="<?= base_url(); ?>assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
      <script src="<?= base_url(); ?>assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

      <!-- Template Javascript -->
      <script src="<?= base_url(); ?>assets/js/main.js"></script>
</body>

</html>