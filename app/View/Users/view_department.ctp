<div class="panel-title">
  <h3>DEPARTMENT NAME ( example CITCS DEPARTMENT)</h3>
</div>

<div class="panel-container">
  <div class="panel-content">
    <table class="table table-striped table-bordered" id="dataTable">
        <thead>
            <th>ID</th>
            <th>Officers Under Department</th>
            <th>Name In Charge</th>
            <th>Details</th>
            <th>Action</th>
        </thead>
        <tbody>
            <tr>
                <td> 1 </td>
                <td> Dean </td>
                <td> Juan Gomez </td>
                <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, explicabo. Cum eius tempora necessitatibus. Fuga repudiandae ducimus amet illum modi dolorem sequi harum excepturi, neque magni adipisci beatae asperiores suscipit! Gomez </td>
                <td> 
                    <a href="../superadmin/edit_dean" class="button-edit"> Edit </a>
                </td>
            </tr>
            <tr>
                <td> 2 </td>
                <td> Staff </td>
                <td> Juan Gomez Jr. </td>
                <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, explicabo. Cum eius tempora necessitatibus. Fuga repudiandae ducimus amet illum modi dolorem sequi harum excepturi, neque magni adipisci beatae asperiores suscipit! Gomez </td>
                <td> 
                    <a href="../superadmin/edit_staff" class="button-edit"> Edit </a>
                </td>
            </tr>
        </tbody>
    </table>
  </div>
</div>

<style>
    #dataTable {
        padding: 20px 0;    
        margin-bottom: 100px !important;    
    }
    #dataTable thead {
        background: #5280ae;
        color: #fff;
    }
    #dataTable th {
        font-size: 14px;
    }    
    #dataTable td {
        font-size: 14px;
        padding: 20px 10px 0;
    }
    #dataTable td:nth-child(3) {
        width: 300px;
        overflow: hidden;
        text-overflow: ellipsis;
        display: inline-block;
        white-space: nowrap;
    }
</style>

<script>
  $('#dataTable').dataTable({
    info:     false,
    searching: false,
    ordering: false,
    bPaginate: false,
    bLengthChange: true,
  });

</script>