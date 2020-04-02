<?php
/**
 * Description of index
 * https://itinfoway.com
 * @author Admin
 */
?>
<link href="<?= base_url("assert/admin/plugins/datatable/dataTables.bootstrap4.min.css") ?>" rel="stylesheet">
<div class="row">
    <div class="col-md-12">
        <!-- general form elements disabled -->
        <div class="card card-success card-outline">
            <div class="card-header">
                <h3 class="card-title"><?= $this->lang->line("address_head") ?></h3>
                <div class="card-tools">
                    <a href="<?= base_url("admin/address/add") ?>" class="btn btn-success btn-sm"><?= $this->lang->line("btn_add") ?></a>
                </div>
            </div>
            <div class="card-body">
                <table id="address_table" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th><?=$this->lang->line("sr_no") ?></th>
                            <th><?=$this->lang->line("address_name") ?></th>
                            <th><?=$this->lang->line("user_name") ?></th>
                            <th><?=$this->lang->line("address_latitude") ?></th>
                            <th><?=$this->lang->line("address_long") ?></th>
                            <th><?=$this->lang->line("address_add1") ?></th>
                            <th><?=$this->lang->line("address_add2") ?></th>
                            <th><?=$this->lang->line("address_city") ?></th>
                            <th><?=$this->lang->line("address_pcod") ?></th>
                            <th><?=$this->lang->line("address_state") ?></th>
                            <th><?=$this->lang->line("address_con") ?></th>
                            <th><?=$this->lang->line("action") ?></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>
<script src="<?= base_url("assert/admin/plugins/datatable/jquery.dataTables.min.js") ?>"></script>
<script src="<?= base_url("assert/admin/plugins/datatable/dataTables.bootstrap4.min.js") ?>"></script>
<script>
    $(document).ready(function () {
        var table = $('#address_table').DataTable({
            ajax: "<?= base_url("admin/address/json/?select=a.*,u.username") ?>",
            responsive: true,
            columns: [
				{"data": "id"},
                {"data": "type",
                    render: function (data) {
                        var view="" ;
                        if(data==1){
                            view +='Home';
                        }else if(data==2){
                            view += 'Work';
                        }
                        else{
                           view += 'Other';
                        }                    
                        return view;
                    }},
                {"data": "username"},
                {"data": "latitude"},
                {"data": "longitude"},
                {"data": "address1"},
                {"data": "address2"},
                {"data": "city"},
                {"data": "postalcode"},
                {"data": "state"}, 
                {"data": "country"},                
                {"data": "id",
                    render: function (data) {
                        var view = '<a href="<?= base_url("admin/address/edit/") ?>' + data + '" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a> ';
                        view += '<a href="<?= base_url("admin/address/delete/") ?>' + data + '" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a> ';
                        return view;
                    }
                }
            ]
        });
		table.on( 'order.dt search.dt', function () {
			table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
				cell.innerHTML = i+1;
			} );
		} ).draw();
    });
</script>
