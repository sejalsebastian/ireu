<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Career Development Centre</title>
  <?php include('./includes/page_header.php'); ?>


  <!-- custome CSS -->
  <!-- <link rel="stylesheet" href="css/nav_bar.css"> -->
  <link rel="stylesheet" href="css/placements.css">
  <link rel="stylesheet" href="css/foot.css">


</head>

<body style="font-family: 'Lato', sans-serif;">
  <?php include('./includes/new_navbar.php'); ?>
  <!-- ======= Top Bar ======= -->

  <!-- <div class="row">
    <?php include('./includes/placement_info.php'); ?>
    <?php foreach ($casDetails as $casDetail) { ?>
      <div class="col-md-12">
        <h3 class="about-heading"><?php echo $casDetail['cas_main_title'] ?></h3>
      <?php } ?>

      </div>
  </div> -->



  <section class="main_about Media csr-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="second_menu">
            <ul>
              <li class="active">
                <a href="placements" class="nav-item nav-link active" style="font-size: x-large">
                  Career Assistance and Support
                </a>
              </li>
              <li class="">
                <a href="placements_finishing.php" class="nav-item nav-link active" style="font-size: x-large">IREU Finishing School</a>
              </li>

            </ul>
          </div>
        </div>
      </div>

      <div class="row" style="margin-top: 3rem;">
        <div class="col-md-6">
          <?php foreach ($casDetails as $casDetail) { ?>
            <p><?php echo nl2br($casDetail['cas_overview']); ?></p>
            <p><?php echo nl2br($casDetail['cas_pre_place_activity_title']); ?></p>
          <?php } ?>

          <ul>
            <?php foreach ($cas_pre_placement_Details as $cas_pre_placement_Detail) { ?>
              <li><?php echo nl2br($cas_pre_placement_Detail['cas_pre_place_activities']); ?></li>
            <?php } ?>
          </ul>


        </div>

        <div class="international-schoolbanner col-md-6">
          <img src="./uploads/<?php echo $casDetails[0]['cas_img'] ?>" class="img-fluid" />

          <!-- <img src="./img/banner/placements.jpg" class="img-fluid" style="margin-top: 20px;"/></div> -->

        </div>
        <div class="row">
          <div class="col-md-12">
            <?php foreach ($casDetails as $casDetail) { ?>
              <h3 class="about-heading"><?php echo nl2br($casDetail['cas_resources_main_title']); ?></h3>
            <?php } ?>
            <?php foreach ($cas_resources_Details as $cas_resources_Detail) { ?>
              <h4><?php echo nl2br($cas_resources_Detail['cas_res_title']); ?></h4>
              <p><?php echo nl2br($cas_resources_Detail['cas_res_title_desc']); ?></p>
            <?php } ?>
          </div>
        </div>
      </div>
  </section>
  <!-- placement head close -->




  <!-- footer part -->
  <?php include('./includes/footer.php'); ?>



</body>

</html>