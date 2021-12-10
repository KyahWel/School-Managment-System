<?php
include __DIR__ . '/../includes/adminSideBar.php'
?>
<div class="height-100 pt-2 container-fluid">

  <div class="container my-3">

    <!--Announcement Tab-->
    <div class="AnnouncenentTab my-3">
      <h3>Announcement Tab</h3>
    </div>

    <!--Create Announcement-->
    <div class="col-12 align-self-center" id="create">
      <div class="accordion" id="accordion-addAnnouncement">
        <div class="accordion-item">
          <h2 class="accordion-header" id="addAnnouncementHeader">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#addAnnouncement" aria-expanded="true" aria-controls="addAnnouncement">
              Add Announcement
            </button>
          </h2>
          <div id="addAnnouncement" class="accordion-collapse collapse" aria-labelledby="addAnnouncementHeader" data-bs-parent="#accordion-addAnnouncement">
            <div class="accordion-body">
              <form method="POST" action="<?php echo site_url('eventsController/create') ?>" id="addAnnouncementForm">
                <div class="row mb-3">
                  <div class="col-lg-6 col-md-12">
                    <!--Title-->
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control" name="title">
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <!--Creator ID-->
                    <label class="form-label">Creator ID</label>
                    <input type="text" class="form-control" name="creatorID">
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-6 col-md-12">
                    <!--Date-->
                    <label class="form-label">Date</label>
                    <input type="date" class="form-control" name="date">
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <!--Time-->
                    <label class="form-label">Time</label>
                    <input type="time" class="form-control" name="time">
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col">
                    <!--Details-->
                    <label class="form-label">Details</label>
                    <textarea class="form-control" name="details" placeholder="Input text here..." rows="4"></textarea>
                  </div>
                </div>
                <div class="addAnnouncementButton d-flex justify-content-end">
                  <!--Buttons-->
                  <button class="btn btn-default" id="save" type="submit" value="save">Save</button>
                  <button class="btn btn-default" id="cancel" type="reset" value="cancel">Cancel</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Announcement Table-->
    <div class="col-12 align-self-center" id="AnnouncementTable">
      <div class="table-wrapper">

        <div class="table-title">
          <!--Table Header-->
          <div class="row">
            <div class="col">
              <h2>List of Announcements</h2>
            </div>
          </div>
        </div>

        <table class="table align-middle table-borderless table-hover" id="table-body">
          <!--Table Body-->
          <thead>
            <tr>
              <th>Event ID</th>
              <th>Title</th>
              <th>Date</th>
              <th>Time</th>
              <th>Details</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($result as $row) {?>
            <tr>
              <td><?php echo $row->eaID; ?></td> 
              <td><?php echo $row->title; ?></td> 
              <td> <?php echo $row->date; ?></td>
              <td><?php echo $row->time; ?></td> 
              <td><?php echo $row->details; ?></td> 
              <td><?php echo $row->status; ?></td> 
              <td>
                <div class="action-buttons">
                  <li><button type="button" id="view" class="btn" data-bs-toggle="modal" data-bs-target="#viewAnnouncement"><i class="fas fa-eye" data-bs-toggle="tooltip" title="View"></i> View</button></li>
                  <li><button type="button" id="edit" class="btn" data-bs-toggle="modal" data-bs-target="#editAnnouncement"><i class="fas fa-pen" data-bs-toggle="tooltip" title="Edit"></i> Edit</button></li>
                  <li>
                    <div id="status">ACTIVATED</div>
                  </li>
                </div>
              </td>
            </tr>
          <?php } ?>
          </tbody>
        </table>

      </div>

    </div>

    <!--View Announcement-->
    <div class="modal fade" id="viewAnnouncement" tabindex="-1" aria-labelledby="viewAnnouncementHeader" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="viewAnnouncementHeader">View Announcement</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>

        </div>
        <div class="modal-body" id="load_data">
          <div class="row mb-3">

          </div>
          <div class="modal-body">
            <div class="row mb-3">

              <div class="col">
                <label>Title:</label>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-6">
                <label>Date:</label>
              </div>
              <div class="col-6">
                <label>Time:</label>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label>Details:</label>
              </div>
            </div>
            <div class="editAnnouncementButton d-flex justify-content-end">
              <button class="btn btn-default" id="save" type="button" data-bs-dismiss="modal">Okay</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Edit Announcement-->
    <div class="modal fade" id="editAnnouncement" tabindex="-1" aria-labelledby="editAnnouncementHeader" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editAnnouncementHeader">Edit Announcement</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="POST" action="<?php echo site_url('eventsController/create') ?>" id="addAnnouncementForm">
              <div class="row mb-3">
                <div class="col-6">
                  <!--Title-->
                  <label class="form-label">Title</label>
                  <input type="text" class="form-control" name="title">
                </div>
                <div class="col-6">
                  <!--Creator ID-->
                  <label class="form-label">Creator ID</label>
                  <input type="text" class="form-control" name="creatorID">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-6">
                  <!--Date-->
                  <label class="form-label">Date</label>
                  <input type="date" class="form-control" name="date">
                </div>
                <div class="col-6">
                  <!--Time-->
                  <label class="form-label">Time</label>
                  <input type="time" class="form-control" name="time">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col">
                  <!--Details-->
                  <label class="form-label">Details</label>
                  <textarea class="form-control" name="details" rows="4"></textarea>
                </div>
              </div>
              <div class="editAnnouncementButton d-flex justify-content-end">
                <!--Buttons-->
                <button class="btn btn-default" id="save" type="submit" value="save">Save Changes</button>
                <button class="btn btn-default" id="cancel" type="button" data-bs-dismiss="modal">Cancel</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>
<script src="<?php echo base_url('assets/js/announcement.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>