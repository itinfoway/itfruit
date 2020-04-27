<?php
/**
 * Description of index
 * https://itinfoway.com
 * @author Admin
 */
?>
<div class="container-fluid">
    <div class="row p-3">
        <div class="col-md-9">
            <div class="row">
                <?php
                if (!empty($blog)) {
                    foreach ($blog as $b) {
                        ?>
                        <div class="col-md-12 text-center">
                            <h2 class="text-green"><?= $b->title; ?></h2>
                            <b><?= date('F d, Y', strtotime($b->date_time)) ?></b>
                            <img src="<?= base_url() ?>assert/blog/<?= $b->img; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-md-12">
                            <p><?= $b->description; ?> </p>
                        </div>
                        <div class="col-md-12">
                            
                        </div>
                        <?php
                    }
                }
                ?>

            </div>
        </div>  
        <div class="col-md-3">
            <?php
            if (!empty($blog)) {
                ?>
                <div class="row border-left-orange">
                    <div class="col-md-12">
                        <h2 class="text-green"><?= $this->lang->line("fn_recent_post"); ?></h2>
                        <hr class="green">
                        <?php
                        $cout = 0;
                        foreach ($blog as $b) {
                            ?>
                            <a href="<?= base_url(); ?>blog/read-more/<?= $b->id ?>" class="text-link">
                                <div class="row">
                                    <div class="col-4"><img src="<?= base_url() ?>assert/blog/<?= $b->img ?>" class="w-100 img-thumbnail"></div>
                                    <div class="col-8"><h5><?= $b->title ?></h5></div>
                                </div>
                            </a>
                            <hr class="green">
                            <?php
                            $cout++;
                            if ($cout > 3) {
                                break;
                            }
                        }
                        ?>
                    </div>
                </div>
                <?php
            }
            if (!empty($category)) {
                ?>
                <div class="row border-left-orange my-5">
                    <div class="col-md-12">
                        <h2  class="text-green"><?= $this->lang->line("fn_category"); ?></h2>
                        <hr class="green">
                        <ul class="list-group">
                            <?php
                            foreach ($category as $cat) {
                                ?>
                                <li class="list-group-item"><a href="<?= base_url() ?>blog/category/<?= str_replace(" ", "-", $cat->name) ?>" class="link"><?= $cat->name ?></a></li>
                                    <?php
                                }
                                ?>
                        </ul>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
</section>