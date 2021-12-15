<?php
include __DIR__.'/../includes/adminSideBar.php'
?>


<div class="height-100 pt-2 container-fluid">
  <div class="container my-3"> 
    <!--ChangePassword Tab-->
   <div class="ChangePasswordTab my-3">
      <h3>Change Password</h3>
    </div>  

    <!--ChangePassword Box-->
    <div class="col-12 align-self-center" id="cp">
      <div class="table-wrapper">
          
      <div class="Box-title"> 
        <div class="Changepassword-header">
          <h5>Change Password</h5>
        </div> 
      </div>
      <div class="alert">  
        <strong>Note!</strong> Minimum of 8 characters long.
      </div>  

       <!-- Password input-->
       <form>
        <div class="form-group"> 
            <div class="form-group row">  
              <label for="op" class="form-label col-lg-2 col-md-12">Old Password:</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control form-control-sm" id="op" placeholder="" required="" minlength="8" value=""><br/>
                  </div>
            </div>

            <div class="form-group row">
              <label for="np" class="form-label col-lg-2 col-md-12">New Password:</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control form-control-sm" id="np" placeholder="" required="" minlength="8" value=""><br/>
                  </div>
            </div>
          
            <div class="form-group row">
              <label for="c_np" class="form-label col-lg-2 col-md-12">Confirm New Password:</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control form-control-sm" id="c_np" placeholder="" required="" minlength="8" value=""><br/>
                  </div>
           </div>
        </div>
          
      </form>
    
        <!-- Password input
        <div class="form-group">
           <label class="col-md-4 control-label" for="op"> Old Password</label>
           <div class="col-md-4">
             <input id="op" name="op" type="password" placeholder="Old Password" class="form-control input-md" required="" minlength="8" value="">
           </div>

           <label class="col-md-4 control-label" for="np">New Password</label>
           <div class="col-md-4">
             <input id="np" name="np" type="password" placeholder="New Password" class="form-control input-md" required="" minlength="8" value="">
           </div>

           <label class="col-md-4 control-label" for="c_np">Confirm New Password</label>
           <div class="col-md-4">
              <input id="c_np" name="c_np" type="password" placeholder="Confirm New Password" class="form-control input-md" required="" minlength="8" value="">
           </div>
        </div>-->
      

             <!-- Button (Double) -->
           <div class="form-group">
              <label class="col-md-4 control-label" for="save"></label>
                 <div class="d-flex justify-content-end">
                    <button id="save" name="save" class="btn btn-primary" value="1">Save</button>
                    <button class="btn btn-default" id="cancel" type="reset" value="cancel">Cancel</button>
                 </div>       
             </div>
    </div>
  </div> 

</div>

<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>

