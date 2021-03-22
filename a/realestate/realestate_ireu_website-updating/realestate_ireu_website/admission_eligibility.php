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
<style>
@media only screen and (max-width: 600px) {
      .inner_container{
        text-align: justify;
      }
    
      }
</style>

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

  <section>
    <div class="inner_container">
      <div class="container mb-5" >
        <div class="row">
          <?php include("./includes/ad_ele_info.php"); ?>
          <?php foreach ($ad_ele_Details as $ad_ele_Detail) { ?>
            <div class="col-md-8 pb-3">
              <h4 class="heading"><?php echo nl2br(utf8_encode($ad_ele_Detail['ad_ele_heading_title'])); ?></h4>
              <p><?php echo nl2br(utf8_encode($ad_ele_Detail['ad_ele_des'])); ?></p>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>


  <!-- footer part -->
  <?php include('./includes/footer.php'); ?>

</body>

</html>