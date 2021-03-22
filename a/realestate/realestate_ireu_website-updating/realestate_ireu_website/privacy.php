<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Privacy Policy</title>
  <?php include('./includes/page_header.php'); ?>

  <!-- custome CSS -->
  <!-- <link rel="stylesheet" href="css/nav_bar.css" /> -->
  <link rel="stylesheet" href="css/terms_cond.css" />
  <link rel="stylesheet" href="css/foot.css" />
</head>

<body style="font-family: 'Lato', sans-serif">
  <?php include('./includes/new_navbar.php'); ?>
  <!-- ======= Top Bar ======= -->
  <section class="main_about camps-life">
    <div class="container">
      <div class="row">
        <?php include('./includes/privacy_info.php'); ?>
        <?php foreach ($privDetails  as $privDetail) { ?>
          <div class="col-md-12">
            <h3 class="about-heading"><?php echo nl2br($privDetail['Priv_main_title']); ?></h3>
          </div>
        <?php } ?>
      </div>
    </div>
    <div class="inner_container">
      <div class="faq-panel-1 cms-inner-pages">
        <div class="container">
          <?php foreach ($privDetails  as $privDetail) { ?>
            <h2>
              <?php echo nl2br($privDetail['Priv_subheading']); ?>
            </h2>
          <?php } ?>
          <ul>
            <?php foreach ($priv_features_Details  as $priv_features_Detail) { ?>
              <li>
                <?php echo nl2br($priv_features_Detail['priv_sub_desc']); ?>
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