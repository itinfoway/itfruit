<style>
    .box img{
        display: none;
    }
    .box:hover img,.box.active img{
        display: block;
    }
</style>
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
        <div class="row">
        <div class="col-md-3 offset-md-1 mr-md-4">
            <button class="btn btn-success btn-block"><h5><img src="<?=base_url();?>assert/fontend/img/date.png" /> <?= $this->lang->line("fn_duration"); ?></h5></button>         
        </div>
        <div class="col-md-3 mx-md-4">
            <button class="btn btn-success btn-block"><h5><img src="<?=base_url();?>assert/fontend/img/date.png" /> <?= $this->lang->line("fn_duration"); ?></h5></button>         
        </div>
        <div class="col-md-3 mx-md-4">
            <button class="btn btn-success btn-block"><h5><img src="<?=base_url();?>assert/fontend/img/date.png" /> <?= $this->lang->line("fn_duration"); ?></h5></button>         
        </div>
    </div>
</section>
<section>
    <div class="random-part">
        <div class="container">
            <h1>RANDOM A BOX FOR ME!</h1>
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
                            <b class="product-credit"><span><?= $product->price ?></span> SGD</b>
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
                        <div class="countr" data-value="<?= urlencode(base64_encode($product->id)) ?>"  property="schema:name" content="<?= $product->name ?>" data-price="<?= $product->price ?>">
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
<section>
    <div class="check-out-btn">
        <img class="img-responsive" src="<?= base_url() ?>assert/fontend/img/sitafal.svg">
        <button>check out</button>
        <img class="img-responsive" src="<?= base_url() ?>assert/fontend/img/banana.svg">
    </div>
</section>
<script>
    var error_1stblock = '<?= $this->lang->line("fn_error_type_of_plan") ?>';
    var error_2stblock = '<?= $this->lang->line("fn_error_select_days") ?>';
    var error_2stblock_2day = '<?= $this->lang->line("fn_error_select_days_2") ?>';
    var error_2stblock_1day = '<?= $this->lang->line("fn_error_select_days_1") ?>';
    var products = {};
    $(document).on("click", ".box", function () {
        $(".box").removeClass("active");
        $(this).addClass("active");
        var data = $(".box.active").data("daysof");
        if (data == '5d') {
            $(".week-days").addClass("active");
        } else {
            $(".week-days").removeClass("active");
        }
        $(".countr").find("span").text(0);
    });
    $(document).on("click", ".week-days", function () {
        var data = $(".box.active").data("daysof");
        var count = 0;
        if (data == '5d') {
            $(".week-days").addClass("active");
        } else if (data == '2d') {
            $(".week-days.active").each(function () {
                count++
            });
            if (count == 2) {
                if ($(this).hasClass("active")) {
                    $(this).toggleClass("active");
                } else {
                    toastr.error(error_2stblock_2day);

                }
            } else {
                $(this).toggleClass("active");
            }
        } else if (data == '1d' || data == "1d2w") {
            $(".week-days.active").each(function () {
                count++
            });
            if (count == 1) {
                if ($(this).hasClass("active")) {
                    $(this).toggleClass("active");
                } else {
                    toastr.error(error_2stblock_1day);

                }
            } else {
                $(this).toggleClass("active");
            }
        } else {
            toastr.error(error_1stblock);
        }
        $(".countr").find("span").text(0);
    });
    function conCheck() {
        var data = $(".box.active").data("daysof");
        var count = 0;
        $(".week-days.active").each(function () {
            count++
        });
        if (data == '5d') {
            if (count == 5) {
                return true;
            }
        } else if (data == '2d') {
            if (count == 2) {
                return true;
            }
        } else if (data == '1d' || data == "1d2w") {
            if (count == 1) {
                return true;
            }
        }
        return false;
    }
    function productGet() {
        if (getCookie("carte") != "") {
            var data = JSON.parse(getCookie("carte"));
            $('.box[data-daysof="' + data["df"] + '"]').click();
            for (i in data["d"]) {
                $('.week-days[data-day="' + data["d"][i] + '"]').click();
            }
            for (i in data["p"]) {
                $('.countr[data-value="' + i + '"]').find("span").text(data["p"][i]['c']);
            }
        }
    }
    $(document).ready(function () {
        productGet();
    });
    function productSet() {
        var dayof = $(".box.active").data("daysof");
        var day = [];
        var pro = {};
        $(".week-days.active").each(function (index) {
            day[index] = $(this).data("day");
        });
        $(".countr").each(function (index) {
            var c = parseInt($(this).find("span").text());
            if (c != 0) {
                var price = $(this).data("price");
                pro[$(this).data("value")] = {};
                pro[$(this).data("value")]["c"] = c;
                pro[$(this).data("value")]["p"] = price;
            }
        });
        products["d"] = day;
        products["df"] = dayof;
        products["p"] = pro;
        setCookie("carte", JSON.stringify(products));
    }
    $(document).on("click", ".plus", function () {
        if (conCheck()) {
            var plus = parseInt($(this).parent(".countr").find("span").text());
            $(this).parent(".countr").find("span").text(plus + 1);
            productSet();
        } else {
            $(".countr").find("span").text(0);
            toastr.error(error_2stblock);
        }
    });
    $(document).on("click", ".minus", function () {
        var minus = parseInt($(this).parent(".countr").find("span").text());
        if (minus != 0) {
            $(this).parent(".countr").find("span").text(minus - 1);
            productSet();
        }
    });
    $(".box:first").click();
</script>