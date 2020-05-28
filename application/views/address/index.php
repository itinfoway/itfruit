<section>
    <div class="address">
        <div class="container my-container">
            <div class="add-address">
                <img class="fruits pinapple" src="<?= base_url(); ?>assert/fontend/img/pinapple.svg">
                <img class="fruits strawberry" src="<?= base_url(); ?>assert/fontend/img/strawberry.svg">
                <a href="<?= base_url("address/add"); ?>">
                    <center>
                        <h1><?= $this->lang->line("fn_address_head"); ?></h1>
                    </center>
                </a>
            </div>
        </div>
    </div>
</section>
<?php
if (!empty($data)) {
    ?>
    <section>
        <div class="saved-add">
            <img class="fruits watermelon" src="<?= base_url(); ?>assert/fontend/img/watermelon.svg">
            <img class="fruits grapes" src="<?= base_url(); ?>assert/fontend/img/grapes.svg">
            <img class="fruits orange" src="<?= base_url(); ?>assert/fontend/img/orange.svg">
            <img class="fruits avocado" src="<?= base_url(); ?>assert/fontend/img/avocado.svg">
            <!-- <img class="fruits berry" src="<?= base_url(); ?>assert/fontend/img/berry.svg"> -->
            <div class="container my-containe ">
                <center>
                     <h1><?= $this->lang->line("fn_address_save"); ?></h1>
                </center>
                <div class="add-part">
                    <div class="row">
                        <?php
                        foreach ($data as $d) {
                            ?>
                            <div class="col-sm-6">
                                <div class="text-part">
                                    <div class="row">

                                        <?php
                                        if ($d->type == 1) {
                                            ?>
                                            <div class="col-xs-3">
                                                <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/home.png">
                                            </div>
                                            <div class="col-xs-9">
                                                <p>Home</p>
                                            </div>
                                            <?php
                                        } else if ($d->type == 2) {
                                            ?>
                                            <div class="col-xs-3">
                                                <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/office.png">
                                            </div>
                                            <div class="col-xs-9">
                                                <p>Work</p>
                                            </div>
                                            <?php
                                        } else if ($d->type == 3) {
                                            ?>
                                            <div class="col-xs-3">
                                                <img class="img-responsive" src="<?= base_url(); ?>assert/fontend/img/location.svg">
                                            </div>
                                            <div class="col-xs-9">
                                                <p>Other</p>
                                            </div>
                                            <?php
                                        }
                                        ?>

                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="location">
                                                <p><?= $d->address1 ?></p>
                                                <p><?= $d->address2 ?></p>
                                                <p><?= $d->city ?>-<?= $d->postalcode ?>, <?= $d->state ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="buttons">
                                            <div class="col-xs-6">
                                                <a href="<?= base_url("address/edit/" . urlencode(base64_encode($d->id))); ?>"><button class="edit-btn">EDIT</button></a>
                                            </div>
                                            <div class="col-xs-6">
                                                <button class="remove-btn" data-id="<?= urlencode(base64_encode($d->id)) ?>">REMOVE</button>
                                            </div>
                                            <div class="clearfix"></div>
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
        </div>
    </section>
    <?php
}
?>
<script>
    $(document).on("click", ".remove-btn", function () {
        var id=$(this).data("id");
        
        bootbox.confirm({
            message: "<?= $this->lang->line("fn_delete_confirm_msg"); ?>",
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
                    window.location.href = '<?= base_url("address/delete/"); ?>'+id;
                }
            }
        });
    });

</script>