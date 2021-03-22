<?php
// studlogin
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Mentor Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include('./includes/page_header.php'); ?>


    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="./css/new_navbar.css">
    <link href="css/register1.css" rel="stylesheet">

    <style>
        .main-section {
            background-color: white;
            background-image: none;
            height: 0;
        }
    </style>
    <!-- google recaptch-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body>

    <header class="main-section fixed-top scrolling-navbar">
        <div class="ed-top hidden-sm hidden-xs" style="background-color: #374871;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        <div class="ed-com-t1-right">
                            <ul>
                                <li><a href="./index#second">International Collaborations</a></li>
                                <li> <a href="#">Student Center</a></li>
                                <li> <a href="#">Knowledge Series</a></li>

                                <li><a href="./index#research">Research</a>
                                </li>
                                <li class="admission-colm1"> <a href="membership">Membership</a>

                                </li>

                                <li class="admission-colm1"> <a href="#">Conferences</a>

                                </li>

                                <li class="admission-colm1"><a href="javascript:;">Login</a>
                                    <ul class="dropdown_menu">
                                        <li><a href="#" target="_blank">Student Login </a></li>
                                        <li><a href="https://hr.ireu.education/" target="_blank">Faculty & Staff Login </a></li>
                                        <li><a href="#" target="_blank">Investor Login </a></li>
                                        <li><a href="https://hr.ireu.education/" target="_blank">Intern Login </a></li>
                                        <li><a href="#" target="_blank">Channel Partners Login</a></li>

                                    </ul>
                                </li>
                                <li><a href="#">|</a>
                                </li>
                                <!-- <li><a href="#">Contact Us </a>
                            </li> -->
                                <li class="apply-colm"><a href="register" target="_blank"><span class="spn_apply">APPLY ONLINE</span></a>
                                </li>
                                <li class="searchnav"><a href="./search" class="open-search"><i class="fa fa-search"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- LOGO AND MENU SECTION -->
        <div class="top-logo hidden-sm hidden-xs w-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wed-logo" style="display: inline-block;">
                            <a href="./"><img src="./img/logo.png" alt="IREU" width="150px" />
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main id="main" style="margin-top: 150px;">

        <!-- <section class="container-fluid frt_div">
            <div class="row">
                <div class=" container-fluid col-lg">
                    <img class="imageBox" style=" max-width: 100%" src="./img/logo.png" alt="First slide">
                </div>
                <div class="container-fluid col-lg">
                    <img class="imageBox clg_img" style=" max-width: 100%;" src="assets/img/top-university-of-india4a.jpg" alt="First slide">
                </div>
            </div>
        </section> -->

        <section class="snd_div">
            <nav class="navbar justify-content-between snd_nav">
                <form class="form-inline" id="snd_nav">
                    <p>Already Applied? <a class="navbar-brand" id="log1" href="#" data-toggle="modal" data-target="#exampleModal">Login</a></p>
                </form>
            </nav>
        </section>



        <!-- The Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <img class=" mx-auto" src="./img/logo.png" alt="">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- action="logintest_forme.php" method="POST" -->
                    <div class="modal-body">
                        <form id="log_form" novalidate>
                            <div class="form-group">
                                <div class="modal_error" id="error_correct"></div>
                                <label for="email">Email:</label>
                                <input type="email" class="form-control inputform" id="email" placeholder="Enter email" name="email" style="text-align: left;">
                                <div class="modal_error" id="error_email"></div>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control inputform" id="pwd" placeholder="Enter password" name="password" style="text-align: left;">
                                <div class="modal_error" id="error_password"></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="close" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="studlogin" id="stdlogid" class="btn btn-primary text-center">LogIn</button>
                                <div class="text-center text-muted delimiter">
                                <p><a href="enter_email.php">Forgot your password?</a></p>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
        <!-- The Modal end -->


        <!-- third div-->
        <div class="container card">
            <section class="trd_div">
                <div class="row">
                    <div class="col-lg-7 col-md-6">

                        <img src="./img/reg_banner.jpg" class="img-fluid">
                        <h3>Admission 2021-2022</h3>
                        <p>Our students are ambitious, and creative with a quest to know more. At IREU/Jain
                            (Deemed-to-be University), we bring together the bright minds of today who
                            will outline the innovations of tomorrow.</p>
                    </div>
                    <!-- ash s reg -->
                    <div class="container-fluid col-lg-4 col-md-6 col-sm-12 reg_div ">
                        <h3>Registration</h3>
                        <div class="result" style="color: green;"></div>
                        <div class="failure" style="color:red;"></div>

                        <p id="head"></p>
                        <br>
                        <!-- name="rform" action="includes/stud_register_info.php" method="POST" onsubmit="return Validate()"  -->
                        <form id="rform" method="POST" novalidate>
                            <div>
                                <div class="form-group row" id="nationality_div">

                                    <div class="col-sm-10">

                                        <select id="std_nationality" class="form-control " required style="border-color: rgb(16 16 16); color:black; line-height: 100px; height: 50px;" name="std_nationality">
                                            <option value="Select Nationality">Select Nationality</option>
                                            <option value="INDIAN NATIONAL">INDIAN NATIONAL</option>
                                            <option value="PERSON OF INDIAN ORIGIN">PERSON OF INDIAN ORIGIN</option>
                                            <option value="NON-RESIDENT INDIAN">NON-RESIDENT INDIAN</option>
                                            <option value="OVERSEAS CITIZEN OF INDIA">OVERSEAS CITIZEN OF INDIA</option>
                                            <option value="FOREIGN INTERNATIONAL">FOREIGN INTERNATIONAL</option>
                                        </select>
                                        <div class="registerError" id="std_nationality_rerror"></div>

                                    </div>
                                </div>

                                <div class="form-group row" id="username_div">
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-lg inputform" id="std_name" placeholder="Student Name" name="std_name" required>
                                        <div class="registerError" id="std_name_rerror"></div>
                                    </div>
                                </div>

                                <div class="form-group row" id="email_div">
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control form-control-lg inputform" id="std_email" placeholder="Email" name="std_email" required>
                                        <div class="registerError" id="std_email_rerror"></div>

                                    </div>
                                </div>

                                <div class="form-group row" id="mobile_div">
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-lg inputform" id="std_mobile_number" name="std_mobile_number" placeholder="Mobile Number" required>
                                        <div class="registerError" id="std_mobile_number_rerror"></div>
                                    </div>
                                </div>

                                <div class="form-group row" id="passwrd_div">
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control form-control-lg inputform" id="std_password1" placeholder="Password" name="std_password1" required>
                                        <div class="registerError" id="std_password1_rerror"></div>
                                    </div>
                                </div>

                                <div class="form-group row" id="conf_pass_div">
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control form-control-lg inputform" id="std_confirm_password" name="std_confirm_password" placeholder="Confirm Password" required>
                                        <div class="registerError" id="std_confirm_password_rerror"></div>

                                    </div>
                                </div>

                                <div class="g-recaptcha" data-sitekey="6LebNxIaAAAAAH-F38cKmTCCFKGlTNuH_SKcvLsn"></div>
                                <div class="registerError" id="g_recaptcha_response_error"></div>
                                <br />
                                <div class="form-group row text-center">
                                    <div class="col-sm-10">
                                        <input type="submit" class="btn btn-primary btn-lg reg_btn" name="std_register" value="register" id="std_register">
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <!-- register form ends -->
                </div>
            </section>
        </div>
        <!-- third div end-->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include('./includes/footer.php'); ?>


    <script>
        $(function($) {
            $("#log_form").on('submit', function(event) {
                event.preventDefault();
                $('#error_email').text('');
                $('#error_password').text('');
                $('#error_correct').text('');
                var email = $('#email').val();
                var password = $('#pwd').val();
                var button = $('#stdlogid').attr("type");
                var form = $(this);

                $.ajax({
                    url: "includes/handlelogin.php",
                    method: 'POST',
                    data: {
                        email: email,
                        password: password,
                        button: button
                    },
                    success: function(res) {
                        if (res == "Yes") {
                            window.location = 'user_application';
                        } else {
                            console.log(res);
                            var array = JSON.parse(res);
                            $('#error_email').html(array.email);
                            $('#error_password').html(array.password);
                            $('#error_email').html(array.valid);
                            $('#error_correct').html(array.correct);
                        }

                    }
                });
            })

            // register click
            $("#rform").on('submit', function(event) {

                event.preventDefault();
                $('#std_nationality_rerror').text('');
                $('#std_name_rerror').text('');
                $('#std_email_rerror').text('');
                $('#std_mobile_number_rerror').text('');
                $('#std_password1_rerror').text('');
                $('#std_confirm_password_rerror').text('');
                $('#g_recaptcha_response_error').text('');
                $('.result').text('');
                $('.failure').text('');
                $('#success_msg').text('');
                $.ajax({
                    url: "includes/stud_register_info.php",
                    method: 'POST',
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(res) {
                        var array = JSON.parse(res);
                        if (array.success_msg) {
                            $('.result').html(array.success_msg);
                            setTimeout(function() {
                                $("#exampleModal").modal('show')
                            }, 4000);

                        } else {
                            $('#std_nationality_rerror').html(array.std_nationality);
                            $('#std_name_rerror').html(array.std_name);
                            $('#std_email_rerror').html(array.std_email);
                            $('#std_mobile_number_rerror').html(array.std_mobile_number);
                            $('#std_password1_rerror').html(array.std_password1);
                            $('#std_confirm_password_rerror').html(array.std_confirm_password);
                            $('#std_email_rerror').html(array.validEmail);
                            $('#std_confirm_password_rerror').html(array.validPassword);
                            $('#std_mobile_number_rerror').html(array.validMobile);
                            $('#std_name_rerror').html(array.std_name_valid);
                            $('#g_recaptcha_response_error').html(array.g_recaptcha_response);
                            $('.failure').html(array.failure_msg);
                        }

                    }
                });
            })


        })

        $("#exampleModal").on("hidden.bs.modal", function() {
            $('#error_email').text('');
            $('#error_password').text('');
            $('#error_correct').text('');
        });
    </script>

</body>

</html>