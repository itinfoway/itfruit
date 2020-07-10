<section>
    <div class="container my-container ordernow  pt-lg-1 pt-5">
        <div class="row justify-content-center pt-lg-1 pt-5">
            <div class="col-md-3 my-3 text-center d-lg-block d-none">
                <h4 class="my-text-font bg-orderh3 p-2">please select your option</h4>
            </div>
        </div>

        <div class="row p-5">
            <div class="col-lg-6 col-12 orange_ordernow">
                <div class="row orange_ordernow-round-padding" >
                    <div class="orange_ordernow-round text-center">
                        <p class="text-white"><?= $this->lang->line("fn_ordernow_red_head1"); ?></p> 
                        <h1 class="my-0 py-0"><?= $this->lang->line("fn_ordernow_red_head2"); ?></h1> 
                        <h3 class="my-0 py-0 my-text-font text-white"><?= $this->lang->line("fn_ordernow_red_head3"); ?></h3>
                    </div>
                     <img class="fruits top-left top-5x" src="<?= base_url() ?>/assert/fontend/img/pinapple.svg">
                    <div class="aerrowleft-ordernow d-lg-block d-none">
                        <img src="<?= base_url() ?>assert/fontend/img/arrowleft.png" width="60px">
                    </div>
                    <div class="col-12 p-5 ">
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-12  pb-3">
                                <button class="btn btn-default btn-block" onclick="window.location.href = '<?= base_url() ?>ala-cart-sliced'"><h4 class="text-red">Check Now</h4></button>
                            </div>
                        </div>
                        <div class="row px-5 justify-content-center text-center text-white text-xs ordernow-discrib-frut">
                            <div class="col-md-4">
                                <h4><?= $this->lang->line("fn_ordernow_red_line1"); ?></h4>
                            </div>
                            <div class="col-md-4">
                                <h4><?= $this->lang->line("fn_ordernow_red_line2"); ?></h4>
                            </div>
                            <div class="col-md-4">
                                <h4><?= $this->lang->line("fn_ordernow_red_line3"); ?></h4>
                            </div>
                            <div class="col-md-5">
                                <h4><?= $this->lang->line("fn_ordernow_red_line4"); ?></h4>
                            </div>
                            <div class="col-md-5">
                                <h4><?= $this->lang->line("fn_ordernow_red_line5"); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="fruits bottom-left" src="<?= base_url() ?>/assert/fontend/img/sitafal.svg">
                <img class="fruits bottom-right" src="<?= base_url() ?>/assert/fontend/img/banana.svg">
            </div>
            <div class="d-lg-none d-block py-5 my-3 col-12"></div>
            <div class="col-lg-6 col-12 green_ordernow">
                <div class="row orange_ordernow-round-padding" >
                    <div class="aerrowright-ordernow   d-lg-block d-none">
                        <img src="<?= base_url() ?>assert/fontend/img/arrowright.png" width="60px">
                    </div>
                    <div class="green_ordernow-round text-center">
                        <p class="text-white"><?= $this->lang->line("fn_ordernow_green_head1"); ?></p> 
                        <h1 class="my-0 py-0"><?= $this->lang->line("fn_ordernow_green_head2"); ?></h1> 
                        <h3 class="my-0 py-0 my-text-font text-white"><?= $this->lang->line("fn_ordernow_green_head3"); ?></h3>
                    </div>
                    <img class="fruits top-right top-5x" src="<?= base_url() ?>/assert/fontend/img/strawberry.svg">
                    <div class="col-12 p-5 ">
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-12  pb-3">
                                <button class="btn btn-default btn-block" onclick="window.location.href = '<?= base_url() ?>subscription'"><h4 class="text-green">Check Now</h4></button>
                            </div>
                        </div>
                        <div class="row px-5 justify-content-center text-center text-white text-xs ordernow-discrib-frut">
                            <div class="col-md-4">
                                <h4><?= $this->lang->line("fn_ordernow_green_line1"); ?></h4>
                            </div>
                            <div class="col-md-4">
                                <h4><?= $this->lang->line("fn_ordernow_green_line2"); ?></h4>
                            </div>
                            <div class="col-md-4">
                                <h4><?= $this->lang->line("fn_ordernow_green_line3"); ?></h4>
                            </div>
                            <div class="col-md-6">
                                <h4><?= $this->lang->line("fn_ordernow_green_line4"); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="fruits bottom-right" src="<?= base_url() ?>/assert/fontend/img/grapes.svg">
            </div>    
        </div>
      <?php /* ?>  <div class="row relative">


            <div class="col-lg-6 col-md-12 col-sm-12 ordernow-bg-red py-lg-5">
                <img class="fruits top-left" src="<?= base_url() ?>/assert/fontend/img/pinapple.svg">
                <img class="fruits bottom-left d-lg-block d-none" src="<?= base_url() ?>/assert/fontend/img/sitafal.svg">
                <div class="row">
                    <div class="col-lg-7 col-md-12">
                        <div class="row text-lg-left text-center justify-content-lg-end justify-content-md-around justify-content-center mx-md-5 mt-md-3">
                            <div class="col-lg-8 col-md-4 offset-lg-5 col-12 my-lg-3 mt-lg-5 mt-md-5">
                                <h4><?= $this->lang->line("fn_ordernow_red_line1"); ?></h4>
                            </div>
                            <div class="col-lg-8 col-md-4 offset-lg-5 col-12 my-lg-3 mt-md-5">
                                <h4><?= $this->lang->line("fn_ordernow_red_line2"); ?></h4>
                            </div>
                            <div class="col-lg-8 col-md-4 offset-lg-5 col-12 my-lg-3 mt-md-5">
                                <h4><?= $this->lang->line("fn_ordernow_red_line3"); ?></h4>
                            </div>
                            <div class="col-lg-8 col-md-4 offset-lg-5 col-12 my-lg-3 mt-md-5">
                                <h4><?= $this->lang->line("fn_ordernow_red_line4"); ?></h4>
                            </div>
                            <div class="col-lg-8 col-md-4  offset-lg-5 col-12 my-lg-3 mb-lg-5 mt-md-5">
                                <h4><?= $this->lang->line("fn_ordernow_red_line5"); ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-8 col-10 offset-lg-0 offset-md-2 offset-1 ordernow-bg-r-red my-lg-5 py-lg-5 text-center pointer" onclick="window.location.href = '<?= base_url() ?>ala-cart-sliced'">
                        <div class="my-lg-5 py-lg-5">
                            <div class="my-lg-5 py-lg-3  pt-5">
                                <p><?= $this->lang->line("fn_ordernow_red_head1"); ?></p> 
                                <h1><?= $this->lang->line("fn_ordernow_red_head2"); ?></h1> 
                                <h3><?= $this->lang->line("fn_ordernow_red_head3"); ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 ordernow-bg-green py-lg-5">

                <img class="fruits bottom-right" src="<?= base_url() ?>/assert/fontend/img/grapes.svg">
                <img class="fruits top-right d-lg-block d-none" src="<?= base_url() ?>/assert/fontend/img/strawberry.svg">
                <div class="row">
                    <div class="col-lg-5 col-md-8  col-10 offset-lg-0 offset-md-2 offset-1 ordernow-bg-r-green my-lg-5 py-lg-5 text-center pointer" onclick="window.location.href = '<?= base_url() ?>subscription'">
                        <div class="my-lg-5 py-lg-5">
                            <div class="my-lg-5 py-lg-3  pb-lg-0 pb-5">
                                <p><?= $this->lang->line("fn_ordernow_green_head1"); ?></p> 
                                <h1><?= $this->lang->line("fn_ordernow_green_head2"); ?></h1>
                                <h3><?= $this->lang->line("fn_ordernow_green_head3"); ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="row text-lg-left text-center justify-content-lg-start justify-content-md-around justify-content-center mx-md-5 mt-md-3">
                            <div class="col-lg-8 col-md-4  col-12 my-lg-3 mt-lg-5 mt-md-5">
                                <h4><?= $this->lang->line("fn_ordernow_green_line1"); ?></h4>
                            </div>
                            <div class="col-lg-8 col-md-4 col-12  my-lg-3 mt-md-5">
                                <h4><?= $this->lang->line("fn_ordernow_green_line2"); ?></h4>
                            </div>
                            <div class="col-lg-8 col-md-4  col-12 my-lg-3 mt-md-5">
                                <h4><?= $this->lang->line("fn_ordernow_green_line3"); ?></h4>
                            </div>
                            <div class="col-lg-8 col-md-4 col-12  my-lg-3 my-5">
                                <h4><?= $this->lang->line("fn_ordernow_green_line4"); ?></h4>
                            </div>

                        </div>
                    </div>

                </div>
            </div> <?php */ ?>
        </div>
    </div>
</section>


<section>
    <div class="container my-container">
        <div class="what-does-part">
            <h1><?= $this->lang->line("fn_ordernow_contain_head1"); ?></h1>
            <h3><?= $this->lang->line("fn_ordernow_contain_head2"); ?></h3>
            <div class="row box-part">
                <div class="col-sm-4">
                    <div class="box">
                        <h2><?= $this->lang->line("fn_ordernow_contain_no_1"); ?></h2>
                        <h2><?= $this->lang->line("fn_ordernow_contain_no_1_name"); ?></h2>
                        <div class="box-1">
                            <img class="img-responsive" src="<?= base_url("assert/fontend/"); ?>img/box.png">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box">
                        <h2><?= $this->lang->line("fn_ordernow_contain_no_2"); ?></h2>
                        <h2><?= $this->lang->line("fn_ordernow_contain_no_2_name"); ?></h2>
                        <div class="box-2">
                            <img class="img-responsive" src="<?= base_url("assert/fontend/"); ?>img/box.png">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box">
                        <h2><?= $this->lang->line("fn_ordernow_contain_no_3"); ?></h2>
                        <h2><?= $this->lang->line("fn_ordernow_contain_no_3_name"); ?></h2>
                        <div class="box-3">
                            <img class="img-responsive" src="<?= base_url("assert/fontend/"); ?>img/box.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>