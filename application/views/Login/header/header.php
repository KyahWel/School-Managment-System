<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rokkit'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"

    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" /> 
    <link rel="stylesheet" href="../mainLogin.css" type="text/css">
    <title>Technological University of the Philippines</title>
<body>
    <nav class="navbar fixed-top navbar-expand-md navbar-light">
        <div class="container-fluid">
            <a href="login.html" class="navbar-brand">
                <!-- Logo Image -->
                <img src="../assets/logo.png" width="55" alt="" class="d-inline-block align-middle mr-2">
                <!-- Logo Text -->
                <span class="font-weight-bold">Technological University of the Philippines</span>
            </a>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarCollapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="./home.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="./studentLogin.php">STUDENTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./facultyLogin.php">FACULTY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./adminLogin.php">ADMIN</a>
                    </li>
                </ul>
            </div>
    </nav>

    <script type="text/javascript">
        const currentLocation = location.href;
        const menuItem = document.querySelectorAll('a');
        const menuLength = menuItem.length
        for(let i=0; i<menuLength; i++){
            if(menuItem[i].href=== currentLocation){
                menuItem[i].className ="active"
            }
        }
    </script>
    <div class="bg-img">