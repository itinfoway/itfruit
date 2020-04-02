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
                <h3 class="card-title"><?= $this->lang->line("alacarte_head") ?></h3>
                <div class="card-tools">
                    <!-- <a href="<?= base_url("admin/setting/alacarte/add") ?>" class="btn btn-success btn-sm"><?= $this->lang->line("btn_add") ?></a> -->
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="alacarte_table" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
							<th></th>
							<th><?=$this->lang->line("alacarte_pass") ?></th>
                            <th><?=$this->lang->line("alacarte_credit") ?></th>
                            <th><?=$this->lang->line("alacarte_youpay") ?></th>
                            <th><?=$this->lang->line("alacarte_validity") ?></th>
                            <th><?=$this->lang->line("alacarte_saving") ?></th>
                            <th><?=$this->lang->line("status") ?></th>
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
        var table = $('#alacarte_table').DataTable({
            ajax: "<?= base_url("admin/setting/alacarte/json") ?>",
            responsive: true,
			"order": [[ 0, 'desc' ]],
		     columns: [
                {"data": "id"},
                {"data": "pass"},                
                {"data": "credit"},
                {"data": "youpay"},
                {"data": "validity"},
                {"data": "savings"},
                {"data": "status",
                     render: function (data) {
                        var view="" ;
                        if(data==1){
                            view +='Active';
                        }else{
                           view += 'Deactivate';
                        }                    
                        return view;
                }},
                {"data": "id",
                    render: function (data, type, row) {
                        var view = '<a href="<?= base_url("admin/setting/alacarte/edit/") ?>' + data + '" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a> ';
                        // view += '<a href="<?= base_url("admin/setting/alacarte/delete/") ?>' + data + '" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a> ';
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