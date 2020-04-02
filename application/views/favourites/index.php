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
                <img class="img-responsive" src="<?= base_url("assert/fontend/"); ?>img/arrow-1.png">
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
                <img class="img-responsive" src="<?= base_url("assert/fontend/"); ?>img/arrow-2.png">
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
                <img class="img-responsive" src="<?= base_url("assert/fontend/"); ?>img/arrow-3.png">
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
                    <p> - fruit boxes will be selected at random for the customer at designation date and time.</p>
                    <p> - please find our current fruit boxes. kindly note these will change with the season as well.</p>
                </div>
                <div class="col-sm-12 col-md-2">
                    <img class="img-responsive" src="<?= base_url("assert/fontend/"); ?>img/strawberry.svg">
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
                    <div class="box box-1">
                        <img src="<?= base_url("assert/fontend/"); ?>img/grapes.svg">
                        <h6>everyday</h6>
                        <h6><span>(</span> Mon<span> -</span> Fri <span>)</span></h6>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="box box-2">
                        <img src="<?= base_url("assert/fontend/"); ?>img/berry.svg">
                        <h6>twice a day</h6>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="box box-3">
                        <img src="<?= base_url("assert/fontend/"); ?>img/pinapple.svg">
                        <h6>once a week</h6>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="box box-4">
                        <img src="<?= base_url("assert/fontend/"); ?>img/orange.svg">
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
                <li>
                    <div class="circ mon">
                        <p>mon</p>
                    </div>
                </li>
                <li>
                    <div class="circ tue">
                        <p>tue</p>
                    </div>
                </li>
                <li>
                    <div class="circ wed">
                        <p>wed</p>
                    </div>
                </li>
                <li>
                    <div class="circ thu">
                        <p>thu</p>
                    </div>
                </li>
                <li>
                    <div class="circ fri">
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
<?php
if (!empty($fruit)) {
    ?>
    <section>
        <div class="plan">
            <div class="container plans">
                <div class="row">
                    <div data-set="1" class="col-xs-12 col-sm-6 col-md-3 fruit-set">
                        <div class="box plan-1">
                            <h3>premium</h3>
                        </div>
                    </div>
                    <div data-set="2" class="col-xs-12 col-sm-6 col-md-3 fruit-set">
                        <div class="box plan-2">
                            <h3>regular</h3>
                        </div>
                    </div>
                    <div data-set="3" class="col-xs-12 col-sm-6 col-md-3 fruit-set">
                        <div class="box plan-3">
                            <h3>slice</h3>
                        </div>
                    </div>
                    <div data-set="4" class="col-xs-12 col-sm-6 col-md-3 fruit-set">
                        <div class="box plan-4">
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
                                    <img class="img-responsive" src="<?= base_url("assert/fruit/" . $f->img); ?>">
                                    <h2><?= $f->name; ?></h2>
                                    <center><button class="fev-btn" data-fruit="<?= $f->id ?>" data-type="1">add</button></center>
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
        <img class="img-responsive" src="<?= base_url("assert/fontend/"); ?>img/sitafal.svg">
        <button>check out</button>
        <img class="img-responsive" src="<?= base_url("assert/fontend/"); ?>img/banana.svg">
    </div>
</section>
<script>
$(document).on("click",".fruit-set",function(){
    $(".fev-btn").attr("data-type",$(this).data("set"));
});
</script>