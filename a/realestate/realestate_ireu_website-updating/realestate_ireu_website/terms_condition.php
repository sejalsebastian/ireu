<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Terms & Conditions</title>
  <?php include('./includes/page_header.php'); ?>

  <!-- custome CSS -->
  <link rel="stylesheet" href="css/nav_bar.css">
  <link rel="stylesheet" href="css/terms_cond.css">
  <link rel="stylesheet" href="css/foot.css">



</head>

<body style="font-family: 'Lato', sans-serif">




  <?php include('./includes/navbar.php'); ?>
  <!-- ======= Top Bar ======= -->

  <section class="main_about camps-life">
    <div class="container">
      <div class="row">
        <?php include('./includes/tac_info.php'); ?>
        <?php foreach ($tcDetails as $tcDetail) { ?>
          <div class="col-md-12">
            <h3 class="about-heading"><?php echo nl2br($tcDetail['tc_main_title']); ?></h3>
          <?php } ?>
          </div>
      </div>
    </div>
    <div class="inner_container">
      <div class="cms-inner-pages">
        <div class="container">
          <?php foreach ($tcDetails as $tcDetail) { ?>
            <h2><?php echo nl2br($tcDetail['tc_subheading']); ?></h2>
          <?php } ?>
          <ul>
            <?php foreach ($tc_features_Details as $tc_features_Detail) { ?>
              <li>
                <?php echo nl2br($tc_features_Detail['tc_sub_desc']); ?>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </section>



  <!-- footer part -->
  <?php include('./includes/footer.php'); ?>







</body>

</html>