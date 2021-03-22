<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disclaimer</title>
    <?php include('./includes/page_header.php'); ?>

    <!-- custome CSS -->
    <!-- <link rel="stylesheet" href="css/nav_bar.css"> -->
    <link rel="stylesheet" href="css/terms_cond.css">
    <link rel="stylesheet" href="css/foot.css">



</head>

<body style="font-family: 'Lato', sans-serif;">
    <?php include('./includes/new_navbar.php'); ?>
    <!-- ======= Top Bar ======= -->

    <section class="main_about camps-life">
        <div class="container">
            <div class="row">
                <?php include('./includes/disclamier_info.php'); ?>
                <?php foreach ($disDetails as $disDetail) { ?>
                    <div class="col-md-12">
                        <h3 class="about-heading"><?php echo nl2br($disDetail['dis_main_title']); ?></h3>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="inner_container">
            <div class="faq-panel-1 cms-inner-pages">
                <div class="container">
                    <?php foreach ($disDetails as $disDetail) { ?>
                        <h2><?php echo nl2br($disDetail['dis_subheading']); ?></h2>
                    <?php } ?>
                    <ul>
                        <?php foreach ($dis_features_Details as $dis_features_Detail) { ?>
                            <li><?php echo nl2br($dis_features_Detail['dis_sub_desc']); ?></li>
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