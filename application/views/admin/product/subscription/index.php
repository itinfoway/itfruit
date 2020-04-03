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
                <h3 class="card-title"><?= $this->lang->line("sub_head") ?></h3>
                <div class="card-tools">
                    <a href="<?= base_url("admin/product/subscription/add") ?>" class="btn btn-success btn-sm"><?= $this->lang->line("btn_add") ?></a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="subscription_table" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th></th>
                            <th><?=$this->lang->line("products_type") ?></th>
							<th><?=$this->lang->line("products_img") ?></th>
							<th><?=$this->lang->line("products_name") ?></th>
							<th><?=$this->lang->line("fruit_hed") ?></th>
                            <th><?=$this->lang->line("products_credit") ?></th>
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
        var table = $('#subscription_table').DataTable({
            ajax: "<?= base_url("admin/product/subscription/json") ?>",
            responsive: true,
			"order": [[ 0, 'desc' ]],
            columns: [
                {"data": "id"},
				{"data": "type",
				render: function (data) {
                        var view="" ;
                        if(data==2){
                            view +='subscription';
                        }else{
                           view += 'Ala_create';
                        }
                                                
                        return view;
                    }},
				
                {
                    "data": "img",
                    render: function(data) {
                        var view = '<img src="<?=base_url("assert/products/subscription/")?>'+data+'" class="img-thumbnail rounded-circle" width="50px">';
                        return view;
                    }
                },
                {"data": "name"},
                {"data": "fruit_ids",
                    render: function (data, type, row) {
                        var view=[];
                        for(var i=0;i<data.length;i++){
                            view[i]=data[i].name;
                        }
                        return view.join(", ");;
                    }
                },
				{"data": "price"},
                
                {"data": "id",
                    render: function (data, type, row) {
                        var view = '<a href="<?= base_url("admin/product/subscription/edit/") ?>' + data + '" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a> ';
                        view += '<a href="<?= base_url("admin/product/subscription/delete/") ?>' + data + '" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a> ';
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

