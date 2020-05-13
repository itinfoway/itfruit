<?php
/**
 * Description of checkout
 * https://itinfoway.com
 * @author Admin
 */
?>
<link href="<?= base_url(); ?>assert/fontend/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>  
<script type="text/javascript">
    //set your publishable key
    Stripe.setPublishableKey('<?= $pubkey ?>');

    //callback to handle the response from stripe
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('#payBtn').removeAttr("disabled");
            $('#payment-errors').addClass('alert alert-danger');
            $("#payment-errors").html(response.error.message);
        } else {
            var form$ = $("#paymentFrm");
            console.log(response);
            var token = response['id'];
            var brand = response["card"]['brand'];
            form$.find(".pay-carte-lab").text(brand);
            form$.find(".pay-carte-lab").show();
            form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
            form$.get(0).submit();
        }
    }
    $(document).ready(function () {
        $("#paymentFrm").submit(function (event) {
            $('#payBtn').attr("disabled", "disabled");
            Stripe.createToken({
                number: $('#card_num').val(),
                cvc: $('#card-cvc').val(),
                exp_month: $('#card-expiry-month').val(),
                exp_year: $('#card-expiry-year').val()
            }, stripeResponseHandler);
            return false;
        });
    });
</script>
<section>
    <div class="container my-container steps">
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <div class="step step-1">
                    <div class="step-text">
                        <h6>1</h6>
                        <h6>NUTRITICON</h6>
                        <h6>PACKS</h6>
                    </div>
                </div>
            </div>
            <div class="arrow">
                <img class="img-responsive" src="<?= base_url() ?>assert/fontend/img/arrow-1.png">
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="step step-2">
                    <div class="step-text">
                        <h6>2</h6>
                        <h6>YOUR</h6>
                        <h6>ORDER</h6>
                    </div>
                </div>
            </div>
            <div class="arrow">
                <img class="img-responsive" src="<?= base_url() ?>assert/fontend/img/arrow-2.png">
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="step step-3">
                    <div class="step-text">
                        <h6>3</h6>
                        <h6>DELIVERY</h6>
                        <h6>INFORMATION</h6>
                    </div>
                </div>
            </div>
            <div class="arrow">
                <img class="img-responsive" src="<?= base_url() ?>assert/fontend/img/arrow-3.png">
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="step step-4">
                    <div class="step-text">
                        <h6>4</h6>
                        <h6>CHECKOUT</h6>
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
                    <p>*short discription of subscription.</p>
                    <p> - fruit boxes will be  selected at random for the customer at designation date and time.</p>
                    <p> - please find our current fruit boxes. kindly note these will change with the season as well.</p>
                </div>
                <div class="col-sm-12 col-md-2">
                    <img class="img-responsive" src="<?= base_url() ?>assert/fontend/img/strawberry.svg">
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="remark">
        <div class="container my-container">
            <p><span>*</span> PLEASE CHANGE YOGURT TO DARK CHOCOLATE SAUCE</p>
            <p><span>*</span> WE WILL TRY OUR BEST TO ACCOMMODATE, OTHERWIAE OUR CUATOMER SERVICE WILL GIVE YOU A CALL.</p>
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
                        <h6>everyday</h6>
                        <h6><span>(</span> Mon<span> -</span> Fri <span>)</span></h6>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="box box-2 pointer" data-daysof="2d">
                        <img src="<?= base_url() ?>assert/fontend/img/berry.svg" >
                        <h6>twice a day</h6>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="box box-3 pointer" data-daysof="1d">
                        <img src="<?= base_url() ?>assert/fontend/img/pinapple.svg" >
                        <h6>once a week</h6>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="box box-4 pointer" data-daysof="1d2w">
                        <img src="<?= base_url() ?>assert/fontend/img/orange.svg" >
                        <h6>once a every</h6>
                        <h6>2 week</h6>
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
                        <p>mon</p>
                    </div>
                </li>
                <li class="pointer">
                    <div class="week-days circ tue" data-day="2">
                        <p>tue</p>
                    </div>
                </li>
                <li class="pointer">
                    <div class="week-days circ wed" data-day="3">
                        <p>wed</p>
                    </div>
                </li>
                <li class="pointer">
                    <div class="week-days circ thu" data-day="4">
                        <p>thu</p>
                    </div>
                </li>
                <li class="pointer">
                    <div class="week-days circ fri" data-day="5">
                        <p>fri</p>
                    </div>
                </li>
                <li>
                    <div class="circ sat">
                        <p>sat</p>
                    </div>
                </li>
                <li>
                    <div class="circ sun">
                        <p>sun</p>
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
            <div class="col-md-3 pointer">
                <button class="btn btn-success btn-block"><h5><img src="<?= base_url(); ?>assert/fontend/img/date.png" /> <?= $this->lang->line("fn_duration"); ?></h5></button>         
                <h5 id="SetDate" class="text-red"></h5>
            </div>
        </div>
</section>
<div class="modal fade" id="dateAndTime1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="<?= base_url() ?>assert/fontend/img/date-close.png"/>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group col-8 offset-2">
                    <label>Select Date</label>
                    <input class="form-control" id="from_datetime" data-date-format="dd M yyyy" data-date="<?= date('Y-m-d', strtotime(date('Y-m-d') . " +1 days")); ?>" size="16" type="text" value="" data-link-field="thisfrom_datetime" readonly>
                    <input  type="hidden" id="thisfrom_datetime" name="orderbox" >
                </div>
                <div class="form-group col-8 offset-2">
                    <label>Select Date</label>
                    <input class="form-control" id="to_datetime" data-date-format="dd M yyyy" data-date="<?= date('Y-m-d', strtotime(date('Y-m-d') . " +1 days")); ?>" size="16" type="text" value="" data-link-field="thisto_datetime" readonly>
                    <input  type="hidden" id="thisto_datetime" name="orderbox" >
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" id="savedate" class="btn btn-primary"  data-dismiss="modal" aria-label="Close">Save</button>
            </div>
        </div>
    </div>
</div>


<section>
    <div class="container my-container">
        <div class="bill-pay">
            <div class="row">
                <div class="col-sm-6">
                    <div class="billing">
                        <img class="fruits strawberry" src="<?= base_url() ?>assert/fontend/img/strawberry.svg">
                        <img class="fruits sitafal" src="<?= base_url() ?>assert/fontend/img/sitafal.svg">
                        <h4>Select Address</h4>
                        <div class="add-address">
                            <a href="<?= base_url("address/add"); ?>">
                                <center>
                                    <h1>Add New Address</h1>
                                </center>
                            </a>
                        </div>
                        <div class="add-part">
                            <div class="row">
                                <?php
                                foreach ($address as $d) {
                                    ?>
                                    <div class="col-sm-12">
                                        <div class="text-part">
                                            <div class="row">

                                                <?php
                                                if ($d->type == 1) {
                                                    ?>
                                                    <div class="col-xs-3">
                                                        <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/home.png">
                                                    </div>
                                                    <div class="col-xs-6`">
                                                        <p>Home</p>
                                                    </div>
                                                    <?php
                                                } else if ($d->type == 2) {
                                                    ?>
                                                    <div class="col-xs-3">
                                                        <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/office.png">
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <p>Work</p>
                                                    </div>
                                                    <?php
                                                } else if ($d->type == 3) {
                                                    ?>
                                                    <div class="col-xs-3">
                                                        <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/location.svg">
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <p>Other</p>
                                                    </div>
                                                    <?php
                                                }
                                                ?>
                                                <div class="col-xs-3">
                                                    <button type="button" data-value="<?= urlencode(base64_encode($d->id)); ?>" class="btn btn-default select">select</button>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="location">
                                                        <p><?= $d->address1 ?></p>
                                                        <p><?= $d->address2 ?></p>
                                                        <p><?= $d->city ?>-<?= $d->postalcode ?>, <?= $d->state ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="buttons">
                                                    <div class="col-xs-6">
                                                        <a href="<?= base_url("address/edit/" . urlencode(base64_encode($d->id))); ?>"><button class="edit-btn">EDIT</button></a>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <a href="<?= base_url("address/delete/" . urlencode(base64_encode($d->id))); ?>"><button class="remove-btn">REMOVE</button></a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="billing payment-part"><grammarly-extension class="_1KJtL" style="position: absolute; top: 0px; left: 0px; pointer-events: none;"><div data-grammarly-part="highlights" class="u_fNK" style="position: absolute; top: 0px; left: 0px;"><div style="box-sizing: content-box; top: 465px; left: 72px; width: 530.5px; height: 190px; position: relative; pointer-events: none; overflow: hidden; border: 0px; border-radius: 0px; padding: 0px; margin: 0px;"><div style="position: absolute; top: 0px; left: 0px;"><div style="height: 918px; width: 1897px;"><div></div><div></div></div></div></div></div><div data-grammarly-part="button" class="u_fNK" style="position: absolute; top: 0px; left: 0px;"><div style="box-sizing: content-box; top: 465px; left: 72px; width: 530.5px; height: 190px; position: relative; pointer-events: none; overflow: hidden; border: 0px; border-radius: 0px; padding: 0px; margin: 0px;"><div style="position: absolute; transform: translate(-100%, -100%); top: 182px; left: 492.5px; width: auto; height: auto; pointer-events: all;"><div style="flex-direction: row; display: flex; pointer-events: auto;"><div style="position: relative;"></div><div><div class="_5WizN _1QzSN"><div class="_3YmQx"><div title="Protected by Grammarly" class="_3QdKe">&nbsp;</div></div></div></div></div></div></div></div></grammarly-extension>
                        <img class="fruits pinapple" src="<?= base_url() ?>assert/fontend/img/pinapple.svg">
                        <img class="fruits orange" src="<?= base_url() ?>assert/fontend/img/orange.svg">
                        <h4>PAYMENT METHOD</h4>
                        <center><img class="img-responsive" src="<?= base_url() ?>assert/fontend/img/line.png" width="50%" height="3px"></center>
                        <h1>PLEASE SELECT THE PREFERRED PAYMENT METHOD TO USE ON THIS ORDER.</h1>

                        <div class="rdo-btn">
                            <div class="rdo">
                                <input type="radio" >
                                <label for="Radio2"></label>
                                <p><?= $this->lang->line("fn_stripe") ?></p>
                            </div>
                        </div>
                        <div class="comment">
                            <p>ADD COMMENTS ABOUS YOUR ORDER</p>
                            <p>( FOR COMMENTS ABOUT FOOD OR PAID MVP DELIVERY TIMING SLOTS ONLY )</p>
                            <textarea spellcheck="false" name="comment" id="commentInput"></textarea>
                        </div>
                    </div>
                    <div class="c-out">
                        <button type="button" data-toggle="modal" data-target="#addToCarte">CHECKOUT</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="addToCarte" tabindex="-1" role="dialog" aria-labelledby="addToCarteLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="<?= base_url() ?>assert/fontend/img/date-close.png"/>
                </button>
            </div>

            <div class="modal-body">
                <?php
                if (isset($card)) {
                    ?>
                    <div class="row">
                        <div class="col-8 offset-1">
                            <div class="form-control-pay">
                                Add New Card
                            </div>
                        </div>
                        <div class="col-2">
                            <label class="castum-radio">
                                <input type="checkbox" id="newCard">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <?= form_open(null, ["class" => "mycard"]) ?>
                    <input type="hidden" name="comment" class="commentInput">
                    <input type="hidden" name="address" class="addresInput">
                    <?php
                    $count_card = count($card);
                    $tempC = 0;
                    foreach ($card as $c) {
                        $tempC++;
                        ?>
                        <div class="row">
                            <div class="col-8 offset-1">
                                <div class="form-control-pay">
                                    <?= $c->exp_month ?>/<?= $c->exp_year ?> : xxx xxx <?= $c->last4 ?> 
                                </div>
                                <div class="pay-carte-lab ml-5" >
                                    <?= $c->brand ?>
                                </div>
                            </div>
                            <div class="col-2">
                                <label class="castum-radio">
                                    <input type="radio" name="stecard" value="<?= $c->id ?>"<?= ($tempC == $count_card) ? "checked" : "" ?> >
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="col-10 offset-1">
                        <button type="submit" id="payBtn" class="btn btn-primary btn-block">Submit Payment</button>
                    </div>
                    <?= form_close() ?>
                    <?php
                }
                ?>
                <?= form_open(null, ["id" => "paymentFrm"]) ?>
                <input type="hidden" name="address" class="addresInput">
                <input type="hidden" name="comment" class="commentInput">
                <div class="row" <?= (isset($card)) ? 'style="display:none"' : "" ?>>
                    <div class="col-10 offset-1">
                        <div id="payment-errors"></div>
                        <div class="row">
                            <div class="form-group col-12 mb-3">
                                <input type="number" name="card_num" data-validation="number,length" data-validation-length="max16" id="card_num" class="form-control form-control-pay" placeholder="Card Number" autocomplete="off" value="" required>
                                <div class="pay-carte-lab" style="display: none">
                                </div>
                            </div>
                            <div class="form-group col-4">
                                <input type="text"  data-validation="number,length" data-validation-length="max2" maxlength="2" class="form-control form-control-pay" id="card-expiry-month" placeholder="MM" value="" required>
                            </div>
                            <div class="form-group col-4">
                                <input type="text"  data-validation="number,length" data-validation-length="max4" class="form-control form-control-pay" maxlength="4" id="card-expiry-year" placeholder="YYYY" required="" value="">
                            </div>

                            <div class="form-group col-4">
                                <input type="text" data-validation="number,length" data-validation-length="max3" id="card-cvc" maxlength="3" class="form-control form-control-pay" autocomplete="off" placeholder="CVC" value="" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-10 offset-1">
                        <button type="submit" id="payBtn" class="btn btn-primary btn-block">Submit Payment</button>
                    </div>
                </div>
            </div>
            <?= form_close() ?> 
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
        j.setDate(d.getDate() + 7);
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
    var btn_added = '<?= $this->lang->line("btn_added") ?>';
    var btn_add = '<?= $this->lang->line("btn_add") ?>';
</script>
<script>
    var fruitData = {};
    function setFruit(type) {
        $(".fruit-data").text(btn_add);
        for (i in fruitData[type]) {
            $(".fruit-data[data-fruit='" + fruitData[type][i] + "'][data-type='" + type + "']").text(btn_added);
        }
    }
    $(document).on("click", ".fruit-remove", function () {
        var fruitid = $(this).parent("div").find(".fruit-data").attr("data-fruit");
        var fruittype = $(this).parent("div").find(".fruit-data").attr("data-type");
        for (i in fruitData[fruittype]) {
            if (fruitid == fruitData[fruittype][i]) {
                delete fruitData[fruittype][i];
            }
        }
        setFruit(fruittype);
        $(this).parent("div").find(".fruit-data").text(btn_add);
        setCookie("fruit", JSON.stringify(fruitData));
    });

    $(document).on("click", ".fruit-data", function () {
        var fruitid = $(this).attr("data-fruit");
        var fruittype = $(this).attr("data-type");
        if (fruitData.hasOwnProperty(fruittype)) {
            fruitData[fruittype][fruitData[fruittype].length] = fruitid;
        } else {
            fruitData[fruittype] = [];
            fruitData[fruittype][0] = fruitid;
        }
        $(this).text(btn_added);
        setCookie("fruit", JSON.stringify(fruitData));
    });
    $(document).on("click", ".fruit-set", function () {
        $(".fruit-set").removeClass("active");
        $(this).addClass("active");
        $(".fev-btn").attr("data-type", $(this).data("set"));
        setFruit($(this).data("set"));
    });
    $(document).ready(function () {
        if (getCookie("fruit") != "") {
            fruitData = JSON.parse(getCookie("fruit"));
        }
        setFruit(1);
        $(".fruit-set").first().addClass("active");
    })
</script>
<script src="<?= base_url() ?>assert/fontend/js/subsciption.js"></script>
<script>
    $(document).ready(function () {
        $(".billing").find(".select:first").click();
    });

    $(document).on("keyup", "#commentInput", function () {
        $(".commentInput").val($(this).val());
    });
    $(document).on("click", ".select", function () {
        var data = $(this).data("value");
        $(".billing").find(".select").removeClass("active");
        $(this).addClass("active");
        $(".addresInput").val(data);
    });
    $(document).on("click", "#newCard", function () {
        if ($(this).is(":checked")) {
            $("#paymentFrm").find(".row").show();
            $(".mycard").hide();
        } else {
            $(".mycard").show();
            $("#paymentFrm").find(".row").hide();
        }
    })
</script>
<script src="<?= base_url() ?>assert/fontend/js/ala-carte.js"></script> 