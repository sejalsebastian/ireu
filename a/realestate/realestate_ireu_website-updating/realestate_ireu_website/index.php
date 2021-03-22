<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IREU Education</title>
    <?php include('./includes/page_header.php'); ?>


    <!-- Vendor CSS Files -->

    <link href="vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- custome css  -->
    <!-- <link rel="stylesheet" href="css/nav_bar.css"> -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/foot.css">
    <link rel="stylesheet" href="css/index_tab.css">
  


    <!-- whatsapp -->
    <?php include('./includes/wachatbot.php'); ?>

    <?php include('./includes/social.php'); ?>
    <?php include('./includes/enquire.php'); ?>

    <?php include('./includes/load.php'); ?>
</head>

<style>
   @media only screen and (min-device-width : 600px) and (max-device-width : 1024px)  {
    .text{
        left: 80%;
    }}
        
   
</style>

<body style="font-family: 'Lato', sans-serif;" width="100%">


 
    <?php include('./includes/new_navbar.php'); ?>

    
    <!-- information about home page -->
    <?php include('./includes/gethome_info.php') ?>
    <!-- banner  --> 
    
    
  
    <section class="first_div main_about" style="margin-top: 0px;">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol id="hmbanner_indicator" class="carousel-indicators float-left banner_dot">
                <?php $i = 0;
                foreach ($hm_banner_imgs as $hm_banner_img) { ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i++; ?>"></li>
                <?php } ?>
            </ol>
            <div id="hmbanner" class="carousel-inner">
                <?php foreach ($hm_banner_imgs as $hm_banner_img) { ?>
                    <div class="carousel-item">
                        <img src="./uploads/<?php echo $hm_banner_img['hm_ban_img_docname']; ?>" class="d-block w-100 img-fluid banner_image" alt="..." />
                    </div>
                <?php } ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
          <!-- marquee start  -->
          <section class="notysect">
            <div class="container">
                <div class="notfy">
                    <div class="row">
                        <div class="col-md-8 wow fadeInLeft animated" style="visibility: visible;">
                            <h5 class="notfy-head">Notifications</h5>
                            <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                                <ul>
                                    <li><a target="_blank" href="./register.php">Admissions Open for MBA 2021: Apply Now</a></li>
                                    <li><a target="_blank" href="./register.php">Admissions Open for PGDM 2021: Apply Now</a></li>
                                    <li><a target="_blank" href="./register.php">Admissions Open for BBA 2021: Apply Now</a></li>
                                    <li><a target="_blank" href="./register.php">Admissions Open for B.Voc 2021: Apply Now</a></li>

                                </ul>
                            </marquee>
                            <!--<a href="#" class="notfy-a">Alliance HR Conclave, EMERGING TRENDS IN HR - 27 Sep 2019</a>-->
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- marquee end  -->
    </section>
    
  
     <!-- banner end  -->

  <!-- collobration Start  -->
    
  <div id="second" style="padding-top: 100px;">
        <section id="testimonials1">
            <div class="container">

                <div class=" container">
                    <div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated">
                        <?php foreach ($homeinfo_Details as $homeinfo_Detail) { ?>
                            <h2 class="mb-4 heading" style="color: #17375d;"><?php echo nl2br(utf8_encode($homeinfo_Detail['hm_ac_collab_title'])); ?></h2>
                        <?php } ?>
                    </div>
                    <div class="owl-carousel testimonials-carousel ">

                        <?php foreach ($hm_gl_collab_pics as $hm_gl_collab_pic) { ?>
                            <div class="testimonial-item1 ">
                                <img class="img-fluid testimonial-img1" src="./uploads/<?php echo $hm_gl_collab_pic['hm_ac_collab_img']; ?>" alt="">
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <br>
            </div>
        </section>
    </div>
  
    <!-- collobration end  -->

      <!--   Academics -->
      <section>
        <hr size="5">
        <div class="section-academics container">
            <?php foreach ($homeinfo_Details as $homeinfo_Detail) { ?>
                <h2 class="title heading" style="color: #17375d;"><?php echo nl2br(utf8_encode($homeinfo_Detail['hm_academic_title'])); ?></h2>
                <!-- <h2 class=" text-center wow fadeInUp animated" style="visibility: visible; color: #17375d;">Academics</h2> -->
            <?php } ?>
            <div class="">

                <div class="row">
                    <?php foreach ($home_acd_Details as $home_acd_Detail) { ?>
                        <div class="col-md-3 ">
                            <div class="academics-itam">
                                <div class="academics-img">
                                    <img alt=">IREU School for Real Estate and Construction management" src="./uploads/<?php echo nl2br(utf8_encode($home_acd_Detail['hm_academic_img'])); ?>" class="lazy">
                                    <div class="overlay">
                                    <div class="text">
                                            <span><a href="Program">Undergraduate</a></span>
                                            <span><a href="Program">Postgraduate</a></span>
                                            <span><a href="Program">Diploma</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="academics-text academics-red">
                                    <h3><?php echo nl2br(utf8_encode($home_acd_Detail['hm_academic_info'])); ?>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

            </div>
        </div>

    </section>
    <!-- academic courses end  -->

      <!-- Browse Courses -->
      <section>
      <div class="te-browse-courses">
            <div class="container">
                <div class="text-center">
                    <?php foreach ($homeinfo_Details as $homeinfo_Detail) { ?>
                        <h2 class="heading title" style="color: #17375d;"><?php echo nl2br(utf8_encode($homeinfo_Detail['hm_course_re_title'])); ?></h2>
                    <?php } ?>
                </div>
                <!-- diamond shaped grids -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <ul class="grid-annoying clearfix">
                        <li>
                            <div id="32" class="transform-rotate">
                                <a href="Program" class="red-overlay" style="background-color:#0615a0 "></a>
                                <a class="show" href="Program">
                                    <img class="lazy" data-src="./uploads/<?php echo $hm_courses_re_imgs[0]['hm_course_re_image'] ?>" />
                                    <div class="cnt-rotate">
                                        <div class="change-angle">
                                            <i class="fa icon-hrm" aria-hidden="true"></i>
                                            <h3><?php echo nl2br(utf8_encode($hm_cr_Details[0]['hm_course_re_name'])); ?></h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li>
                            <div id="35" class="transform-rotate">
                                <a href="Program" class="red-overlay" style="background-color: #a20499"></a>
                                <a class="show" href="Program">
                                    <img class="lazy" data-src="./uploads/<?php echo $hm_courses_re_imgs[1]['hm_course_re_image'] ?>" />
                                    <div class="cnt-rotate">
                                        <div class="change-angle">
                                            <i class="fa icon-data-anaylsis2" aria-hidden="true"></i>
                                            <h3><?php echo nl2br(utf8_encode($hm_cr_Details[1]['hm_course_re_name'])); ?></h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li>
                            <div id="50" class="transform-rotate">
                                <a href="Program" class="red-overlay" style="background-color:#8000c9"></a>
                                <a class="show" href="Program">
                                    <img class="lazy" data-src="./uploads/<?php echo $hm_courses_re_imgs[2]['hm_course_re_image'] ?>" />
                                    <div class="cnt-rotate">
                                        <div class="change-angle">
                                            <i class="fa icon-project" aria-hidden="true"></i>
                                            <h3><?php echo nl2br(utf8_encode($hm_cr_Details[2]['hm_course_re_name'])); ?></h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li>
                            <div id="49" class="transform-rotate">
                                <a href="Program" class="red-overlay" style="background-color: #b00b0b;"></a>
                                <a class="show" href="Program">
                                    <img class="lazy" data-src="./uploads/<?php echo $hm_courses_re_imgs[3]['hm_course_re_image'] ?>" />
                                    <div class="cnt-rotate">
                                        <div class="change-angle">
                                            <i class="fa icon-business-management" aria-hidden="true"></i>
                                            <h3><?php echo nl2br(utf8_encode($hm_cr_Details[3]['hm_course_re_name'])); ?></h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li>
                            <div id="48" class="transform-rotate">
                                <a href="Program" class="red-overlay" style="background-color:#d40606 "></a>
                                <a class="show" href="Program">
                                    <img class="lazy" data-src="./uploads/<?php echo $hm_courses_re_imgs[4]['hm_course_re_image'] ?>" />
                                    <div class="cnt-rotate">
                                        <div class="change-angle">
                                            <i class="fa icon-Brand-management" aria-hidden="true"></i>
                                            <h3><?php echo nl2br(utf8_encode($hm_cr_Details[4]['hm_course_re_name'])); ?></h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li>
                            <div id="34" class="transform-rotate">
                                <a href="Program" class="red-overlay" style="background-color: #095de3"></a>
                                <a class="show" href="Program">
                                    <img class="lazy" data-src="./uploads/<?php echo $hm_courses_re_imgs[5]['hm_course_re_image'] ?>" />
                                    <div class="cnt-rotate">
                                        <div class="change-angle">
                                            <i class="fa icon-well-paid-jobs" aria-hidden="true"></i>
                                            <h3><?php echo nl2br(utf8_encode($hm_cr_Details[5]['hm_course_re_name'])); ?></h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li>
                            <div id="649" class="transform-rotate">
                                <a href="Program" class="red-overlay" style="background-color: #6a5cd6"></a>
                                <a class="show" href="Program">
                                    <img class="lazy" data-src="./uploads/<?php echo $hm_courses_re_imgs[6]['hm_course_re_image'] ?>" />
                                    <div class="cnt-rotate">
                                        <div class="change-angle">
                                            <i class="fa icon-alumni-network" aria-hidden="true"></i>
                                            <h3><?php echo nl2br(utf8_encode($hm_cr_Details[6]['hm_course_re_name'])); ?></h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
    <!-- Browse Courses end  -->

      <!-- Research -->
      <div id="research">
        <section class="home-research research-section sec-3">
            <div class="container">
                <div class="">
                    <?php foreach ($homeinfo_Details as $homeinfo_Detail) { ?>
                        <h2 class="heading" style="color:  #17375d;"><?php echo nl2br(utf8_encode($homeinfo_Detail['hm_research_title'])); ?></h2>
                        <p class="text-center" style="font-size: 18px;color: #17375d"><?php echo nl2br(utf8_encode($homeinfo_Detail['hm_research_sub_title'])); ?></p>
                        <p></p>
                    <?php } ?>
                </div>
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="research-item">
                            <div class="research-padding row">
                                <?php $i = 0;
                                foreach ($homeres_Details as $homeres_Detail) { ?>
                                    <div class="research_group col-sm-4" style="margin:auto">
                                        <div id="<?php echo $i++ ?>" class="research-text mt-4 p-4"><a  href="<?php echo nl2br(utf8_encode($homeres_Detail['hm_link'])); ?>" target="_blank"> <?php echo nl2br(utf8_encode($homeres_Detail['hm_research_features'])); ?> </a></div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    
    <!-- research end  -->
<!-- Start academic head -->
    <section class="faculties-section" style=" background-color: #e1e1e1;">
        <div class="container">
    <div class="row">
                <div class="col-md-12" style="margin-top: 20px;">
                    <div class="faculties_heading">
                        <?php foreach ($homeinfo_Details as $homeinfo_Detail) { ?>
                            <h2 class="heading" style="text-align: left;"><?php echo nl2br(utf8_encode($homeinfo_Detail['hm_fac_title'])); ?></h2>
                        <?php } ?>
                    </div>

                </div>
            </div>
            <div class="container-fluid" style="padding-right:0px;padding-left:0px;">
                    <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4 col-xls-5">
                    <div class="card" style="width: 18rem; padding: 10px; background-color: #374871;">
                        <img class="card-img-top" src="./uploads/<?php echo $homeinfo_Details[0]['hm_fac_image']; ?>" alt="Card image cap">
                    </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-8 col-xls-6" style="text-align: initial; line-height: 2;">
                    <div class="card card_academic" style=" background-color:#e1e1e1;border:none;">
                    <?php foreach ($homeinfo_Details as $homeinfo_Detail) { ?>
                        <h2><?php echo nl2br(utf8_encode($homeinfo_Detail['hm_fac_name'])); ?></h2>
                        <p style="color: black;"><?php echo nl2br(utf8_encode($homeinfo_Detail['hm_fac_description'])); ?></p>
                        <h5><?php echo nl2br(utf8_encode($homeinfo_Detail['hm_fac_credential_title'])); ?> / <a style="color: #374871;font-weight: 700;" href="<?php echo nl2br(utf8_encode($homeinfo_Detail['hm_fac_credential_link'])); ?>"> <?php echo nl2br(utf8_encode($homeinfo_Detail['hm_fac_credential_link'])); ?></a> </h5>
                    <?php } ?>

                    <p>
                    <ul>
                        <?php foreach ($homecred_Details as $homecred_Detail) { ?>
                            <li class="list-head"><?php echo nl2br(utf8_encode($homecred_Detail['hm_credential_list'])); ?></li>
                        <?php } ?>
                    </ul>
                    </p>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </section>
    <!-- End academic head -->

    <section class="gla-placement-sec sec-4">
        <div class=" container gla-placement">
            <div class="row">
                <div class="col-md-12 text-center placement-Carousel">
                    <?php foreach ($homeinfo_Details as $homeinfo_Detail) { ?>
                        <h2 class="heading"><?php echo nl2br(utf8_encode($homeinfo_Detail['hm_partners _infra_title'])); ?></h2>
                    <?php } ?>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                        <ol id="partners_indicator" class="carousel-indicators float-left">
                            <?php $i = 0;
                            foreach ($hm_partners_imgs as $hm_partners_img) { ?>
                                <li data-target="#carouselExampleIndicators1" data-slide-to="<?php echo $i++ ?>"></li>
                            <?php } ?>

                        </ol>
                        <div id="partners_imgs" class="carousel-inner container">
                            <?php foreach ($hm_partners_imgs as $hm_partners_img) { ?>
                                <div class="carousel-item">
                                    <img src="./uploads/<?php echo $hm_partners_img['hm_partners _infra_image']; ?>" class="d-block w-100" alt="...">
                                </div>
                            <?php } ?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>




   


     <!-- footer part -->
     <?php include('./includes/footer_new.php'); ?>

 


    <!-- Vendor JS Files -->

    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>


    <script>
        $(".testimonials-carousel").owlCarousel({
            autoplay: true,
            dots: true,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                900: {
                    items: 3
                }
            }
        });

        $(document).ready(function() {
            var dan = $("#partners_imgs .carousel-item:first-child").addClass('active');
            console.log(dan);

            var man = $("#carouselExampleIndicators1 #partners_indicator li:first-child").addClass('active');
            console.log(man);

            var hm = $("#hmbanner .carousel-item:first-child").addClass('active');
            console.log(hm);

            var hmban = $("#carouselExampleIndicators #hmbanner_indicator li:first-child").addClass('active');
            console.log(hmban);
        })
    </script>



</body>

</html>