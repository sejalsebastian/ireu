<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admission</title>
  <?php include('./includes/page_header.php'); ?>

  <!-- custome CSS -->
  <!-- <link rel="stylesheet" href="css/nav_bar.css" /> -->
  <link rel="stylesheet" href="css/admission.css" />
  <link rel="stylesheet" href="css/foot.css" />
</head>

<body style="font-family: 'Lato', sans-serif">
  <?php include('./includes/new_navbar.php'); ?>
  <!-- ======= Top Bar ======= -->
  <section class="main_about Media csr-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="about-heading">Admissions</h2>
          </div>
          <div class="col-md-12">
            <div class="">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto" style="font-size: 19px;">
              <li class="active">
                  <a class="nav-item nav-link active" href="admission_eligibility">Eligibility</a>
                </li>
                <li class="">
                  <a class="nav-item nav-link" href="admission_process">Admission Process
                  </a>
                </li>

                <li class="">
                  <a class="nav-item nav-link" href="admission_fee_structure">Courses & Fee Structure
                  </a>
                </li>

                <li class="">
                  <a class="nav-item nav-link" href="admission_loan">Education Loan Assistance
                  </a>
                </li>
                <li class=""><a class="nav-item nav-link " href="admission_hostel.php">Hostel Assistance </a> </li>
              </ul>
            </div>
          </nav>
         </div>
        </div>
      </div>
    </div>
  </section>

  <?php include("./includes/ad_adprocess_info.php") ?>
  <section>
    <div class="inner_container">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-12 pb-4">
                <?php foreach ($ad_adpr_main_Details as $ad_adpr_main_Detail) { ?>
                  <p class="admission_head">
                    <?php echo nl2br(utf8_encode($ad_adpr_main_Detail['ad_ad_about'])); ?>
                  </p>
                <?php } ?>
              </div>
              <div class="col-md-12">
                <div class="admission_process_sec">
                  <div class="stap_sec">

                    <h5><strong><?php echo $on_off_contents[0]['ad_ad_heading']; ?></strong></h5>
                    <p><?php echo $on_off_contents[0]['ad_ad_content']; ?><br />
                      (<a href="<?php echo $on_off_contents[0]['ad_ad_link']; ?>" rel="noopener">Click Here</a>)
                    </p>
                  </div>
                  <div class="stap_sec">
                    <h5><strong><?php echo $on_off_contents[1]['ad_ad_heading']; ?></strong></h5>
                    <p><?php echo $on_off_contents[1]['ad_ad_content']; ?></p>
                    <ol>
                      <?php foreach ($offline_table_points as $offline_table_point) { ?>
                        <li><?php echo $offline_table_point['ad_sub_adn_off_list']; ?></li>
                      <?php } ?>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="helpline_sec">
              <?php foreach ($ad_adpr_main_Details as $ad_adpr_main_Detail) { ?>
                <h2> <?php echo nl2br(utf8_encode($ad_adpr_main_Detail['ad_Helpline_title'])); ?></h2>
                <h4> <?php echo nl2br(utf8_encode($ad_adpr_main_Detail['ad_helpline_Subtitle'])); ?></h4>
              <?php } ?>
              <p class="post">Under Graduate</p>
              <p>
                <?php foreach ($UG_Numbers as $UG_Number) { ?>
                  <a href="tel:<?php echo nl2br(utf8_encode($UG_Number['ad_help_number'])); ?>"><?php echo nl2br(utf8_encode($UG_Number['ad_help_number'])); ?></a><br />
                <?php } ?>
              </p>
              <p class="post pt-3">Post Graduate</p>
              <p>
                <?php foreach ($PG_Numbers as $PG_Number) { ?>
                  <a href="tel:<?php echo nl2br(utf8_encode($PG_Number['ad_help_number'])); ?>"><?php echo nl2br(utf8_encode($PG_Number['ad_help_number'])); ?></a> <br />
                <?php } ?>
              </p>
              <p class="post pt-3">Diploma</p>
              <p>
                <?php foreach ($Diploma_Numbers as $Diploma_Number) { ?>
                  <a href="tel:<?php echo nl2br(utf8_encode($Diploma_Number['ad_help_number'])); ?>"><?php echo nl2br(utf8_encode($Diploma_Number['ad_help_number'])); ?></a> <br />
                <?php } ?>
              </p>
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