<?php
$this->load->view('includes/adminSideBar');
?>

<head>
  <link href="<?php echo base_url('assets/css/announcement.css'); ?>" rel="stylesheet" type="text/css">
  <title>Admin | Events and Announcements</title>
</head>

<div class="height-100 pt-2 container-fluid">

  <div class="my-3">

    <!--Announcement Tab-->
    <div class="AnnouncenentTab my-3">
      <h3>Events and Announcements</h3>
    </div>

    <!--Create Announcement-->
    <div class="col-12 align-self-center" id="create">
      <div class="accordion accordion-flush" id="accordion-addAnnouncement">
        <div class="accordion-item">
          <h2 class="accordion-header" id="addAnnouncementHeader">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#addAnnouncement" aria-expanded="false" aria-controls="addAnnouncement">
              Add Announcement
            </button>
          </h2>
          <div id="addAnnouncement" class="accordion-collapse collapse" aria-labelledby="addAnnouncementHeader" data-bs-parent="#accordion-addAnnouncement">
            <div class="accordion-body">
              <form method="POST" action="<?php echo site_url('eventsController/create/') ?>" id="addAnnouncementForm">
                <div class="row mb-3">
                  <div class="col-6">
                    <!--Title-->
                    <label for="announcementTitle" class="form-label">Title</label>
                    <input type="text" class="form-control" id="announcementTitle" required name="title">
                  </div>
                  <div class="col-6">
                    <!--Creator ID-->
                    <label for="creatorID" class="form-label">Created By</label>
                    <input type="text" class="form-control" id="creatorID" disabled value='<?= $this->session->userdata('auth_user')['firstname'] ?>' ;>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-6">
                    <!--Date-->
                    <label for="announcementDate" class="form-label">Date</label>
                    <input type="date" class="form-control" id="announcementDate"required  name="date">
                  </div>
                  <div class="col-6">
                    <!--Time-->
                    <label for="announcementTime" class="form-label">Time</label>
                    <input type="time" class="form-control" id="announcementTime" required name="time">
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col">
                    <!--Details-->
                    <label for="announcementDetails" class="form-label">Details</label>
                    <textarea class="form-control" name="details" id="announcementDetails" required placeholder="Input text here..." rows="4"></textarea>
                  </div>
                </div>
                <div class="addAnnouncementButton d-flex justify-content-end">
                  <!--Buttons-->
                  <button class="btn btn-default" id="saveAnnouncement" type="submit" value="save">Save</button>
                  <button class="btn btn-default" id="cancelAnnouncement" type="reset" value="cancel">Cancel</button>
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

        <div class="table-responsive">
          <table class="table table-default table-striped align-middle table-borderless table-hover table-body" aria-label="Announcements" id="announcementTable">
            <!--Table Body-->
            <thead>
              <tr>
                <th>Title</th>
                <th>Date</th>
                <th>Time</th>
                <th>Details</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($result as $row) { ?>
                <tr>
                  <td><?php echo $row->title; ?></td>
                  <td><?php echo date('m/d/Y', strtotime($row->date)) ?></td>
                  <td><?php echo date('h:i:s a', strtotime($row->time)) ?></td>
                  <td><?php echo $row->details; ?></td>
                  <td>
                    <div class="action-buttons" id="actions">
                      <ul>
                        <?php if ($row->status == 1) : ?>
                          <li><button type="button" id="view" data-id='<?php echo $row->eaID; ?>' class="btn view_data" data-bs-toggle="modal" data-bs-target="#viewAnnouncement"><em class="fas fa-eye" data-bs-toggle="tooltip" title="View"></em> View</button></li>
                          <li><button type="button" id="edit" data-id='<?php echo $row->eaID; ?>' class="btn edit_data" data-bs-toggle="modal" data-bs-target="#editAnnouncement"><em class="fas fa-pen" data-bs-toggle="tooltip" title="Edit"></em> Edit</button></li>
                          <li>
                          <li><button type="button" class="btn" onclick="location.href='<?php if ($row->status == 1) {
                                                                                          echo site_url('eventsController/deactivate');
                                                                                        } else {
                                                                                          echo site_url('eventsController/activate');
                                                                                        } ?>/<?php echo $row->eaID; ?>'">
                              Deactivate
                            </button>
                          </li>
                        <?php else : ?>
                          <li><button type="button" id="view" data-id='<?php echo $row->eaID; ?>' class="btn" disabled style="background-color: gray;"><em class="fas fa-eye" data-bs-toggle="tooltip" title="View"></em> View</button></li>
                          <li><button type="button" id="edit" data-id='<?php echo $row->eaID; ?>' class="btn" disabled style="background-color: gray;"><em class="fas fa-pen" data-bs-toggle="tooltip" title="Edit"></em> Edit</button></li>
                          <li>
                          <li><button type="button" class="btn" id="status" onclick="location.href='<?php if ($row->status == 1) {
                                                                                                      echo site_url('eventsController/deactivate');
                                                                                                    } else {
                                                                                                      echo site_url('eventsController/activate');
                                                                                                    } ?>/<?php echo $row->eaID; ?>'">
                              Activate
                            </button>
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

    <!--View Announcement-->
    <div class="modal fade" id="viewAnnouncement" tabindex="-1" aria-modal="true" aria-labelledby="viewAnnouncementHeader" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="viewAnnouncementHeader">View Announcement</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div id="event_result">

            </div>
            <div class="viewAnnouncementButton d-flex justify-content-end">
              <button class="btn btn-default" id="okay" type="button" data-bs-dismiss="modal">Okay</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Edit Announcement-->
    <div class="modal fade" id="editAnnouncement" tabindex="-1" aria-modal="true" aria-labelledby="editAnnouncementHeader" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editAnnouncementHeader">Edit Announcement</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div id="edit_event">

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <div class="pt-1"> &nbsp;</div>
</div>
<!-- jQuery JS CDN -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<!-- jQuery DataTables JS CDN -->
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<!-- Ajax fetching data -->
<script type="text/javascript">
  $(document).ready(function() {
    $('#dataTable').DataTable();
    $('.view_data').click(function() {
      var eventData = $(this).data('id');
      $.ajax({
        url: "<?php echo site_url('eventsController/view'); ?>",
        method: "POST",
        data: {
          eventData: eventData
        },
        success: function(data) {
          $('#event_result').html(data);
        }
      });
    });
    $('.edit_data').click(function() {
      var id = $(this).data('id');
      $.ajax({
        url: "<?php echo site_url('eventsController/edit'); ?>",
        method: "POST",
        data: {
          id: id
        },
        success: function(data) {
          $('#edit_event').html(data);
        }
      });
    });
  });
  $(document).ready(function() {
    $('#announcementTable').DataTable({
      "lengthMenu": [
        [15, 25, 50, -1],
        [15, 25, 50, "All"]
      ]
    });
    jQuery('.dataTable').wrap('<div class="dataTables_scroll" />');
  });
</script>

<!-- External Javascripts -->
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>