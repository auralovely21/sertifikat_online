
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
      <!-- Spinner Start -->

      <!-- Spinner End -->


      <!-- Sidebar Start -->
      <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-light navbar-light">
          <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>SERTIFIKAT</h3>
          </a>
          <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
              <img class="rounded-circle" src="<?= base_url(); ?>assets/img/user.jpg" alt="" style="width: 40px; height: 40px;">
              <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
              <h6 class="mb-0">Administrator</h6>
            </div>
          </div>
          <div class="navbar-nav w-100">
            <a href="admin" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="data_events" class="nav-item nav-link active"><i class="fa fa-th me-2"></i>Events</a>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Sertifikat</a>
              <div class="dropdown-menu bg-transparent border-0">
                <a href="certificate" class="dropdown-item">Sertifikat</a>
                <a href="generate" class="dropdown-item">Cetak Sertifkiat</a>
              </div>
            </div>
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
                <img class="rounded-circle me-lg-2" src="<?= base_url(); ?>assets/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <span class="d-none d-lg-inline-flex">Administrator</span>
              </a>
              <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                <button data-bs-toggle="modal" data-bs-target="#logout" href="<?php echo base_url(); ?>auth/logout" class="dropdown-item">Log Out</button>
              </div>
            </div>
          </div>
        </nav>
        <!-- Navbar End -->

        <!-- Recent Sales Start -->
        <div class="container-fluid pt-4 px-4">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit Certificate</h4>
                    <p class="card-description">
                    </p>
                    <form action="<?= base_url('admin/sertifikat/fungsi_edit') ?>" method="post" class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Participant Name</label>
                        <input type="hidden" class="form-control" id="exampleInputUsername1" name="certificate_id" value="<?= $certificate->certificate_id ?>" placeholder="" readonly>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="participant_name" value="<?= $certificate->participant_name ?>" placeholder="participant_name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Event Name</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="event_name" value="<?= $certificate->event_name ?>" placeholder="Event Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Event Date</label>
                        <input type="date" class="form-control" id="exampleInputUsername1" name="event_date" value="<?= $certificate->event_date ?>" placeholder="Event Date">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Certificate Text</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" name="certificate_text" value="<?= $certificate->certificate_text ?>" placeholder="certificate_text">
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                      <a href="<?= base_url('admin/sertifikat') ?>" class="btn btn-light">Cancel</a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Content End -->


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