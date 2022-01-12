<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="#" />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/sideBarMAIN.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/admintabsMAIN.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/changePassword.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/dataTables.bootstrap.min.css'); ?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</head>

<body oncontextmenu='return false' class="snippet-body body-pd" id="body-pd">
    <header class="header body-pd" id="header">
        <div class="header_toggle">
            <i class='fa fa-bars' id="header-toggle"></i>
            <span class="brand"> Technological University of the Philippines</span>
        </div>
        <div class="text-white ms-auto email">
            <?= $this->session->userdata('auth_user')['teacherNumber'] ?>
        </div>
        <div class="header_img"> <img src="../assets/images/facultyAvatar.png" alt="Faculty Avatar"></div>
    </header>

    <div class="l-navbar side" id="nav-bar">

        <nav class="nav">
            <div>
                <div class="nav_list">
                    <div class="welcome text-dark pt-3 fw-bold" id="welcome">
                        <i class='fa fa-user nav_icon px-2'></i>
                        Hello, Prof <?= $this->session->userdata('auth_user')['lastname'] ?>!
                        <hr>
                    </div>
                    <a href="<?php echo base_url('Faculty/dashboard'); ?>" class="nav_link pt-3"> <i class='fa fa-th-large nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
                    <a href="<?php echo base_url('Faculty/profile'); ?>" class="nav_link"> <i class='fa fa-user nav_icon'></i> <span class="nav_name">My Profile</span> </a>
                    <a href="<?php echo base_url('Faculty/students'); ?>" class="nav_link"> <i class='fa fa-user-graduate nav_icon'></i> <span class="nav_name">My Students</span> </a>
                    <a href="<?php echo base_url('Faculty/changePassword'); ?>" class="nav_link"> <i class='fa fa-key nav_icon'></i> <span class="nav_name">Change Password</span> </a>
                </div>
            </div>
            <a href="<?php echo base_url('Logout'); ?>" class="nav_link" id="logout"> <i class='fa fa-sign-out-alt nav_icon'></i> <span class="nav_name">LogOut</span> </a>
        </nav>
    </div>

    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function(event) {

            const showNavbar = (toggleId, navId, bodyId, headerId) => {
                const toggle = document.getElementById(toggleId),
                    nav = document.getElementById(navId),
                    bodypd = document.getElementById(bodyId),
                    headerpd = document.getElementById(headerId)

                // Validate that all variables exist
                if (toggle && nav && bodypd && headerpd) {
                    toggle.addEventListener('click', () => {
                        // show navbar
                        nav.classList.toggle('side')
                        // add padding to body
                        bodypd.classList.toggle('body-pd')
                        // add padding to header
                        headerpd.classList.toggle('body-pd')
                    })
                }
            }

            showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

            const currentLocation = location.href;
            const menuItem = document.querySelectorAll('a');
            const menuLength = menuItem.length
            for (let i = 0; i < menuLength; i++) {
                if (menuItem[i].href === currentLocation) {
                    menuItem[i].className = "active"
                }
            }
        });
    </script>