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
                <h3 class="card-title"><?= $this->lang->line("contact_head") ?></h3>
                <div class="card-tools">
                    <!-- <a href="<?= base_url("admin/Contacts/add") ?>" class="btn btn-success btn-sm"><?= $this->lang->line("btn_add") ?></a> -->
                </div>
            </div>
            <div class="card-body">
                <table id="contactus_table" class="table table-striped table-bordered table-responsive" style="width:100%">
                    <thead>
                        <tr>
							<th></th>
                            <th><?=$this->lang->line("contact_date") ?></th>
                            <th><?=$this->lang->line("contact_name") ?></th>
                            <th><?=$this->lang->line("contact_email") ?></th>
                            <th><?=$this->lang->line("contact_no") ?></th>
                            <th><?=$this->lang->line("contact_msg") ?></th>
                            <th><?=$this->lang->line("contact_type") ?></th>
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
        var table = $('#contactus_table').DataTable({
            ajax: "<?= base_url("admin/Contacts/json") ?>",
            responsive: true,
			"order": [[ 0, 'desc' ]],
            columns: [
                {"data": "id"},
                {"data": "date"},
                {"data": "name"},
                {"data": "email"},
                {"data": "contact_number"},
                {"data": "msg"},
                {"data": "type",
                    render: function (data) {
                        var view="" ;
                        if(data==1){
                            view +='event/corporate';
                        }else{
                           view += 'Sead us a message';
                        }                    
                        return view;
                    }},
                 {"data": "status",
                    render: function (data) {
                        var view="" ;
                        if(data==1){
                            view +='Read';
                        }else{
                           view += 'Unread';
                        }
                                                
                        return view;
                    }},
                {"data": "id",
                    render: function (data) {
                        var view = '<a href="<?= base_url("admin/Contacts/edit/") ?>' + data + '" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a> ';
                        view += '<a href="<?= base_url("admin/Contacts/delete/") ?>' + data + '" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a> ';
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