<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Register</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!--Fav Icons-->
    <link href="./img/favicon.png" rel="icon" sizes="45*45">
    <!-- lato font  -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet" />

    <!-- bootstrap css  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <!-- bootstrap script v4.5 -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"> -->
    <!-- </script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <!-- font awasome  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" media="all" />
    <script src="https://use.fontawesome.com/a4810d46b6.js"></script>

    <!-- Template Main CSS File -->
    <!-- <link rel="stylesheet" href="css/nav_bar.css"> -->
    <link href="./css/register.css" rel="stylesheet">
    <link rel="stylesheet" href="css/foot.css">

    <!-- google recaptch-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


</head>

<body>
    <?php include('./includes/new_navbar.php'); ?>
    <!-- ======= Top Bar ======= -->
    <div class="container card" style="padding: 20px; margin-bottom: 50px; margin-top:220px">

        <section class=" trd_div ">
            <div class="row">
                <div class="col-lg-7 col-md-6">

                    <!-- <div class="jumbotron">
                        <button type="button" class="btn btn-primary adm_btn">Admissions 2021</button>


                    </div> -->
                    <img src="./img/reg_banner.jpg" class="img-fluid">
                    <h3>Admission 2020-2021</h3>
                    <p>Our students are ambitious, and creative with a quest to know more. At Jain
                        (Deemed-to-be University), we bring together the bright minds of today who
                        will outline the innovations of tomorrow.</p>
                </div>

                <div class="container col-lg-4 col-md-6 col-sm-12 reg_div ">
                    <h3>Step 1</h3>
                    <div class="result" style="color: green;"></div>
                    <div class="failure" style="color:red;"></div>
                    <form id="rform" novalidate>
                        <div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <select id="inputState" class="form-control" name="nationality" required>
                                        <option value="Select Nationality">Select Nationality</option>
                                        <option value="INDIAN NATIONAL">INDIAN NATIONAL</option>
                                        <option value="PERSON OF INDIAN ORIGIN">PERSON OF INDIAN ORIGIN</option>
                                        <option value="NON-RESIDENT INDIAN">NON-RESIDENT INDIAN</option>
                                        <option value="OVERSEAS CITIZEN OF INDIA">OVERSEAS CITIZEN OF INDIA</option>
                                        <option value="FOREIGN INTERNATIONAL">FOREIGN INTERNATIONAL</option>
                                    </select>
                                    <div class="registerError" id="nationality_error"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm inputform" id="colFormLabelLg" placeholder="Student Name" name="stdname" required>
                                    <div class="registerError" id="stdname_error"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="email" class="form-control form-control-sm inputform" id="colFormLabelLg" placeholder="Email" name="stdemail" required>
                                    <div class="registerError" id="stdemail_error"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm inputform" id="colFormLabelLg" placeholder="Mobile Number" name="stdmobnum" required>
                                    <div class="registerError" id="stdmobnum_error"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <?php include('./includes/select_programtype.php'); ?>
                                    <select id="program_type" class="form-control" name="program_type" required>
                                        <option value="default">Select Program Type</option>
                                        <?php foreach ($programmes as $programme) { ?>
                                            <option value="<?php echo $programme['prog_id']; ?>"><?php echo $programme['prog_name']; ?></option>
                                        <?php } ?>
                                    </select>
                                    <div class="registerError" id="program_type_error"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <select id="course_name" class="form-control" name="course_name" required>
                                        <option value="default">Select Course Name</option>
                                    </select>
                                    <div class="registerError" id="course_name_error"></div>
                                </div>
                            </div>

                            <div class="g-recaptcha" data-sitekey="6LcKNVYaAAAAAOzotQwHvjAN-bf5lalARckDr3H9"></div>
                            <div class="registerError" id="g_recaptcha_response_error"></div>
                            <br />
                            <div class="form-group row text-center">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-lg reg_btn">Next</button>
                                </div>
                            </div>
                        </div>
                    </form>



                </div>
            </div>
        </section>
    </div>


    <?php include('./includes/footer.php'); ?>


    <!-- jquery js  -->
    <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <!-- user defined -->
    <script>
        // ajax call to get course type   
        $(document).ready(function() {
            $("#program_type").change(function() {
                var program_type = $(this).val();
                //    alert(program_type);
                $.ajax({
                    url: './includes/select_coursetype.php',
                    method: 'POST',
                    data: {
                        program_type: program_type
                    },
                    dataType: "text",
                    success: function(data) {
                        $("#course_name").html(data);
                    }
                });
            });
        });

        //register step1 form stores to inquiry

        $("#rform").on('submit', function(event) {
            event.preventDefault();
            $('#nationality_error').text('');
            $('#stdname_error').text('');
            $('#stdemail_error').text('');
            $('#stdmobnum_error').text('');
            $('#program_type_error').text('');
            $('#course_name_error').text('');
            $('#g_recaptcha_response_error').text('');
            $('.result').text('');
            $('.failure').text('');
            $('#success_msg').text('');
            $.ajax({
                url: "includes/inquiry_register_info.php",
                method: 'POST',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(res) {
                    var array = JSON.parse(res);
                    if (array.success_msg) {
                        $('.result').html(array.success_msg);
                        $('.modal-body').html(array.success_msg);
                        $("#exampleModal").modal('show');
                        setTimeout(function() {
                            location.href = "https://jgigroup.in/jainonline/spc/10002"
                        }, 2000)



                    } else {
                        $('#nationality_error').html(array.nationality);
                        $('#stdname_error').html(array.stdname);
                        $('#stdemail_error').html(array.stdemail);
                        $('#stdmobnum_error').html(array.stdmobnum);
                        $('#stdmobnum_error').html(array.validMobile);
                        $('#stdname_error').html(array.std_name_valid);
                        $('#program_type_error').html(array.program_type);
                        $('#course_name_error').html(array.course_name);
                        $('#g_recaptcha_response_error').html(array.g_recaptcha_response);
                        $('.failure').html(array.failure_msg);

                    }

                }
            });
        })
    </script>

</body>

</html>