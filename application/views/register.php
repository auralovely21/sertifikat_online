<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>DASHMIN - Bootstrap Admin Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

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

    <!-- Sign Up Start -->
    <div class="container-fluid">
      <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
          <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <a href="index.html" class="">
                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
              </a>
              <h3>Sign Up</h3>
            </div>
            <form action="<?= base_url('Auth/register') ?>" method="post" class="forms-sample">
              <div class="form-floating mb-3">
                <input type="text" name="username" class="form-control" id="exampleInputUsername1" placeholder="Username">
                <label for="floatingText">Username</label>
              </div>
              <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                <label for="floatingInput">email</label>
              </div>
              <div class="form-floating mb-4">
                <input type="text" name="full_name" class="form-control" id="exampleInputUsername1" placeholder="Full Name">
                <label for="floatingPassword">Full Name</label>
              </div>
              <div class="form-floating mb-4">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password1" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-floating mb-4">
                <label for="exampleInputConfirmPassword1">Confirm Password</label>
                <input type="password" name="password2" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
              </div>
              <br>
              <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
              <p class="text-center mb-0">Already have an Account? <a class="text-center" href="<?= base_url('auth') ?>">Login</a>
              </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Sign Up End -->
  </div>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/chart/chart.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/tempusdominus/js/moment.min.js"></script>
  <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>