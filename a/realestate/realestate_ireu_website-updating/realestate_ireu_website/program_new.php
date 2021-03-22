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
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <!-- font awasome  -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" /> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" media="all" />

  <script src="https://use.fontawesome.com/a4810d46b6.js"></script>

  <!-- custome CSS -->
  <!-- <link rel="stylesheet" href="css/nav_bar.css"> -->
  <link rel="stylesheet" href="css/program.css">
  <link rel="stylesheet" href="css/foot.css">
</head>

<body style="font-family: 'Lato', sans-serif">
  <?php include('./includes/new_navbar.php'); ?>
  <!-- ======= Top Bar ======= -->
  <section class="main_about Media Programmes">
    <div class="container">
      <div class="">
        <h3 class="media-heading">Programmes</h3>
      </div>
      <section class="py-4">
        <div class="row">
          <div class="col-md-12">
            <div class="second_menu">
              <ul id="tabsJustified" class="nav nav-pills">
                <?php include('./includes/display_prg_info.php'); ?>

                <?php for ($i = 0; $i < count($programmesDetails); $i++) { ?>

                  <li class="nav-item"><a href="" data-target="<?php echo nl2br($programmesDetails[$i]['prog_id']); ?>" data-toggle="tab" onclick="sendprogID(<?php echo nl2br($programmesDetails[$i]['prog_id']); ?>)" class="nav-link  text-uppercase  <?php if ($i == 0) {
                                                                                                                                                                                                                                                            echo "active";
                                                                                                                                                                                                                                                          } ?> initial" style=" font-size: large;"><?php echo nl2br($programmesDetails[$i]['prog_name']); ?></a></li>

                <?php } ?>
              </ul>
            </div>
          </div>
        </div>

        <section class="programme_main">
          <div class="row">
            <div class="col-md-12">
              <div class="tab-content" id="myTabContent">
             
                <div class="programe_content tab-pane fade show active" id="target_1" role="tabpanel" aria-labelledby="target_1-tab">
                <p>Program Partnered with Jain (Deemed to be University), ONLINE</p>

                  <ul id="display_list" class="programme_ul">

                  </ul>

                </div>
                <p>Program Partnered with Infrastructure University, Kuala Lumpur</p>
                <h5>Academic-Research Program Partnered with Advanced Centre for Human Resources and Industry Interface, India Office</h5>
             <p>Established 2000, is into Research and Academic work, related to Higher Education and bridge gap between the Industry-Institute. Over One decade, the Centre has taken several consultancy, Research Project and Reports along with Coaching and Mentoring for New Age Careers. During the tenure at one of the Management Department, the Centre Director ( designated as Vice President ) undertook and organised series of talks by Corporate honcho, and Invited around 80 Talks by CEO, Vice President, Director, Chairman and Presidents of various MNC’s. This was the record of having such talks in bridging Industry-Institute gap, and addressing the much needed Corporate readiness.</p>
             <section class="experiential_learning">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">

                                <div class="acoord-shadow pdf-down">
                                    <h5>IRAdvanced Centre for Human Resources and Industry Interface<a class="grey-bg" href="pdf/Advanced Centre .pdf" target="_blank" rel="noopener"><img src="./img/symbols/pdf-icon1.png" alt="" /></a></h5>
                                </div>


                            </div>



                        </div>
                    </div>
                </div>
            </section>
              </div>
            </div>
          </div>
        </section>

    </div>
    <!--container-->

  </section>

  <!-- footer part -->
  <?php include('./includes/footer.php'); ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script>
    $(document).ready(function() {
      var scroll_pos = 0;
      $(document).scroll(function() {
        scroll_pos = $(this).scrollTop();
        if (scroll_pos > 80) {
          //    $(".sticky-top a").css("color", "white");
          $(".sticky-top").css('background-color', 'white');


        } else {
          $(".sticky-top").css('background-color', 'transparent');
        }
      });

      //getting courseId on pageload
      let courseId = $('#tabsJustified li .active').attr('data-target');
      sendprogID(courseId);
    });

    //getting programID
    function sendprogID(progID) {
      $("#display_list").text('');
      $.ajax({
        type: "POST",
        url: "includes/get_courseToDisplay.php",
        data: {
          progID: progID
        },
        success: function(response) {
          var array = JSON.parse(response);
          // display_list
          array.forEach(element => {
            const courses_id = element['courses_id'];
            const course_name = element['course_name'];

            $("#display_list").append("<li id=" + courses_id + "><a href=program_detail.php?course_id=" + courses_id + ">" + course_name + "</a></li>");
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