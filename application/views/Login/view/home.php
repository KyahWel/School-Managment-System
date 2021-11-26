<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../mainLogin.css" type="text/css">
    <link rel="stylesheet" href="../home.css" type="text/css">
 
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-md navbar-light">
    <div class="container-fluid">
      <a href="login.html" class="navbar-brand">
        <!-- Logo Image -->
        <img src="../assets/logo.png" width="55" alt="" class="d-inline-block align-middle mr-2">
        <!-- Logo Text -->
        <span class="font-weight-bold">Technological University of the Philippines</span>
      </a>
  </nav>

  <!-- buttons -->
  <div class="bg-img">
    <div class="wrapper-button">
      <h1>Access Modules</h1>
      <a href="../view/studentLogin.php">
        <button class="btn login-btn ">Students</button>
      </a>
      <a href="../view/facultyLogin.php">
        <button class="btn login-btn ">Faculty</button>
      </a>
      <a href="../view/adminLogin.php">
        <button class="btn  login-btn ">Admin</button>
      </a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>