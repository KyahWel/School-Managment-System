<!DOCTYPE html>
<html>


<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/sideBarMAIN.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/announcement.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/changePassword.css'); ?>" rel="stylesheet" type="text/css">
</head>

<body oncontextmenu='return false' class="snippet-body body-pd" id="body-pd">
    <header class="header body-pd" id="header">
        <div class="header_toggle">
            <i class='fa fa-bars' id="header-toggle"></i>
            <span class="brand"> Technological University of the Philippines</span>
        </div>
        <div class="text-white ms-auto email">
            <?= $this->session->userdata('auth_admin')['adminNumber'] ?>
        </div>
        <div class="header_img"> <img src="../assets/images/avatar.svg" alt="">

        </div>
        <div class="btn-group ">
            <button class="btn text-white dropdown-toggle mx-0 px-0" type="button" id="headerAvatarDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
            </button>
            <ul class="dropdown-menu" aria-labelledby="avatarDropdown" style="background: skyblue; max-width:50px;">
                <li><input type="file" class="dropdown-item form-cotrol form-control-sm" placeholder=""></input></li>
            </ul>
        </div>
    </header>

    <div class="l-navbar side" id="nav-bar">

        <nav class="nav">
            <div>
                <div class="nav_list">
                    <div class="welcome text-dark pt-3 fw-bold" id="welcome" style="color: steelblue; font-size:1rem">
                        Hello, <?= $this->session->userdata('auth_admin')['firstname'] ?>
                        <hr>
                    </div>
                    <a href="<?php echo base_url('Admin/dashboard'); ?>" class="nav_link pt-3"> <i class='fa fa-th-large nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
                    <a href="<?php echo base_url('Admin/students'); ?>" class="nav_link"> <i class='fa fa-graduation-cap nav_icon'></i> <span class="nav_name">Students</span> </a>
                    <a href="<?php echo base_url('Admin/faculty'); ?>" class="nav_link"> <i class='fa fa-chalkboard-teacher nav_icon'></i> <span class="nav_name">Faculty</span> </a>
                    <a href="<?php echo base_url('Admin/admin'); ?>" class="nav_link"> <i class='fas fa-users-cog nav_icon'></i> <span class="nav_name">Admin</span> </a>
                    <a href="<?php echo base_url('Admin/class'); ?>" class="nav_link"> <i class='fa fa-chalkboard nav_icon'></i> <span class="nav_name">Class</span> </a>
                    <a href="<?php echo base_url('Admin/course'); ?>" class="nav_link"> <i class='fa fa-book-open nav_icon'></i> <span class="nav_name">Course</span> </a>
                    <a href="<?php echo base_url('Admin/section'); ?>" class="nav_link"> <i class='fa fa-chalkboard nav_icon'></i> <span class="nav_name">Section</span> </a>
                    <a href="<?php echo base_url('Admin/admission'); ?>" class="nav_link"> <i class='fa fa-university nav_icon'></i> <span class="nav_name">Admission</span> </a>
                    <a href="<?php echo base_url('Admin/announcement'); ?>" class="nav_link"> <i class='fa fa-bullhorn nav_icon'></i> <span class="nav_name">Announcement</span> </a>
                    <a href="<?php echo base_url('Admin/changePassword'); ?>" class="nav_link"> <i class='fa fa-key nav_icon'></i> <span class="nav_name">Change Password</span> </a>
                </div>
            </div>
            <a href="<?php echo base_url('homepage'); ?>" class="nav_link" id="logout"> <i class='fa fa-sign-out-alt nav_icon'></i> <span class="nav_name">LogOut</span> </a>
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