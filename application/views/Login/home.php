<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins'>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/mainLogin.css'); ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('assets/css/home.css'); ?>" rel="stylesheet" type="text/css">
  <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
  <title>ERS | Technological University of the Philippines</title>
  <style>
    .background {
      background: url(assets/images/bg.png) no-repeat center/cover #f4f4f4;
      position: relative;
      height: 100vh;
    }

    @media screen and (max-width: 1024px) {
      .background {
        background: none #f4f4f4;
      }
    }
  </style>
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-md navbar-light">
    <div class="container-fluid">
      <a href="<?php echo base_url('Login'); ?>" class="navbar-brand">
        <!-- Logo Image -->
        <img src="assets/images/logo.png" width="55" alt="" class="d-inline-block align-middle mr-2">
        <!-- Logo Text -->
        <span class="font-weight-bold">Technological University of the Philippines</span>
      </a>

  </nav>

  <div class="background">
    <!-- HOME PAGE -->
    <div class="wrapper-button" id="Home" style="display: block;">
    
    <!-- Invalid username or password -->
     <?php if($this->session->flashdata('login')) : ?>
      <div class="alert alert-success alert-dismissible fade show">
        <?= $this->session->flashdata('login'); ?>
        <button type="button" class="btn-close close" data-bs-dismiss="alert"></button>
      </div>
      <?php $this->session->unset_userdata ('login'); ?>
      <?php endif; ?>

      <h1>Access Modules</h1>
      <a href="<?php echo base_url('Login/student'); ?>">
        <button class="btn login-btn ">Students</button>
      </a>
      <a href="<?php echo base_url('Login/faculty'); ?>">
        <button class="btn login-btn ">Faculty</button>
      </a>
      <a href="<?php echo base_url('Login/admin'); ?>">
        <button class="btn  login-btn ">Admin</button>
      </a>
    </div>
  </div>
</body>

</html>