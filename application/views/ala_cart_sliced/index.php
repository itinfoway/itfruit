<?php
/**
 * Description of Address
 * https://itinfoway.com
 * @author Admin
 */
?>

<link href="<?= base_url(); ?>assert/fontend/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
<section>
    <div class="container my-container">
        <div class="ala-carte">
            <div class="row ala-part">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <img class="img-responsive fruits" src="<?= base_url(); ?>assert/fontend/img/fruits-1.png">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="ala">
                        <div class="ala-text">
                            <h1><?= $this->lang->line("fn_ala_cart_sliced_head1"); ?></h1>
                            <h2><?= $this->lang->line("fn_ala_cart_sliced_head2"); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <img class="img-responsive fruits" src="<?= base_url(); ?>assert/fontend/img/fruits-2.png">
                </div>
            </div>
        </div>	
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="date-time">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-2" id="orderbox1">
                    <center><img style="height: 80px;" src="<?= base_url(); ?>assert/fontend/img/pinapple.svg"></center>
                    <img class="date-close pointer" src="<?= base_url(); ?>assert/fontend/img/date-close.png">
                    <div class="date-part pointer" data-toggle="modal" data-target="#dateAndTime1" data-date="1" data-itme-value="">
                        <div class="time">
                            <div>
                                <spna class="input-group-addon">
                                    <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/date.png">
                                </spna>
                                <p class="order-date"></p>
                                <p class="order-year"></p>
                            </div>
                            <div>
                                <div class="order">
                                    <div class="text">
                                        <p><?= $this->lang->line("fn_ala_cart_sliced_order"); ?></p>
                                        <p><?= $this->lang->line("fn_ala_cart_sliced_order_1"); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/time.png">
                                <p class="order-time"></p>
                            </div>
                        </div>
                        <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/line.png" width="45%" height="3px">
                        <div class="data-items">
                        </div>
                    </div>
                    <h5 class="pl-3 text-center credit" style="display: none"><span><?= $this->lang->line("fn_ala_cart_sliced_order_total_0"); ?></span> <?= $this->lang->line("fn_ala_cart_sliced_order_credit"); ?></h5>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-2" id="orderbox2">
                    <center><img style="height: 80px;" src="<?= base_url(); ?>assert/fontend/img/grapes.svg"></center>
                    <img class="date-close pointer" src="<?= base_url(); ?>assert/fontend/img/date-close.png">
                    <div class="date-part pointer" data-toggle="modal" data-target="#dateAndTime1" data-date="2" data-itme-value="">
                        <div class="time">
                            <div>
                                <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/date.png">
                                <p class="order-date"></p>
                                <p class="order-year"></p>
                            </div>
                            <div>
                                <div class="order">
                                    <div class="text">
                                        <p><?= $this->lang->line("fn_ala_cart_sliced_order"); ?></p>
                                        <p><?= $this->lang->line("fn_ala_cart_sliced_order_2"); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/time.png">
                                <p class="order-time"></p>
                            </div>
                        </div>
                        <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/line.png" width="45%" height="3px">
                        <div class="data-items">
                        </div>
                    </div>
                    <h5 class="pl-3 text-center credit" style="display: none"><span><?= $this->lang->line("fn_ala_cart_sliced_order_total_0"); ?></span> <?= $this->lang->line("fn_ala_cart_sliced_order_credit"); ?></h5>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-2" id="orderbox3">
                    <center><img style="height: 80px;" src="<?= base_url(); ?>assert/fontend/img/berry.svg"></center>
                    <img class="date-close pointer" src="<?= base_url(); ?>assert/fontend/img/date-close.png">
                    <div class="date-part pointer" data-toggle="modal" data-target="#dateAndTime1" data-date="3" data-itme-value="">
                        <div class="time">
                            <div>
                                <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/date.png">
                                <p class="order-date"></p>
                                <p class="order-year"></p>
                            </div>
                            <div>
                                <div class="order">
                                    <div class="text">
                                        <p><?= $this->lang->line("fn_ala_cart_sliced_order"); ?></p>
                                        <p><?= $this->lang->line("fn_ala_cart_sliced_order_3"); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/time.png">
                                <p class="order-time"></p>
                            </div>
                        </div>
                        <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/line.png" width="45%" height="3px">
                        <div class="data-items">
                        </div>
                    </div>
                    <h5 class="pl-3 text-center credit" style="display: none"><span><?= $this->lang->line("fn_ala_cart_sliced_order_total_0"); ?></span> <?= $this->lang->line("fn_ala_cart_sliced_order_credit"); ?></h5>
                </div>
                <div class=" col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-2" id="orderbox4">
                    <center><img style="height: 80px;" src="<?= base_url(); ?>assert/fontend/img/orange.svg"></center>
                    <img class="date-close pointer" src="<?= base_url(); ?>assert/fontend/img/date-close.png">
                    <div class="date-part pointer" data-toggle="modal" data-target="#dateAndTime1" data-date="4" data-itme-value="">
                        <div class="time">
                            <div>
                                <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/date.png">
                                <p class="order-date"></p>
                                <p class="order-year"></p>
                            </div>
                            <div>
                                <div class="order">
                                    <div class="text">
                                        <p><?= $this->lang->line("fn_ala_cart_sliced_order"); ?></p>
                                        <p><?= $this->lang->line("fn_ala_cart_sliced_order_4"); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/time.png">
                                <p class="order-time"></p>
                            </div>
                        </div>
                        <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/line.png" width="45%" height="3px">
                        <div class="data-items">
                        </div>
                    </div>
                    <h5 class="pl-3 text-center credit" style="display: none"><span><?= $this->lang->line("fn_ala_cart_sliced_order_total_0"); ?></span> <?= $this->lang->line("fn_ala_cart_sliced_order_credit"); ?></h5>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-2" id="orderbox5">
                    <center><img style="height: 80px;" src="<?= base_url(); ?>assert/fontend/img/sitafal.svg"></center>
                    <img class="date-close pointer" src="<?= base_url(); ?>assert/fontend/img/date-close.png">
                    <div class="date-part pointer" data-toggle="modal" data-target="#dateAndTime1" data-date="5" data-itme-value="">
                        <div class="time">
                            <div>
                                <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/date.png">
                                <p class="order-date"></p>
                                <p class="order-year"></p>
                            </div>
                            <div>
                                <div class="order">
                                    <div class="text">
                                        <p><?= $this->lang->line("fn_ala_cart_sliced_order"); ?></p>
                                        <p><?= $this->lang->line("fn_ala_cart_sliced_order_5"); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/time.png">
                                <p class="order-time"></p>
                            </div>
                        </div>
                        <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/line.png" width="45%" height="3px">
                        <div class="data-items">
                        </div>
                    </div>
                    <h5 class="pl-3 text-center credit" style="display: none"><span><?= $this->lang->line("fn_ala_cart_sliced_order_total_0"); ?> </span> <?= $this->lang->line("fn_ala_cart_sliced_order_credit"); ?></h5>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <center><img style="height: 80px;" src="<?= base_url(); ?>assert/fontend/img/banana.svg"></center>
                    <div class="totel">
                        <p><?= $this->lang->line("fn_ala_cart_sliced_order_total"); ?> <span id="creditTotal"><?= $this->lang->line("fn_ala_cart_sliced_order_total_0"); ?></span> <?= $this->lang->line("fn_ala_cart_sliced_order_credit"); ?></p>
                    </div>
                    <a href="<?= base_url("ala-cart-sliced/checkout"); ?>" id="checkoutBtn" class="btn disabled" style="display: block;">
                        <div class="totel">
                            <p><?= $this->lang->line("fn_ala_cart_sliced_order_checkout"); ?></p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Modal -->
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
                    <label><?= $this->lang->line("fn_ala_cart_sliced_order_select_date"); ?></label>
                    <input class="form-control form_datetime" data-date-format="dd M yyyy" data-date="<?= date('Y-m-d', strtotime(date('Y-m-d') . " +1 days")); ?>" size="16" type="text" value="" data-link-field="orderbox" placeholder="ex. <?= date("d M Y") ?>" readonly>
                    <input  type="hidden" id="orderbox" name="orderbox" >
                </div>
                <div class="form-group col-8 offset-2" style="display:none">
                    <label><?= $this->lang->line("fn_ala_cart_sliced_order_select_time"); ?></label>
                    <select class="form-control" id="gettime">
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="savedate" class="btn btn-primary"  data-dismiss="modal" aria-label="Close"><?= $this->lang->line("fn_ala_cart_sliced_order_save"); ?></button>
            </div>
        </div>
    </div>
</div>


<section>
    <div class="random-part">
        <div class="container">
            <h1><?= $this->lang->line("fn_ala_cart_sliced_order_box"); ?></h1>
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
                        <img class="img-responsive" src="<?= base_url(); ?>assert/products/ala_carte/<?= $product->img; ?>" title="<?= $product->name ?>"  rel="schema:image" resource="<?= base_url(); ?>assert/products/ala_carte/<?= $product->img ?>">
                        <center>
                            <b class="product-credit"><span><?= $product->min_credit ?></span> <?= $this->lang->line("fn_ala_cart_sliced_order_credit"); ?></b><br>
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
                        <div class="countr" data-value="<?= urlencode(base64_encode($product->id)) ?>"  property="schema:name" content="<?= $product->name ?>" data-credit="<?= $product->min_credit ?>">
                            <img class="img-responsive minus pointer" src="<?= base_url(); ?>assert/fontend/img/random-minus.png">
                            <span>0</span>
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
<script src="<?= base_url(); ?>assert/fontend/js/bootstrap-datetimepicker.min.js"></script>
<script>
    var error_order_carte_not_set = "<?= $this->lang->line("fn_error_order_carte_not_set"); ?>";
    var error_date_time_allredyset = "<?= $this->lang->line("fn_error_date_time_allredyset"); ?>";
    var error_today_only_for_max_itme = "<?= $this->lang->line("fn_error_today_only_for_max_itme"); ?>";
    $('.form_datetime').datetimepicker({
        daysOfWeekDisabled: "6,0",
        weekStart: 1,
        todayBtn: 0,
        autoclose: 1,
        startDate: '<?= date('Y-m-d', strtotime(date('Y-m-d') . " +1 days")); ?>',
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        rightArrow: 'far fa-arrow-alt-circle-right'
    });
    function getTime() {
        var date = $("#orderbox").val();
        return $.ajax({
            url: "<?= base_url("ala-cart-sliced/gettime") ?>",
            type: 'Post',
            data: {
<?= $this->security->get_csrf_token_name(); ?>: getCookie('<?= $this->security->get_csrf_token_name(); ?>'),
                date: date
            },
            dataType: "json",
            async: false,
            success: function (respText) {
                $("#gettime").html("");
                if (Object.keys(respText).length > 0) {
                    for (id in respText.time) {
                        $("#gettime").append("<option value='" + id + "' data-item='" + respText.time[id].min_item + "'>" + respText.time[id].time + "</option>")
                    }
                    $("#gettime").parent("div").show();
                } else {
                    toastr.error('<?= $this->lang->line("fn_error_today_order_stock") ?>');
                    $("#gettime").parent("div").hide();
                }
            }
        });
    }

</script>
<script src="<?= base_url() ?>assert/fontend/js/ala-carte.js"></script>