<?php

/**
 * Description of Users
 * https://itinfoway.com
 * @author Admin
 */
?>
<section>
    <div class="faq">
        <div class="faq-bg">
            <div class="faq-text">
                <h1><?=$this->lang->line("fn_frequently"); ?></h1>
                <h1><?=$this->lang->line("fn_asked"); ?></h1>
                <p><?=$this->lang->line("fn_need"); ?></p>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="search-bar">
        <div class="container my-container">
            <div class="row">
                <div class="col-xs-1">
                    <img class="img-responsive" src="<?= base_url("assert/fontend/"); ?>img/search-icon.png">
                </div>
                <div class="col-xs-11 search-part">
                    <input type="text" placeholder="search here" id="search">
                    <img class="img-responsive line" src="<?= base_url("assert/fontend/"); ?>img/faq-line.png">
                </div>
            </div>
        </div>
</section>
<section>
    <div class="que-part">
        <h4><?=$this->lang->line("fn_ques"); ?>frequently asked questions</h4>
        <?php
        if (!empty($data)) {
            foreach ($data as $f) {
        ?>
                <div class="faq-search">
                    <button class="accordion"><img id="plus-icon" class="img-responsive" src="<?= base_url("assert/fontend/"); ?>img/plus-icon.png"><img id="minus-icon" class="img-responsive" src="<?= base_url("assert/fontend/"); ?>img/minus-icon.png">
                        <p><?= $f->qus; ?></p>
                    </button>
                    <div class="panel">
                        <p>| <?= $f->ans; ?></p>
                    </div>
                    <img class="img-responsive line" src="<?= base_url("assert/fontend/"); ?>img/faq-line.png" width="100%">
                </div>
        <?php
            }
        }
        ?>
    </div>
</section>
<script>
    $(document).ready(function() {
        $("#search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $(".faq-search").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>