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
    <div class="container my-container">
        <div class="ala-carte">
            <div class="row ala-part">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <img class="img-responsive fruits" src="<?= base_url() ?>assert/fontend/img/fruits-1.png">
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
                    <img class="img-responsive fruits" src="<?= base_url() ?>assert/fontend/img/fruits-2.png">
                </div>
            </div>
        </div>	
    </div>
</section>
<section>
    <div class="table-part">
        <div class="cart-table">
            <div class="row">
                <div class="design">
                    <img class="img-responsive" src="<?= base_url() ?>assert/fontend/img/1.png" height="auto">
                </div>
                <div class="col">
                    <div class="main-col cart-col-2 col-height">
                        <ul>
                            <li>
                                pass
                            </li>
                            <li>
                                credit
                            </li>
                            <li>
                                you pay
                            </li>
                            <li>
                                validity
                            </li>
                            <li>
                                savings
                            </li>
                        </ul>
                    </div>
                </div>
                <?php
                $count = 3;
                foreach ($data as $t) {
                    ?>
                    <div class="col">
                        <div class="main-col cart-col-<?= $count ?> col-height">
                            <ul>
                                <li>
                                    <?= $t->pass ?>
                                </li>
                                <li>
                                    <?= $t->credit ?>
                                </li>
                                <li>
                                    <?= $t->youpay ?>
                                </li>
                                <li>
                                    <?= $t->validity ?>  days
                                </li>
                                <li>
                                    <?= $t->savings ?>
                                </li>
                                <li>
                                    <a href="#" class="btn <?= ($t->status == 1) ? "disabled" : "" ?> paymod" data-toggle="modal" data-target="#addToCarte" data-value="<?= $t->id; ?>">add to cart</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <?php
                    $count++;
                }
                ?>

                <div class="design">
                    <img class="img-responsive" src="<?= base_url() ?>assert/fontend/img/9.png" height="auto">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Modal -->
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
                    <?= form_open("wallet/check", ["class" => "mycard"]) ?>
                    <input type="hidden" class="datapaymod" name="paymod">
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
                <?= form_open("wallet/check", ["id" => "paymentFrm"]) ?>
                <input type="hidden" class="datapaymod" name="paymod">
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
</div>


<section>
    <div class="container my-container">
        <div class="what-dose">
            <h1>AHHMAHGAWD! I’VE GOT QUESTION!</h1>
            <div class="row">
                <div class="col-sm-4"> 
                    <div class="text-part red-part pina">
                        <img class="img-responsive" src="<?= base_url() ?>assert/fontend/img/pinapple.svg">	
                        <h4>WHAT DOES AMGD STAND FOR?</h4>
                        <img class="img-responsive line" src="<?= base_url() ?>assert/fontend/img/line-2.png">
                        <p>most say “ am good!!” our healthy meals are definately so good, it’ll make you say ahhmahgawd!!</p>
                    </div> 
                </div>
                <div class="col-sm-4">  
                    <div class="text-part gold-part">
                        <img class="img-responsive" src="<?= base_url() ?>assert/fontend/img/strawberry.svg">
                        <h4>WHAT DOES AMGD STAND FOR?</h4>
                        <img class="img-responsive line" src="<?= base_url() ?>assert/fontend/img/line-2.png">
                        <p>most say “ am good!!” our healthy meals are definately so good, it’ll make you say ahhmahgawd!!</p>
                    </div> 
                </div>
                <div class="col-sm-4">  
                    <div class="text-part blue-part">
                        <img class="img-responsive" src="<?= base_url() ?>assert/fontend/img/orange.svg">
                        <h4>WHAT DOES AMGD STAND FOR?</h4>
                        <img class="img-responsive line" src="<?= base_url() ?>assert/fontend/img/line-2.png">
                        <p>most say “ am good!!” our healthy meals are definately so good, it’ll make you say ahhmahgawd!!</p>
                    </div> 
                </div>
            </div>

            <div class="row">
                <div class="col-sm-8"> 
                    <div class="text-part big-blue-part big">
                        <img class="img-responsive" src="<?= base_url() ?>assert/fontend/img/banana.svg">
                        <h4>WHAT DOES AMGD STAND FOR?</h4>
                        <img class="img-responsive line" src="<?= base_url() ?>assert/fontend/img/line-2.png">
                        <p>most say “ am good!!” our healthy meals are definately so good, it’ll make you say ahhmahgawd!!</p>
                        <p>most say “ am good!!” our healthy meals are definately so good, it’ll make you say ahhmahgawd!!</p>
                        <p>most say “ am good!!” our healthy meals are definately so good, it’ll make you say ahhmahgawd!!</p>
                        <p>most say “ am good!!” our healthy meals are definately so good, it’ll make you say ahhmahgawd!!</p>
                        <p>most say “ am good!!” our healthy meals are definately so good, it’ll make you say ahhmahgawd!!</p>
                        <p>most say “ am good!!” our healthy meals are definately so good, it’ll make you say ahhmahgawd!!</p>
                    </div> 
                </div>
                <div class="col-sm-4"> 
                    <div class="text-part red-part">
                        <img class="img-responsive" src="<?= base_url() ?>assert/fontend/img/sitafal.svg">	
                        <h4>WHAT DOES AMGD STAND FOR?</h4>
                        <img class="img-responsive line" src="<?= base_url() ?>assert/fontend/img/line-2.png">
                        <p>most say “ am good!!” our healthy meals are definately so good, it’ll make you say ahhmahgawd!!</p>
                    </div>
                    <br>
                    <br>
                    <div class="text-part gold-part">
                        <img class="img-responsive" src="<?= base_url() ?>assert/fontend/img/watermelon.svg">
                        <h4>WHAT DOES AMGD STAND FOR?</h4>
                        <img class="img-responsive line" src="<?= base_url() ?>assert/fontend/img/line-2.png">
                        <p>most say “ am good!!” our healthy meals are definately so good, it’ll make you say ahhmahgawd!!</p>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-4">   
                    <div class="text-part gold-part">
                        <img class="img-responsive" src="<?= base_url() ?>assert/fontend/img/strawberry.svg">
                        <h4>WHAT DOES AMGD STAND FOR?</h4>
                        <img class="img-responsive line" src="<?= base_url() ?>assert/fontend/img/line-2.png">
                        <p>most say “ am good!!” our healthy meals are definately so good, it’ll make you say ahhmahgawd!!</p>
                    </div> 
                </div>
                <div class="col-sm-8"> 
                    <div class="text-part big-red-part big pina">
                        <img class="img-responsive" src="<?= base_url() ?>assert/fontend/img/pinapple.svg">
                        <h4>WHAT DOES AMGD STAND FOR?</h4>
                        <img class="img-responsive line" src="<?= base_url() ?>assert/fontend/img/line-2.png">
                        <p>most say “ am good!!” our healthy meals are definately so good, it’ll make you say ahhmahgawd!!
                            most say “ am good!!” our healthy meals are definately so good, it’ll make you say ahhmahgawd!!</p>			
                    </div> 
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).on("click", ".paymod", function () {
        $(".datapaymod").val($(this).data("value"));
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