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

<div id="main">
    <!-- header-area-start -->
    <?php include('include/header.php'); ?>
    <!-- header-area-end -->

    <?php include ('include/sidebar.php');?>

    <?php include ('include/cat.php');?>


    <!-- shop-main-area-start -->
    <div class="shop-main-area mb-70 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 order-lg-2 order-1">
                    <div class="toolbar mb-30">
                        <div class="shop-tab">
                            <div class="tab-3">
                                <ul class="nav" role="tablist">
                                    <li><a href="" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab" onclick="openCat();"><i class="fa fa-th-large"></i></a></li>
                                </ul>
                            </div>
                            <div class="list-page">
                                <p>Items 1-9 of 11</p>
                            </div>
                        </div>
                        <div class="toolbar-sorter">
                            <span>Sort By</span>
                            <select id="sorter" class="sorter-options" data-role="sorter">
                                <option selected="selected" value="position"> Position </option>
                                <option value="name"> Product Name </option>
                                <option value="price"> Price </option>
                            </select>
                            <a href="#"><i class="fa fa-arrow-up"></i></a>
                        </div>
                    </div>
                    <!-- tab-area-start -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="th">
                            <div class="row">
                                <div class="col-4">
                                    <!-- single-product-start -->
                                    <div class="product-wrapper mb-40">
                                        <div class="product-img">
                                            <a href="exhibits_details.php">
                                                <img src="img/product/1.jpg" alt="book" class="primary" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="action-view" href="exhibits_details.php" title="Details">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-details text-center">
                                            <h3 class="mt-3"><a href="exhibits_details.php" class="exhibit_name">Exhibit Name</a></h3>
                                        </div>
                                    </div>
                                    <!-- single-product-end -->
                                </div>
                                <div class="col-4">
                                    <!-- single-product-start -->
                                    <div class="product-wrapper mb-40">
                                        <div class="product-img">
                                            <a href="exhibits_details.php">
                                                <img src="img/product/1.jpg" alt="book" class="primary" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="action-view" href="exhibits_details.php" title="Details">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-details text-center">
                                            <h3 class="mt-3"><a href="exhibits_details.php" class="exhibit_name">Exhibit Name</a></h3>
                                        </div>
                                    </div>
                                    <!-- single-product-end -->
                                </div>
                                <div class="col-4">
                                    <!-- single-product-start -->
                                    <div class="product-wrapper mb-40">
                                        <div class="product-img">
                                            <a href="exhibits_details.php">
                                                <img src="img/product/1.jpg" alt="book" class="primary" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="action-view" href="exhibits_details.php" title="Details">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-details text-center">
                                            <h3 class="mt-3"><a href="exhibits_details.php" class="exhibit_name">Exhibit Name</a></h3>
                                        </div>
                                    </div>
                                    <!-- single-product-end -->
                                </div>
                                <div class="col-4">
                                    <!-- single-product-start -->
                                    <div class="product-wrapper mb-40">
                                        <div class="product-img">
                                            <a href="exhibits_details.php">
                                                <img src="img/product/1.jpg" alt="book" class="primary" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="action-view" href="exhibits_details.php" title="Details">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-details text-center">
                                            <h3 class="mt-3"><a href="exhibits_details.php" class="exhibit_name">Exhibit Name</a></h3>
                                        </div>
                                    </div>
                                    <!-- single-product-end -->
                                </div>
                                <div class="col-4">
                                    <!-- single-product-start -->
                                    <div class="product-wrapper mb-40">
                                        <div class="product-img">
                                            <a href="exhibits_details.php">
                                                <img src="img/product/1.jpg" alt="book" class="primary" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="action-view" href="exhibits_details.php" title="Details">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-details text-center">
                                            <h3 class="mt-3"><a href="exhibits_details.php" class="exhibit_name">Exhibit Name</a></h3>
                                        </div>
                                    </div>
                                    <!-- single-product-end -->
                                </div>
                                <div class="col-4">
                                    <!-- single-product-start -->
                                    <div class="product-wrapper mb-40">
                                        <div class="product-img">
                                            <a href="exhibits_details.php">
                                                <img src="img/product/1.jpg" alt="book" class="primary" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="action-view" href="exhibits_details.php" title="Details">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-details text-center">
                                            <h3 class="mt-3"><a href="exhibits_details.php" class="exhibit_name">Exhibit Name</a></h3>
                                        </div>
                                    </div>
                                    <!-- single-product-end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- tab-area-end -->
                    <div class="pagination-area mt-50">
                        <div class="list-page-2">
                            <p>Items 1-9 of 11</p>
                        </div>
                        <div class="page-number">
                            <ul>
                                <li><a href="#" class="active">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#" class="angle"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop-main-area-end -->


    <!-- footer-area-start -->
    <?php include('include/footer.php'); ?>
    <!-- footer-area-end -->
</div>



<!-- all js here -->
<?php include('include/js.php'); ?>

<script>
    window.addEventListener("scroll", function() {
        var mobileMenu = document.querySelector(".mobile-menu-area");
        if (window.scrollY > 0) {
            mobileMenu.classList.add("sticky");
        } else {
            mobileMenu.classList.remove("sticky");
        }
    });
</script>

</body>

</html>