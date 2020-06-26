<section>
    <div class="order-history">
        <div class="container my-container">
            <h1><?= $this->lang->line("fn_sub_manaage_head"); ?> </h1>
        </div>
    </div>
</section>
<?php

function getDeffDate($date1, $date2) {
    $date1 = strtotime("$date1 23:59:55");
    $date2 = strtotime("$date2 00:00:00");

// Formulate the Difference between two dates 
    $diff = abs($date2 - $date1);


// To get the year divide the resultant date into 
// total seconds in a year (365*60*60*24) 
    $years = floor($diff / (365 * 60 * 60 * 24));


// To get the month, subtract it with years and 
// divide the resultant date into 
// total seconds in a month (30*60*60*24) 
    $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));


// To get the day, subtract it with years and  
// months and divide the resultant date into 
// total seconds in a days (60*60*24) 
    $days = floor(($diff - $years * 365 * 60 * 60 * 24 -
            $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

    return (($years > 0) ? $year . " Year" : "") . " " . (($months > 0) ? $months . " Months" : "") . " " . (($days > 0) ? $days . " Days" : "");
}
?>
<?php
foreach ($subscription as $sub) {
    ?>
    <section>
        <div class="order-history">
            <div class="container my-container">
                <div class="history manage">
                    <div class="row">
                        <div class="col-sm-12">
                            <button class="curr-btn"><?= date("Ymd", strtotime($sub->from_date)) . sprintf("%04d", $sub->id) ?></button>	
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="text">
                                <h3><?= $this->lang->line("fn_sub_pack"); ?></h3>
                                <?php
                                $products = json_decode($sub->products);
                                foreach ($products as $pro) {
                                    ?>
                                    <h6><?= $pro->name; ?></h6>
                                <?php }
                                ?>
                                <button class="credi-btn">
                                    CREDIT:
                                    <p>$ <?= $sub->total_amount; ?></p>
                                </button>
                                <h3>DELIVER TO </h3>
                                <div class="location">
                                    <img class="img-responsive loca" src="<?= base_url("assert/fontend/"); ?>img/hi-location.png">
                                    <img class="img-responsive dot" src="<?= base_url("assert/fontend/"); ?>img/hi-g-dot.png">
                                    <img class="img-responsive dot" src="<?= base_url("assert/fontend/"); ?>img/hi-g-dot.png">
                                    <img class="img-responsive dot" src="<?= base_url("assert/fontend/"); ?>img/hi-g-dot.png">
                                    <img class="img-responsive dot" src="<?= base_url("assert/fontend/"); ?>img/hi-w-dot.png">
                                    <img class="img-responsive dot" src="<?= base_url("assert/fontend/"); ?>img/hi-w-dot.png">
                                    <?php
                                    if ($sub->address_type == 1) {
                                        ?>
                                        <img class="img-responsive loca icon" src="<?= base_url("assert/fontend/"); ?>img/home.png">
                                        <h6><?= $this->lang->line("fn_home"); ?></h6>
                                        <?php
                                    } else if ($sub->address_type == 2) {
                                        ?>
                                        <img class="img-responsive loca icon" src="<?= base_url("assert/fontend/"); ?>img/office.png">
                                        <h6><?= $this->lang->line("fn_work"); ?></h6>
                                        <?php
                                    } else if ($sub->address_type == 3) {
                                        ?>
                                        <img class="img-responsive loca icon" src="<?= base_url("assert/fontend/"); ?>img/other.png">
                                        <h6><?= $this->lang->line("fn_other"); ?></h6>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-12">
                            <div class="text">
                                <h3><?= $this->lang->line("fn_sub_manaage_order"); ?></h3>
                                <button class="credi-btn">
                                    <p><?= $this->lang->line("fn_sub_manaage_order_period"); ?> <?= getDeffDate($sub->from_date, $sub->to_date) ?> </p>
                                </button>
                                <?php
                                if ($sub->day_of_week == "5d") {
                                    ?>
                                    <h2>EVERYDAY</h2>
                                    <h3>(<?= $this->lang->line("days_name")[1]; ?> , <?= $this->lang->line("days_name")[2]; ?> ) </h3>
                                    <?php
                                } else if ($sub->day_of_week == "2d") {
                                    ?>
                                    <h2>twice a day</h2>
                                    <h3>( 
                                        <?php
                                        foreach (json_decode($sub->days) as $da) {
                                            echo $this->lang->line("days_name")[$da] . " ,";
                                        }
                                        ?>
                                        ) </h3>
                                    <?php
                                } else if (json_decode($sub->days) == "1d") {
                                    ?>
                                    <h2><?= $this->lang->line("fn_sub_manaage_order_once"); ?></h2>
                                    <h3>( 
                                        <?php
                                        foreach (json_decode($sub->days) as $da) {
                                            echo $this->lang->line("days_name")[$da];
                                        }
                                        ?>
                                        ) </h3>
                                    <?php
                                } else if (json_decode($sub->days) == "1d2w") {
                                    ?>
                                    <h2><?= $this->lang->line("fn_sub_manaage_order_once_every"); ?></h2>
                                    <h3>( 
                                        <?php
                                        foreach (json_decode($sub->days) as $da) {
                                            echo $this->lang->line("days_name")[$da];
                                        }
                                        ?>
                                        ) </h3>
                                    <?php
                                }
                                ?>
                                <div class="week">
                                    <center>
                                        <ul>
                                            <li>
                                                <div class="circ mon <?= (in_array(1, json_decode($sub->days))) ? "active" : "" ?>">
                                                    <p><?= $this->lang->line("days_name")[1]; ?></p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="circ tue <?= (in_array(2, json_decode($sub->days))) ? "active" : "" ?>">
                                                    <p><?= $this->lang->line("days_name")[2]; ?></p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="circ wed <?= (in_array(3, json_decode($sub->days))) ? "active" : "" ?>">
                                                    <p><?= $this->lang->line("days_name")[3]; ?></p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="circ thu <?= (in_array(4, json_decode($sub->days))) ? "active" : "" ?>">
                                                    <p><?= $this->lang->line("days_name")[4]; ?></p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="circ fri <?= (in_array(5, json_decode($sub->days))) ? "active" : "" ?>">
                                                    <p><?= $this->lang->line("days_name")[5]; ?></p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="circ sat <?= (in_array(6, json_decode($sub->days))) ? "active" : "" ?>">
                                                    <p><?= $this->lang->line("days_name")[6]; ?></p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="circ sun <?= (in_array(7, json_decode($sub->days))) ? "active" : "" ?>">
                                                    <p><?= $this->lang->line("days_name")[7]; ?></p>
                                                </div>
                                            </li>
                                            <div class="clearfix"></div>
                                        </ul>
                                    </center>
                                </div>
                            </div>
                            <div class="edit-btn">
                                <div class="row">
                                    <?php
                                    if ($sub->status == 0) {
                                        ?>
                                        <div class="col-sm-12 col-md-6"> <button><?= $this->lang->line("btn_edit"); ?></button> </div>
                                        <?php
                                    }
                                    ?>
                                        <div class="col-sm-12 col-md-6"> <button onclick="window.location = '<?=base_url("faq")?>'">HELP</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="text">
                                <h3><?= $this->lang->line("fn_sub_manaage_next_date"); ?></h3>
                                <h6><?= date("D, M/d/Y", strtotime((is_null($sub->next_order_date)) ? $sub->from_date : $sub->next_order_date)) ?> </h6>
                                <button onclick="window.location.href='<?=  base_url("wallet/subscription/")?>'">VIEW PAYMENT HISTORY</button>
                                <h3>PAYMENT MODE</h3>
                                <button class="saved-btn"><P>SAVED PAYMENT <span><?= $sub->card; ?></span><span class="visa text-uppercase"><?= $sub->card_type; ?></span></P></button>
                                <?php
                                if ($sub->status == 0) {
                                    ?>
                                <button class="cancel remove-btn" data-id="<?=  urlencode(base64_encode($sub->id));?>"><?= $this->lang->line("fn_sub_manaage_cancel"); ?></button>
                                    <?php
                                } else if ($sub->status == 1) {
                                    ?>
                                    <button class="cancel"><?= $this->lang->line("fn_sub_manaage_complete"); ?></button>
                                    <?php
                                } else if ($sub->status == 2) {
                                    ?>
                                    <button class="cancel"><?= $this->lang->line("fn_sub_manaage_cancled_sub"); ?></button>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <?php
}
?>
<section>
    <div class="load-more">
        <button>
            <?= $this->lang->line("fn_sub_manaage_load"); ?> 
        </button>
    </div>
</section>
<script>
    $(document).on("click", ".remove-btn", function () {
        var id = $(this).data("id");

        bootbox.confirm({
            message: "<?= $this->lang->line("fn_subscription_cancel_msg"); ?>",
            buttons: {
                confirm: {
                    label: 'Yes',
                    className: 'btn-success'
                },
                cancel: {
                    label: 'No',
                    className: 'btn-danger'
                }
            },
            callback: function (result) {
                if (result) {
                    window.location.href = '<?= base_url("subscription/cancel/"); ?>' + id;
                }
            }
        });
    });

</script>