<?php
/**
 * Description of index
 * https://itinfoway.com
 * @author Admin
 */
?>
<div class="row">
    <div class="col-md-12">
        <!-- Main content -->
        <section class="content mt2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle"
                                         src="<?= base_url(); ?>assert/user/<?= $users->img ?>"
                                         alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center"><?= $users->fname ?> <?= $users->lname ?> </h3>


                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b><?= $this->lang->line("user_name") ?></b> <a class="float-right"><?= $users->username ?></a>
                                    </li>
                                    <li class="list-group-item">
                                        <b><?= $this->lang->line("user_email") ?></b> <a class="float-right"><?= $users->email ?></a>
                                    </li>
                                    <li class="list-group-item">
                                        <b><?= $this->lang->line("user_no") ?></b> <a class="float-right"><?= $users->mobile ?></a>
                                    </li>

                                </ul>
                                <a class="btn btn-primary btn-block" value="$users->id" href="<?= site_url('admin/users/edit/' . $users->id); ?>"><span class="glyphicon glyphicon-trash">Edit</span></a>
                            </div>
                            <!-- /.card-body -->
                        </div>

                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header p-2">
                                <h3 class="card-title"><?= $this->lang->line("address_head") ?></h3>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="card-body table-responsive">
                                        <table id="address_table" class="table table-striped  table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th><?= $this->lang->line("sr_no") ?></th>
                                                    <th><?= $this->lang->line("address_name") ?></th>
                                                    <th><?= $this->lang->line("address_latitude") ?></th>
                                                    <th><?= $this->lang->line("address_long") ?></th>
                                                    <th><?= $this->lang->line("address_add1") ?></th>
                                                    <th><?= $this->lang->line("address_add2") ?></th>
                                                    <th><?= $this->lang->line("address_city") ?></th>
                                                    <th><?= $this->lang->line("address_pcod") ?></th>
                                                    <th><?= $this->lang->line("address_state") ?></th>
                                                    <th><?= $this->lang->line("address_con") ?></th>
                                                    <th><?= $this->lang->line("action") ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($address as $a) {
                                                    ?>
                                                    <tr>
                                                        <td><?= $a->id ?></td>
                                                        <td><?= ($a->type == 1) ? "Home" : ($a->type == 2) ? "work" : "Other" ?></td>
                                                        <td><?= $a->latitude ?></td>
                                                        <td><?= $a->longitude ?></td>
                                                        <td><?= $a->address1 ?></td>
                                                        <td><?= $a->address2 ?></td>
                                                        <td><?= $a->city ?></td>
                                                        <td><?= $a->postalcode ?></td>
                                                        <td><?= $a->state ?></td>
                                                        <td><?= $a->country ?></td>
                                                        <td>
                                                            <a href="<?= base_url() ?>admin/address/edit/<?= $a->id ?>" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a> 
                                                            <a href="<?= base_url() ?>/admin/address/delete/<?= $a->id ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                            </tbody> 
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="<?= base_url("assert/admin/plugins/datatable/jquery.dataTables.min.js") ?>"></script>
                    <script src="<?= base_url("assert/admin/plugins/datatable/dataTables.bootstrap4.min.js") ?>"></script>
                    <script>
                        $(document).ready(function () {
                            var table = $('#address_table').DataTable();
                            table.on('order.dt search.dt', function () {
                                table.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) {
                                    cell.innerHTML = i + 1;
                                });
                            }).draw();
                        });
                    </script> 
                </div>
            </div>
        </section>
