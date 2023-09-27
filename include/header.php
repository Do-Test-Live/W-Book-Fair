<header>
    <!-- header-top-area-start -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-9">
                    <div class="language-area">
                        <ul>
                            <li><img src="img/flag/1.jpg" alt="flag" /><a href="#">English<i class="fa fa-angle-down"></i></a>
                                <div class="header-sub">
                                    <ul>
                                        <li><a href="#"><img src="img/flag/1.jpg" alt="flag" />English</a></li>
                                        <li><a href="#"><img src="img/flag/4.jpg" alt="flag" />HongKong</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-3">
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
                <div class="col-lg-4 col-md-4 col-4">
                    <div class="logo-area text-center logo-xs-mrg">
                        <a href="index.php"><img src="img/logo/logo.png" alt="logo" style="width: 250px;" /></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-2">
                    <div class="logo-area text-center logo-xs-mrg">
                        <a href="index.php"><img src="img/logo/1a.png" alt="logo" style="width: 250px;" /></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-2">
                    <div class="logo-area text-center logo-xs-mrg">
                        <a href="index.php"><img src="img/logo/1b.png" alt="logo" style="width: 250px;" /></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-2">
                    <div class="logo-area text-center logo-xs-mrg">
                        <a href="index.php"><img src="img/logo/1d.png" alt="logo" style="width: 250px;" /></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-2">
                    <div class="logo-area text-center logo-xs-mrg">
                        <a href="index.php"><img src="img/logo/1c.png" alt="logo" style="width: 250px;" /></a>
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
                <div class="col-lg-9">
                    <div class="menu-area">
                        <nav>
                            <ul style="font-size: 10px">
                                <li class=" <?php if ($page == 'home') echo 'active';?>"><a href="index.php">Hong Kong Pavilion</a></li>
                                <li class="<?php if ($page == 'zone') echo 'active';?>"><a href="zone.php">Zone<i class="fa fa-angle-down"></i></a>
                                    <div class="sub-menu">
                                        <ul>
                                            <li><a href="#">Corporate Zone -Printing</a></li>
                                            <li><a href="#">Corporate Zone -Publishing</a></li>
                                            <li><a href="#">Recognitions & Achievements</a></li>
                                            <li><a href="#">Creative Corner</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="<?php if ($page == 'exhibits') echo 'active';?>"><a href="exhibits.php">Exhibits</a></li>
                                <li class=""><a href="documents/exhibits.pdf" target="_blank">Exhibitors Directory</a></li>
                                <li class="<?php if ($page == 'sponsor') echo 'active';?>"><a href="sponsor.php">Organistra & Sponsor</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3 my-auto">
                    <div class="header-search">
                        <form action="#">
                            <input type="text" placeholder="Search here..." />
                            <a href="#"><i class="fa fa-search"></i></a>
                        </form>
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
                                <li class=""><a href="index.php">Hong Kong Pavilion</a></li>
                                <li class=""><a href="zone.php">Zone</a>
                                    <div class="sub-menu">
                                        <ul>
                                            <li><a href="#">Corporate Zone -Printing</a></li>
                                            <li><a href="#">Corporate Zone -Publishing</a></li>
                                            <li><a href="#">Recognitions & Achievements</a></li>
                                            <li><a href="#">Creative Corner</a></li>
                                        </ul>
                                    </div>
                                </li>
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