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
            <tr>
                <td> 1 </td>
                <td> CITCS </td>
                <td> Dean </td>
                <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, explicabo. Cum eius tempora necessitatibus. Fuga repudiandae ducimus amet illum modi dolorem sequi harum excepturi, neque magni adipisci beatae asperiores suscipit! Gomez </td>
                <td> 
                    <a href="../superadmin/view_review" class="button-view"> View </a>
                    <a href="" class="button-delete"> Delete </a>
                </td>
            </tr>
            <tr>
                <td> 2 </td>
                <td> CAS </td>
                <td> Faculty </td>
                <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, explicabo. Cum eius tempora necessitatibus. Fuga repudiandae ducimus amet illum modi dolorem sequi harum excepturi, neque magni adipisci beatae asperiores suscipit! Gomez </td>
                <td> 
                    <a href="../superadmin/view_review" class="button-view"> View </a>
                    <a href="" class="button-delete"> Delete </a>
                </td>
            </tr>
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
    }
</style>

<script>
  $('#dataTable').dataTable({
    info:     false,
    searching: false,
    ordering: false,
    bLengthChange: true,
  });

</script>