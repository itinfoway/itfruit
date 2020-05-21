<section class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center h1-bg">learn</h1>
        </div>
    </div>
</section>
<section class="container-fluid">
    <div class="row">
        <div class="col-md-2 px-2">
            <button class="btn btn-block btn-primary search active" value="all"><h4>ALL</h4></button>
            <?php
            foreach ($vitamin as $v) {
                ?>
                <button class="btn btn-block btn-primary search" value="<?= $v->name ?>"><h4><?= $v->name ?></h4></button>
                <?php
            }
            ?>
        </div>
        <div class="col-md-10">
            <div class="row">
                <?php
                foreach ($fruit as $f) {
                    ?>
                    <div class="col-md-2 m-3 learn-bg searchfor pointer" title="<?= implode(", ", $f->vitamin); ?>" data-toggle="modal" data-target="#<?= str_replace(" ", "", $f->name); ?>">
                        <center> 
                            <img src="<?= base_url() ?>assert/fruit/<?= $f->img; ?>" class="w-50 my-3">
                            <p><strong><?= $f->name ?></strong></p>
                        </center>
                    </div>
                    <div class="modal fade" id="<?= str_replace(" ", "", $f->name); ?>" tabindex="-1" role="dialog" aria-labelledby="addToCarteLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content modal-bg-yellow">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <img src="<?= base_url() ?>assert/fontend/img/date-close.png"/>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <div class="row justify-content-center">
                                        <div class="col-md-3 col-6 learn-bg learn-bg-w">
                                            <center> 
                                                <img src="<?= base_url() ?>assert/fruit/<?= $f->img; ?>" class="w-50 my-3">
                                                <p><strong><?= $f->name ?></strong></p>
                                            </center>
                                        </div>
                                    </div> 
                                    <div class="row justify-content-center">
                                        <div class="col-10 text-center pt-5">
                                            <?= $f->description; ?>
                                            <button class="btn btn-primary p-3 my-2">Amount per : 100 grams</button>
                                        </div>
                                    </div>
                                    <div class="row justify-content-lg-center">
                                        <div class="col-10 mb-5 text-md-left text-center">
                                            <?php
                                            if(isset($f->vitamin)) {
                                                foreach ($f->vitamin as $ve) {
                                                    ?>
                                                    <button class="btn btn-success m-1 d-table-cell"><?= $ve ?></button>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).on("click", ".search", function () {
        var data = $(this).val();
        $(".search").removeClass("active");
        if (data != "all") {
            $(this).addClass("active");
            $(".searchfor").hide();
            $(".searchfor[title*='" + data + "']").show();
        } else {
            $(".searchfor").show();
        }
    });
</script>