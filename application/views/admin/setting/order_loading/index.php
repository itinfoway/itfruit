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
                <h3 class="card-title"><?= $this->lang->line("order_loading") ?></h3>
                <div class="card-tools">
                    <a href="<?= base_url("admin/setting/order-loading/add") ?>" class="btn btn-success btn-sm"><?= $this->lang->line("btn_add") ?></a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="order_loading" class="table table-striped table-bordered table-responsive" style="width:100%">
                    <thead>
                        <tr>
                            <th></th>
                            <th><?= $this->lang->line("order_loading_name") ?></th>
                            <th><?= $this->lang->line("order_loading_weekday") ?></th>
                            <th><?= $this->lang->line("ala_carte_head") ?></th>
                            <th><?= $this->lang->line("sub_head") ?></th>
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
        var table = $('#order_loading').DataTable({
            ajax: "<?= base_url("admin/setting/order_loading/json") ?>",
            responsive: true,
            "order": [[0, 'desc']],
            columns: [{
                    "data": "id"
                },
                {"data": "name"},
                {"data": "week_day",
                    render: function (data) {
                        var view = "";
                        if (data == 1) {
                            view += 'Monday';
                        } else if (data == 2) {
                            view += 'Tuesday';
                        }
                        else if (data == 3) {
                            view += 'Wednesday';
                        }
                        else if (data == 4) {
                            view += 'Thursday';
                        }
                        else if (data == 5) {
                            view += 'Friday';
                        }
                        else if (data == 6) {
                            view += 'Saturday';
                        }

                        else {
                            view += 'Sunday';
                        }
                        return view;
                    }},
                {"data": "ala_carte_loading"},
                {"data": "subscription_loading"},
                {"data": "id",
                    render: function (data, type, row) {
                        var view = '<a href="<?= base_url("admin/setting/order-loading/edit/") ?>' + data + '" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a> ';
                        view += '<a href="<?= base_url("admin/setting/order-loading/delete/") ?>' + data + '" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a> ';
                        return view;
                    }
                }
            ]
        });
        table.on('order.dt search.dt', function () {
            table.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) {
                cell.innerHTML = i + 1;
            });
        }).draw();
    });
</script>