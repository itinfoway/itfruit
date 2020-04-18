<section>
    <div class="container-fluid">
        <div class="row">
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
                        <div class="col-md-2">
                            <div class="row">
                                <div class="col-md-12 bg-radius-yellow">
                                    <center>
                                        <img class="img-responsive my-4 w-75" src="<?= base_url() ?>assert/fontend/img/a-4.png">
                                    </center>
                                </div>
                                <div class="col-md-12">
                                    <h4>asdfdsaf</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 m-5">
                            <?php
                            foreach ($this->lang->line("fn_our_story_line") as $t) {
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