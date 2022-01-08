

<nav class="navbar fixed-top navbar-expand-md navbar-light">
        <div class="container-fluid">
            <a href="<?php echo base_url('Login'); ?>" class="navbar-brand">
                <!-- Logo Image -->
                <img src="../assets/images/logo.png" width="55" alt="" class="d-inline-block align-middle mr-2">
                <!-- Logo Text -->
                <span class="font-weight-bold">Technological University of the Philippines</span>
            </a>


            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon" id="toogler"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarCollapse">
                <ul class="navbar-nav ms-auto" id="navs">
                    <li class="nav-item">
                        <a class="nav-link " href="<?php echo base_url('Login'); ?>">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('Login/student'); ?>">STUDENTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('Login/faculty'); ?>">FACULTY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('Login/admin'); ?>" >ADMIN</a>
                    </li>
                </ul>
            </div>
    </nav>

    <script type="text/javascript">
const currentLocation = location.href;
            const menuItem = document.querySelectorAll('a');
            const menuLength = menuItem.length
            for (let i = 0; i < menuLength; i++) {
                if (menuItem[i].href === currentLocation) {
                    menuItem[i].className = "active"
                }

            }

    </script>