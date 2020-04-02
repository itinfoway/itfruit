<?php

/**
 * Description of Users
 * https://itinfoway.com
 * @author Admin
 */
?>
<?php if (!empty($partner) || !empty($people)) {
?>
    <link rel="stylesheet" href="<?= base_url("assert/fontend/css/") ?>/owl.carousel.min.css">
<?php
}
?>
<section>
    <div id="mainslider" class="carousel slide" data-ride="carousel" data-interval="3000">
        <div class="carousel-inner">
            <?php
            if (!empty($slidermain)) {
                $count = 0;
                foreach ($slidermain as $h) {
            ?>
                    <div class="carousel-item <?= ($count == 0) ? "active" : "";
                                                $count++; ?>">
                        <div class="home-bg" style="background-image: url(<?= base_url("assert/slidermain/" . $h->img) ?>)">
                            <a href="#"><img class="img-responsive order-btn" src="<?= base_url("assert/fontend/img/order-now.png"); ?>"></a>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
        <a class="carousel-control-prev" href="#mainslider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#mainslider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<section>
    <div class="container my-container">
        <div class="how-work-sec">
            <img class="fruits strawberry" src="<?= base_url("assert/fontend/img/strawberry.svg"); ?>">
            <img class="fruits grapes" src="<?= base_url("assert/fontend/img/grapes.svg"); ?>">
            <h1>HOW IT'S WORK?</h1>
            <div class="row">
                <div class="col-sm-3">
                    <img class="home-icon" src="<?= base_url("assert/fontend/img/icon-b.png"); ?>">
                    <p>
                        <b>Get sliced credits or regular subscription</b>
                    </p>
                </div>
                <div class="col-sm-3">
                    <img class="home-icon" src="<?= base_url("assert/fontend/img/icon-y.png"); ?>">
                    <p>
                        <b>Choose from our 10 handcrafted curated fruit boxes, date and time</b>
                    </p>
                </div>
                <div class="col-sm-3">
                    <img class="home-icon" src="<?= base_url("assert/fontend/img/icon-r.png"); ?>">
                    <p>
                        <b>Our partners at work! We will craft out the best chosen fruit to you</b>
                    </p>
                </div>
                <div class="col-sm-3">
                    <img class="home-icon" src="<?= base_url("assert/fontend/img/icon-g.png"); ?>">
                    <p>
                        <b>Sit back and wait for your order!</b>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="about">
        <div class="container my-container">
            <img class="fruits berry" src="<?= base_url("assert/fontend/img/berry.svg"); ?>">
            <img class="fruits avocado" src="<?= base_url("assert/fontend/img/avocado.svg"); ?>">
            <h2>WHAT ARE WE ABOUT?</h2>
            <div class="row">
                <div class="col-sm-4">
                    <div class="title-part">
                        <h1><img class="abt-icon" src="<?= base_url("assert/fontend/img/about-icon-1.png"); ?>">FRESH</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                    </div>
                    <div class="title-part">
                        <h1><img class="abt-icon" src="<?= base_url("assert/fontend/img/about-icon-2.png"); ?>">HEALTHY</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                    </div>
                    <div class="title-part">
                        <h1><img class="abt-icon" src="<?= base_url("assert/fontend/img/about-icon-3.png"); ?>">ECO</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <img class="watermelon" src="<?= base_url("assert/fontend/img/watermelon.svg"); ?>">
                    <div class="about-text">
                        <ul>
                            <li>
                                <img class="" src="<?= base_url("assert/fontend/img/about-arrow-left.png"); ?>">
                            </li>
                            <li>
                                <div class="what-text">
                                    <h3>WHAT</h3>
                                    <h3>ARE</h3>
                                    <h3>WE</h3>
                                    <h3>ABOUT?</h3>
                                </div>
                            </li>
                            <li>
                                <img class="" src="<?= base_url("assert/fontend/img/about-arrow-right.png"); ?>">
                            </li>
                    </div>
                    <img class="f-bag" src="<?= base_url("assert/fontend/img/f-bag.png"); ?>">
                </div>
                <div class="col-sm-4">
                    <div class="title-part title-part-v2">
                        <h1><img class="mobile-icon" src="<?= base_url("assert/fontend/img/about-icon-4.png"); ?>">TASTY<img class="icon-v2" src="<?= base_url("assert/fontend/img/about-icon-4.png"); ?>"></h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                    </div>
                    <div class="title-part title-part-v2">
                        <h1><img class="mobile-icon" src="<?= base_url("assert/fontend/img/about-icon-5.png"); ?>">YUMMY<img class="icon-v2" src="<?= base_url("assert/fontend/img/about-icon-5.png"); ?>"></h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                    </div>
                    <div class="title-part title-part-v2">
                        <h1><img class="mobile-icon" src="<?= base_url("assert/fontend/img/about-icon-6.png"); ?>">PREMIUM<img class="icon-v2" src="<?= base_url("assert/fontend/img/about-icon-6.png"); ?>"></h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php if (!empty($partner)) {
?>
    <section>
        <div class="container my-container">
            <div class="our-partner">
                <h3>OUR PARTNER</h3>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="loop-carousel-partner owl-carousel owl-theme">
                            <?php foreach ($partner as $p) {
                            ?>
                                <div class="item">
                                    <a href="<?= $p->link; ?>" target="_blank">
                                        <div class="p-frame">
                                            <img src="<?= base_url("assert/partner/" . $p->img); ?>" alt="<?= $p->name ?>">
                                        </div>
                                    </a>
                                </div>
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
    <div class="why-choose-us">
        <img class="fruits berry" src="<?= base_url("assert/fontend/img/banana.svg"); ?>">
        <img class="fruits avocado" src="<?= base_url("assert/fontend/img/orange.svg"); ?>">
        <div class="container my-container">
            <div class="row">
                <div class="col-sm-6 img-part">
                    <img class="" src="<?= base_url("assert/fontend/img/girl-img.png"); ?>">
                </div>
                <div class="col-sm-6">
                    <h1>WHY CHOOSE US</h1>
                    <h2>100% FRESH ORGANIC FRUITS</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                    <h2>FAST DELIVERY</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                    <h2>RICH EXPERIENCE</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php if (!empty($people)) {
?>
    <section>
        <div class="what-people-say">
            <div class="container my-container">
                <h1>WHAT PEOPLE SAY</h1>
                <div class="loop-carousel-people owl-carousel owl-theme">
                    <?php
                    $count = 0;
                    foreach ($people as $p) {
                        if ($count % 2 == 0) {
                    ?>
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img class="" src="<?= base_url("assert/people/" . $p->img); ?>" alt="<?= $p->name ?>">
                                    </div>
                                    <div class="col-sm-9">
                                        <h5><?= $p->name ?></h5>
                                        <p><b><?= $p->comment ?></b></p>
                                    </div>
                                </div>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="item">
                                <div class="row part-two">
                                    <div class="col-sm-3 img-none">
                                        <img class="" src="<?= base_url("assert/people/" . $p->img); ?>" alt="<?= $p->name ?>">
                                    </div>
                                    <div class="col-sm-9">
                                        <h5><?= $p->name ?></h5>
                                        <p><b><?= $p->comment ?></b></p>
                                    </div>
                                    <div class="col-sm-3 img-block">
                                        <img class="" src="<?= base_url("assert/people/" . $p->img); ?>" alt="<?= $p->name ?>">
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                        $count++;
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php
}
?>
<?php if (!empty($partner) || !empty($people)) {
?>
    <script src="<?= base_url("assert/fontend/js/owl.carousel.min.js"); ?>"></script>
    <script>
        <?php if (!empty($partner)) {
        ?>
            $('.loop-carousel-partner').owlCarousel({
                loop: true,
                margin: 8,
                autoplay: true,
                responsiveClass: true,
                pullDrag: false,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false,
                    },
                    600: {
                        items: 2,
                        nav: false,
                    },
                    1000: {
                        items: 4,
                        nav: false,
                    }
                }
            });
        <?php
        }
        ?>
        <?php if (!empty($people)) {
        ?>
            $('.loop-carousel-people').owlCarousel({
                loop: true,
                margin: 8,
                autoplay: true,
                responsiveClass: true,
                pullDrag: false,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false,
                    },
                    600: {
                        items: 1,
                        nav: false,
                    },
                    1000: {
                        items: 1,
                        nav: false,
                    }
                }
            });
        <?php
        }
        ?>
    </script>
<?php
}
?>