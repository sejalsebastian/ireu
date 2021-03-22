//       $(document).ready(function(){
//  $(window).resize(function() {
//             if ($(this).width() > 1000) {
//                 $("#t1").hide();
//             } else {
//                 $("#t1").show();
//             }

//         });
//             var scroll_pos = 0;
//     $(document).scroll(function () {
//         scroll_pos = $(this).scrollTop();
//         if (scroll_pos > 80) {
//             $(".trans_nav a").css("color", "white");
//             $(".trans_nav").css('background-color', 'black');
           


//         } else {
//             $(".trans_nav").css('background-color', 'transparent');
//              $(".trans_nav a").css("color", "white");
            

//         }
//     });
//         $(window).resize(function() {
//             if ($(this).width() >= 900 && $(this).width() <= 1000) {
//                 $(".header-top-right a").css('font-size', '12px');
//                 $("#main-nav a").css('font-size', '12px');
//                 $(".spn_apply").css('font-size', '12px');
//                 $("#nav2").addClass('float-left');
//                 $("#nav2").removeClass('float-right');

//             } else {
//                 $(".header-top-right a").css('font-size', '16px');
//                 $("#main-nav a").css('font-size', '18px');
//                 $(".spn_apply").css('font-size', '18px');
//                 $("#nav2").removeClass('float-left');
//                 $("#nav2").addClass('float-right');
//             }
//         });
   

//       });

$(document).ready(function(){
$(window).on("scroll", function () {
            80 < $(window).scrollTop() ? $(".scrolling-navbar").addClass("top-nav-collapse") : $(".scrolling-navbar").removeClass("top-nav-collapse");
        }),
        $(".table-responsive-stack")
            .find("th")
            .each(function (e) {
                $(".table-responsive-stack td:nth-child(" + (e + 1) + ")").prepend('<span class="table-responsive-stack-thead">' + $(this).text() + ":</span> "), $(".table-responsive-stack-thead").hide();
            }),
        $(".table-responsive-stack").each(function () {
            var e = 100 / $(this).find("th").length + "%";
            $(this).find("th, td").css("flex-basis", e);
        }),
        e(),
        (window.onresize = function (s) {
            e();
        }),
        $("#show_search").click(function () {
            $(".searchoverlay").show();
        }),
        $(".hide_search").click(function () {
            $(".searchoverlay").hide();
        }),
        $(".openCollapse").click(function () {
            $(".showCollapse").toggle();
        }),
        new WOW().init(),
        $(".mobile_nav_icon").on("click", function () {
            $("#navbarResponsive2").toggleClass("menuopened"), $(this).toggleClass("open");
        }),
        $(document).ready(function () {
            $(".mobile_nav li").click(function () {
                $(".mobile_nav li > ul").not($(this).children("ul").toggle()).hide(), $(".mobile_nav .nav-item ").not($(this).children("ul").toggleClass("add")).removeClass("add");
            });
        }),
        $(".mobile_nav .nav-item").on("show.dropdown", function () {
            $(this).find(".dropdown-menu").first().stop(!0, !0).slideDown();
        }),
        $(".mobile_nav .nav-item").on("hide.dropdown", function () {
            $(this).find(".dropdown-menu").first().stop(!0, !0).slideUp();
        }),
        $(".dropdown-submenu a.link").on("click", function (e) {
            $(this).parent().find(".dropdown-menu").first().stop(!0, !0).slideToggle(), $(this).toggleClass("open"), e.stopPropagation(), e.preventDefault();
        });
});