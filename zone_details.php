<?php
$page = 'zone';
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Zone - Hong Kong Pavilion</title>
    <?php include('include/css.php'); ?>
</head>

<body>
<!-- header-area-start -->
<?php include('include/header.php'); ?>
<!-- header-area-end -->


<div class="product-main-area mb-70 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 order-lg-1 order-1">
                <!-- product-main-area-start -->
                <div class="product-main-area">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="flexslider">
                                <div class="flex-viewport" style="overflow: hidden; position: relative;">
                                    <ul class="slides"
                                        style="width: 1200%; transition-duration: 0.6s; transform: translate3d(-966px, 0px, 0px);">
                                        <li data-thumb="img/zone_details.jpeg" class="clone" aria-hidden="true"
                                            style="width: 322px; margin-right: 0px; float: left; display: block;">
                                            <img style="border: 2px solid #d9d9d9; border-radius: 10px;" src="img/zone_details.jpeg" alt="woman" draggable="false">
                                        </li>
                                    </ul>
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
                        <li><a class="active" style="font-size: 16px" href="#company" data-bs-toggle="tab" aria-selected="true" role="tab">Product Description</a>
                        </li>
                        <li><a class="" style="font-size: 16px" href="#contact" data-bs-toggle="tab" aria-selected="true" role="tab">Product Description</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="company" role="tabpanel">
                            <div class="valu">
                               <h4>Sheck Wah Tong Printing Press Limited</h4>
                                <h4 class="mt-5">Company Introduction</h4>
                                <p>Our product variety covers all kind of books including bibles, novelty books and coffee table books, board and pop-up books, as well as packaging boxes, greeting cards, Atlases, calendars and paper bags.</p>
                                <h4 class="mt-5">Type of Company</h4>
                                <p>Printer</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel">
                            <div class="valu">
                                <h4>Company Business/Copyright Contact Name</h4>
                                <p>YY Kwan</p>
                                <h4 class="mt-5">Title</h4>
                                <p>General Manager</p>
                                <h4 class="mt-5">Contact Email</h4>
                                <p><a href="mailto:yykwan@swt.com.hk" style="color: #333333;">yykwan@swt.com.hk</a></p>
                                <h4 class="mt-5">Contact Number</h4>
                                <p>(852) 2562 8293</p>
                                <h4 class="mt-5">Fax</h4>
                                <p>(852) 2565 5431</p>
                                <h4 class="mt-5">Company Address</h4>
                                <p>1/F Tung Chong Factory Building, 653-659 King's Rd North Point, Hong Kong</p>
                                <h4 class="mt-5">Company Website</h4>
                                <p><a href="#" style="color: #333333;">www.sheckwahtong.com</a></p>
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
                                                    <i class="fa fa-search-plus"></i>
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


<!-- all js here -->
<?php include('include/js.php'); ?>

</body>

</html>