<section>
    <div class="container my-container">
        <div class="profile new-signup new-login">
            <div class="row">
                <div class="col-sm-6">
                    <h1><?= $this->lang->line("fn_forgot"); ?></h1>
                    <div class="form">
                        <?= form_open() ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="password" class="form-control" data-validation="length"  data-validation-length="8-10" placeholder="password" name="password">

                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="CONFIRM password" data-validation="confirmation" data-validation-confirm="password">

                                </div>
                            </div>
                        </div>

                        <center><button type="submit" class="btn btn2"><?= $this->lang->line("fn_change_password"); ?> </button></center>
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

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
    $.validate();
</script>