<?php
/**
 * Description of checkout
 * https://itinfoway.com
 * @author Admin
 */
?>
<link href="<?= base_url(); ?>assert/fontend/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
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
<?php
if (!empty($fruit)) {
    ?>
    <section>
        <div class="plan">
            <div class="container plans">
                <div class="row">
                    <div data-set="1" class="col-xs-12 col-sm-6 col-md-3 fruit-set">
                        <div class="box plan-1 pointer">
                            <h3>premium</h3>
                        </div>
                    </div>
                    <div data-set="2" class="col-xs-12 col-sm-6 col-md-3 fruit-set">
                        <div class="box plan-2 pointer">
                            <h3>regular</h3>
                        </div>
                    </div>
                    <div data-set="3" class="col-xs-12 col-sm-6 col-md-3 fruit-set">
                        <div class="box plan-3 pointer">
                            <h3>slice</h3>
                        </div>
                    </div>
                    <div data-set="4" class="col-xs-12 col-sm-6 col-md-3 fruit-set">
                        <div class="box plan-4 pointer">
                            <h3>dip</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="plan-v2">
                <div class="container my-container plans-v2">
                    <div class="row">
                        <?php
                        $count = 1;
                        foreach ($fruit as $f) {
                            ?>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="box <?= ($count % 4 == 0) ? "plan-green" : (($count % 3 == 0) ? "plan-yellow" : (($count % 2 == 0) ? "plan-red" : "plan-blue")); ?>">
                                    <img class="top-right pointer fruit-remove" style="display: none" src="<?= base_url() ?>assert/fontend/img/close.png">
                                    <img class="img-responsive" src="<?= base_url("assert/fruit/" . $f->img); ?>">
                                    <h2><?= $f->name; ?></h2>
                                    <center><button class="fev-btn fruit-data" data-fruit="<?= $f->id ?>" data-type="1"><?= $this->lang->line("btn_add") ?></button></center>
                                </div>
                            </div>
                            <?php
                            $count++;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
}
?>
<section>
    <div class="check-out-btn">
        <img class="img-responsive" src="<?= base_url() ?>assert/fontend/img/sitafal.svg">
        <button id="checkout">check out</button>
        <img class="img-responsive" src="<?= base_url() ?>assert/fontend/img/banana.svg">
    </div>
</section>
<div class="modal fade" >
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
    var checkout_url = '<?= base_url(); ?>subscription/delivery-information';
    var btn_added = '<?= $this->lang->line("btn_added") ?>';
    var btn_add = '<?= $this->lang->line("btn_add") ?>';
</script>
<script>
    var fruitData = {};
    function setFruit(type){
        $(".fruit-data").text(btn_add);
        $(".fruit-remove").hide();
        for(i in fruitData[type]){
            $(".fruit-data[data-fruit='"+fruitData[type][i]+"'][data-type='"+type+"']").parent().parent().find(".fruit-remove").show();
            $(".fruit-data[data-fruit='"+fruitData[type][i]+"'][data-type='"+type+"']").text(btn_added);
        }
    }
    $(document).on("click", ".fruit-remove", function () {
        var fruitid = $(this).parent("div").find(".fruit-data").attr("data-fruit");
        var fruittype = $(this).parent("div").find(".fruit-data").attr("data-type");
        for(i in fruitData[fruittype]){
            if(fruitid==fruitData[fruittype][i]){
                delete fruitData[fruittype][i];
            }
        }
        setFruit(fruittype);
        $(this).parent("div").find(".fruit-remove").hide();
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
        $(this).parent().parent().find(".fruit-remove").show();
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
