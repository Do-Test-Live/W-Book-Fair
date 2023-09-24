<!DOCTYPE html>
<html lang="en">

<head>
    <!-- PAGE TITLE HERE -->
    <title>Bookland Book Store Ecommerce Website</title>
    <link rel="stylesheet" type="text/css" href="css/video.css">
    <?php include('include/css.php'); ?>
</head>
<body>

<div class="page-wraper">
    <?php include('include/preloader.php'); ?>

    <!-- Header -->
    <?php include('include/header.php'); ?>
    <!-- Header End -->

    <div class="page-content bg-white">

        <!--Swiper Banner Start -->
        <div class="main-slider style-1">
            <div class="main-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide bg-blue" style="background-image: url(images/background/waveelement.png);">
                        <div class="container">
                            <div class="banner-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="swiper-content">
                                            <div class="content-info">
                                                <h1 class="title mb-0" data-swiper-parallax="-20">Hong Kong Pavilion</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="banner-media" data-swiper-parallax="-100">
                                            <img src="images/banner/banner-media.png" alt="banner-media">
                                        </div>
                                        <img class="pattern" src="images/Group.png" data-swiper-parallax="-100"
                                             alt="dots">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container swiper-pagination-wrapper">
                    <div class="swiper-pagination-five"></div>
                </div>
            </div>
            <div class="swiper main-swiper-thumb">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                    </div>
                </div>
            </div>
        </div>
        <!--Swiper Banner End-->

        <!-- Client Start-->
        <div class="bg-white py-5">
            <div class="container">
                <!--Client Swiper -->
                <div class="swiper client-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="images/client/client1.svg" alt="client"></div>
                        <div class="swiper-slide"><img src="images/client/client2.svg" alt="client"></div>
                        <div class="swiper-slide"><img src="images/client/client3.svg" alt="client"></div>
                        <div class="swiper-slide"><img src="images/client/client4.svg" alt="client"></div>
                        <div class="swiper-slide"><img src="images/client/client5.svg" alt="client"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Client End-->

        <!--Recommend Section Start-->
        <section class="content-inner-1 bg-grey reccomend" style="height: 500px;">
            <div class="container">
                <!-- Swiper -->
                <div class="row">
                    <div class="col-12">
                        <video id="my-video" class="video-js" controls preload="auto" poster="images/video_bg.png" data-setup='' loop>
                            <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type='video/mp4'>
                        </video>
                    </div>
                </div>
            </div>
        </section>

        <!-- Newsletter -->
        <section class="py-5 newsletter-wrapper"
                 style="background-image: url('images/background/bg1.jpg'); background-size: cover;">
            <div class="container">
                <div class="subscride-inner">
                    <div class="row style-1 justify-content-xl-between justify-content-lg-center align-items-center text-xl-start text-center">
                        <div class="col-xl-7 col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="section-head mb-0">
                                <h2 class="title text-white my-lg-3 mt-0">Subscribe our newsletter for newest books
                                    updates</h2>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                            <form class="dzSubscribe style-1"
                                  action="https://bookland.dexignzone.com/xhtml/script/mailchamp.php" method="post">
                                <div class="dzSubscribeMsg"></div>
                                <div class="form-group">
                                    <div class="input-group mb-0">
                                        <input name="dzEmail" required="required" type="email"
                                               class="form-control bg-transparent text-white"
                                               placeholder="Your Email Address">
                                        <div class="input-group-addon">
                                            <button name="submit" value="Submit" type="submit"
                                                    class="btn btn-primary btnhover">
                                                <span>SUBSCRIBE</span>
                                                <i class="fa-solid fa-paper-plane"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Newsletter End -->

    </div>

    <?php include('include/footer.php'); ?>
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<?php include('include/js.php'); ?>
</body>

</html>