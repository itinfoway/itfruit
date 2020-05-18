<?php
/**
 * Description of view
 * https://itinfoway.com
 * @author Admin
 */
foreach ($order_details as $od) {
    ?>
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements disabled -->
            <div class="card card-success card-outline">
                <div class="card-header">
                    <?php
                    if ($od->type == 1) {
                        ?>
                        <h3 class="card-title"># <?= "ALACARTE" . str_replace("-", "", $od->order_date) . str_pad($od->id, 4, '0', STR_PAD_LEFT) ?></h3>
                        <?php
                    } else {
                        ?>
                        <h3 class="card-title"># <?= "SUBSCRIPTION" . str_replace("-", "", $od->order_date) . str_pad($od->id, 4, '0', STR_PAD_LEFT) ?></h3>
                        <?php
                    }
                    ?>
                    <div class="card-tools">
                        <?= date("d M,Y", strtotime($od->order_date)) ?>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row justify-content-between">
                        <div class="col-3">
                            <b>Delivered On Date :</b><?= date("d M,Y", strtotime($od->delivered_on_date)) ?>
                        </div>

                        <div class="col-3">
                            <?php
                            if ($od->type == 1) {
                                ?>
                                <b>Delivered On Time :</b><?= $od->delivered_on_time; ?><br>
                                <?php
                            }
                            ?>
                            <b>ADDRESS</b><br>
                            <p><?= $od->address; ?></p>
                            <a href="http://maps.google.com/?q=<?=$od->lat_lng?>" target="_blanck">map</a>
                        </div>
                    </div>
                    <div class="row">
                        <table class="table table-bordered">
                            <tr>
                                <th>Name</th> 
                                <th>Items</th> 
                                <th>Fruits Name</th> 
                                <?php
                                if ($od->type == 2) {
                                    ?>
                                    <th>Price</th> 
                                    <th>Total Price</th> 
                                    <?php
                                } else {
                                    ?>
                                    <th>Credit</th> 
                                    <th>Total Credit</th>
                                    <?php
                                }
                                ?>
                            </tr>
                            <?php
                            foreach ($order_item as $oi) {
                                ?>
                                <tr>
                                    <td><?= $oi->name ?></td>
                                    <td><?= $oi->items ?></td>
                                    <td>
                                        <?= implode(",",json_decode($oi->fruits_name,TRUE))?>
                                    </td>
                                    <?php
                                    if ($od->type == 2) {
                                        ?>
                                        <td><?= $oi->price ?></td>
                                        <td><?= $oi->total_price ?></td>
                                        <?php
                                    } else {
                                        ?>
                                        <td><?= $oi->credit ?></td>
                                        <td><?= $oi->total_credit ?></td>
                                        <?php
                                    }
                                    ?>
                                </tr>
                                <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>