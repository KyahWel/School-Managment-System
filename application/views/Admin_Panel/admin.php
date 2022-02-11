<?php
$this->load->view('includes/adminSideBar');
?>

<head>
    <link href="<?php echo base_url('assets/css/admin.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/announcement.css'); ?>" rel="stylesheet" type="text/css">
    <title>Admin | Admin Tab</title>
</head>
<div class="height-100 pt-2 container-fluid">
    <div class="my-3" id="mainAdmin" style="display: block;">
        <div class="AdminTab my-3">
            <h3>Admins</h3>
        </div>
        <!--Create Page-->
        <div class="col-12 align-self-center my-3" id="create">
            <div class="accordion accordion-flush" id="accordion-addAdmin">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="addAdminHeader">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                        data-bs-target="#addAdmin" aria-expanded="false" aria-controls="addAdmin">
                            Add Admin
                        </button>
                    </h2>
                    <div id="addAdmin" class="accordion-collapse collapse" aria-labelledby="addAdminHeader" 
                    data-bs-parent="#accordion-addAdmin">
                        <div class="accordion-body">
                            <form method="POST" action="<?php echo site_url('admin_main/addadmin') ?>"
                            id="addAdminForm">
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <label for="firstname" class="form-label">Firstname:</label>
                                        <input type="text" id="firstname" name="firstname" required class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label for="lastname" class="form-label">Lastname:</label>
                                        <input type="text" id="lastname" name="lastname" required class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <label for="username" class="form-label">Username:</label>
                                        <input type="text" id="username" name="username" required class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label for="password" class="form-label">Password:</label>
                                        <input type="password" id="password" name="password" required class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <label for="email" class="form-label">Email":</label>
                                        <input type="text" id="email" name="email" required class="form-control">
                                    </div>

                                </div>
                                <div class="addAdminButton d-flex justify-content-end">
                                    <button class="btn btn-default" id="saveAdmin" type="submit" value="save">Save</button>
                                    <button class="btn btn-default" id="cancelAdmin" type="reset" value="cancel">
                                        Cancel
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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

                <div class="table-responsive py-2">
                    <table class="table table-default align-middle table-striped table-borderless table-hover"
                    aria-label="adminList" id="table-body">
                        <thead>
                            <tr>
                                <th scope="col" class="pb-3">ID</th>
                                <th scope="col" class="pb-3">Admin Number</th>
                                <th scope="col" class="pb-3">Username</th>
                                <th scope="col" class="pb-3">First Name</th>
                                <th scope="col" class="pb-3">Last Name</th>
                 
                                <th scope="col" class="pb-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($result as $row)
                            { ?>
                                <tr>
                                    <td><?php echo $row->adminID; ?></td>
                                    <td><?php echo $row->adminNumber; ?></td>
                                    <td><?php echo $row->username; ?></td>
                                    <td><?php echo $row->firstname; ?></td>
                                    <td><?php echo $row->lastname; ?></td>
                           
                                    <td>
                                        <div class="action-buttons">
                                        <ul>
                                            <?php if ($row->status == 1) : ?>
                                                <li>
                                                    <button type="button" id="view" data-id='<?php echo $row->adminID; ?>' 
                                                    class="btn view_data" data-bs-toggle="modal" data-bs-target="#viewAdmin">
                                                    <em class="fas fa-eye" data-bs-toggle="tooltip" title="View"></em>
                                                    View</button>
                                                </li>
                                            <?php if ($row->adminID == 1) : ?>
                                                <li>
                                                    <button type="button" id="edit" data-id='<?php echo $row->adminID; ?>'
                                                    class="btn" disabled style="background-color: gray;">
                                                    <em class="fas fa-pen" data-bs-toggle="tooltip" title="Edit"></em>
                                                    Edit</button>
                                                </li>
                                                <li>
                                                    <button type="button" class="btn" disabled style="background-color: gray;">
                                                        Deactivate
                                                    </button>
                                            <?php else : ?>
                                                <li>
                                                    <button type="button" id="edit" data-id='<?php echo $row->adminID; ?>'
                                                    class="btn edit_data" data-bs-toggle="modal" data-bs-target="#editAdmin">
                                                    <em class="fas fa-pen" data-bs-toggle="tooltip" title="Edit"></em>
                                                    Edit</button>
                                                </li>
                                                <li>
                                                    <button type="button" class="btn" id="status" 
                                                    onclick="location.href='<?php echo site_url('admin_main/deactivate') ?>/
                                                    <?php echo $row->adminID; ?>'">
                                                        Deactivate
                                                    </button>
                                            <?php endif ?>
                                            <?php else : ?>
                                                <li>
                                                    <button type="button" id="view" data-id='<?php echo $row->adminID; ?>'
                                                    class="btn" disabled style="background-color: gray;">
                                                    <em class="fas fa-eye" data-bs-toggle="tooltip" title="View"></em>
                                                    View</button>
                                                </li>
                                                <li>
                                                    <button type="button" id="edit" data-id='<?php echo $row->adminID; ?>'
                                                    class="btn" disabled style="background-color: gray;">
                                                    <em class="fas fa-pen" data-bs-toggle="tooltip" title="Edit"></em>
                                                    Edit</button>
                                                </li>
                                                <li>
                                                    <button type="button" class="btn" id="status"
                                                    onclick="location.href='<?php echo site_url('admin_main/activate') ?>/
                                                    <?php echo $row->adminID; ?>'">
                                                    Activate</button>
                                                </li>
                                            <?php endif ?>
                                        </ul>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!--Admin View-->
        <div class="modal fade" id="viewAdmin" tabindex="-1" aria-modal="true" aria-labelledby="viewAdminHeader" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content cont">
                    <div class="modal-header">
                        <h5 class="modal-title" id="viewAdminHeader">View Admin</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body p-4">
                        <div id="admin_result">

                        </div>
                        <div class="editAdminButton d-flex justify-content-end">
                            <button class="btn btn-default" id="closeView" type="button" 
                            data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Edit Admin-->
        <div class="modal fade" id="editAdmin" tabindex="-1" aria-modal="true" aria-labelledby="editAdminHeader" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editAdminHeader">Edit Admin</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>

                    <div class="modal-body">
                        <div id="edit_admin">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery JS CDN -->
<script 
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous">
</script>

<!-- jQuery DataTables JS CDN -->
<script src="<?php echo base_url('assets/js/dataTables.min.js'); ?>"></script>
<!-- Ajax fetching data -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#dataTable').DataTable();
        $('.view_data').click(function() {
            var adminData = $(this).data('id');
            $.ajax({
                url: "<?php echo site_url('admin_main/viewAdmin'); ?>",
                method: "POST",
                data: {
                    adminData: adminData
                },
                success: function(data) {
                    $('#admin_result').html(data);
                }
            });
        });
        $('.edit_data').click(function() {
            var id = $(this).data('id');
            $.ajax({
                url: "<?php echo site_url('admin_main/editAdmin'); ?>",
                method: "POST",
                data: {
                    id: id
                },
                success: function(data) {
                    $('#edit_admin').html(data);
                }
            });

        });
        $('#table-body').DataTable({
            "lengthMenu": [
                [15, 25, 50, -1],
                [15, 25, 50, "All"]
            ]
        });
        jQuery('.dataTable').wrap('<div class="dataTables_scroll" />');
    });
</script>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>

</body>

</html>