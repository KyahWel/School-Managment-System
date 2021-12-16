<?php
include __DIR__.'/../includes/adminSideBar.php'
?>
<head>
    <link href="<?php echo base_url('assets/css/admin.css'); ?>" rel="stylesheet" type="text/css">
    <title>Admin | Admin Tab</title>
</head>
<div class="height-100 pt-2 container-fluid">
    <div class="container my-3" id="mainAdmin" style="display: block;">    
        <div class="AdminTab my-3">
            <h3>Admins</h3>
        </div>
        <!--Create Page-->
        <div class="col-12 align-self-center my-3" id="create">
            <div class="accordion accordion-flush" id="accordion-addAdmin">
            <div class="accordion-item">
                <h2 class="accordion-header" id="addAdminHeader">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#addAdmin" aria-expanded="false" aria-controls="addAdmin">
                        Add Admin
                    </button>
                </h2>
                <div id="addAdmin" class="accordion-collapse collapse" aria-labelledby="addAdminHeader" data-bs-parent="#accordion-addAdmin">
                    <div class="accordion-body">
                        <form method="POST" action="<?php echo site_url('AdminController/create') ?>" id="addAdminForm">
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label class="form-label">Firstname:</label>
                                    <input type="text" name="firstname" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Lastname:</label>
                                    <input type="text" name ="lastname" class="form-control">
                                </div>        
                            </div> 
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label class="form-label">Username:</label>
                                    <input type="text" name="username" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Password:</label>
                                    <input type="text" name ="password" class="form-control">
                                </div>        
                            </div>
	                    </form>
	                    <br>
                        <div class="addAdminButton d-flex justify-content-end">
                            <button class="btn btn-default" id="save" type="submit" value="save">Save</button>
                            <button class="btn btn-default" id="cancel" type="reset" value="cancel">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        
        <!--Search ID-->
        <div class="col-12 align-self-center my-3" id="Search">
            <label>Search:</label>
            <input type="text" id="searchAdmin" name="searchAdmin" placeholder="Search Admin ID">
            <button type="button" class="btn btn-sm" id="search"><i class="fas fa-search" data-bs-toggle="tooltip" title="Search"></i></button>
        </div>  

        <!--Admin List-->
        <div class="col-12 align-self-center" id="AdminTable">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col">
                            <h2>Admin Information</h2>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">  
                    <table class="table table-default align-middle table-striped table-borderless table-hover" id="table-body">
                        <thead>
                            <tr>
                                <th>ID</th>
			                    <th>Admin Number</th>
			                    <th>Username</th>
			                    <th>First Name</th>
			                    <th>Last Name</th>
			                    <th>Password</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>001</td> 
                                <td>Ad001-2001</td>
                                <td>admin</td>
                                <td>admin</td>
                                <td>admin</td>
                                <td>admin</td>
                                <td>
                                    <div class="action-buttons">
                                        <li><button type="button" id="view" class="btn" data-bs-toggle="modal" data-bs-target="#viewAdmin"><i class="fas fa-eye" data-bs-toggle="tooltip" title="View"></i> View</button></li>
                                        <li><button type="button" id="edit" class="btn" data-bs-toggle="modal" data-bs-target="#editAdmin"><i class="fas fa-pen" data-bs-toggle="tooltip" title="Edit"></i> Edit</button></li>
                                        <li>
                                            <div id="status">Activate</div>
                                        </li>
                                    </div>
                                </td>
                            </tr>

                        <!--<?php foreach($result as $row) {?>
                            <tr>
                                <td><?php echo $row->adminID; ?></td>
			                    <td><?php echo $row->adminNumber; ?></td>
			                    <td><?php echo $row->username; ?></td>
			                    <td><?php echo $row->firstname; ?></td>
			                    <td><?php echo $row->lastname; ?></td>
			                    <td><?php echo $row->password; ?></td>
                                <td>
                                    <div class="action-buttons">
                                        <li><button type="button" id="view" class="btn" data-bs-toggle="modal" data-bs-target="#viewAdmin"><i class="fas fa-eye" data-bs-toggle="tooltip" title="View"></i> View</button></li>
                                        <li><button type="button" id="edit" class="btn" data-bs-toggle="modal" data-bs-target="#editAdmin"><i class="fas fa-pen" data-bs-toggle="tooltip" title="Edit"></i> Edit</button></li>
                                        <li>
                                            <div id="status">Activate</div>
                                        </li>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>-->
                        
                        </tbody>
                    </table>	
                </div>
            </div>
        </div>
        
        <!--Admin View-->
        <div class="modal fade" id="viewAdmin" tabindex="-1" aria-labelledby="viewAdminHeader" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="viewAdminHeader">View Admin</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="admin_result">
                        <form action="" id="viewAdminForm">
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label>ID: </label>
                                    <label>001</label>
                                </div>
                                <div class="col-6">
                                    <label>Admin Number: </label>
                                    <label>Ad001-2001</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label>Username: </label>
                                    <label>admin</label>
                                </div>
                                <div class="col-6">
                                    <label>Password: </label>
                                    <label>admin</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label>Firstname: </label>
                                    <label>admin</label>
                                </div>
                                <div class="col-6">
                                    <label>Lastname: </label>
                                    <label>admin</label>
                                </div>
                            </div>
                        </form>
                        </div>
                        <div class="editAdminButton d-flex justify-content-end">
                            <button class="btn btn-default" id="save" type="button" data-bs-dismiss="modal">Exit</button>
                        </div>                                                                          
                    </div>
                </div>
            </div>
        </div>

        <!--Edit Admin-->
        <div class="modal fade" id="editAdmin" tabindex="-1" aria-labelledby="editAdminHeader" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editAdminHeader">Edit Admin</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                
                    <div class="modal-body">
                        <form action="" id="editAdminForm">
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label class="form-label">Firstname:</label>
                                    <input type="text" class="form-control" name="firstname">
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Lastname:</label>
                                    <input type="text" class="form-control" name ="lastname">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label class="form-label">Username:</label>
                                    <input type="text" class="form-control" name="username">
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Password:</label>
                                    <input type="text" class="form-control" name ="password">
                                </div>
                            </div>
                            <div class="editAdminButton d-flex justify-content-end">
                                <button class="btn btn-default" id="save" type="submit" value="save">Save Changes</button>
                                <button class="btn btn-default" id="cancel" type="button" data-bs-dismiss="modal">Cancel</button><br>
                            </div>                    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url('assets/js/admin.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>