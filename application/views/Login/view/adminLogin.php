<?php 
include('../header/header.php')
?>
<div class="wrapper">
    <h3> <strong>Admin Access Module</strong></h3>
    <form action="#" method="post">

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

</form>
</div>
</div><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>