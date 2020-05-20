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
                            <h2 class="text-green frut-h-tag"><?= $b->title; ?></h2>
                            <b><?= date('F d, Y', strtotime($b->date_time)) ?></b>
                            <img src="<?= base_url() ?>assert/blog/<?= $b->img; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-md-12">
                            <p><?= $b->description; ?> </p>
                        </div>
                        <div class="col-md-12">
                            <hr class="green mb-0 frut-h-tag">
                            <h1 class="text-right text-green my-0 py-1">share this 
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urldecode(base_url("blog/read-more/").$b->id);?>&t=<?= urldecode($b->title."\n");?>" target="_blank"><img class="img-responsive" width="50px" src="<?= base_url("assert/fontend/") ?>img/fb-blue.svg"></a>
                                <a href="http://twitter.com/share?text=<?= urldecode($b->title."\n");?>&url=<?= urldecode(base_url("blog/read-more/").$b->id);?>" target="_blank"><img class="img-responsive" width="50px" src="<?= base_url("assert/fontend/") ?>img/twtter.svg"></a>
                            </h1>
                            <hr class="green mt-0">
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
                        <h2 class="text-green frut-h-tag"><?= $this->lang->line("fn_recent_post"); ?></h2>
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
                        <h2  class="text-green frut-h-tag"><?= $this->lang->line("fn_category"); ?></h2>
                        <hr class="green mb-0">
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