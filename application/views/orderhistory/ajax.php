
            <?php
            if (!empty($order)) {
                foreach ($order as $t) {
                    ?>
                    <div class="history" >
                        <div class="row">
                            <div class="col-sm-12 col-md-4" >
                                <img class="img-responsive box-img" src="<?= base_url("assert/fontend/"); ?>img/box.png">
                            </div>
                            <div class="col-sm-12 col-md-6" >
                                <div class="text">
                                    <p><span><?= $this->lang->line("fn_orderhistory_no"); ?> </span> # <?= "ALACARTE" . str_replace("-", "", $t->order_date) . str_pad($t->id, 4, '0', STR_PAD_LEFT) ?></p>
                                    <p><span><?= $this->lang->line("fn_orderhistory_deli_no"); ?>  </span><?= date("D,  M/d/Y", strtotime($t->delivered_on_date)) ?></p>
                                     <p><span><?= $this->lang->line("fn_orderhistory_address"); ?>  </span> <?= $t->address ?></p>
                                    <p><span><?= $this->lang->line("fn_orderhistory_time_no"); ?>  </span> <?= $t->delivered_on_time ?></p>

                                    <div class="location">
                                        <img class="img-responsive loca" src="<?= base_url("assert/fontend/"); ?>img/hi-location.png">
                                        <img class="img-responsive dot" src="<?= base_url("assert/fontend/"); ?>img/hi-g-dot.png">
                                        <img class="img-responsive dot" src="<?= base_url("assert/fontend/"); ?>img/hi-g-dot.png">
                                        <img class="img-responsive dot" src="<?= base_url("assert/fontend/"); ?>img/hi-g-dot.png">
                                        <img class="img-responsive dot" src="<?= base_url("assert/fontend/"); ?>img/hi-w-dot.png">
                                        <img class="img-responsive dot" src="<?= base_url("assert/fontend/"); ?>img/hi-w-dot.png">
                                        <?php
                                        switch ($t->address_type) {
                                            case 1:
                                                ?>
                                                <img class="img-responsive loca icon" src="<?= base_url("assert/fontend/"); ?>img/home.png">
                                                <h6><?= $this->lang->line("fn_home"); ?></h6>
                                                <?php
                                                break;
                                            case 2:
                                                ?>
                                                <img class="img-responsive loca icon" src="<?= base_url("assert/fontend/"); ?>img/office.png">
                                                <h6><?= $this->lang->line("fn_work"); ?></h6>
                                                <?php
                                                break;
                                                ?>
                                                <img class="img-responsive loca icon" src="<?= base_url("assert/fontend/"); ?>img/home.png">
                                                <h6><?= $this->lang->line("fn_other"); ?></h6>
                                            <?php
                                            case 3:
                                                break;
                                        }
                                        ?>
                                    </div>

                                    <div class="list">
                                        <div class="f-list">
                                            <div>
                                                <p><?= implode("<span>+</span>", array_keys(json_decode($t->products, TRUE))) ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-2">
                                <button>Reorder</button>
                                <button onclick="window.location = '<?= base_url("faq") ?>'">Help</button>
                            </div>
                        </div>
                    </div>

                    <?php
                }
            }

            ?>
                    
       


