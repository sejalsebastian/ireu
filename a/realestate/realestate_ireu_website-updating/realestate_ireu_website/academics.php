<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Academics</title>
  <?php include('./includes/page_header.php'); ?>

  <!-- custome CSS -->
  <!-- <link rel="stylesheet" href="css/nav_bar.css"> -->
  <link rel="stylesheet" href="./css/academics.css">
  <link rel="stylesheet" href="css/foot.css">
  <link rel="stylesheet" href="css/academic_new.css">


</head>


<body style="font-family: 'Lato', sans-serif;">
  <?php include('./includes/new_navbar.php'); ?>
  <!-- ======= Top Bar ======= -->
  <!-- content -->





  <section class="main_about Media">


 
   
  </div>
</nav>
  <div class="container-fluid">
    <!-- nav tab  -->
    <div class="row">
      <div class="col-md-12">
        <div class="">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto" >
                <li class="active ">
                  <a href="academics" class="nav-item nav-link active aaa">Overview</a>
                </li>
                <li class="">
                  <a href="academics_usp" class="nav-item nav-link active aaa">USP</a>
                </li>
                <li class="">
                  <a href="academics_certificate" class="nav-item nav-link active aaa">Certificate</a>
                </li>
                <li class="">
                  <a href="academics_immersion_prg" class="nav-item nav-link active aaa">Immersion Program</a>
                </li>
                <li class="">
                  <a href="" class="nav-item nav-link active aaa">Faculty</a>
                </li>
                <li class="">
                  <a href="academics_Corporate_Mentors" class="nav-item nav-link active aaa">Corporate Mentors</a>
                </li>
                <li class="">
                  <a href="academics_research" class="nav-item nav-link active aaa">Research Projects</a>
                </li>
                <li class="">
                  <a href="academics_Experential_Learning" class="nav-item nav-link active aaa" >Experiential Learning</a>
                </li>
                <li class="">
                  <a href="academics_initivities.php" class="nav-item nav-link active aaa">IREU Initiatives</a>
                </li>
            </ul>
          </div>
        </nav>
        </div>
      </div>

      <!-- academic content  -->
      <div class="container" style="margin-top: 20px;padding: 20px;">
        <div class="pad_left">
          <div class="full-width">
            <?php include("./includes/aca_over_info.php"); ?>
            <h4 class="mb-4" style="padding-left: 15px;"><u>Overview</u></h4>
            <?php foreach ($ac_overviews as $ac_overview) { ?>
              <!-- <h2 style="color: #17375d;">Overview</h2> -->
              <p  class="overview"><?php echo nl2br(utf8_encode($ac_overview['ac_about'])); ?></p>
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="school-list" style="margin-top: 90px;">
        <div class="row">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-6">
                <div class="bg-1"></div>
                <div class="school-block-1">
                  <h2 class="over_heading"><?php echo nl2br(utf8_encode($ac_over_sections[0]['ac_heading'])); ?></h2>
                  <p class="over_para"><?php echo nl2br(utf8_encode($ac_over_sections[0]['ac_content'])); ?></p>
                  <!-- <p>IREU works directly with the real estate industry body to understand their requirements and IREU also has a research team who does exhaustive study on practical dimension of real estate market and business which creates the basis for the IREU Real Estate Education curriculum. The courses are designed by the subject matter  industry experts to stay relevant to the present real estate sector with international standards</p>
                            <p>IREU provides the necessary right skill sets to make the students readily employable and for a professional to fast track his career.</p> -->

                  <div class="read-more"><a href="#">read more</a></div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="school-img over_img"><img src="<?php echo nl2br(utf8_encode($ac_over_sections[0]['ac_over_img'])); ?>" class="img-fluid"></div>
              </div>
            </div>
          </div>
        
        
        </div>
      </div>
    </div>
  </section>


  <!-- footer part -->
  <?php include('./includes/footer.php'); ?>




</body>

</html>