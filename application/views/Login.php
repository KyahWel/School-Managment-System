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
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-md navbar-light">
    <div class="container-fluid">
      <a href="login.html" class="navbar-brand">
        <!-- Logo Image -->
        <img src="assets/images/logo.png" width="55" alt="" class="d-inline-block align-middle mr-2">
        <!-- Logo Text -->
        <span class="font-weight-bold">Technological University of the Philippines</span>
      </a>
    

      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"  >
        <span class="navbar-toggler-icon" id="toogler" style="display: none;"></span>
      </button>

      <div class="collapse navbar-collapse " id="navbarCollapse">
        <ul class="navbar-nav ms-auto" id="navs" style="display: none;">
          <li class="nav-item">
            <a class="nav-link " href="#Home" onclick="Home()">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#studentsLogin" onclick="studentsLogin()">STUDENTS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#facultyLogin" onclick="facultyLogin()">FACULTY</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#adminLogin" onclick="adminLogin()">ADMIN</a>
          </li>
        </ul>
      </div>
  </nav>

  <!-- buttons -->

    <img class="background" src="assets/images/bg.png">
    <!-- HOME PAGE -->
    <div class="wrapper-button" id="Home" style="display: block;">
      <h1>Access Modules</h1>
      <a href="#studentsLogin" onclick="studentsLogin()">
        <button class="btn login-btn ">Students</button>
      </a>
      <a href="#facultyLogin" onclick="facultyLogin()">
        <button class="btn login-btn ">Faculty</button>
      </a>
      <a href="#adminLogin" onclick="adminLogin()">
        <button class="btn  login-btn ">Admin</button>
      </a>
    </div>

    <!-- STUDENTS ACCESS -->
    <div class="wrapper" id="studentsLogin" style="display: none;">
      <form action="#" method="POST">
        <h3> <strong>Student Access Module</strong></h3>

        <hr>
         <!-- add login for student -->
     
          <!-- Username -->
          <div class="form-group mb-4">
            <label for="username">Student Number</label>
            <div class="input-group-addon">
              <i class="fa fa-user"></i>
            </div>
            <input type="text" class="form-control" id="username" name="username" placeholder="Student Number" required>
          </div>

          <!-- Password -->
          <div class="form-group mb-4">
            <label for="password">Password</label>
            <div class="input-group-addon">
              <i class="fa fa-key"></i>
            </div>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
          </div>

          <!-- clear entries and login button -->
          <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
            <input type="reset" class="btn btn-default" name="reset" value="Clear entries"></input>
           
            <input type="submit" class="btn btn-default " value="Login" >
          </div>
     

        <p class="text-left">
          <a href="#!">Forgot your password?</a><br>
        </p>
<<<<<<< HEAD:application/views/Login/Login.php

        <p class="text-left1">
              Applicant?
          <a href="#applicantLogin" onclick="applicantLogin()">Click here!</a><br>
        </p>
        
        
=======
        <button type="button" class="btn btn-default apply" name="apply" href="">APPLY HERE</button>
>>>>>>> develop:application/views/Login.php
      </form>
    </div>


    <!-- FACULTY ACCESS MODULE -->
    <div class="wrapper" id="facultyLogin" style="display: none;">
      <form action="#" method="POST">
        <h3> <strong>Faculty Access Module</strong></h3>
        <hr>

        <!-- Username -->
        <div class="form-group mb-4">
          <label for="username">Username</label>
          <div class="input-group-addon">
            <i class="fa fa-user"></i>
          </div>
          <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
        </div>

        <!-- Password -->
        <div class="form-group mb-4">
          <label for="password">Password</label>
          <div class="input-group-addon">
            <i class="fa fa-key"></i>
          </div>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        </div>

        <!-- clear entries and login button -->
        <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
          <input type="reset" class="btn btn-default" name="reset" value="Clear entries"></input>
          <input type="submit" class="btn btn-default " name="login" value="Login"></input>
        </div>

        <p class="text-left">

          <a href="#!">Forgot your password?</a><br>
        </p>
      </form>
    </div>


    <!-- ADMIN ACCESS MODULE -->
    <div class="wrapper" id="adminLogin" style="display: none;">
      <h3> <strong>Admin Access Module</strong></h3>
      <form action="<?php echo site_url('admin_main')?>" method="POST">
        <hr>

        <!-- Username -->
        <div class="form-group mb-4">
          <label for="username">Username</label>
          <div class="input-group-addon">
            <i class="fa fa-user"></i>
          </div>
          <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
        </div>

        <!-- Password -->
        <div class="form-group mb-4">
          <label for="password">Password</label>
          <div class="input-group-addon">
            <i class="fa fa-key"></i>
          </div>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        </div>

        <!-- clear entries and login button -->
        <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
          <input type="reset" class="btn btn-default" name="reset" value="Clear entries"></input>
          <input type="submit" class="btn btn-default " name="login" value="Login"></input>
        </div>

        <p class="text-left">

          <a href="#!">Forgot your password?</a><br>
        </p>
      </form>
    </div>


<!-- APPLICANT LOGIN ACCESS MODULE -->
<div class="wrapper" id="applicantLogin" style="display: none;">
      <h3> <strong>Applicant Access Module</strong></h3>
      <form action="#" method="POST">
        <hr>

        <!-- Username -->
        <div class="form-group mb-4">
          <label for="username">Applicant Number</label>
          <div class="input-group-addon">
            <i class="fa fa-user"></i>
          </div>
          <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
        </div>

        <!-- Password -->
        <div class="form-group mb-4">
          <label for="password">Password</label>
          <div class="input-group-addon">
            <i class="fa fa-key"></i>
          </div>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        </div>

        <!-- clear entries and login button -->
        <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
          <input type="reset" class="btn btn-default" name="reset" value="Clear entries"></input>
          <input type="submit" class="btn btn-default " name="login" value="Login"></input>
        </div>
        
        <!--<p class= "notice">
             </p> -->  
        <button type="button" class="btn btn-default apply" name="apply">APPLY HERE</button>
      </form>
    </div>



  <script>
    function Home() {
      document.getElementById('toogler').style.display = "none";
      document.getElementById('navs').style.display = "none";
      document.getElementById('Home').style.display = "block";
      document.getElementById('studentsLogin').style.display = "none";
      document.getElementById('facultyLogin').style.display = "none";
      document.getElementById('adminLogin').style.display = "none";
      document.getElementById('applicantLogin').style.display = "none";
    }

    function studentsLogin() {
      document.getElementById('toogler').style.display = "block";
      document.getElementById('navs').style.display = "inline-flex";
      document.getElementById('Home').style.display = "none";
      document.getElementById('studentsLogin').style.display = "block";
      document.getElementById('facultyLogin').style.display = "none";
      document.getElementById('adminLogin').style.display = "none";
      document.getElementById('applicantLogin').style.display = "none";
    }

    function facultyLogin() {
      document.getElementById('toogler').style.display = "block";
      document.getElementById('navs').style.display = "inline-flex";
      document.getElementById('Home').style.display = "none";
      document.getElementById('studentsLogin').style.display = "none";
      document.getElementById('facultyLogin').style.display = "block";
      document.getElementById('adminLogin').style.display = "none";
      document.getElementById('applicantLogin').style.display = "none";
    }

    function adminLogin() {
      document.getElementById('toogler').style.display = "block";
      document.getElementById('navs').style.display = "inline-flex";
      document.getElementById('Home').style.display = "none";
      document.getElementById('studentsLogin').style.display = "none";
      document.getElementById('facultyLogin').style.display = "none";
      document.getElementById('adminLogin').style.display = "block";
      document.getElementById('applicantLogin').style.display = "none";
    }

    function applicantLogin() {
      document.getElementById('toogler').style.display = "block";
      document.getElementById('navs').style.display = "inline-flex";
      document.getElementById('Home').style.display = "none";
      document.getElementById('studentsLogin').style.display = "none";
      document.getElementById('facultyLogin').style.display = "none";
      document.getElementById('adminLogin').style.display = "none";
      document.getElementById('applicantLogin').style.display = "block";
    }



    const linkColor = document.querySelectorAll('a')

    function colorLink() {
      if (linkColor) {
        linkColor.forEach(l => l.classList.remove('active'))
        this.classList.add('active')
      }
    }
    linkColor.forEach(l => l.addEventListener('click', colorLink))
  </script>

  <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>