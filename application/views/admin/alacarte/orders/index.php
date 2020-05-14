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
                <h3 class="card-title"><?= $this->lang->line("ala_carte_orders") ?></h3>
                
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <table id="blog_table" class="table table-striped table-bordered" >
                    <thead>
                        <tr>
                            <th><?= $this->lang->line("sr_no") ?></th>
                            <th><?= $this->lang->line("order_date") ?></th>
                            <th><?= $this->lang->line("delivered_on_day") ?></th>
                            <th><?= $this->lang->line("products") ?></th>
                            <th><?= $this->lang->line("delivered_on_date") ?></th>
                            <th><?= $this->lang->line("delivered_on_time") ?></th>
                            <th><?= $this->lang->line("total_item") ?></th>
                            <th><?= $this->lang->line("total_credit") ?></th>
                            <th><?= $this->lang->line("address_type") ?></th>
                            <th><?= $this->lang->line("address") ?></th>
                            <th><?= $this->lang->line("city") ?></th>
                            <th><?= $this->lang->line("postalcode") ?></th>
                            <th><?= $this->lang->line("state") ?></th>
                            <th><?= $this->lang->line("country") ?></th>
                            <th><?= $this->lang->line("status") ?></th>
                            <th><?= $this->lang->line("action") ?></th>
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
        var table = $('#blog_table').DataTable({
            ajax: "<?= base_url("admin/alacarte/orders/json/") ?>",
            responsive: true,
            "order": [[0, 'desc']],
            columns: [
                {"data": "id"},
                {"data": "order_date"},
                {"data": "delivered_on_day",
                    render: function (data, type, row) {
                        var view = "";
                        if (data == 1) {
                            view = "<?= $this->lang->line("days_name")[1] ?>";
                        } else if (data == 2) {
                             view = "<?= $this->lang->line("days_name")[2] ?>";
                        } else if (data == 3){
                             view = "<?= $this->lang->line("days_name")[3] ?>";
                        } else if (data == 4){
                             view = "<?= $this->lang->line("days_name")[4] ?>";
                        }else if (data == 5){
                             view = "<?= $this->lang->line("days_name")[5] ?>";
                        }else if (data == 6){
                             view = "<?= $this->lang->line("days_name")[6] ?>";
                        }else if (data == 7){
                             view = "<?= $this->lang->line("days_name")[7] ?>";
                        }
                        return view;
                    }
                },
                {"data": "products"},
                {"data": "delivered_on_date"},
                {"data": "delivered_on_time"},
                {"data": "total_item"},
                {"data": "total_credit"},
                {"data": "address_type",
                    render: function (data, type, row) {
                        var view = "";
                        if (data == 1) {
                            view = "Home";
                        } else if (data == 2) {
                            view = "Work";
                        } else {
                            view = "Other";
                        }
                        return view;
                    }
                },
                {"data": "address"},
                {"data": "city"},
                {"data": "postalcode"},
                {"data": "state"},
                {"data": "country"},
                {"data": "status"},
                {"data": "id",
                    render: function (data, type, row) {
                        var view = '<a href="<?= base_url("admin/orders/view/") ?>' + data + '" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a> ';
                        return view;
                    },
                },
            ]
        });
        table.on('order.dt search.dt', function () {
            table.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) {
                cell.innerHTML = i + 1;
            });
        }).draw();
    });
</script>
