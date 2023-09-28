<?php
$page = 'home';
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home - Hong Kong Pavilion</title>
    <?php include('include/css.php'); ?>
</head>

<body>
<!-- header-area-start -->
<?php include('include/header.php'); ?>
<!-- header-area-end -->


<!-- slider-area-start -->
<div class="slider-area">
    <div class="slider-active owl-carousel">
        <div class="single-slider pt-125 pb-130 bg-img" style="background-image:url(img/slider/1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="slider-content slider-animated-1 text-center">
                            <h1>Hong Kong</h1>
                            <h2>Pavilion</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider-area-end -->

<button class="uk-button uk-button-default centered-button" type="button" uk-toggle="target: #offcanvas-flip;"><span uk-icon="icon: chevron-double-left; ratio: 1"></span></button>

<div id="offcanvas-flip" uk-offcanvas="flip: true; overlay: true; mode: push">
    <div class="uk-offcanvas-bar">
        <button class="uk-offcanvas-close" type="button" uk-close></button>
        <div class="row">
            <div class="col-12 text-center">
                <span uk-icon="icon: comments; ratio: 2">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-3 my-auto">
                <img src="img/author/Avater.png" alt="profile image" class="img-fluid">
            </div>
            <div class="col-4 my-auto">
                <div class="row">
                    <div class="col-12">
                        <span class="user-name">User 1</span>
                    </div>
                    <div class="col-12">
                        <span class="user-message">Test Message</span>
                    </div>
                </div>
            </div>
            <div class="col-5 my-auto">
                <span class="date-time">27/06/2023 04:50pm</span>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-3 my-auto">
                <img src="img/author/Avater.png" alt="profile image" class="img-fluid">
            </div>
            <div class="col-4 my-auto">
                <div class="row">
                    <div class="col-12">
                        <span class="user-name">User 1</span>
                    </div>
                    <div class="col-12">
                        <span class="user-message">Test Message</span>
                    </div>
                </div>
            </div>
            <div class="col-5 my-auto">
                <span class="date-time">27/06/2023 04:50pm</span>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-3 my-auto">
                <img src="img/author/Avater.png" alt="profile image" class="img-fluid">
            </div>
            <div class="col-4 my-auto">
                <div class="row">
                    <div class="col-12">
                        <span class="user-name">User 1</span>
                    </div>
                    <div class="col-12">
                        <span class="user-message">Test Message</span>
                    </div>
                </div>
            </div>
            <div class="col-5 my-auto">
                <span class="date-time">27/06/2023 04:50pm</span>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-3 my-auto">
                <img src="img/author/Avater.png" alt="profile image" class="img-fluid">
            </div>
            <div class="col-4 my-auto">
                <div class="row">
                    <div class="col-12">
                        <span class="user-name">User 1</span>
                    </div>
                    <div class="col-12">
                        <span class="user-message">Test Message</span>
                    </div>
                </div>
            </div>
            <div class="col-5 my-auto">
                <span class="date-time">27/06/2023 04:50pm</span>
            </div>
        </div>
    </div>
</div>


<!-- bestseller-area-start -->
<div class="bestseller-area pb-100" style="margin-top: 100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <video width="100%" controls>
                    <source src="https://player.vimeo.com/external/194837908.sd.mp4?s=c350076905b78c67f74d7ee39fdb4fef01d12420&profile_id=164" type="video/mp4">
                    Your browser does not support the video tag.
                </video>

            </div>
        </div>
    </div>
</div>
<!-- bestseller-area-end -->




<!-- footer-area-start -->
<?php include('include/footer.php'); ?>
<!-- footer-area-end -->


<!-- all js here -->
<?php include('include/js.php'); ?>



</body>

</html>