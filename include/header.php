<header>
    <!-- header-top-area-start -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="language-area">
                        <ul>
                            <li><img src="img/flag/1.jpg" alt="flag" /><a href="#">English<i class="fa fa-angle-down"></i></a>
                                <div class="header-sub">
                                    <ul>
                                        <li><a href="#"><img src="img/flag/2.jpg" alt="flag" />france</a></li>
                                        <li><a href="#"><img src="img/flag/3.jpg" alt="flag" />croatia</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">USD $<i class="fa fa-angle-down"></i></a>
                                <div class="header-sub dolor">
                                    <ul>
                                        <li><a href="#">EUR €</a></li>
                                        <li><a href="#">USD $</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="account-area text-end">
                        <ul>
                            <li><a href="login.php">Sign in</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-top-area-end -->
    <!-- header-mid-area-start -->
    <div class="header-mid-area ptb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5 col-12">
                    <div class="header-search">
                        <form action="#">
                            <input type="text" placeholder="Search Exhibits Name Here..." />
                            <a href="#"><i class="fa fa-search"></i></a>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-12">
                    <div class="logo-area text-center logo-xs-mrg">
                        <a href="index.php"><img src="img/logo/logo.png" alt="logo" style="width: 250px;" /></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="my-cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a>
                                <span>2</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-mid-area-end -->
    <!-- main-menu-area-start -->
    <div class="main-menu-area d-md-none d-none d-lg-block sticky-header-1" id="header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-area">
                        <nav>
                            <ul>
                                <li class=" <?php if ($page == 'home') echo 'active';?>"><a href="index.php">Home</a></li>
                                <li class="<?php if ($page == 'zone') echo 'active';?>"><a href="zone.php">Zone</a></li>
                                <li class="<?php if ($page == 'exhibits') echo 'active';?>"><a href="exhibits.php">Exhibits</a></li>
                                <li class=""><a href="documents/exhibits.pdf" target="_blank">Exhibitors Directory</a></li>
                                <li class="<?php if ($page == 'sponsor') echo 'active';?>"><a href="sponsor.php">Organistra & Sponsor</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main-menu-area-end -->

    <!-- mobile-menu-area-start -->
    <div class="mobile-menu-area d-lg-none d-block fix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul id="nav">
                                <li class=""><a href="index.php">Home</a></li>
                                <li class=""><a href="zone.php">Zone</a></li>
                                <li class=""><a href="exhibits.php">Exhibits</a></li>
                                <li class=""><a href="documents/exhibits.pdf" target="_blank">Exhibitors Directory</a></li>
                                <li class=""><a href="sponsor.php">Organistra & Sponsor</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area-end -->
</header>