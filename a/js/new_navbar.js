

$(document).ready(function () {
    "use strict";

    $(document).ready(function () {
       
   

        $(window).on("scroll", function () {
            80 < $(window).scrollTop() ? $(".scrolling-navbar").addClass("top-nav-collapse") : $(".scrolling-navbar").removeClass("top-nav-collapse");
        }),
              $(".mobile_nav_icon").on("click", function () {
            $("#navbarResponsive2").toggleClass("menuopened"), $(this).toggleClass("open");
        }),
        $(document).ready(function () {
            $(".mobile_nav li").click(function () {
                $(".mobile_nav li > ul").not($(this).children("ul").toggle()).hide(), $(".mobile_nav .nav-item ").not($(this).children("ul").toggleClass("add")).removeClass("add");
            });
        });






 
    });
});
