<?php
$this->load->view('includes/studentSideBar'); 
?>

<head>
    <link href="<?php echo base_url('assets/css/dropSubject.css'); ?>" rel="stylesheet" type="text/css">
    <title>Drop Subject</title>
</head>
<div class="lightbox" id="wait_lightbox">
    <div class="row">
        <div class="col-lg-12 align-self-center">
            <div class="table-wrapper-2">
                <div class="wrap px-5 py-5"> 
                    <img class="bugfix"src="../assets/images/bug-fixing.svg" alt="Under Maintenance" class="px-3">
                    <h3 class="text-uppercase">This page is under maintenance.</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="height-100 pt-2 container-fluid">
    <div class="container my-3" id="mainDrop" style="display: block;">
        <div class="DropTab pt-2">
            <h3>Drop Subject</h3>
        </div>

        <!--Note-->
        <div class="col-12 align-self-center">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col">
                            <h2>Take Note</h2>
                        </div>
                    </div>
                </div>
                <div class="table-responsive px-4 py-3">
                    Please be reminded that the dropping of subjects can be done anytime but not after taking the midterm examination. <br>
                    Last day for officially dropping of subjects is on November 27, 2021. Once completed and approved he/she has to inform his/her teacher to avoid a mark of 5 or failed.
                </div>
            </div>
        </div><br>

        <!--Subject List-->
        <div class="col-12 align-self-center" id="SubjectTable">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col">
                            <h2>Class Subjects</h2>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-default align-middle table-striped table-borderless table-hover" aria-label="subjectList" id="table-body">
                        <thead>
                            <tr>
                                <th scope="col" class="py-3">Subject Code</th>
                                <th scope="col" class="py-3">Subject Name</th>
                                <th scope="col" class="py-3">Teacher</th>
                                <th scope="col" class="py-3">Units</th>
                                <th scope="col" class="py-3">Section</th>
                                <th scope="col" class="py-3">Schedule</th>
                                <th scope="col" class="py-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>DM001</td>
                                <td>Discrete Mathematics</td>
                                <td>Salvador John</td>
                                <td>1</td>
                                <td>BSCS-NS-3A</td>
                                <td>10:00-13:00</td>
                                <td>
                                    <div class="action-buttons">
                                        <ul class="my-0 mx-0">
                                            <li><button type="button" class="btn" id="status" data-bs-toggle="modal" data-bs-target="#confirmDrop">DROP</button></li>
                                        <ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!--Confirm Drop-->
        <div class="modal fade" id="confirmDrop" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <form action="" id="confirm">
                            <div class="col-12 align-self-center">
                                Are you sure you want to drop this subject?
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-default" id="save" type="submit" value="save">Yes</button>
                                <button class="btn btn-default" id="cancel" type="button" data-bs-dismiss="modal">No</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url('assets/js/dropSubject.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>