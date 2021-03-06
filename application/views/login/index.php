<section>
    <div class="container my-container">
        <div class="profile new-signup new-login">
            <div class="row">
                <div class="col-sm-6">
                    <h1><?= $this->lang->line("fn_login"); ?></h1>
                    <div class="form">
                        <?= form_open() ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" data-validation="length" data-validation-length="min5"  placeholder="username / email / mobile no." name="username">

                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="password" class="form-control" data-validation="length" data-validation-length="min5" placeholder="password" name="password">

                                </div>
                            </div>
                        </div>
                        <div class="bill-pay">
                            <div class="billing">
                                <div class="check">
                                    <label class="checkboxcontainer">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="text"><?= $this->lang->line("fn_remember"); ?></span>
                                    <h6><a href="#" class="forgot"  data-toggle="modal" data-target="#forgetModal"> <?= $this->lang->line("fn_forgot"); ?></a>

                                        <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <center><button type="submit" class="btn btn2"><?= $this->lang->line("fn_login"); ?> </button></center>
                        <div class="clearfix"></div>
                        <p><?= $this->lang->line("fn_don`t"); ?> <span><a href="<?= base_url("signup") ?>"><?= $this->lang->line("fn_crate"); ?></a></span></p>
                        <?= form_close() ?>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row blog">
                        <div class="col-md-12">
                            <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                                <ol class="carousel-indicators">
                                    <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#blogCarousel" data-slide-to="1"></li>
                                    <li data-target="#blogCarousel" data-slide-to="2"></li>
                                    <li data-target="#blogCarousel" data-slide-to="3"></li>
                                    <li data-target="#blogCarousel" data-slide-to="4"></li>
                                    <li data-target="#blogCarousel" data-slide-to="5"></li>
                                </ol>

                                <!-- Carousel items -->
                                <div class="carousel-inner">

                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img src="<?= base_url() ?>/assert/fontend/img/slider-img-2.jpg">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img src="<?= base_url() ?>/assert/fontend/img/slider-img-2.jpg">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img src="<?= base_url() ?>/assert/fontend/img/slider-img-2.jpg">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img src="<?= base_url() ?>/assert/fontend/img/slider-img-2.jpg">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img src="<?= base_url() ?>/assert/fontend/img/slider-img-2.jpg">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img src="<?= base_url() ?>/assert/fontend/img/slider-img-2.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="forgetModal" tabindex="-1" role="dialog" aria-labelledby="forgetModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="<?= base_url() ?>assert/fontend/img/date-close.png"/>
                </button>
            </div>
            <?= form_open("login/forget",""); ?>
            <div class="modal-body">
                <div class="row form">
                    <div class="col-10 offset-1">
                        <div class="form-group">
                            <input type="text" class="form-control" data-validation="length" data-validation-length="min5"  placeholder="email" name="username"
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary"><?= $this->lang->line("fn_forgot"); ?></button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
    $.validate();
</script>