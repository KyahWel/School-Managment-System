<?php
include __DIR__ . '/../includes/facultySideBar.php'
?>

<head>
    <title>Change Password</title>
</head>

<div class="height-100 pt-2 container-fluid">
    <div class="container my-3">
        <!--ChangePassword Tab-->
        <div class="ChangePasswordTab">
            <h3>Change Password</h3>
        </div>

        <!--ChangePassword Box-->
        <div class="col-12 align-self-center pt-3" id="cp">
            <div class="table-wrapper">
                <div class="Changepassword-header">
                    <p class="px-4 py-3"></p>
                </div>

                <div class="passContents">
                    <div class="alert pt-3 px-4" style="color: #00336D;">
                        Note! Password length must be minimum of 8 and maximum of 15 characters.
                    </div>

                    <!-- Password input-->
                    <form class="px-4 " action="#">
                        <div class="form-group row mb-2 px-1">
                            <label for="oldpassword" class="form-label col-lg-3 col-md-12 col-sm-12 pt-1 fw-bold">Old Password:</label>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <input type="password" name="oldpass" class="form-control form-control-sm" id="oldpassword" placeholder="Old password" required><br />
                            </div>
                        </div>

                        <div class="form-group row mb-2  px-1">
                            <label for="newpassword" class="form-label col-lg-3 col-md-12 col-sm-12 pt-1 fw-bold">New Password:</label>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <input type="password" name="newpass" class="form-control form-control-sm" id="newpassword" placeholder="New password" required minlength="8" maxlength="15"><br />
                            </div>
                        </div>

                        <div class="form-group row mb-2  px-1">
                            <label for="confirmpassword" class="form-label col-lg-3 col-md-12 col-sm-12 pt-1 fw-bold">Confirm New Password:</label>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <input type="password" name="confirmpass" class="form-control form-control-sm" id="confirmpassword" placeholder="Confirm Password" required minlength="8" maxlength="15"><br />
                            </div>
                        </div>

                        <!-- Button (Double) -->
                        <div class="save-cancel mx-2">
                            <div class="d-flex justify-content-end">
                                <button type="submit" id="save" name="submit" class="btn btn-primary mx-2">Save</button>
                                <button type="reset" class="btn btn-default" id="cancel">Cancel</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var newpass = document.getElementById("newpassword");
    var confirmpass = document.getElementById("confirmpassword");
    var unmatched = document.getElementById("notmatch");

    // new password and confirm password validation
    function validatePassword() {
        if (newpass.value != confirmpass.value) {
            confirmpass.setCustomValidity("Passwords don't Match");

        } else {
            confirmpass.setCustomValidity('');
        }
    }
    newpass.onchange = validatePassword;
    confirmpass.onkeyup = validatePassword;
</script>

</body>

</html>