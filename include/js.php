<!-- jquery latest version -->
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- owl.carousel js -->
<script src="js/owl.carousel.min.js"></script>
<!-- meanmenu js -->
<script src="js/jquery.meanmenu.js"></script>
<!-- wow js -->
<script src="js/wow.min.js"></script>
<!-- jquery.parallax-1.1.3.js -->
<script src="js/jquery.parallax-1.1.3.js"></script>
<!-- jquery.countdown.min.js -->
<script src="js/jquery.countdown.min.js"></script>
<!-- jquery.flexslider.js -->
<script src="js/jquery.flexslider.js"></script>
<!-- chosen.jquery.min.js -->
<script src="js/chosen.jquery.min.js"></script>
<!-- jquery.counterup.min.js -->
<script src="js/jquery.counterup.min.js"></script>
<!-- waypoints.min.js -->
<script src="js/waypoints.min.js"></script>
<!-- plugins js -->
<script src="js/plugins.js"></script>

<script src="uikit/js/uikit.min.js"></script>
<script src="uikit/js/uikit-icons.min.js"></script>
<!-- main js -->
<script src="js/main.js"></script>

<script>
        function openNav() {
        document.getElementById("mySidenav").style.width = "400px";
        document.getElementById("main").style.marginRight = "400px";
    }

        function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginRight= "0";
    }
        function showChatBox(){
        document.getElementById('chat-list').style.display = 'none';
        document.getElementById('chat-details').style.display = 'block';
    }

        function openCat() {
            document.getElementById("category").style.width = "400px";
            document.getElementById("main").style.marginLeft = "400px";
        }

        function closeCat() {
            document.getElementById("category").style.width = "0";
            document.getElementById("main").style.marginLeft= "0";
        }
</script>

<script>
    $(document).ready(function () {
        var menu = $(".mobile-menu-area");
        var menuPosition = menu.offset().top;

        $(window).scroll(function () {
            if ($(window).scrollTop() >= menuPosition) {
                menu.addClass("sticky-menu");
                $("body").addClass("content-below-sticky");
            } else {
                menu.removeClass("sticky-menu");
                $("body").removeClass("content-below-sticky");
            }
        });
    });
</script>