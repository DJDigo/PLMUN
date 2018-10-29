<div class="panel-title">
  <h3>CITCS</h3>
</div>

<div class="panel-container">
  <div class="panel-content">
    <table id="dataTable" class="display table" cellspacing="0" width="100%">
      <thead>
        <tr class="table__head">
          <th class="table__head-list">ID</th>
          <th class="table__head-list">Email Address</th>
          <th class="table__head-list">Date and Time</th>
          <th class="table__head-list">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="table__body-list">1</td>
          <td class="table__body-list">plmun@gmail.com</td>
          <td class="table__body-list">2018-02-21 10:00</td>
          <td class="table__body-list">
            <a class="js-view-modal">view</a>
          </td>
        </tr>
        <tr>
          <td class="table__body-list">1</td>
          <td class="table__body-list">plmun@gmail.com</td>
          <td class="table__body-list">2018-02-21 10:00</td>
          <td class="table__body-list">
            <a class="js-view-modal">view</a>
          </td>
        </tr>
        <tr>
          <td class="table__body-list">1</td>
          <td class="table__body-list">plmun@gmail.com</td>
          <td class="table__body-list">2018-02-21 10:00</td>
          <td class="table__body-list">
            <a class="js-view-modal">view</a>
          </td>
        </tr>
        <tr>
          <td class="table__body-list">1</td>
          <td class="table__body-list">plmun@gmail.com</td>
          <td class="table__body-list">2018-02-21 10:00</td>
          <td class="table__body-list">
            <a class="js-view-modal">view</a>
          </td>
        </tr>
        <tr>
          <td class="table__body-list">1</td>
          <td class="table__body-list">plmun@gmail.com</td>
          <td class="table__body-list">2018-02-21 10:00</td>
          <td class="table__body-list">
            <a class="js-view-modal">view</a>
          </td>
        </tr>
        <tr>
          <td class="table__body-list">1</td>
          <td class="table__body-list">plmun@gmail.com</td>
          <td class="table__body-list">2018-02-21 10:00</td>
          <td class="table__body-list">
            <a class="js-view-modal">view</a>
          </td>
        </tr><tr>
          <td class="table__body-list">1</td>
          <td class="table__body-list">plmun@gmail.com</td>
          <td class="table__body-list">2018-02-21 10:00</td>
          <td class="table__body-list">
            <a class="js-view-modal">view</a>
          </td>
        </tr>
        <tr>
          <td class="table__body-list">1</td>
          <td class="table__body-list">plmun@gmail.com</td>
          <td class="table__body-list">2018-02-21 10:00</td>
          <td class="table__body-list">
            <a class="js-view-modal">view</a>
          </td>
        </tr>
        <tr>
          <td class="table__body-list">1</td>
          <td class="table__body-list">plmun@gmail.com</td>
          <td class="table__body-list">2018-02-21 10:00</td>
          <td class="table__body-list">
            <a class="js-view-modal">view</a>
          </td>
        </tr><tr>
          <td class="table__body-list">1</td>
          <td class="table__body-list">plmun@gmail.com</td>
          <td class="table__body-list">2018-02-21 10:00</td>
          <td class="table__body-list">
            <a class="js-view-modal">view</a>
          </td>
        </tr>
        <tr>
          <td class="table__body-list">1</td>
          <td class="table__body-list">plmun@gmail.com</td>
          <td class="table__body-list">2018-02-21 10:00</td>
          <td class="table__body-list">
            <a class="js-view-modal">view</a>
          </td>
        </tr>
        <tr>
          <td class="table__body-list">1</td>
          <td class="table__body-list">plmun@gmail.com</td>
          <td class="table__body-list">2018-02-21 10:00</td>
          <td class="table__body-list">
            <a class="js-view-modal">view</a>
          </td>
        </tr><tr>
          <td class="table__body-list">1</td>
          <td class="table__body-list">plmun@gmail.com</td>
          <td class="table__body-list">2018-02-21 10:00</td>
          <td class="table__body-list">
            <a class="js-view-modal">view</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<?php echo $this->element('admin/modal'); ?>

<script>
$(document).ready(function() {
  $('#dataTable').DataTable( {
    dom: 'Bfrtip',
    paging: true,
    autoWidth: true,
    ordering: false,
    info:     false,
    searching: false
  });
  handleFeedbackModal();
});

// SHOW SUGGESTIONS AND FEEDBACK MODAL
function handleFeedbackModal() {
  $('html').delegate('.js-view-modal', 'click',function() {
    $('.modal').fadeIn(300);
  }); 

  $('.close-modal').on('click', function() {
    $('.modal').fadeOut(300);
  })
}
</script>
