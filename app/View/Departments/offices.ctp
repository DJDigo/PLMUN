<div class="panel-title">
  <h3>DEPARTMENT NAME (OFFICES DEPARTMENT)</h3>
</div>

<div class="panel-container">
  <div class="panel-content">
    <table class="table table-striped table-bordered" id="dataTable">
        <thead>
            <th>ID</th>
            <th>Officers Under Department</th>
            <th>Details</th>
            <th>Action</th>
        </thead>
        <tbody>
            <tr>
                <td> <?php echo $department['Registrar']['id'] ?> </td>
                <td> <?php echo ucfirst($department['Registrar']['title']) ?> </td>
                <td> <?php echo $department['Registrar']['description'] ?> </td>
                <td> 
                    <a href="<?php echo $url.'superadmin/registrar/'.$department['Registrar']['id'] ?>" class="button-edit"> Edit </a>
                </td>
            </tr>
            <tr>
                <td> <?php echo $department['Treasury']['id'] ?> </td>
                <td> <?php echo ucfirst($department['Treasury']['title']) ?> </td>
                <td> <?php echo $department['Treasury']['description'] ?> </td>
                <td> 
                    <a href="<?php echo $url.'superadmin/treasury/'.$department['Treasury']['id'] ?>" class="button-edit"> Edit </a>
                </td>
            </tr>
            <tr>
                <td> <?php echo $department['Guidance']['id'] ?> </td>
                <td> <?php echo ucfirst($department['Guidance']['title']) ?> </td>
                <td> <?php echo $department['Guidance']['description'] ?> </td>
                <td> 
                    <a href="<?php echo $url.'superadmin/guidance/'.$department['Guidance']['id'] ?>" class="button-edit"> Edit </a>
                </td>
            </tr>
            <tr>
                <td> <?php echo $department['Nstp']['id'] ?> </td>
                <td> <?php echo ucfirst($department['Nstp']['title']) ?> </td>
                <td> <?php echo $department['Nstp']['description'] ?> </td>
                <td> 
                    <a href="<?php echo $url.'superadmin/nstp/'.$department['Nstp']['id'] ?>" class="button-edit"> Edit </a>
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
        font-size: 12px;
    }    
    #dataTable td {
        font-size: 12px;
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