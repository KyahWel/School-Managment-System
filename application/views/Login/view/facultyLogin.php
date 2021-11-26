<?php 
include('../header/header.php')
?>
<div class="bg-img">
    <div class="wrapper">
        <form action="#" method="post">
            <h3> <strong>Faculty Access Module</strong></h3>
            <h5>User Authentication</h5>
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
                Forgot your password?
                <a href="#!">Click here!</a>
            </p>
    </div>
</div>

</form>
</div>
</div>
<!-- <script src="login.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>