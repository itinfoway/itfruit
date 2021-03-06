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
                <h3 class="card-title"><?= $this->lang->line("user_head") ?></h3>
                <div class="card-tools">
                    <a href="<?= base_url("admin/users/add") ?>" class="btn btn-success btn-sm"><?= $this->lang->line("btn_add") ?></a>
                </div>
            </div>
            <div class="card-body">
                <table id="user_table" class="table table-striped table-bordered table-responsive" style="width:100%">
                    <thead>
                        <tr>
                            <th></th>
                            <th><?= $this->lang->line("user_img") ?></th>
                            <th><?= $this->lang->line("user_fname") ?></th>
                            <th><?= $this->lang->line("user_lname") ?></th>
                            <th><?= $this->lang->line("user_name") ?></th>
                            <th><?= $this->lang->line("user_email") ?></th>
                            <th><?= $this->lang->line("user_no") ?></th>
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
    $(document).ready(function() {
        var table = $('#user_table').DataTable({
            ajax: "<?= base_url("admin/users/json") ?>",
            responsive: true,
            "order": [
                [0, 'desc']
            ],
            columns: [{
                    "data": "id"
                },
                {
                    "data": "img",
                    render: function(data) {
                        var view = '<img src="<?=base_url("assert/user/")?>'+data+'" class="img-thumbnail rounded-circle" width="50px">';
                        return view;
                    }
                },
                {
                    "data": "fname"
                },
                {
                    "data": "lname"
                },
                {
                    "data": "username"
                },
                {
                    "data": "email"
                },
                {
                    "data": "mobile"
                },

                {
                    "data": "status",
                    render: function(data) {
                        var view = "";
                        if (data == 1) {
                            view += 'Active';
                        } else {
                            view += 'Deactive';
                        }


                        return view;
                    }
                },
                {
                    "data": "id",
                    render: function(data, type, row) {
                        var view = '<a href="<?= base_url("admin/users/edit/") ?>' + data + '" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a> ';
                        view += '<a href="<?= base_url("admin/Users/delete/") ?>' + data + '" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a> ';
                         view += '<a href="<?= base_url("admin/address/add/") ?>' + data + '" class="btn btn-success btn-sm"><i class="fas fa-address-card"></i></a> ';
                          view += '<a href="<?= base_url("admin/Users/view/") ?>' + data + '" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a> ';
                        return view;
                    }
                }
            ]
        });
        table.on('order.dt search.dt', function() {
            table.column(0, {
                search: 'applied',
                order: 'applied'
            }).nodes().each(function(cell, i) {
                cell.innerHTML = i + 1;
            });
        }).draw();
    });
</script>
<script>  
 $(document).ready(function(){  
      $('input[type="radio"]').click(function(){  
           var status = $(this).val();  
           $.ajax({  
                url:"index.php",  
                method:"POST",  
                data:{status:status},  
                success:function(data){  
                     $('#result').html(data);  
                }  
           });  
      });  
 });  
 </script>  