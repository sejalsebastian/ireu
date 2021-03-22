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
    a:active { 
    text-decoration: underline;
    color:#000;
}
  </style>
</head>
<style>
@media only screen and (max-width: 600px) {
      .main_about{
        margin-top: 138px;
      }
      .navbar-toggler{
        padding: 0rem 0rem;
      }
      }
</style>

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
      </div>
    </div>
  </section>
  <section style="margin-top: 30px">
    <div class="container">
      <div class="row">
      <div class="container">
        <div class="row">
        <?php include("./includes/aca_usp_info.php"); ?>
            <?php  foreach( $aca_usps as$aca_usp) { ?>
          <div class="col-md-7">
            <h2 class="heading"><?php echo nl2br(utf8_encode($aca_usp['ac_usp_title'])); ?></h2> <?php } ?>
            <ul> <?php  foreach( $aca_lists as $aca_list) { ?>
              <li>
            <?php echo nl2br(utf8_encode($aca_list['ac_usp_id_list'])); ?></li>
           <?php } ?>
            </ul>
          </div>
          <div class="col-md-5">
          <img src="./img/aca_usp.jpeg"  class="img-fluid"  alt="" width="400px; height=400px;">
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