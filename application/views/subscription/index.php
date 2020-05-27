<link href="<?= base_url(); ?>assert/fontend/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
<section>
    <div class="container my-container steps">
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <div class="step step-1">
                    <div class="step-text">
                        <h6><?= $this->lang->line("fn_subscription_no1"); ?></h6>
                        <h6><?= $this->lang->line("fn_subscription_no1_line_1"); ?></h6>
                        <h6><?= $this->lang->line("fn_subscription_no1_line_2"); ?></h6>
                    </div>
                </div>
            </div>
            <div class="arrow">
                <img class="img-responsive" src="<?= base_url() ?>assert/fontend/img/arrow-1.png">
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="step step-2">
                    <div class="step-text">
                        <h6><?= $this->lang->line("fn_subscription_no2"); ?></h6>
                        <h6><?= $this->lang->line("fn_subscription_no2_line_1"); ?></h6>
                        <h6><?= $this->lang->line("fn_subscription_no2_line_2"); ?></h6>
                    </div>
                </div>
            </div>
            <div class="arrow">
                <img class="img-responsive" src="<?= base_url() ?>assert/fontend/img/arrow-2.png">
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="step step-3">
                    <div class="step-text">
                        <h6><?= $this->lang->line("fn_subscription_no3"); ?></h6>
                        <h6><?= $this->lang->line("fn_subscription_no3_line_1"); ?></h6>
                        <h6><?= $this->lang->line("fn_subscription_no3_line_2"); ?></h6>
                    </div>
                </div>
            </div>
            <div class="arrow">
                <img class="img-responsive" src="<?= base_url() ?>assert/fontend/img/arrow-3.png">
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="step step-4">
                    <div class="step-text">
                        <h6><?= $this->lang->line("fn_subscription_no4"); ?></h6>
                        <h6><?= $this->lang->line("fn_subscription_no4_line_1"); ?></h6>
                        
                        <h6></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="discription">
        <div class="container my-container">
            <div class="row">
                <div class="col-sm-12 col-md-10">
                    <p><?= $this->lang->line("fn_subscription_des_line1"); ?></p>
                    <p> <?= $this->lang->line("fn_subscription_des_line2"); ?></p>
                    <p><?= $this->lang->line("fn_subscription_des_line3"); ?> </p>
                </div>
                <div class="col-sm-12 col-md-2">
                    <img class="img-responsive" src="<?= base_url() ?>assert/fontend/img/strawberry.svg">
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="days">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="box box-1 pointer" data-daysof="5d">
                        <img src="<?= base_url() ?>assert/fontend/img/grapes.svg" >
                        <h6><?= $this->lang->line("fn_subscription_day"); ?></h6>
                        <h6><span>(</span><?= $this->lang->line("days_name")[1]; ?> <span> -</span><?= $this->lang->line("days_name")[5]; ?><span>)</span></h6>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="box box-2 pointer" data-daysof="2d">
                        <img src="<?= base_url() ?>assert/fontend/img/berry.svg" >
                        <h6><?= $this->lang->line("fn_subscription_twice_day"); ?></h6>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="box box-3 pointer" data-daysof="1d">
                        <img src="<?= base_url() ?>assert/fontend/img/pinapple.svg" >
                        <h6><?= $this->lang->line("fn_subscription_once_week"); ?></h6>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="box box-4 pointer" data-daysof="1d2w">
                        <img src="<?= base_url() ?>assert/fontend/img/orange.svg" >
                        <h6><?= $this->lang->line("fn_subscription_once_every"); ?></h6>
                        <h6><?= $this->lang->line("fn_subscription_once_every_line"); ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="week">
        <center>
            <ul>
                <li class="pointer">
                    <div class="week-days circ mon" data-day="1">
                        <p><?= $this->lang->line("days_name")[1]; ?></p>
                    </div>
                </li>
                <li class="pointer">
                    <div class="week-days circ tue" data-day="2">
                        <p><?= $this->lang->line("days_name")[2]; ?></p>
                    </div>
                </li>
                <li class="pointer">
                    <div class="week-days circ wed" data-day="3">
                        <p><?= $this->lang->line("days_name")[3]; ?></p>
                    </div>
                </li>
                <li class="pointer">
                    <div class="week-days circ thu" data-day="4">
                        <p><?= $this->lang->line("days_name")[4]; ?></p>
                    </div>
                </li>
                <li class="pointer">
                    <div class="week-days circ fri" data-day="5">
                        <p><?= $this->lang->line("days_name")[5]; ?></p>
                    </div>
                </li>
                <li>
                    <div class="circ sat">
                        <p><?= $this->lang->line("days_name")[6]; ?></p>
                    </div>
                </li>
                <li>
                    <div class="circ sun">
                        <p><?= $this->lang->line("days_name")[7]; ?></p>
                    </div>
                </li>
                <div class="clearfix"></div>
            </ul>
        </center>
    </div>
</section>
<section>
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-3 pointer" data-toggle="modal" data-target="#dateAndTime1">
                <button class="btn btn-success btn-block"><h5><img src="<?= base_url(); ?>assert/fontend/img/date.png" /> <?= $this->lang->line("fn_duration"); ?></h5></button>         
                <h5 id="SetDate" class="text-red"></h5>
            </div>
        </div>
</section>
<section>
    <div class="random-part">
        <div class="container">
            <h1><?= $this->lang->line("fn_subscription_random"); ?></h1>
            <?php
            if (!empty($products)) {
                $row = 0;
                foreach ($products as $product) {
                    if ($row == 0) {
                        echo'<div class="row">';
                    }
                    $row++;
                    ?>
                    <div class="col-sm-6 mb-5 products" typeof="schema:Product">
                        <center><h2 class="carte-title"><?= $product->name ?></h2></center>
                        <img class="img-responsive" src="<?= base_url(); ?>assert/products/subscription/<?= $product->img; ?>" title="<?= $product->name ?>"  rel="schema:image" resource="<?= base_url(); ?>assert/products/ala_carte/<?= $product->img ?>">
                        <center>
                            <b class="set5d set-display"><span><?= $product->price ?></span><?= $this->lang->line("fn_subscription_sgd"); ?></b>
                            <b class="set2d set-display"><span><?= $product->price1 ?></span><?= $this->lang->line("fn_subscription_sgd"); ?></b>
                            <b class="set1d set-display"><span><?= $product->price2 ?></span><?= $this->lang->line("fn_subscription_sgd"); ?></b>
                            <b class="set1d2w set-display"><span><?= $product->price3 ?></span><?= $this->lang->line("fn_subscription_sgd"); ?></b>
                            <br>
                            <div class="text">
                                <div class="row" property="schema:description" content="<?= implode(",", $product->fruit); ?>">
                                    <?php
                                    $fruit = $product->fruit;
                                    $count = count($fruit);
                                    $count_d = round($count / 2);
                                    ?>
                                    <div class="col-xs-6">
                                        <ul class="left-part">
                                            <?php
                                            for ($cou = 0; $cou < $count_d; $cou++) {
                                                ?>
                                                <li><?= $fruit[$cou] ?></li>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>

                                    <div class="col-xs-6">
                                        <ul class="right-part">
                                            <?php
                                            for ($cou = $count_d; $cou < $count; $cou++) {
                                                ?>
                                                <li><?= $fruit[$cou] ?></li>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </center>
                        <div class="countr" data-value="<?= urlencode(base64_encode($product->id)) ?>"  property="schema:name" content="<?= $product->name ?>" data-price5d="<?= $product->price ?>" data-price2d="<?= $product->price1 ?>" data-price1d="<?= $product->price2 ?>" data-price1d2w="<?= $product->price3 ?>">
                            <img class="img-responsive minus pointer" src="<?= base_url(); ?>assert/fontend/img/random-minus.png">
                            <span><?= $this->lang->line("fn_subscription_0"); ?></span>
                            <img class="img-responsive plus pointer" src="<?= base_url(); ?>assert/fontend/img/random-add.png">
                        </div>
                    </div>
                    <?php
                    if ($row == 2) {
                        echo'</div>';
                        $row = 0;
                    }
                }
                if (count($products) % 2 != 0) {
                    echo'</div>';
                }
            }
            ?>   

        </div>
    </div>
</section>
<section>
    <div class="check-out-btn">
        <img class="img-responsive" src="<?= base_url() ?>assert/fontend/img/sitafal.svg">
        <button id="checkout"><?= $this->lang->line("fn_subscription_check_out"); ?></button>
        <img class="img-responsive" src="<?= base_url() ?>assert/fontend/img/banana.svg">
    </div>
</section>
<div class="modal fade" id="dateAndTime1" tabindex="-1" role="dialog" aria-labelledby="dateAndTime1Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="<?= base_url() ?>assert/fontend/img/date-close.png"/>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group col-8 offset-2">
                    <label><?= $this->lang->line("fn_subscription_date"); ?></label>
                    <input class="form-control" id="from_datetime" data-date-format="dd M yyyy" data-date="<?= date('Y-m-d', strtotime(date('Y-m-d') . " +1 days")); ?>" size="16" type="text" value="" data-link-field="thisfrom_datetime" placeholder="ex. <?= date("d M Y") ?>" readonly>
                    <input  type="hidden" id="thisfrom_datetime" name="orderbox" >
                </div>
                <div class="form-group col-8 offset-2">
                    <label><?= $this->lang->line("fn_subscription_date_form"); ?></label>
                    <input class="form-control" id="to_datetime" data-date-format="dd M yyyy" data-date="<?= date('Y-m-d', strtotime(date('Y-m-d') . " +1 days")); ?>" size="16" type="text" value="" data-link-field="thisto_datetime" placeholder="ex. <?= date("d M Y") ?>" readonly>
                    <input  type="hidden" id="thisto_datetime" name="orderbox" >
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" id="savedate" class="btn btn-primary"  data-dismiss="modal" aria-label="Close"><?= $this->lang->line("fn_subscription_save"); ?></button>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url(); ?>assert/fontend/js/bootstrap-datetimepicker.min.js"></script>
<script>
    var fromdate = $('#from_datetime').datetimepicker({
        daysOfWeekDisabled: "6,0",
        weekStart: 1,
        autoclose: 1,
        startDate: '<?= date('Y-m-d', strtotime(date('Y-m-d') . " +1 days")); ?>',
        todayHighlight: 1,
        startView: 2,
        minView: 2,
    });
    var todate = $('#to_datetime').datetimepicker({
        daysOfWeekDisabled: "6,0",
        weekStart: 1,
        autoclose: 1,
        startDate: '<?= date('Y-m-d', strtotime(date('Y-m-d') . " +9 days")); ?>',
        todayHighlight: 1,
        startView: 2,
        minView: 2,
    });
    $('#from_datetime').on("change", function () {
        var d = new Date($("#thisfrom_datetime").val());
        var j = new Date();
        if ($(".box-4").hasClass("active")) {
            j.setDate(d.getDate() + 28);
            console.log("hi");
        } else {
            console.log("else");
            j.setDate(d.getDate() + 7);
        }
        $("#thisto_datetime").val(j.toISOString().split('T')[0]);
        todate.datetimepicker("setStartDate", j.toISOString().split('T')[0]);
    });
</script>
<script>
    var error_1stblock = '<?= $this->lang->line("fn_error_type_of_plan") ?>';
    var error_2stblock = '<?= $this->lang->line("fn_error_select_days") ?>';
    var error_2stblock_2day = '<?= $this->lang->line("fn_error_select_days_2") ?>';
    var error_2stblock_1day = '<?= $this->lang->line("fn_error_select_days_1") ?>';
    var error_select_date = '<?= $this->lang->line("fn_error_select_date") ?>';
    var fn_error_add_product = '<?= $this->lang->line("fn_error_add_product") ?>';
    var checkout_url = '<?= base_url(); ?>subscription/checkout';

</script>
<script src="<?= base_url() ?>assert/fontend/js/subsciption.js">
</script>