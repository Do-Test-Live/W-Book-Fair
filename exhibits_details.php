<?php
$page = 'exhibits';
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Exhibits - Hong Kong Pavilion</title>
    <link rel='stylesheet' href='https://unpkg.com/xzoom/dist/xzoom.css'>
    <?php include('include/css.php'); ?>
</head>

<body>
<!-- header-area-start -->
<?php include('include/header.php'); ?>
<!-- header-area-end -->

<?php include ('include/sidebar.php');?>

<div class="product-main-area mb-70 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 order-lg-1 order-1">
                <!-- product-main-area-start -->
                <div class="product-main-area">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-12">
                            <div class="xzoom-container">
                                <img class="xzoom" id="xzoom-default"
                                     src="img/flex/Demo.jpg" width="400" height="400"
                                     xoriginal="img/flex/Demo.jpg"/>
                                <div class="xzoom-thumbs">
                                    <a href="img/flex/Demo.jpg">
                                        <img class="xzoom-gallery" width="80"
                                             src="img/flex/Demo.jpg"></a>

                                    <a href="img/flex/Demo.jpg">
                                        <img class="xzoom-gallery" width="80"
                                             src="img/flex/Demo.jpg"></a>

                                    <a href="img/flex/Demo.jpg">
                                        <img class="xzoom-gallery" width="80"
                                             src="img/flex/Demo.jpg"></a>

                                    <a href="img/flex/Demo.jpg">
                                        <img class="xzoom-gallery" width="80"
                                             src="img/flex/Demo.jpg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 col-12">
                            <div class="product-info-main">
                                <div class="page-title">
                                    <h1>Exhibit Name</h1>
                                </div>
                                <div class="product-info-stock-sku">
                                    <span>Publication Date: 24 Sep, 2023</span>
                                    <div class="product-attribute">
                                        <span>ISBN: </span>
                                    </div>
                                </div>

                                <div class="product-info-price">
                                    <div class="price-final">
                                        <span>Author Name</span>
                                    </div>
                                </div>

                                <div class="product-social-links">
                                    <div class="product-addto-links-text">
                                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure
                                            and praising pain was born and I will give you a complete account of the
                                            system, and expound the actual teachings of the great explorer of the truth,
                                            the master-builder of human happiness. No one rejects, dislikes, or avoids
                                            pleasure itself, because it is pleasure, but because those who do not know
                                            how to pursue pleasure rationally encounter consequences that are extremely
                                            painful. Nor again is there anyone who loves or pursues or desires to obtain
                                            pain of itself, because it is pain, but because occasionally circumstances
                                            occur in which toil and pain can procure him some great pleasure. To take a
                                            trivial example, which of us ever undertakes laborious physical exercise,
                                            except to obtain some advantage from it? But who has any right to find fault
                                            with a man who chooses to enjoy a pleasure that has no annoying
                                            consequences, or one who avoids a pain that produces no resultant
                                            pleasure?</p>
                                        <div class="row slider-content mx-auto">
                                            <div class="col-lg-4 col-md-4 col-6">
                                                <a href="#">Voice</a>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-6">
                                                <a href="#">Stop</a>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-6">
                                                <a href="#">Contact Us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product-main-area-end -->
                <!-- product-info-area-start -->
                <div class="product-info-area mt-80">
                    <!-- Nav tabs -->
                    <ul class="nav" role="tablist">
                        <li><a class="active" style="font-size: 20px" href="#Details" data-bs-toggle="tab" aria-selected="true" role="tab">Product Description</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="Details" role="tabpanel">
                            <div class="valu" style="line-height: 40px;">
                                <ul>
                                    <li><i class="fa fa-circle"></i>Exhibit Type : <span style="font-weight: normal">  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span></li>
                                    <li><i class="fa fa-circle"></i>Exhibit Category : <span style="font-weight: normal"> Lorem ipsum sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span></li>
                                    <li><i class="fa fa-circle"></i>Contact Name : <span style="font-weight: normal"> Lorem ipsum </span></li>
                                    <li><i class="fa fa-circle"></i>Title :  <span style="font-weight: normal"> Lorem ipsum sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span></li>
                                    <li><i class="fa fa-circle"></i>Contact Email : <span style="font-weight: normal"> example@gmail.com</span></li>
                                    <li><i class="fa fa-circle"></i>Contact Phone : <span style="font-weight: normal"> 0000000000</span></li>
                                    <li><i class="fa fa-circle"></i>Contact Fax : <span style="font-weight: normal"> 00000000</span></li>
                                    <li><i class="fa fa-circle"></i>Contact Website : <span style="font-weight: normal"> xxxxxxxxx</span></li>
                                    <li><i class="fa fa-circle"></i>Contact Address : <span style="font-weight: normal"> Lorem ipsum sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span></li>
                                </ul>
                                <p style="padding: 5px;">Share On:</p>
                                <div class="product-addto-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product-info-area-end -->
                <!-- new-book-area-start -->
                <div class="new-book-area mt-60">
                    <div class="section-title text-center mb-30">
                        <h3>Company Exhibit List</h3>
                    </div>
                    <div class="tab-active-2 owl-carousel owl-loaded owl-drag">
                        <!-- single-product-end -->
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                 style="transform: translate3d(-1240px, 0px, 0px); transition: all 1s ease 0s; width: 2481px;">
                                <div class="owl-item active" style="width: 206.75px;">
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="exhibits_details.php">
                                                <img src="img/product/1.jpg" alt="book" class="primary">
                                            </a>
                                            <div class="quick-view">
                                                <a class="action-view" href="exhibits_details.php" title="Details">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-details text-center">
                                            <h4><a href="exhibits_details.php">Company Exhibit Name</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav disabled">
                            <button type="button" role="presentation" class="owl-prev"><i class="fa fa-angle-left"></i>
                            </button>
                            <button type="button" role="presentation" class="owl-next"><i class="fa fa-angle-right"></i>
                            </button>
                        </div>
                        <div class="owl-dots disabled">
                            <button role="button" class="owl-dot active"><span></span></button>
                        </div>
                    </div>
                </div>
                <!-- new-book-area-start -->
            </div>
        </div>
    </div>
</div>


<!-- footer-area-start -->
<?php include('include/footer.php'); ?>
<!-- footer-area-end -->


<?php include('include/js.php'); ?>
<script src='https://code.jquery.com/jquery-2.1.1.js'></script>
<script src='https://unpkg.com/xzoom/dist/xzoom.min.js'></script>
<script src='https://hammerjs.github.io/dist/hammer.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/js/foundation.min.js'></script>
<script>
    (function ($) {
        $(document).ready(function () {
            $('.xzoom, .xzoom-gallery').xzoom({zoomWidth: 400, title: true, tint: '#333', Xoffset: 15});
            $('.xzoom2, .xzoom-gallery2').xzoom({position: '#xzoom2-id', tint: '#ffa200'});
            $('.xzoom3, .xzoom-gallery3').xzoom({position: 'lens', lensShape: 'circle', sourceClass: 'xzoom-hidden'});
            $('.xzoom4, .xzoom-gallery4').xzoom({tint: '#006699', Xoffset: 15});
            $('.xzoom5, .xzoom-gallery5').xzoom({tint: '#006699', Xoffset: 15});

            //Integration with hammer.js
            var isTouchSupported = 'ontouchstart' in window;

            if (isTouchSupported) {
                //If touch device
                $('.xzoom, .xzoom2, .xzoom3, .xzoom4, .xzoom5').each(function () {
                    var xzoom = $(this).data('xzoom');
                    xzoom.eventunbind();
                });

                $('.xzoom, .xzoom2, .xzoom3').each(function () {
                    var xzoom = $(this).data('xzoom');
                    $(this).hammer().on("tap", function (event) {
                        event.pageX = event.gesture.center.pageX;
                        event.pageY = event.gesture.center.pageY;
                        var s = 1, ls;

                        xzoom.eventmove = function (element) {
                            element.hammer().on('drag', function (event) {
                                event.pageX = event.gesture.center.pageX;
                                event.pageY = event.gesture.center.pageY;
                                xzoom.movezoom(event);
                                event.gesture.preventDefault();
                            });
                        }

                        xzoom.eventleave = function (element) {
                            element.hammer().on('tap', function (event) {
                                xzoom.closezoom();
                            });
                        }
                        xzoom.openzoom(event);
                    });
                });

                $('.xzoom4').each(function () {
                    var xzoom = $(this).data('xzoom');
                    $(this).hammer().on("tap", function (event) {
                        event.pageX = event.gesture.center.pageX;
                        event.pageY = event.gesture.center.pageY;
                        var s = 1, ls;

                        xzoom.eventmove = function (element) {
                            element.hammer().on('drag', function (event) {
                                event.pageX = event.gesture.center.pageX;
                                event.pageY = event.gesture.center.pageY;
                                xzoom.movezoom(event);
                                event.gesture.preventDefault();
                            });
                        }

                        var counter = 0;
                        xzoom.eventclick = function (element) {
                            element.hammer().on('tap', function () {
                                counter++;
                                if (counter == 1) setTimeout(openfancy, 300);
                                event.gesture.preventDefault();
                            });
                        }

                        function openfancy() {
                            if (counter == 2) {
                                xzoom.closezoom();
                                $.fancybox.open(xzoom.gallery().cgallery);
                            } else {
                                xzoom.closezoom();
                            }
                            counter = 0;
                        }

                        xzoom.openzoom(event);
                    });
                });

                $('.xzoom5').each(function () {
                    var xzoom = $(this).data('xzoom');
                    $(this).hammer().on("tap", function (event) {
                        event.pageX = event.gesture.center.pageX;
                        event.pageY = event.gesture.center.pageY;
                        var s = 1, ls;

                        xzoom.eventmove = function (element) {
                            element.hammer().on('drag', function (event) {
                                event.pageX = event.gesture.center.pageX;
                                event.pageY = event.gesture.center.pageY;
                                xzoom.movezoom(event);
                                event.gesture.preventDefault();
                            });
                        }

                        var counter = 0;
                        xzoom.eventclick = function (element) {
                            element.hammer().on('tap', function () {
                                counter++;
                                if (counter == 1) setTimeout(openmagnific, 300);
                                event.gesture.preventDefault();
                            });
                        }

                        function openmagnific() {
                            if (counter == 2) {
                                xzoom.closezoom();
                                var gallery = xzoom.gallery().cgallery;
                                var i, images = new Array();
                                for (i in gallery) {
                                    images[i] = {src: gallery[i]};
                                }
                                $.magnificPopup.open({items: images, type: 'image', gallery: {enabled: true}});
                            } else {
                                xzoom.closezoom();
                            }
                            counter = 0;
                        }

                        xzoom.openzoom(event);
                    });
                });

            } else {
                //If not touch device

                //Integration with fancybox plugin
                $('#xzoom-fancy').bind('click', function (event) {
                    var xzoom = $(this).data('xzoom');
                    xzoom.closezoom();
                    $.fancybox.open(xzoom.gallery().cgallery, {padding: 0, helpers: {overlay: {locked: false}}});
                    event.preventDefault();
                });

                //Integration with magnific popup plugin
                $('#xzoom-magnific').bind('click', function (event) {
                    var xzoom = $(this).data('xzoom');
                    xzoom.closezoom();
                    var gallery = xzoom.gallery().cgallery;
                    var i, images = new Array();
                    for (i in gallery) {
                        images[i] = {src: gallery[i]};
                    }
                    $.magnificPopup.open({items: images, type: 'image', gallery: {enabled: true}});
                    event.preventDefault();
                });
            }
        });
    })(jQuery);
</script>

</body>

</html>