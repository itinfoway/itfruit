<script src="<?= base_url("assert/fontend/") ?>js/jquery.dataTables.min.js"></script>
<link href="<?= base_url("assert/fontend/") ?>css/jquery.dataTables.min.css" rel="stylesheet"  type="text/css"/>
<section>
    <div class="address">
        <div class="container my-container">
            <div class="add-address">
                <img class="fruits pinapple" src="<?= base_url("assert/fontend/") ?>img/pinapple.svg">
                <img class="fruits strawberry" src="<?= base_url("assert/fontend/") ?>img/strawberry.svg">
                <center>
                    <h1><?= $title; ?></h1>
                </center>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 py-3 ">
              <div class="table-responsive">
                <table class="table table-bordered table-wallet" id="order_details">
                    <thead>
                        <tr>
                            <th><?= $this->lang->line("fn_subscription_sr_no"); ?></th>
                            <th><?= $this->lang->line("fn_tranction_id"); ?></th>
                            <th><?= $this->lang->line("fn_subscription_type"); ?></th>
                            <th><?= $this->lang->line("fn_date_time"); ?></th>
                            <th><?= $this->lang->line("fn_subscription_products"); ?></th>
                            <th><?= $this->lang->line("fn_date_time"); ?></th>
                            <th><?= $this->lang->line("fn_subscription_total"); ?></th>
                            <th><?= $this->lang->line("fn_subscription_amounts"); ?></th>
                            <th><?= $this->lang->line("fn_subscription_sr_add_type"); ?></th>
                            <th><?= $this->lang->line("fn_subscription_sr_add"); ?></th>
                           <th><?= $this->lang->line("fn_subscription_sr_status"); ?></th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($data)) {
                             $i=1;
                            foreach ($data as $t) {
                                $getproduct= json_decode($t->products,true);
                                //print_r($getproduct);
                                $status
                                ?>
                                
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $t->fname ?></td>
                                    <td><?= ($t->type==1) ?"Ala crate" : "subscription" ?></td>
                                    <td><?= date("M/d/Y h:i a", strtotime($t->order_date)) ?></td>
                                    <td><?= implode(",",(array_keys($getproduct))); ?></td>
                                    <td><?= date("M/d/Y h:i a", strtotime($t->delivered_on_day)) ?></td> 
                                    <td><?= $t->total_item ?></td>
                                    <td><?= $t->total_price ?></td>
                                    <td><?= ($t->address_type== 1) ?"home" : (($t->type == 2) ?"work":"other")  ?></td> 
                                    </td>
                                    <td><?= $t->address ?></td>
                                    <td>
                                      <?php
                                      switch ($t->status) {
                                            case 0:
                                                echo "Padding order";
                                                break;
                                            case 1:
                                                echo "on delivery order";
                                                break;
                                            case 2:
                                                echo "Order processing";
                                                break;
                                             default:
                                                   echo "Completed order";
                                            }

                                      ?>
                                  </td>
                                </tr>
                                <?php
                                   $i++;

                            }
                        }
                        ?>
                    </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
</section>
<script>
    $('#order_details').DataTable();
</script>
