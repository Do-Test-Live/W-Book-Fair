<?php
$page = 'exhibits';
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Exhibits - Hong Kong Pavilion</title>
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
                        <div class="col-lg-5 col-md-6 col-12">
                            <div class="flexslider">
                                <ul class="slides">
                                    <li data-thumb="img/flex/1.jpg">
                                        <img src="img/flex/1.jpg" alt="woman" />
                                    </li>
                                    <li data-thumb="img/flex/5.jpg">
                                        <img src="img/flex/5.jpg" alt="woman" />
                                    </li>
                                    <li data-thumb="img/flex/2.jpg">
                                        <img src="img/flex/2.jpg" alt="woman" />
                                    </li>
                                    <li data-thumb="img/flex/5.jpg">
                                        <img src="img/flex/5.jpg" alt="woman" />
                                    </li>
                                </ul>
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
                        <li><a class="active" href="#Details" data-bs-toggle="tab" aria-selected="true" role="tab">Contact Details</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="Details" role="tabpanel">
                            <div class="valu">
                                <ul>
                                    <li><i class="fa fa-circle"></i>Exhibit Type</li>
                                    <li><i class="fa fa-circle"></i>Exhibit Category</li>
                                    <li><i class="fa fa-circle"></i>Contact Name</li>
                                    <li><i class="fa fa-circle"></i>Title</li>
                                    <li><i class="fa fa-circle"></i>Contact Email</li>
                                    <li><i class="fa fa-circle"></i>Contact Phone</li>
                                    <li><i class="fa fa-circle"></i>Contact Fax</li>
                                    <li><i class="fa fa-circle"></i>Contact Website</li>
                                    <li><i class="fa fa-circle"></i>Contact Address</li>
                                </ul>
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