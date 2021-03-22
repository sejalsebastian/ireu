<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Academics</title>
    <?php include('./includes/page_header.php'); ?>

    <!-- custome CSS -->
    <!-- <link rel="stylesheet" href="css/nav_bar.css" /> -->
    <link rel="stylesheet" href="./css/academics.css" />
    <link rel="stylesheet" href="css/foot.css" />
    <style>
        ul li {
            font-size: 17px;
            line-height: 2;
        }
       
@media only screen and (max-width: 600px) {
      .main_about{
        margin-top: 138px;
      }
      .navbar-toggler{
        padding: 0rem 0rem;
      }
      }

    </style>
</head>

<body style="font-family: 'Lato', sans-serif">
    <?php include('./includes/new_navbar.php'); ?>
    <!-- ======= Top Bar ======= -->
    <!-- content -->
    <section class="main_about Media">
        <div class="container-fluid">
            <!-- <div class="title-heading"><h3 class="media-heading">Schools</h3></div> -->
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
                                <a href="academics" class="nav-item nav-link active">Overview</a>
                                </li>
                                <li class="">
                                <a href="academics_usp" class="nav-item nav-link active">USP</a>
                                </li>
                                <li class="">
                                <a href="academics_certificate" class="nav-item nav-link active">Certificate</a>
                                </li>
                                <li class="">
                                <a href="academics_immersion_prg" class="nav-item nav-link active">Immersion Program</a>
                                </li>
                                <li class="">
                                <a href="" class="nav-item nav-link active">Faculty</a>
                                </li>
                                <li class="">
                                <a href="academics_Corporate_Mentors" class="nav-item nav-link active">Corporate Mentors</a>
                                </li>
                                <li class="">
                                <a href="academics_research" class="nav-item nav-link active">Research Projects</a>
                                </li>
                                <li class="">
                                <a href="academics_Experential_Learning" class="nav-item nav-link active">Experiential Learning</a>
                                </li>
                                <li class="">
                                <a href="academics_initivities.php" class="nav-item nav-link active">IREU Initiatives</a>
                                </li>
                            </ul>
                        </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="margin-top: 30px; height: 400px;" class="experiential_learning">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body">
                    <div class="acoord-shadow pdf-down">
                        <?php include("./includes/aca_ini_info.php"); ?>
                        <?php  foreach( $ac_initis as $ac_initi) { ?>
                        <h5><?php echo nl2br(utf8_encode( $ac_initi['ac_initia_name'])); ?><a class="grey-bg" href="<?php echo nl2br(utf8_encode( $ac_initi['ac_initia_pdf'])); ?>" target="_blank" rel="noopener">
                        <img src="https://alliance.edu.in/siteassets/images/pdf-icon1.png" alt="" /></a></h5>
                        <?php } ?>
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