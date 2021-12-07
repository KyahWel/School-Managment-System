<!DOCTYPE html>
<html>


<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/adminSideBar.css'); ?>" rel="stylesheet" type="text/css">
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='fa fa-bars' id="header-toggle"></i> <span class="brand"> Technological University of the Philippines</span></div>
        <div class="text-white ms-auto email">
            admin123@tup.edu.ph
        </div>
        <div class="header_img"> <img src="assets/images/avatar.svg" alt=""></div>

    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <div class="nav_list">
                    <a href="#" class="nav_link"> <i class='fa fa-th-large'></i> <span class="nav_name">Dashboard</span> </a>
                    <a href="#" class="nav_link"> <i class='fa fa-graduation-cap nav_icon'></i> <span class="nav_name">Students</span> </a>
                    <a href="#" class="nav_link"> <i class='fa fa-chalkboard-teacher nav_icon'></i> <span class="nav_name">Faculty</span> </a>
                    <a href="#" class="nav_link"> <i class='fas fa-users-cog nav_icon'></i> <span class="nav_name">Admin</span> </a>
                    <a href="#" class="nav_link"> <i class='fa fa-chalkboard nav_icon'></i> <span class="nav_name">Class</span> </a>
                    <a href="#" class="nav_link"> <i class='fa fa-book-open nav_icon'></i> <span class="nav_name">Course</span> </a>
                    <a href="#" class="nav_link"> <i class='fa fa-chalkboard nav_icon'></i> <span class="nav_name">Section</span> </a>
                    <a href="#" class="nav_link"> <i class='fa fa-university nav_icon'></i> <span class="nav_name">Admission</span> </a>
                    <a href="<?php echo base_url('AnnouncementController'); ?>" class="nav_link"> <i class='fa fa-bullhorn nav_icon'></i> <span class="nav_name">Announcement</span> </a>
                    <a href="#" class="nav_link"> <i class='fa fa-key nav_icon'></i> <span class="nav_name">Change Password</span> </a>
                    <a href="#" class="nav_link logout align-right"> <i class='fa fa-sign-out-alt nav_icon'></i> <span class="nav_name">LogOut</span> </a>
                </div>
            </div>
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
                        nav.classList.toggle('show')
                        // change icon
                        toggle.classList.toggle('fa-close')
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

   