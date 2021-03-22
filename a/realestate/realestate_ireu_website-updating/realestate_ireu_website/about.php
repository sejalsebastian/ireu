<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About</title>
  <?php include('./includes/page_header.php'); ?>
  <!-- custom css  -->
  <!-- <link rel="stylesheet" href="css/nav_bar.css" /> -->
  <link rel="stylesheet" href="css/aboutus.css" />
  <link rel="stylesheet" href="css/foot.css" />
  <link rel="stylesheet" href="css/about_new.css" />
  <!-- <script src="./js/navbar.js"></script> -->
 
</head>

<body style="font-family: 'Lato', sans-serif">
  <?php include('./includes/new_navbar.php'); ?>

  <section class="main_about csr-section">
    <!-- overview div starts from here  -->

    <div class="about-bg">
      <div class="">
        <div class="pad_left">
          <div class="full-width">
            <?php include('./includes/about_info.php'); ?>
            <?php foreach ($abtDetails as $abtDetail) { ?>
              <h2 class="heading" style="color: #17375d;fo"><?php echo nl2br($abtDetail['abt_title']); ?></h2>
              <p id="abt_ov" style="text-align: justify;"><?php echo nl2br($abtDetail['abt_overview']); ?></p>
            <?php } ?>
          </div>
        </div>
      </div>
      <!-- university image div  -->
      <div class="university_img container">
        <img class="img-fluid w-100" src="./uploads/<?php echo $abtDetails[0]['abt_banner_img'] ?>" alt="university_img" />
      </div>
      <section class="University-section">
        <div class="">
          <div class="about-section pad_left" style="padding: 37px">
            <div class="row p-4" style="background-color: #eeeece">
              <div class="col-md-4 Vision">
                <?php foreach ($abtDetails as $abtDetail) { ?>
                  <h3><?php echo nl2br($abtDetail['abt_vision_title']); ?></h3>
                  <p style="font-size: 16px"><?php echo nl2br(utf8_encode($abtDetail['abt_vision_desc'])); ?></p>
                <?php } ?>
              </div>
              <div class="col-md-4 Mission">
                <?php foreach ($abtDetails as $abtDetail) { ?>
                  <h3><?php echo nl2br($abtDetail['abt_mission_title']); ?></h3>
                  <p style="font-size: 16px"><?php echo nl2br(utf8_encode($abtDetail['abt_mission_desc'])); ?></p>
                <?php } ?>
              </div>
              <div class="col-md-4 Mission">
                <?php foreach ($abtDetails as $abtDetail) { ?>
                  <h3><?php echo nl2br($abtDetail['abt_commitment_title']); ?></h3>
                  <p style="font-size: 16px"><?php echo nl2br(utf8_encode($abtDetail['abt_commitment_desc'])); ?></p>
                <?php } ?>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12" style="padding-top: 50px; line-height: 2">
                <?php foreach ($abtDetails as $abtDetail) { ?>
                  <h2 class="heading" style="color: #17375d">
                    <?php echo nl2br($abtDetail['abt_why_ireu_title']); ?>
                  </h2>
                <?php } ?>
                <ul class="team_talk">
                  <?php foreach ($abt_features_Details as $abt_features_Detail) { ?>
                    <li><?php echo nl2br(utf8_encode($abt_features_Detail['abt_why_answers'])); ?></li>
                  <?php } ?>
                </ul>
              </div>
              <div class="col-md-12">
                <div class="text-center">
                  <?php foreach ($abtDetails as $abtDetail) { ?>
                    <h2 class="heading" style="color: #17375d;">
                      <?php echo nl2br($abtDetail['abt_ceo_title']); ?>
                    </h2>

                    <h3 style="color: #17375d;">
                      <strong><em class="quote"><?php echo nl2br(utf8_encode($abtDetail['abt_ceo_quote'])); ?></em></strong>
                    </h3>
                  <?php } ?>
                  <br />

                  <img class="img-fluid" src="./uploads/<?php echo $abtDetails[0]['abt_ceo_img'] ?>" alt="" width="400px" height="350px" style="background-color: #17375d; padding: 10px" />
                </div>

                <br />
                <br />
                <?php foreach ($abtDetails as $abtDetail) { ?>
                  <p class="desc"><?php echo nl2br(utf8_encode($abtDetail['abt_ceo_desc'])); ?></p>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </section>
  <!-- footer part -->

  <?php include('./includes/footer.php'); ?>

</body>

</html>