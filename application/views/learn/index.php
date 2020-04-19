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
                <div class="col-md-2 m-3 learn-bg searchfor" title="<?= implode(", ",$f->vitamin); ?>">
                        <center> 
                            <img src="<?= base_url() ?>assert/fruit/<?= $f->img; ?>" class="w-50 my-3">
                            <p><strong><?= $f->name ?></strong></p>
                        </center>
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
        }else{
            $(".searchfor").show();
        }
    });
</script>