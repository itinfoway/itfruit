<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 blue-bg">
                <img class="fruits top-right" src="<?= base_url() ?>assert/fontend/img/strawberry.svg">
                <img class="fruits bottom-left" src="<?= base_url() ?>assert/fontend/img/pinapple.svg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 my-5">
                            <h1 class="text-red" style="font-size: 10.5vw;"><?= $this->lang->line("fn_about_us"); ?></h1>
                            <img src="<?= base_url() ?>assert/fontend/img/about-us.png" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <h1 class="text-yellow text-center"><?= $this->lang->line("fn_our_story"); ?></h1>
            </div>
            <div class="col-md-12 yellow-bg">
                <img class="fruits top-right" src="<?= base_url() ?>assert/fontend/img/grapes.svg">
                <img class="fruits bottom-left" src="<?= base_url() ?>assert/fontend/img/watermelon.svg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 m-5">
                            <?php
                            foreach ($this->lang->line("fn_our_story_line") as $t) {
                                ?>
                                <p class="text-center"><?= $t ?></p>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <h1 class="text-green text-center mt-5"><?= $this->lang->line("fn_trust_our_fruit"); ?></h1>
            </div>
            <div class="col-md-12">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 mx-4">
                            <div class="row">
                                <div class="col-md-12 bg-radius-green">
                                    <center>
                                        <img class="img-responsive my-4 w-75" src="<?= base_url() ?>assert/fontend/img/a-4.png">
                                    </center>
                                </div>
                                <div class="col-md-12">
                                    <h4 class="text-center text-green"><?=$this->lang->line("fn_energy_booster"); ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 mx-3">
                            <div class="row">
                                <div class="col-md-12 bg-radius-red">
                                    <center>
                                        <img class="img-responsive my-4 w-75" src="<?= base_url() ?>assert/fontend/img/a-1.png">
                                    </center>
                                </div>
                                <div class="col-md-12">
                                    <h4 class="text-center text-red"><?=$this->lang->line("fn_heart_health"); ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 mx-3">
                            <div class="row">
                                <div class="col-md-12 bg-radius-blue">
                                    <center>
                                        <img class="img-responsive my-4 w-75" src="<?= base_url() ?>assert/fontend/img/a-2.png">
                                    </center>
                                </div>
                                <div class="col-md-12">
                                    <h4 class="text-center text-blue"><?=$this->lang->line("fn_source_of_fiber"); ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 mx-3">
                            <div class="row">
                                <div class="col-md-12 bg-radius-yellow">
                                    <center>
                                        <img class="img-responsive my-4 w-75" src="<?= base_url() ?>assert/fontend/img/a-3.png">
                                    </center>
                                </div>
                                <div class="col-md-12">
                                    <h4 class="text-center text-yellow"><?=$this->lang->line("fn_source_of_protein"); ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 mx-3">
                            <div class="row">
                                <div class="col-md-12 bg-radius-green">
                                    <center>
                                        <img class="img-responsive my-4 w-75" src="<?= base_url() ?>assert/fontend/img/a-5.png">
                                    </center>
                                </div>
                                <div class="col-md-12">
                                    <h4 class="text-center text-green"><?=$this->lang->line("fn_antioxidant_vitamin"); ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 m-5">
                            <?php
                            foreach ($this->lang->line("fn_trust_our_fruit_line") as $t) {
                                ?>
                                <p class="text-center text-green"><?= $t ?></p>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>