<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Program</title>
  <!--Fav Icons-->
  <link href="./img/favicon.png" rel="icon" sizes="45*45">
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet" />

  <!-- Bootstrap css v4.5-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
  <!-- bootstrap js -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- font awasome  -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" /> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" media="all" />

  <script src="https://use.fontawesome.com/a4810d46b6.js"></script>

      <!-- Vendor CSS Files -->

      <link href="vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

<link href="vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- custome CSS -->

  <!-- <link rel="stylesheet" href="css/nav_bar.css" /> -->
  <link rel="stylesheet" href="css/program.css" />
  <link rel="stylesheet" href="css/program_detail.css" />
  <link rel="stylesheet" href="css/foot.css" />
  <style>
    ul li {
      font-size: 18px;
    }
  </style>
</head>

<body style="font-family: 'Lato', sans-serif">
  <?php include('./includes/new_navbar.php'); ?>
  <!-- ======= Top Bar ======= -->
  <section class="main_about Media Programmes">
    <div class="container">
      <div class="">
        <h3 class="media-heading">Programmes</h3>

      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="second_menu">
            <ul>
              <li><a class="active" id="home-tab" href="./program.php">Undergraduate</a></li>
              <li class=""><a class="" id="profile-tab" href="./program.php">Postgraduate</a></li>
              <li class=""><a class="" id="contact-tab" href="./program.php">Diploma</a></li>

            </ul>

          </div>
        </div>
      </div>

    </div>
  </section>
  <div class="inner_container">
    <div class="container">
      <div class="row">
        <?php include('./includes/display_template_info.php') ?>
        <?php foreach ($templateNames as $templateName) { ?>
          <div class="col-md-12">
            <h2><?php echo $templateName['course_name'] ?></h2>
          <?php } ?>
          </div>
      </div>
    </div>

    <!-- overview section  -->
    <section class="back programe_details_sec" style="background:url(./img/banner/prg_banner.jpg) no-repeat; background-size:100%">
     
      <div class="container">
        <div class="row">
          <div class="col-md-7 width-left1">
          
            <div class="block_1 programe_details_sec2">
            <span class="prg_apply_now">
      <a href="https://jgigroup.in/jainonline/" target="_blank" class="btn px-md-5 py-md-3 mb-4 mb-md-0 mx-auto" style="background-color: #f6b024;font-weight:500;color:#000;"> 
                        Apply Now
                    </a>
        </span>
              <div class="row">
                <h4>Overview</h4>
                <?php foreach ($templateDetails as $templateDetail) { ?>
                  <p><?php echo  nl2br($templateDetail['cour_overview']); ?></p>
                <?php } ?>

                <h4>Course Duration</h4>
                <?php foreach ($templateDetails as $templateDetail) { ?>
                  <p><?php echo $templateDetail['cour_duration']; ?></p>
                <?php } ?>
              </div>
            </div>
          </div>
          <div class="col-md-5 position-relative">
            <div class="block_2">

              <div class="red">
                <div class="icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
                <h4>Eligibility</h4>
                <hr>
                <?php foreach ($templateDetails as $templateDetail) { ?>
                  <p><?php echo nl2br($templateDetail['cour_eligibility']); ?></p>
                <?php } ?>
                <hr>
                <h4>Program Start Date</h4>
                <p>July 31, 2021</p>
                <hr>
                <div class="icon"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                  <h4>Application Deadline</h4>
                </div>


                <p>July 15, 2021</p>
                <hr>
                <h4>Study Mode</h4>
                <p>Online</p>
                <hr>
                
              </div>
              <div class="blue">
                <div class="row">
                  <div class="col-md-12 text-left blue-text">
                    <a target="_blank" href="">
                      <img src="https://www.alliance.edu.in/siteassets/images/pdf-icon.png">
                      <span>Programme Catalogue</span>
                    </a>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 text-left blue-text">


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- key Features  -->
    <section class="programme_sec">
      <div class="container">
        <div class="row why_choose_sec">
          <div class="col-md-12">
            <h4>Key Features</h4>
          </div>
        </div>
        <div class="why_choose_sec">
          <div class="row">

            <?php foreach ($keyFeatures as $keyFeature) { ?>
              <div class="col-md-6">
                <div class="choose_block_main">
                  <p><?php echo nl2br($keyFeature['course_feat_desc']); ?></p>
                </div>
              </div>
            <?php } ?>

          </div>
        </div>
      </div>
    </section>

    <!-- course structure  -->
    <section class="structure">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h4>Course Structure</h4>
          </div>
        </div>
        <div class="row">


          <nav class="col-md-12">

            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
              <?php for ($i = 0; $i < count($years); $i++) { ?>

                <a id="yearID" class="nav-item nav-link <?php if ($i == 0) {
                                                          echo "active";
                                                        } ?>" id="nav-home-tab" data-toggle="tab" href="#structure_<?php echo $i + 1; ?>" role="tab" onclick="sendYearId(<?php echo $years[$i]['cour_str_id'];  ?>)" aria-controls="nav-home" aria-selected="true">
                  <h6 id="semID"><?php echo nl2br($years[$i]['cour_year']); ?></h6>
                  <input type="hidden" id="hasID" value="<?php echo $years[$i]['cour_str_id'];  ?>">
                </a>
              <?php } ?>
            </div>

          </nav>

          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="structure_1" role="tabpanel" aria-labelledby="nav-home-tab">
              <div id="testdan" class="row">
                <div class="col-md-6" id="sem_dis_1"></div>
                <div class="col-md-6" id="sem_dis_2"></div>
                <div class="col-md-6" id="sem_col_1"></div>
                <div class="col-md-6" id="sem_col_2"></div>
              </div>
            </div>
          </div>

        </div>

      </div>


    </section>

    <!-- fee structure section  -->
    <section class="fee_structure">
      <div class="container">
        <div class="row">
          <div class="col-md-12 heading-section">
            <h4>
              Fee Structure
            </h4>
          </div>
        </div>
        <div class="row justify-content-around">
          <div class="col-md-12 heading-section">

            <div class="tab-content pt-4" id="nav-tabContent">
              <div class="tab-pane fade show active" id="national" role="tabpanel" aria-labelledby="nav-home-tab">

                <div class="table-responsive">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style="width: 33%;">Semester-wise Fee Plan</th>
                        <th style="width: 33%;">Year-wise Fee Plan</th>
                        <th style="width: 33%;">Total Course Fee Plan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td style="width: 33%;">I Sem&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.30,000
                          <hr>II Sem&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.30,000
                          <hr>III Sem&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.30,000
                          <hr>IV Sem&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.30,000
                          <!-- <hr>V Sem&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.42,500
                                                                              <hr>VI Sem&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.42,500 -->
                          <hr><strong>Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. 1,20,000</strong>
                        </td>
                        <td style="width: 33%;">I Year&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.60,000
                          <hr>II Year&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.60,000
                          <!-- <hr>III Year&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.85,000 -->
                          <hr><strong>Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. 1,20,000</strong>
                        </td>
                        <td style="width: 33%;"><strong>Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1,14,000/-</strong> <p>*5% discount on the total fee will be provided</p>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center" colspan="3"><strong> One-time Registration Fee: Rs.2000/- </strong><br> <strong> Examination Fees (Per Year): Rs. 3000/- </strong></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade" id="international" role="tabpanel" aria-labelledby="nav-profile-tab">
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8" style="background:#ffffff;">
            <h5 class="text-center no-gutters" style="padding:10px;color:#000000;letter-spacing:1px;">We offer loan assistance to students</h5>
            <div class="row">
              <div class="col-md-6">
                <img src="https://online.jainuniversity.ac.in/theme/assets/images/FInance-Peer.png" class="img-fluid">
              </div>
              <div class="col-md-6">
                <ul style="color:black !important;padding-top:10px">
                  <li>Zero Cost EMI</li>
                  <li>EMI Options available for 8 months.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <!-- learning methodology  -->
    <section class="py-5" style="background-color: #d0e6f1;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 heading-section">
            <h4 class="mb-4 text-dark text-center">Learning Methodology</h4>
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="p-4 bg-white" style=" min-height: 200px;border-radius: 3px;">
                  <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0"><img src="https://online.jainuniversity.ac.in/theme/assets/images/icons/learning-methodology/online-learning.png" class="d-block mx-auto" style="width: 80px;height:80px;"></div>
                    <div class="col-md-8">Program delivery follows the prescribed four Quadrants approach resulting in maximum learner engagement. Each course involves approximately 120 hours of learning.</div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="p-4 bg-white" style=" min-height: 200px;border-radius: 3px;">
                  <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0"><img src="https://online.jainuniversity.ac.in/theme/assets/images/icons/learning-methodology/video-lecture.png" class="d-block mx-auto" style="width: 80px;height:80px;"></div>
                    <div class="col-md-8">Two-way live <b>online audio-video lectures</b></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="p-4 bg-white" style=" min-height: 150px;border-radius: 3px;">
                  <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0"><img src="https://online.jainuniversity.ac.in/theme/assets/images/icons/learning-methodology/elearning.png" class="d-block mx-auto" style="width: 80px;height:80px;"></div>
                    <div class="col-md-8 "><b>Pre-recorded audio-video</b> lecture available on the Learning Management System (LMS)</div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="p-4 bg-white" style=" min-height: 150px;border-radius: 3px;">
                  <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0"><img src="https://online.jainuniversity.ac.in/theme/assets/images/icons/learning-methodology/multimedia.png" class="d-block mx-auto" style="width: 80px;height:80px;"></div>
                    <div class="col-md-8"><b>Multimedia</b> content</div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="p-4 bg-white" style=" min-height: 120px;border-radius: 3px;">
                  <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0"><img src="https://online.jainuniversity.ac.in/theme/assets/images/icons/learning-methodology/message.png" class="d-block mx-auto" style="width: 80px;height:80px;"></div>
                    <div class="col-md-8 ">Interactions through the <b>discussion forum</b> on the LMS</div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="p-4 bg-white" style=" min-height: 120px;border-radius: 3px;">
                  <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0"><img src="https://online.jainuniversity.ac.in/theme/assets/images/icons/learning-methodology/content.png" class="d-block mx-auto" style="width: 80px;height:80px;"></div>
                    <div class="col-md-8 ">Exhaustive <b>e-content/printed material</b> for in-depth reference</div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="p-4 bg-white" style=" min-height: 160px;border-radius: 3px;">
                  <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0"><img src="https://online.jainuniversity.ac.in/theme/assets/images/icons/learning-methodology/2020-12-09.png" class="d-block mx-auto" style="width: 80px;height:80px;"></div>
                    <div class="col-md-8"><b>Self-study activities</b> including assignments, quiz &amp; MCQs, essay-type questions, case study etc.</div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="p-4 bg-white" style=" min-height: 160px;border-radius: 3px;">
                  <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0"><img src="https://online.jainuniversity.ac.in/theme/assets/images/icons/learning-methodology/learning.png" class="d-block mx-auto" style="width: 80px;height:80px;"></div>
                    <div class="col-md-8"><b>Experiential learning methods</b> including individual and group projects, programming exercise, dissertation, MOOCs and various</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-md-12">
        <div id="accordion2">
                    <div class="card card-style mb-2 shadow-sm">
                        <a class="card-link collapsed" data-toggle="collapse" href="#acc7" title="one" aria-expanded="false">
                            <div class="card-header faq-style"> Live Online Lectures </div>
                        </a>
                        <div id="acc7" class="collapse" data-parent="#accordion2">
                            <div class="card-body ser-body">
                                <p>Two-way live online lectures are scheduled during the weekends. Typically 5 - 8 hours of engagement is planned, the schedule of which is communicated well in advance. Faculty and Subject Matter Experts lead these
                                    interactive sessions. A recording of these sessions is hosted on the Learning Management System (LMS) for subsequent reference and practice.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card card-style mb-2 shadow-sm">
                        <a class="card-link collapsed" data-toggle="collapse" href="#acc8" title="one">
                            <div class="card-header faq-style"> Learning Management System </div>
                        </a>
                        <div id="acc8" class="collapse" data-parent="#accordion2">
                            <div class="card-body ser-body">
                                       
                                    <p>
                                    Our LMS platform has been designed to engage and inspire a learner by providing access to all the learning resources including texts, videos, screencasts & lecture recordings; participate in discussion forums; communicate
                                    with the faculty and the program team. A leaner has the option to take-up the several quizzes and the MCQs that follow at the end of every unit of the course, track learning progress, submit assignments and
                                    much more.
                                    </p>
                                     
                                                            </div>
                        </div>
                    </div>
                    <div class="card card-style mb-2 shadow-sm">
                        <a class="collapsed card-link" data-toggle="collapse" href="#acc9" title="one">
                            <div class="card-header faq-style"> Self-Learning Material </div>
                        </a>
                        <div id="acc9" class="collapse" data-parent="#accordion2">
                            <div class="card-body ser-body">
                                <p>A learner is provided access to an exhaustive tailor-made Self Learning Material (SLM) on the LMS. The SLM will also indicate sources of additional readings and resources available on the internet and on-campus
                                    library.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card card-style mb-2 shadow-sm">
                        <a class="collapsed card-link" data-toggle="collapse" href="#acc10" title="one">
                            <div class="card-header faq-style"> Assessment </div>
                        </a>
                        <div id="acc10" class="collapse" data-parent="#accordion2">
                            <div class="card-body ser-body">
                                <p>Assessment of performance in all courses is based on two components - Internal Assessment and University Examination conducted online at the end of the Semester.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card card-style mb-2 shadow-sm">
                        <a class="collapsed card-link" data-toggle="collapse" href="#acc11" title="one">
                            <div class="card-header faq-style"> Experiential Learning </div>
                        </a>
                        <div id="acc11" class="collapse" data-parent="#accordion2">
                            <div class="card-body ser-body">
                                <p>The Program emphasizes on Experiential Learning that allows learners to apply concepts learnt in the classroom in simulated and real work situations. This is achieved through Simulation Tools, Platforms & Environments</p>
                            </div>
                        </div>
                    </div>
                    <div class="card card-style mb-2 shadow-sm">
                        <a class="collapsed card-link" data-toggle="collapse" href="#acc12" title="one">
                            <div class="card-header faq-style"> Case Studies & Assignments </div>
                        </a>
                        <div id="acc12" class="collapse" data-parent="#accordion2">
                            <div class="card-body ser-body">
                                <p>Carefully chosen real-world cases & assignments are both discussed and used as problem-solving exercises during the Program</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
      </div>
    </section>

<!-- enroll section  -->
<section class="py-5" style="background-color: #707375;">
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-md-12 heading-section">
                <div class="bg-white p-4">
                    <h4 class="mb-4 text-center">How to Enroll into the Program? </h4>
                    <ul class="text-dark">
                        <li class="mb-3">

<a href="https://jgigroup.in/jainonline/" target="_blank" style="color: #000000;"> 
                        Click here
                    </a> 

                            
                         to visit the IREU Online Enrollment Form. Create your login on the Enrolment Platform by entering your unique Email id and create a password of your choice.</li>
                        <li class="mb-3">Once you have logged in, you will see a screen showing 4 essential steps to be completed to enroll for the Program of your choice. All the necessary documents are to be submitted as part of the Process.</li>
                        <li class="mb-3">At the end of the Enrollment Process 'Pay Fee’ using Net Banking/ Debit Card/ Credit Card/SBI Collect. Option to submit fee using easy-EMI with 0% interest</li>
                        <li class="mb-3">If you are opting for Financial Aid, please select the Financial Aid option during Enquiry. IREU Student Support Executives would reach out to you</li>
                        <li class="mb-3">Please download the Enrollment Form and Receipt. Enrollment Number is to be used for further Communication</li>
                        <li>Our Program Executives would reach out to you for activating your Learning Management System</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Career Advancement Services -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-md-12 heading-section">
                <h4 class="mb-4 text-md-center">Career Advancement Services</h4>
                <p class="text-md-center">
                    Our Career Advancement Services Team works tirelessly to Connect our Students with the right Job opportunities. With Years of Experience in Training, Networking and Human Resource skills, the team finds exciting and
                    challenging Job Opportunities for our students in companies of repute through a structured framework
                </p>
                <nav class="mt-5 program-tab">
                    <div class=" nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab17" data-toggle="tab" href="#nav-home17" role="tab" aria-controls="nav-home17" aria-selected="true">Mentorship</a>
                        <a class="nav-item nav-link" id="nav-profile-tab17" data-toggle="tab" href="#nav-profile17" role="tab" aria-controls="nav-profile17" aria-selected="false">Career Guidance</a>
                        <a class="nav-item nav-link" id="nav-contact-tab17" data-toggle="tab" href="#nav-contact17" role="tab" aria-controls="nav-contact17" aria-selected="false">Connect To Careers</a>
                    </div>
                </nav>
                <div class="tab-content pt-4" id="nav-tabContent">
                    <div class="tab-pane fade active show" id="nav-home17" role="tabpanel" aria-labelledby="nav-home-tab17">
                        <div class="row justify-content-center">
                            <div class="col-md-2"><img src="https://online.jainuniversity.ac.in/theme/assets/images/career-advancement-services/business-partnership.png" class="img-fluid" style="width: 150px; height: 150px;"></div>
                            <div class="col-md-8 py-md-5">
                                <ul>
                                    <li class="mb-2">Online Mentoring Sessions on Weekends</li>
                                    <li class="mb-2">Doubt Clearing Sessions with Faculty during Live Classes and Discussion Forums</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile17" role="tabpanel" aria-labelledby="nav-profile-tab17">
                        <div class="row justify-content-center">
                            <div class="col-md-2"><img src="https://online.jainuniversity.ac.in/theme/assets/images/career-advancement-services/career-path.png" class="img-fluid" style="width: 150px; height: 150px;"></div>
                            <div class="col-md-8 py-md-5">
                                <ul>
                                    <li class="mb-2">Dedicated Corporate Relations Team to guide you on the Right Career Path</li>
                                    <li class="mb-2">Online Sessions on Resume Writing, Personal Branding on Social Media, Interview Preparation and Setting Career Goals</li>
                                    <li class="mb-2">Live Online Sessions over Weekends from Top Industry Professionals on 25 Key Skills for Success</li>
                                    <li class="mb-2">Regular Feedback on your Resume and Social Media Profiling</li>
                                    <li class="mb-2">1:1 Mock Interview Sessions with Industry Experts</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact17" role="tabpanel" aria-labelledby="nav-contact-tab17">
                        <div class="row justify-content-center">
                            <div class="col-md-2"><img src="https://online.jainuniversity.ac.in/theme/assets/images/career-advancement-services/handshake.png" class="img-fluid" style="width: 150px; height: 150px;"></div>
                            <div class="col-md-8 py-md-5">
                                <ul>
                                    <li class="mb-2">Connect To Careers e-hire portal helps you apply for relevant jobs and attend interviews Online</li>
                                    <li class="mb-2">Connect To Careers Job Fairs are Organized to connect with top employers</li>
                                    <li class="mb-2">Get Access to Industry reports on LinkedIn Insights and Attend Regular Webinars from Industry Professionals on Job Market Insights as part of Connect To Career Series</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- faq section  -->
    <section class="specializations_section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h4>FAQ's</h4>
          </div>
        </div>
        <div class="row">
          <div class="faq-panel-1 bba-course col-12">
            <div id="accordion">
              <?php for ($i = 0; $i < count($faqtitles); $i++) { ?>
                <div class="acoord-shadow">
                  <div id="heading3" onclick="sendId(<?php echo $faqtitles[$i]['faq_id']; ?>)">
                    <h5 class="mb-0 accordion"><a class="collapsed" data-toggle="collapse" data-target="#collapse<?php echo $i + 1 ?>" style="color: black;"><?php echo nl2br($faqtitles[$i]['faq_title']); ?></a></h5>
                  </div>

                  <div id="collapse<?php echo $i + 1 ?>" class="collapse" data-parent="#accordion">
                    <div class="card-body faq_body">
                      <ul id="qa">
                      </ul>
                    </div>
                  </div>

                </div>
              <?php } ?>

            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Our Hiring Partners -->
    <section id="testimonials1">
            <div class="container">

                <div class=" container">
                    <div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated">
                        <h4 class="mb-4 heading" style="color: #17375d;">Our Hiring Partners</h4>
                    </div>
                    <div class="owl-carousel testimonials-carousel ">


                        <div class="testimonial-item1 ">
                            <img class="img-fluid testimonial-img1" src="https://online.jainuniversity.ac.in/theme/assets/images/logos/1.jpg" alt="">
                        </div>


                        <div class="testimonial-item1 ">
                            <img class="img-fluid testimonial-img1" src="https://online.jainuniversity.ac.in/theme/assets/images/logos/2.jpg" alt="">
                        </div>


                        <div class="testimonial-item1 ">
                            <img class="img-fluid testimonial-img1" src="https://online.jainuniversity.ac.in/theme/assets/images/logos/3.jpg" alt="">
                        </div>


                        <div class="testimonial-item1 ">
                            <img class="img-fluid testimonial-img1" src="https://online.jainuniversity.ac.in/theme/assets/images/logos/4.jpg" alt="">
                        </div>

                        <div class="testimonial-item1 ">
                            <img class="img-fluid testimonial-img1" src="https://online.jainuniversity.ac.in/theme/assets/images/logos/5.jpg" alt="">
                        </div>
                        <div class="testimonial-item1 ">
                            <img class="img-fluid testimonial-img1" src="https://online.jainuniversity.ac.in/theme/assets/images/logos/6.jpg" alt="">
                        </div>
                        <div class="testimonial-item1 ">
                            <img class="img-fluid testimonial-img1" src="https://online.jainuniversity.ac.in/theme/assets/images/logos/7.jpg" alt="">
                        </div>
                        <div class="testimonial-item1 ">
                            <img class="img-fluid testimonial-img1" src="https://online.jainuniversity.ac.in/theme/assets/images/logos/8.jpg" alt="">
                        </div>
                        <div class="testimonial-item1 ">
                            <img class="img-fluid testimonial-img1" src="https://online.jainuniversity.ac.in/theme/assets/images/logos/9.jpg" alt="">
                        </div>
                        <div class="testimonial-item1 ">
                            <img class="img-fluid testimonial-img1" src="https://online.jainuniversity.ac.in/theme/assets/images/logos/10.jpg" alt="">
                        </div>
                        <div class="testimonial-item1 ">
                            <img class="img-fluid testimonial-img1" src="https://online.jainuniversity.ac.in/theme/assets/images/logos/11.jpg" alt="">
                        </div>
                        <div class="testimonial-item1 ">
                            <img class="img-fluid testimonial-img1" src="https://online.jainuniversity.ac.in/theme/assets/images/logos/12.jpg" alt="">
                        </div>
                        <div class="testimonial-item1 ">
                            <img class="img-fluid testimonial-img1" src="https://online.jainuniversity.ac.in/theme/assets/images/logos/13.jpg" alt="">
                        </div>
                        <div class="testimonial-item1 ">
                            <img class="img-fluid testimonial-img1" src="https://online.jainuniversity.ac.in/theme/assets/images/logos/15.jpg" alt="">
                        </div>
                        <div class="testimonial-item1 ">
                            <img class="img-fluid testimonial-img1" src="https://online.jainuniversity.ac.in/theme/assets/images/logos/16.jpg" alt="">
                        </div>
                    </div>

                </div>
                <br>


            </div>
        </section>

    <!-- addmisson contact section  -->
    <section class="contact_for_admission">
      <div class="container">
        <div class="program-contact">
          <div class="row no-gutters">
            <div class="col-md-4">
              <div class="bg-yellow">
                <h2>Contact for <span>Admissions</span></h2>
              </div>
            </div>
            <div class="col-md-8">
              <div class="bg-red">
                <ul>
                  <li>
                    <h2>
                      <img src="img/symbols/phone-logo.png" alt="" /><span>Call Us</span>
                    </h2>
                    <h6>
                      <a href="tel:+918296308193">+91 82963 08193</a>,
                      <a href="tel:+918971755988">+91 89717 55988</a>,
                      <a href="tel:+919916735114">+91 9916735114</a>
                    </h6>
                  </li>
                  <li>
                    <h2>
                      <img src="img/symbols/email-icon.png" alt="" /><span>Email Us</span>
                    </h2>
                    <h6>
                      <a href="mailto:navitha.reddy@ireugroup.com">navitha.reddy@ireugroup.com</a>
                    </h6>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- footer part -->
  <?php include('./includes/footer.php'); ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <!-- Vendor JS Files -->

      <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    

    <script>
        $(".testimonials-carousel").owlCarousel({
            autoplay: true,
            dots: true,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                900: {
                    items: 3
                }
            }
        });
    </script>
  <script>
    $(document).ready(function() {
      //  initial show of semesters  
      if ($("#yearID").hasClass('active')) {
        let activeID = $("#hasID").val();
        // alert(activeID);
        $.ajax({
          type: "POST",
          url: "includes/getsem_type.php",
          data: {
            activeID: activeID
          },
          success: function(response) {
            var array = JSON.parse(response);
            $("#sem_dis_1").append("<h6 id=" + array[1].sem_type + ">" + array[1].sem_type + "</h6>");
            $("#sem_dis_2").append("<h6 id=" + array[0].sem_type + ">" + array[0].sem_type + "</h6>");
            initialSemSend(array[0].sem_type, array[1].sem_type)
            // console.log(array[0].sem_type, array[1].sem_type);
          },
          error: function(result) {
            alert('error');
          }
        });
      }
      //  if block end

    });

    // to send faqID
    function sendId(qa_id) {
      $('.faq_body').text('');
      $.ajax({
        type: "GET",
        url: "includes/display_template_info.php?",
        data: {
          iden: qa_id,
          course_id: <?php echo $_GET['course_id']; ?>
        },

        success: function(result) {

          var array = jQuery.parseJSON(result);

          var container = $('.faq_body');

          array.forEach(element => {
            var ques = element['faq_questions'];
            var ans = element['faq_answer'];
            container.append('<p style="font-size:18px;">' + ques + '</p>');
            container.append('<p>' + ans + '</p>');

          });
        },
        error: function(result) {
          alert('error');
        }
      });
    }

    // to get the Year sem id 
    function sendYearId(YearID) {
      $('#sem_dis_1').text('');
      $('#sem_dis_2').text('');
      $('#sem_col_1').text('');
      $('#sem_col_2').text('');
      $.ajax({
        type: "POST",
        url: "includes/getsem_type.php",
        data: {
          YearID: YearID
        },
        success: function(response) {

          var array = JSON.parse(response);
          $("#sem_col_1").append("<h6 id=" + array[0].sem_type + ">" + array[0].sem_type + "</h6>");
          $("#sem_col_2").append("<h6 id=" + array[1].sem_type + ">" + array[1].sem_type + "</h6>");
          sendSem(array[0].sem_type, array[1].sem_type);

        },
        error: function(result) {
          alert('error');
        }
      });
    }

    function sendSem(s1, s2) {
      $.ajax({
        type: "POST",
        url: "includes/getsem_info.php",
        data: {
          s1: s1,
          s2: s2
        },
        success: function(response) {

          var array = JSON.parse(response);
          array.sem_col1_info.forEach(element => {
            let semsterinfo = element['cour_sem_details'];
            $("#sem_col_1").append("<li>" + semsterinfo + "</li>");
          });
          array.sem_col2_info.forEach(element => {
            let semsterinfo = element['cour_sem_details'];
            $("#sem_col_2").append("<li>" + semsterinfo + "</li>");
          });
        },
        // error: function(result) {
        //     alert('error');
        // }
      });

    }

    function initialSemSend(s1, s2) {
      $.ajax({
        type: "POST",
        url: "includes/getsem_info.php",
        data: {
          s1: s1,
          s2: s2
        },
        success: function(response) {

          var array = JSON.parse(response);

          array.sem_col2_info.forEach(element => {
            let semsterinfo = element['cour_sem_details'];
            $("#sem_dis_1").append("<li>" + semsterinfo + "</li>");
          });
          array.sem_col1_info.forEach(element => {
            let semsterinfo = element['cour_sem_details'];
            $("#sem_dis_2").append("<li>" + semsterinfo + "</li>");
          });
        },
        // error: function(result) {
        //     alert('error');
        // }
      });

    }
  </script>
</body>

</html>