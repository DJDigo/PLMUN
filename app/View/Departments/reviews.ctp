<div class="panel-title">
  <h3>Reviews</h3>
</div>

<div class="panel-container">
  <div class="panel-content">
    <table class="table table-striped table-bordered" id="dataTable">
        <thead>
            <th>ID</th>
            <th>Department Name</th>
            <th>Department C/O</th>
            <th>Details</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php foreach($feedbacks as $feedback): ?>
            <tr>
                <td> <?php echo $feedback['Feedback']['id'] ?> </td>
                <td> <?php echo $ddepartments[$feedback['Feedback']['department_id']] ?> </td>
                <td> <?php echo $type[$feedback['Feedback']['type']] ?> </td>
                <td> <?php echo !empty($feedback['Feedback']['suggestion']) ? $feedback['Feedback']['suggestion'] : 'No suggestions.' ?> </td>
                <td> 
                    <a href="<?php echo $url.'superadmin/departments/view/'.$feedback['Feedback']['id'] ?>" class="button-view"> View </a>
                    <a href="" class="button-delete"> Delete </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
  </div>
</div>

<style>
    #dataTable {
        padding: 20px 0;  
    }
    #dataTable thead {
        background: #5280ae;
        color: #fff;
    }
    #dataTable th {
        font-size: 13px;
    }    
    #dataTable td {
        font-size: 13px;
        padding: 20px 10px 0;
    }
    #dataTable td:nth-child(4) {
        width: 300px;
        overflow: hidden;
        text-overflow: ellipsis;
        display: inline-block;
        white-space: nowrap;
    }
    .dataTables_length {
        padding: 20px 0 0;
    }
    .dataTables_length select {
        padding: 8px 4px;
        width: 80px;
        border-radius: 5px;
    }
    .dataTables_filter {
        font-size: 14px;
        padding: 20px 0 0;
    }
    .dataTables_filter input {
        font-size: 14px;
        padding: 8px 4px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }
</style>

<script>
  $('#dataTable').dataTable({
    info:     false,
    searching: true,
    ordering: false,
    bLengthChange: true,
  });

</script>