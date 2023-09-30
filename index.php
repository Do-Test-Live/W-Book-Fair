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

<div id="main">
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
                                <h1>HONG KONG</h1>
                                <h2>香港館 PAVILION</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider-area-end -->

    <?php include ('include/sidebar.php');?>



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
</div>


<!-- all js here -->
<?php include('include/js.php'); ?>


</body>

</html>