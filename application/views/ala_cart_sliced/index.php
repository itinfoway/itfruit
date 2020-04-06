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
                            <h1>ALA</h1>
                            <h2>CARTE</h2>
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
    <div class="container my-container">
        <div class="date-time">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-2" >
                    <center><img style="height: 80px;" src="<?= base_url(); ?>assert/fontend/img/pinapple.svg"></center>
                    <div class="date-part first-date-part" data-toggle="modal" data-target="#dateAndTime1" data-date="orderbox1">
                        <img class="date-close" src="<?= base_url(); ?>assert/fontend/img/date-close.png">
                        <div class="time">
                            <div>
                                <spna class="input-group-addon">
                                    <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/date.png">
                                </spna><p>15 jan</p>
                                <p>2019</p>
                            </div>
                            <div>
                                <div class="order first-order">
                                    <div class="text">
                                        <p>order</p>
                                        <p>1</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/time.png">
                                <p>2 PM</p>
                            </div>
                        </div>
                        <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/line.png" width="45%" height="3px">
                        <p>BERRIES SUMMER 1</p>
                        <p>TROPICAL THUNDAR </p>
                    </div>
                    <input  type="hidden" id="orderbox1" name="orderbox1" >
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <center><img style="height: 80px;" src="<?= base_url(); ?>assert/fontend/img/grapes.svg"></center>
                    <div class="date-part" data-toggle="modal" data-target="#dateAndTime1" data-date="orderbox2">
                        <img class="date-close" src="<?= base_url(); ?>assert/fontend/img/date-close.png">
                        <div class="time">
                            <div>
                                <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/date.png">
                            </div>
                            <div>
                                <div class="order">
                                    <div class="text">
                                        <p>order</p>
                                        <p>2</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/time.png">
                            </div>
                        </div>
                        <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/line.png" width="45%" height="3px">
                        <p>BERRIES SUMMER 1</p>
                        <p>TROPICAL THUNDAR </p>
                    </div>
                    <input  type="hidden" id="orderbox2" name="orderbox2" >
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <center><img style="height: 80px;" src="<?= base_url(); ?>assert/fontend/img/berry.svg"></center>
                    <div class="date-part" data-toggle="modal" data-target="#dateAndTime1" data-date="orderbox3">
                        <img class="date-close" src="<?= base_url(); ?>assert/fontend/img/date-close.png">
                        <div class="time">
                            <div>
                                <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/date.png">
                            </div>
                            <div>
                                <div class="order">
                                    <div class="text">
                                        <p>order</p>
                                        <p>3</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/time.png">
                            </div>
                        </div>
                        <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/line.png" width="45%" height="3px">
                        <p>BERRIES SUMMER 1</p>
                        <p>TROPICAL THUNDAR </p>
                    </div>
                    <input  type="hidden" id="orderbox3" name="orderbox3" >
                </div>
                <div class=" col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <center><img style="height: 80px;" src="<?= base_url(); ?>assert/fontend/img/orange.svg"></center>
                    <div class="date-part" data-toggle="modal" data-target="#dateAndTime1" data-date="orderbox4">
                        <img class="date-close" src="<?= base_url(); ?>assert/fontend/img/date-close.png">
                        <div class="time">
                            <div>
                                <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/date.png">
                            </div>
                            <div>
                                <div class="order">
                                    <div class="text">
                                        <p>order</p>
                                        <p>4</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/time.png">
                            </div>
                        </div>
                        <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/line.png" width="45%" height="3px">
                        <p>BERRIES SUMMER 1</p>
                        <p>TROPICAL THUNDAR </p>
                    </div>
                    <input  type="hidden" id="orderbox4" name="orderbox4" >
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <center><img style="height: 80px;" src="<?= base_url(); ?>assert/fontend/img/sitafal.svg"></center>
                    <div class="date-part" data-toggle="modal" data-target="#dateAndTime1" data-date="orderbox5">
                        <img class="date-close" src="<?= base_url(); ?>assert/fontend/img/date-close.png">
                        <div class="time">
                            <div>
                                <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/date.png">
                            </div>
                            <div>
                                <div class="order">
                                    <div class="text">
                                        <p>order</p>
                                        <p>5</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/time.png">
                            </div>
                        </div>
                        <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/line.png" width="45%" height="3px">
                        <p>BERRIES SUMMER 1</p>
                        <p>TROPICAL THUNDAR </p>
                    </div>
                    <input  type="hidden" id="orderbox5" name="orderbox5" >
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-2">
                    <center><img style="height: 80px;" src="<?= base_url(); ?>assert/fontend/img/banana.svg"></center>
                    <div class="totel">
                        <p>total: 200 credit</p>
                    </div>
                    <div class="totel">
                        <p>checkout</p>
                    </div>
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
                    <label>Select Date And Time</label>
                    <input class="form-control form_datetime" data-date-format="dd MM yyyy - HH:ii p" size="16" type="text" value="" data-link-field="orderbox" readonly>
                    <input  type="hidden" id="orderbox" name="orderbox" >
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
    $('.form_datetime').datetimepicker({
        weekStart: 1,
        todayBtn: 1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
    $(document).on("click", ".date-part", function () {
        $(".date-part").removeClass("first-date-part");
        $(".date-part").find(".order").removeClass("first-order");
        var inputDate = $(this).data("date");
        $("#orderbox").attr("data-link-field", inputDate);
        $(this).addClass("first-date-part");
        $(this).find(".order").addClass("first-order");
    });
    $("#savedate").click(function () {
        var inputDate = $("#orderbox").attr("data-link-field");
        console.log(inputDate, $("#orderbox").val());
        $("#" + inputDate).val($("#orderbox").val());
    });
</script>
<section>
    <div class="random-part">
        <div class="container">
            <h1>RANDOM A BOX FOR ME!</h1>
            <div class="row">
                <div class="col-sm-6 mb-5">
                    <center><h2 class="carte-title">title</h2></center>
                    <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/box.png">
                    <center>
                        <div class="text">
                            <div class="row">
                                <div class="col-xs-6">
                                    <ul class="left-part">
                                        <li>blueberries</li>
                                        <li>raspberries</li>
                                        <li>strawberries</li>
                                    </ul>
                                </div>
                                <div class="col-xs-6">
                                    <ul class="right-part">
                                        <li>natural walnuts</li>
                                        <li>watermelon</li>
                                        <li>dark chocolate</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </center>
                    <div class="countr">
                        <img class="img-responsive minus" src="<?= base_url(); ?>assert/fontend/img/random-minus.png">
                        <span>0</span>
                        <img class="img-responsive plus" src="<?= base_url(); ?>assert/fontend/img/random-add.png">
                    </div>
                </div>
                <div class="col-sm-6">
                    <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/box.png">
                    <center>
                        <div class="text">
                            <div class="row">
                                <div class="col-xs-6">
                                    <ul class="left-part">
                                        <li>blueberries</li>
                                        <li>raspberries</li>
                                        <li>strawberries</li>
                                    </ul>
                                </div>
                                <div class="col-xs-6">
                                    <ul class="right-part">
                                        <li>natural walnuts</li>
                                        <li>watermelon</li>
                                        <li>dark chocolate</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </center>
                    <div class="countr">
                        <img class="img-responsive minus" src="<?= base_url(); ?>assert/fontend/img/random-minus.png">
                        <span>0</span>
                        <img class="img-responsive plus" src="<?= base_url(); ?>assert/fontend/img/random-add.png">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/box.png">
                    <center>
                        <div class="text">
                            <div class="row">
                                <div class="col-xs-6">
                                    <ul class="left-part">
                                        <li>blueberries</li>
                                        <li>raspberries</li>
                                        <li>strawberries</li>
                                    </ul>
                                </div>
                                <div class="col-xs-6">
                                    <ul class="right-part">
                                        <li>natural walnuts</li>
                                        <li>watermelon</li>
                                        <li>dark chocolate</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </center>
                    <div class="countr">
                        <img class="img-responsive minus" src="<?= base_url(); ?>assert/fontend/img/random-minus.png">
                        <span>0</span>
                        <img class="img-responsive plus" src="<?= base_url(); ?>assert/fontend/img/random-add.png">
                    </div>
                </div>
                <div class="col-sm-6">
                    <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/box.png">
                    <center>
                        <div class="text">
                            <div class="row">
                                <div class="col-xs-6">
                                    <ul class="left-part">
                                        <li>blueberries</li>
                                        <li>raspberries</li>
                                        <li>strawberries</li>
                                    </ul>
                                </div>
                                <div class="col-xs-6">
                                    <ul class="right-part">
                                        <li>natural walnuts</li>
                                        <li>watermelon</li>
                                        <li>dark chocolate</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </center>
                    <div class="countr">
                        <img class="img-responsive minus" src="<?= base_url(); ?>assert/fontend/img/random-minus.png">
                        <span>0</span>
                        <img class="img-responsive plus" src="<?= base_url(); ?>assert/fontend/img/random-add.png">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/box.png">
                    <center>
                        <div class="text">
                            <div class="row">
                                <div class="col-xs-6">
                                    <ul class="left-part">
                                        <li>blueberries</li>
                                        <li>raspberries</li>
                                        <li>strawberries</li>
                                    </ul>
                                </div>
                                <div class="col-xs-6">
                                    <ul class="right-part">
                                        <li>natural walnuts</li>
                                        <li>watermelon</li>
                                        <li>dark chocolate</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </center>
                    <div class="countr">
                        <img class="img-responsive minus" src="<?= base_url(); ?>assert/fontend/img/random-minus.png">
                        <span>0</span>
                        <img class="img-responsive plus" src="<?= base_url(); ?>assert/fontend/img/random-add.png">
                    </div>
                </div>
                <div class="col-sm-6">
                    <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/box.png">
                    <center>
                        <div class="text">
                            <div class="row">
                                <div class="col-xs-6">
                                    <ul class="left-part">
                                        <li>blueberries</li>
                                        <li>raspberries</li>
                                        <li>strawberries</li>
                                    </ul>
                                </div>
                                <div class="col-xs-6">
                                    <ul class="right-part">
                                        <li>natural walnuts</li>
                                        <li>watermelon</li>
                                        <li>dark chocolate</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </center>
                    <div class="countr">
                        <img class="img-responsive minus" src="<?= base_url(); ?>assert/fontend/img/random-minus.png">
                        <span>0</span>
                        <img class="img-responsive plus" src="<?= base_url(); ?>assert/fontend/img/random-add.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).on("click", ".plus", function () {
        var plus = parseInt($(this).parent(".countr").find("span").text());
        $(this).parent(".countr").find("span").text(plus + 1);
    });
    $(document).on("click", ".minus", function () {
        var minus = parseInt($(this).parent(".countr").find("span").text());
        if (minus != 0) {
            $(this).parent(".countr").find("span").text(minus - 1);
        }
    });
</script>