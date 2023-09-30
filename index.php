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

    <button class="centered-button" type="button" onclick="openNav()"><span uk-icon="icon: chevron-double-left; ratio: 1"></span></button>


    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div id="chat-list">
            <div class="row">
                <div class="col-12 text-center">
                <span uk-icon="icon: comments; ratio: 2">
                </div>
            </div>
            <div class="row mt-3" onclick="showChatBox();">
                <div class="col-3 my-auto">
                    <img src="img/author/Avater.png" alt="profile image" class="img-fluid">
                </div>
                <div class="col-5 my-auto">
                    <div class="row">
                        <div class="col-12">
                            <span class="user-name">User 1</span>
                        </div>
                        <div class="col-12">
                            <span class="user-message">Test Message</span>
                        </div>
                    </div>
                </div>
                <div class="col-4 my-auto">
                    <span class="date-time">27/06/2023 04:50pm</span>
                </div>
            </div>
            <div class="row mt-3" onclick="showChatBox();">
                <div class="col-3 my-auto">
                    <img src="img/author/Avater.png" alt="profile image" class="img-fluid">
                </div>
                <div class="col-5 my-auto">
                    <div class="row">
                        <div class="col-12">
                            <span class="user-name">User 1</span>
                        </div>
                        <div class="col-12">
                            <span class="user-message">Test Message</span>
                        </div>
                    </div>
                </div>
                <div class="col-4 my-auto">
                    <span class="date-time">27/06/2023 04:50pm</span>
                </div>
            </div>
            <div class="row mt-3" onclick="showChatBox();">
                <div class="col-3 my-auto">
                    <img src="img/author/Avater.png" alt="profile image" class="img-fluid">
                </div>
                <div class="col-5 my-auto">
                    <div class="row">
                        <div class="col-12">
                            <span class="user-name">User 1</span>
                        </div>
                        <div class="col-12">
                            <span class="user-message">Test Message</span>
                        </div>
                    </div>
                </div>
                <div class="col-4 my-auto">
                    <span class="date-time">27/06/2023 04:50pm</span>
                </div>
            </div>
            <div class="row mt-3" onclick="showChatBox();">
                <div class="col-3 my-auto">
                    <img src="img/author/Avater.png" alt="profile image" class="img-fluid">
                </div>
                <div class="col-5 my-auto">
                    <div class="row">
                        <div class="col-12">
                            <span class="user-name">User 1</span>
                        </div>
                        <div class="col-12">
                            <span class="user-message">Test Message</span>
                        </div>
                    </div>
                </div>
                <div class="col-4 my-auto">
                    <span class="date-time">27/06/2023 04:50pm</span>
                </div>
            </div>
        </div>
        <div id="chat-details" style="display: none;">
            <div class="app-wrapper">
                <div class="app-header">
                    <h2>User 1</h2>
                    <span class="friend-status">Online</span>
                </div>
                <div class="app-message-body">
                    <div class="message-wrapper">
                        <div class="message">
                            <span>I woke up like 6am and fell back asleep until 9am which is the latest I've woken this week</span>
                        </div>
                        <div class="message-meta">
                            <div class="sender-avatar">SB</div>
                            <span class="timestamp">7:32 PM</span>
                        </div>
                    </div>
                    <div class="message-wrapper">
                        <div class="message">
                            <span>What do you want? A medal?</span>
                        </div>
                        <div class="message-meta">
                            <div class="sender-avatar">DH</div>
                            <span class="timestamp">7:34 PM</span>
                        </div>
                    </div>
                    <div class="message-wrapper">
                        <div class="message">
                            <span>I want two</span>
                        </div>
                        <div class="message-meta">
                            <div class="sender-avatar">SB</div>
                            <span class="timestamp">7:32 PM</span>
                        </div>
                    </div>
                </div>

                <div class="app-input-area">
                    <input type="text" placeholder="Your message here..." />
                    <button type="submit">
                        <svg viewBox="0 0 512 512" x="0px" y="0px" style="enable-background: new 0 0 512 512" width="25" height="25" title="paper-plane">
                            <path fill="" d="M476 3.2L12.5 270.6c-18.1 10.4-15.8 35.6 2.2 43.2L121 358.4l287.3-253.2c5.5-4.9 13.3 2.6 8.6 8.3L176 407v80.5c0 23.6 28.5 32.9 42.5 15.8L282 426l124.6 52.2c14.2 6 30.4-2.9 33-18.2l72-432C515 7.8 493.3-6.8 476 3.2z" />
                        </svg>
                    </button>
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
</div>


<!-- all js here -->
<?php include('include/js.php'); ?>


<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "300px";
        document.getElementById("main").style.marginRight = "300px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginRight= "0";
    }
    function showChatBox(){
        document.getElementById('chat-list').style.display = 'none';
        document.getElementById('chat-details').style.display = 'block';
    }
</script>
</body>

</html>