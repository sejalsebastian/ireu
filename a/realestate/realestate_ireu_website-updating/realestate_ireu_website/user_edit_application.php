<?php
session_start();
// echo var_dump($_SESSION);
$appid = $_GET['applicationnumber'];
$_SESSION['appid'] = $_GET['applicationnumber'];
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--Fav Icons-->
    <link href="/assets/img/favicon.png" rel="icon" sizes="32*32">

    <title>User application</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="./assets/css/user_edit_app.css" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" rel="stylesheet" />
    <style>
        .mandate {
            color: red;
        }

        input:focus,
        select:focus,
        textarea:focus,
        button:focus {
            outline: none;
        }
    </style>

</head>

<body>

    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading"><a class="navbar-brand" href="#">
                    <img src="./img/logo.png" alt="" width="130px">
                </a> </div>
            <div class="list-group list-group-flush">
                <a href="./user_application" class="list-group-item list-group-item-action sid_nav">New Application Form</a>
                <a href="./my_application" class="list-group-item list-group-item-action sid_nav">My Applications</a>
                <a href="./my_payments" class="list-group-item list-group-item-action sid_nav">My Payments</a>

            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="btn " id="menu-toggle"><span class="navbar-toggler-icon"></span></button>

                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="./assets/img/student.jpg" alt="avtar-img" width="20px">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="stud_logout.php?logout">Logout</a>

                        </div>
                    </li>
                </ul>

            </nav>

            <section class="wizard-section">
                <div class="row no-gutters">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-wizard">
                            <h3 style="color:#194486;">APPLICATION FORM</h3>
                            <hr style="color: #194486;">
                            <form action="editappnext.php" id="mutlistep_edit_form" method="post" role="form" enctype="multipart/form-data">
                                <div class="form-wizard-header">
                                    <ul class="list-unstyled form-wizard-steps clearfix">
                                        <li class="active"><span>PROGRAM INFO</span></li>
                                        <li><span>PERSONAL INFO</span></li>
                                        <li><span>COMMUNICATION INFO</span></li>
                                        <li><span>EDUCATIONAL INFO</span></li>
                                        <li><span>OTHER INFO</span></li>
                                        <li><span>UPLOAD DOCS</span></li>
                                    </ul>
                                </div>
                                <fieldset class="wizard-fieldset show">
                                    <h5>PROGRAM INFO</h5>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label">PROGRAM TYPE<span class="mandate">*</span></label>
                                            <?php include('./includes/myapplication_edit.php'); ?>
                                            <?php foreach ($editdetails as $editdetail) {
                                                $pr = $editdetail['prog_type'];
                                            }  ?>
                                            <select class="form-control wizard-required" name="programtype" id="prg_type">
                                                <?php include('./includes/select_tag.php'); ?>
                                                <?php foreach ($courses as $course) { ?>
                                                    <option value="<?php echo $course['course_type']; ?>" <?php if ($pr == $course['course_type']) {
                                                                                                                echo ' selected="selected"';
                                                                                                            } ?>><?php echo $course['course_type']; ?></option>
                                                <?php } ?>
                                            </select>
                                            <?php foreach ($editdetails as $editdetail) { ?>
                                                <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">PROGRAM NAME<span class="mandate">*</span></label>
                                            <select class="form-control wizard-required" name="programname" id="prog_name">
                                                <option value="<?php echo $editdetail['prog_name']; ?>"><?php echo $editdetail['prog_name']; ?></option>
                                            </select>

                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>

                                    <div class="form-group clearfix">
                                        <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                                    </div>
                                </fieldset>
                                <fieldset class="wizard-fieldset">
                                    <h5>Personal Information</h5>
                                    <div class="row">
                                        <div class="form-group col-md-6">

                                            <label class="control-label">First Name </label>(As per
                                            10th standard marks card) <span class="mandate">*</span>

                                            <input type="text" name="fname" value="<?php echo $editdetail['firstname']; ?>" class="form-control wizard-required" id="first_name" required style="text-transform:uppercase" />
                                            <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group col-md-6">

                                            <label class="control-label">Last Name </label> <span class="mandate">*</span>
                                            <input type="text" name="lname" value="<?php echo $editdetail['lastname']; ?>" class="form-control wizard-required" id="last_name" style="text-transform:uppercase" required />
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label class="control-label">Email <span class="mandate">*</span></label>
                                            <input type="text" name="email" class="form-control wizard-required" id="email" value="<?php echo $editdetail['email']; ?>" required />
                                            <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="control-label">Date of Birth <span class="mandate">*</span></label>
                                            <input type="text" name="dob" value="<?php echo $editdetail['dateofbirth']; ?>" class="form-control wizard-required " autocomplete="off" id="dob" placeholder="dd/mm/yyyy" required>
                                            <div class="wizard-form-error"></div>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label class="control-label">Registered Mobile Number
                                                <span class="mandate">*</span></label>
                                            <input type="text" name="mobile_no" value="<?php echo $editdetail['registered_mob_num']; ?>" class="form-control wizard-required" maxlength="10" id="mobile_number" required />
                                            <div class="wizard-form-error"></div>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label class="control-label">Alternative Mobile
                                                Number</label>
                                            <input type="text" name="alt_mobile_no" value="<?php echo $editdetail['alternative_mob_num']; ?>" class="form-control" maxlength="10" />

                                        </div>

                                        <div class="form-group col-md-4">
                                            <label class="control-label">Gender <span class="mandate">*</span></label>
                                            <select name="gender" class="form-control wizard-required" id="gender" required>
                                                <option value="MALE" <?php if ($editdetail['gender'] == "MALE") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>MALE</option>
                                                <option value="FEMALE" <?php if ($editdetail['gender'] == "FEMALE") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>FEMALE</option>
                                            </select>
                                            <div class="wizard-form-error"></div>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label class="control-label">Religion <span class="mandate">*</span></label>
                                            <select name="religion" class="form-control wizard-required" id="religion" required>
                                                <option value="HINDUISM" <?php if ($editdetail['religion'] == "HINDUISM") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>HINDUISM</option>
                                                <option value="ISLAM" <?php if ($editdetail['religion'] == "ISLAM") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>ISLAM</option>
                                                <option value="CHRISTIANITY" <?php if ($editdetail['religion'] == "CHRISTIANITY") {
                                                                                    echo ' selected="selected"';
                                                                                } ?>>CHRISTIANITY</option>
                                                <option value="BUDDHISM" <?php if ($editdetail['religion'] == "BUDDHISM") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>BUDDHISM</option>
                                                <option value="SIKHISM" <?php if ($editdetail['religion'] == "SIKHISM") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>SIKHISM</option>
                                                <option value="JAINISM" <?php if ($editdetail['religion'] == "JAINISM") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>JAINISM</option>
                                                <option value="OTHERS" <?php if ($editdetail['religion'] == "OTHERS") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>OTHERS</option>
                                            </select>
                                            <div class="wizard-form-error"></div>
                                        </div>


                                        <div class="form-group col-md-4">
                                            <label class="control-label">Caste</label>
                                            <input type="text" name="caste" value="<?php echo $editdetail['caste']; ?>" class="form-control" />

                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="control-label">Category <span class="mandate">*</span></label>
                                            <select name="category" class="form-control wizard-required" id="category" required>
                                                <!-- <option value="<?php echo $editdetail['category']; ?>"><?php echo $editdetail['category']; ?></option> -->
                                                <option value="GENERAL" <?php if ($editdetail['category'] == "GENERAL") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>GENERAL</option>
                                                <option value="OBC" <?php if ($editdetail['category'] == "OBC") {
                                                                        echo ' selected="selected"';
                                                                    } ?>>OBC</option>
                                                <option value="NT" <?php if ($editdetail['category'] == "NT") {
                                                                        echo ' selected="selected"';
                                                                    } ?>>NT</option>
                                                <option value="SC" <?php if ($editdetail['category'] == "SC") {
                                                                        echo ' selected="selected"';
                                                                    } ?>>SC</option>
                                                <option value="ST" <?php if ($editdetail['category'] == "ST") {
                                                                        echo ' selected="selected"';
                                                                    } ?>>ST</option>
                                                <option value="BC" <?php if ($editdetail['category'] == "BC") {
                                                                        echo ' selected="selected"';
                                                                    } ?>>BC</option>
                                                <option value="PWD" <?php if ($editdetail['category'] == "PWD") {
                                                                        echo ' selected="selected"';
                                                                    } ?>>PWD</option>
                                                <option value="EWS" <?php if ($editdetail['category'] == "EWS") {
                                                                        echo ' selected="selected"';
                                                                    } ?>>EWS</option>
                                                <option value="EBC" <?php if ($editdetail['category'] == "EBC") {
                                                                        echo ' selected="selected"';
                                                                    } ?>>EBC</option>
                                                <option value="PC" <?php if ($editdetail['category'] == "PC") {
                                                                        echo ' selected="selected"';
                                                                    } ?>>PC</option>
                                                <option value="WBC" <?php if ($editdetail['category'] == "WBC") {
                                                                        echo ' selected="selected"';
                                                                    } ?>>WBC</option>
                                                <option value="UR" <?php if ($editdetail['category'] == "UR") {
                                                                        echo ' selected="selected"';
                                                                    } ?>>UR</option>
                                                <option value="UR(GEN)" <?php if ($editdetail['category'] == "UR(GEN)") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>UR(GEN)</option>
                                                <option value="MOBC" <?php if ($editdetail['category'] == "MOBC") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>MOBC</option>
                                                <option value="STH" <?php if ($editdetail['category'] == "STH") {
                                                                        echo ' selected="selected"';
                                                                    } ?>>STH</option>
                                                <option value="STP" <?php if ($editdetail['category'] == "STP") {
                                                                        echo ' selected="selected"';
                                                                    } ?>>STP</option>
                                            </select>
                                            <div class="wizard-form-error"></div>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label class="control-label">Aadhar No</label>
                                            <input type="text" name="aadhar_no" value="<?php echo $editdetail['aadhar_no']; ?>" class="form-control" maxlength="12" style="text-transform:uppercase" />
                                            <em class="error help-block aadhar_no"></em>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label class="control-label">Blood Group <span class="mandate">*</span></label>
                                            <select name="blood_group" class="form-control wizard-required" id="blood_group" required>
                                                <option value="A+" <?php if ($editdetail['blood_group'] == "A+") {
                                                                        echo ' selected="selected"';
                                                                    } ?>>A+</option>
                                                <option value="A-" <?php if ($editdetail['blood_group'] == "A-") {
                                                                        echo ' selected="selected"';
                                                                    } ?>>A-</option>
                                                <option value="B+" <?php if ($editdetail['blood_group'] == "B+") {
                                                                        echo ' selected="selected"';
                                                                    } ?>>B+</option>
                                                <option value="B-" <?php if ($editdetail['blood_group'] == "B-") {
                                                                        echo ' selected="selected"';
                                                                    } ?>>B-</option>
                                                <option value="O+" <?php if ($editdetail['blood_group'] == "O+") {
                                                                        echo ' selected="selected"';
                                                                    } ?>>O+</option>
                                                <option value="O-" <?php if ($editdetail['blood_group'] == "O-") {
                                                                        echo ' selected="selected"';
                                                                    } ?>>O-</option>
                                                <option value="AB+" <?php if ($editdetail['blood_group'] == "AB+") {
                                                                        echo ' selected="selected"';
                                                                    } ?>>AB+</option>
                                                <option value="AB-" <?php if ($editdetail['blood_group'] == "AB-") {
                                                                        echo ' selected="selected"';
                                                                    } ?>>AB-</option>
                                            </select>
                                            <div class="wizard-form-error"></div>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label class="control-label">PWD (Disability)<span class="mandate">*</span></label>
                                            <select name="physical_status" class="form-control wizard-required" id="physical_status" required>
                                                <option value="YES" <?php if ($editdetail['pwd_disability'] == "YES") {
                                                                        echo ' selected="selected"';
                                                                    } ?>>YES</option>
                                                <option value="NO" <?php if ($editdetail['pwd_disability'] == "NO") {
                                                                        echo ' selected="selected"';
                                                                    } ?>>NO</option>
                                            </select>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>


                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label class="control-label">Father's Name <span class="mandate">*</span></label>
                                            <input type="text" name="father_name" value="<?php echo $editdetail['father_name']; ?>" id="father_name" class="form-control wizard-required" style="text-transform:uppercase" required />
                                            <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="control-label">Mobile Number <span class="mandate">*</span></label>
                                            <input type="text" name="f_phone_no" value="<?php echo $editdetail['father_mob_num']; ?>" id="f_phone_no" class="form-control wizard-required" maxlength="10" required />
                                            <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="control-label">Father's Email</label>
                                            <input type="text" name="f_email" value="<?php echo $editdetail['father_email']; ?>" class="form-control" style="text-transform:uppercase" />
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label class="control-label">Father Occupation/Business Entity</label>
                                            <input type="text" name="f_occupation" value="<?php echo $editdetail['father_occupation']; ?>" id="f_occupation" class="form-control" style="text-transform:uppercase" />
                                        </div>
                                    </div>


                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label class="control-label">Mother's Name <span class="mandate">*</span></label>
                                            <input type="text" name="mother_name" value="<?php echo $editdetail['mother_name']; ?>" id="mother_name" class="form-control wizard-required" style="text-transform:uppercase" required />
                                            <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="control-label">Mobile Number <span class="mandate">*</span></label>
                                            <input type="text" name="m_phone_no" value="<?php echo $editdetail['mother_mob_number']; ?>" id="m_phone_no" class="form-control wizard-required" maxlength="10" required />
                                            <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="control-label">Mother's Email</label>
                                            <input type="text" name="m_email" value="<?php echo $editdetail['mother_email']; ?>" class="form-control" style="text-transform:uppercase" />
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="control-label">Mother Occupation/Business Entity</label>
                                            <input type="text" name="m_occupation" value="<?php echo $editdetail['mother_occupation']; ?>" id="m_occupation" class="form-control" style="text-transform:uppercase" />
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label class="control-label">Combined Parent Annual Income<span class="mandate">*</span></label>
                                            <select name="parents_income" class="form-control wizard-required" id="parents_income" required>
                                                <!-- <option value="<?php echo $editdetail['parent_annual_inc']; ?>"><?php echo $editdetail['parent_annual_inc']; ?></option> -->
                                                <option value="3Lakh to 5Lakh" <?php if ($editdetail['parent_annual_inc'] == "3Lakh to 5Lakh") {
                                                                                    echo ' selected="selected"';
                                                                                } ?>>3Lakh to 5Lakh</option>
                                                <option value="5Lakh to 10Lakh" <?php if ($editdetail['parent_annual_inc'] == "5Lakh to 10Lakh") {
                                                                                    echo ' selected="selected"';
                                                                                } ?>>5Lakh to 10Lakh</option>
                                                <option value="10Lakh to 15Lakh" <?php if ($editdetail['parent_annual_inc'] == "10Lakh to 15Lakh") {
                                                                                        echo ' selected="selected"';
                                                                                    } ?>>10Lakh to 15Lakh</option>
                                                <option value="15Lakh to 20+" <?php if ($editdetail['parent_annual_inc'] == "15Lakh to 20+") {
                                                                                    echo ' selected="selected"';
                                                                                } ?>>15Lakh to 20+</option>
                                            </select>
                                            <div class="wizard-form-error"></div>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label class="control-label">Preferred Point of Contact<span class="mandate">*</span></label>
                                            <select name="preferred_contact" class="form-control wizard-required" id="preferred_contact" required>
                                                <!-- <option value="<?php echo $editdetail['pref_poc']; ?>"><?php echo $editdetail['pref_poc']; ?></option> -->
                                                <option value="FATHER" <?php if ($editdetail['pref_poc'] == "FATHER") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>FATHER</option>
                                                <option value="MOTHER" <?php if ($editdetail['pref_poc'] == "MOTHER") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>MOTHER</option>
                                                <option value="GUARDIAN" <?php if ($editdetail['pref_poc'] == "GUARDIAN") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>GUARDIAN</option>
                                                <option value="Both the Parents" <?php if ($editdetail['pref_poc'] == "Both the Parents") {
                                                                                        echo ' selected="selected"';
                                                                                    } ?>>Both the Parents</option>
                                            </select>


                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <!-- gaurdian content -->
                                    <h5 style="color:#003a6a" href=""> <strong> Name of the Local Guardian (With Relationship) if any,
                                            Yes<input class="t" type="radio" value="YES" id="chkYes" name="chkPassPort" />
                                            No<input class="t" type="radio" value="NO" id="chkNo" name="chkPassPort" /> </strong></h5>


                                    <div id="guid1" class="form-row">
                                        <div class="form-group col-md-4">
                                            <label class="control-label">Guardian's Name
                                            </label>
                                            <input type="text" id="guardian_name" name="guardian_name" value="<?php echo $editdetail['local_gaurdian_name']; ?>" class="form-control" style="text-transform:uppercase" />
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="control-label">Mobile No</label>
                                            <input type="text" id="guardian_mobile" name="guardian_mobile" value="<?php echo $editdetail['gaur_mob_num']; ?>" class="form-control" maxlength="10" />
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="control-label">Relationship </label>
                                            <input type="text" id="guardian_relation" name="guardian_relation" value="<?php echo $editdetail['gaur_relat']; ?>" class="form-control" style="text-transform:uppercase" />
                                        </div>
                                    </div>

                                    <div class="form-group clearfix">
                                        <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                        <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                                    </div>
                                </fieldset>
                                <fieldset class="wizard-fieldset">
                                    <h5 class="card-title" style="color:#001b54;">Correspondence Address</h5>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Address Line 1 <span class="mandate">*</span></label>
                                            <input type="text" name="cor_addr_line1" value="<?php echo $editdetail['corr_add_1']; ?>" id="cor_addr_line1" class="form-control wizard-required" style="text-transform:uppercase" required />
                                            <div class="wizard-form-error"></div>

                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Address Line 2 <span class="mandate">*</span></label>
                                            <input type="text" name="cor_addr_line2" value="<?php echo $editdetail['corr_add_2']; ?>" id="cor_addr_line2" class="form-control wizard-required" style="text-transform:uppercase" required />
                                            <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="control-label">Select State <span class="mandate">*</span></label>
                                            <select name="cor_state" class="form-control wizard-required" required id="cor_state">
                                                <option value="Andaman and Nicobar Islands" <?php if ($editdetail['corr_state'] == "Andaman and Nicobar Islands") {
                                                                                                echo ' selected="selected"';
                                                                                            } ?>>Andaman and Nicobar Islands</option>
                                                <option value="Andhra Pradesh" <?php if ($editdetail['corr_state'] == "Andhra Pradesh") {
                                                                                    echo ' selected="selected"';
                                                                                } ?>>Andhra Pradesh</option>
                                                <option value="Arunachal Pradesh" <?php if ($editdetail['corr_state'] == "Arunachal Pradesh") {
                                                                                        echo ' selected="selected"';
                                                                                    } ?>>Arunachal Pradesh</option>
                                                <option value="Assam" <?php if ($editdetail['corr_state'] == "Assam") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>Assam</option>
                                                <option value="Bihar" <?php if ($editdetail['corr_state'] == "Bihar") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>Bihar</option>
                                                <option value="Chandigarh" <?php if ($editdetail['corr_state'] == "Chandigarh") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>Chandigarh</option>
                                                <option value="Chhattisgarh" <?php if ($editdetail['corr_state'] == "Chhattisgarh") {
                                                                                    echo ' selected="selected"';
                                                                                } ?>>Chhattisgarh</option>
                                                <option value="Dadra and Nagar Haveli" <?php if ($editdetail['corr_state'] == "Dadra and Nagar Haveli") {
                                                                                            echo ' selected="selected"';
                                                                                        } ?>>Dadra and Nagar Haveli</option>
                                                <option value="Daman and Diu" <?php if ($editdetail['corr_state'] == "Daman and Diu") {
                                                                                    echo ' selected="selected"';
                                                                                } ?>>Daman and Diu</option>
                                                <option value="Delhi" <?php if ($editdetail['corr_state'] == "Delhi") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>Delhi</option>
                                                <option value="Goa" <?php if ($editdetail['corr_state'] == "Goa") {
                                                                        echo ' selected="selected"';
                                                                    } ?>>Goa</option>
                                                <option value="Gujarat" <?php if ($editdetail['corr_state'] == "Gujarat") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>Gujarat</option>
                                                <option value="Haryana" <?php if ($editdetail['corr_state'] == "Haryana") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>Haryana</option>
                                                <option value="Himachal Pradesh" <?php if ($editdetail['corr_state'] == "Himachal Pradesh") {
                                                                                        echo ' selected="selected"';
                                                                                    } ?>>Himachal Pradesh</option>
                                                <option value="Jammu and Kashmir" <?php if ($editdetail['corr_state'] == "Jammu and Kashmir") {
                                                                                        echo ' selected="selected"';
                                                                                    } ?>>Jammu and Kashmir</option>
                                                <option value="Jharkhand" <?php if ($editdetail['corr_state'] == "Jharkhand") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>Jharkhand</option>
                                                <option value="Karnataka" <?php if ($editdetail['corr_state'] == "Karnataka") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>Karnataka</option>
                                                <option value="Kenmore" <?php if ($editdetail['corr_state'] == "Kenmore") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>Kenmore</option>
                                                <option value="Kerala" <?php if ($editdetail['corr_state'] == "Kerala") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>Kerala</option>
                                                <option value="Lakshadweep" <?php if ($editdetail['corr_state'] == "Lakshadweep") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>Lakshadweep</option>
                                                <option value="Madhya Pradesh" <?php if ($editdetail['corr_state'] == "Madhya Pradesh") {
                                                                                    echo ' selected="selected"';
                                                                                } ?>>Madhya Pradesh</option>
                                                <option value="Maharashtra" <?php if ($editdetail['corr_state'] == "Maharashtra") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>Maharashtra</option>
                                                <option value="Manipur" <?php if ($editdetail['corr_state'] == "Manipur") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>Manipur</option>
                                                <option value="Meghalaya" <?php if ($editdetail['corr_state'] == "Meghalaya") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>Meghalaya</option>
                                                <option value="Mizoram" <?php if ($editdetail['corr_state'] == "Mizoram") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>Mizoram</option>
                                                <option value="Nagaland" <?php if ($editdetail['corr_state'] == "Nagaland") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>Nagaland</option>
                                                <option value="Narora" <?php if ($editdetail['corr_state'] == "Narora") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>Narora</option>
                                                <option value="Natwar" <?php if ($editdetail['corr_state'] == "Natwar") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>Natwar</option>
                                                <option value="Odisha" <?php if ($editdetail['corr_state'] == "Odisha") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>Odisha</option>
                                                <option value="Paschim Medinipur" <?php if ($editdetail['corr_state'] == "Paschim Medinipur") {
                                                                                        echo ' selected="selected"';
                                                                                    } ?>>Paschim Medinipur</option>
                                                <option value="Pondicherry" <?php if ($editdetail['corr_state'] == "Pondicherry") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>Pondicherry</option>
                                                <option value="Punjab" <?php if ($editdetail['corr_state'] == "Punjab") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>Punjab</option>
                                                <option value="Rajasthan" <?php if ($editdetail['corr_state'] == "Rajasthan") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>Rajasthan</option>
                                                <option value="Sikkim" <?php if ($editdetail['corr_state'] == "Sikkim") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>Sikkim</option>
                                                <option value="Tamil Nadu" <?php if ($editdetail['corr_state'] == "Tamil Nadu") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>Tamil Nadu</option>
                                                <option value="Telangana" <?php if ($editdetail['corr_state'] == "Telangana") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>Telangana</option>
                                                <option value="Tripura" <?php if ($editdetail['corr_state'] == "Tripura") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>Tripura</option>
                                                <option value="Uttar Pradesh" <?php if ($editdetail['corr_state'] == "Uttar Pradesh") {
                                                                                    echo ' selected="selected"';
                                                                                } ?>>Uttar Pradesh</option>
                                                <option value="Uttarakhand" <?php if ($editdetail['corr_state'] == "Uttarakhand") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>Uttarakhand</option>
                                                <option value="Vaishali" <?php if ($editdetail['corr_state'] == "Vaishali") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>Vaishali</option>
                                                <option value="West Bengal" <?php if ($editdetail['corr_state'] == "West Bengal") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>West Bengal</option>
                                            </select>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="control-label">City <span class="mandate">*</span></label>
                                            <input type="text" name="cor_city" value="<?php echo $editdetail['corr_city']; ?>" id="cor_city" maxlength="30" class="form-control wizard-required" required />
                                            <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="control-label">Pincode <span class="mandate">*</span></label>
                                            <input type="text" name="cor_pincode" value="<?php echo $editdetail['corr_pincode']; ?>" id="cor_pincode" maxlength="6" class="form-control wizard-required" required />
                                            <div class="wizard-form-error"></div>
                                        </div>

                                    </div>

                                    <div class="form-row">
                                        <div class="card-heading">
                                            <h5 class="card-title" style="color:#001b54;">Permanent
                                                Address&nbsp;&nbsp;&nbsp;
                                                <label>
                                                    <input type="checkbox" name="filltoo" id="filltoo" value="" onclick="filladd()" />&nbsp;&nbsp;Same
                                                    as
                                                    Correspondence
                                                </label>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="form-row">

                                        <h5 class="card-title" style="color:#001b54;">Permanent
                                            Address
                                        </h5>

                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Address Line 1 <span class="mandate">*</span></label>
                                            <input type="text" name="pre_addr_line1" value="<?php echo $editdetail['per_add_1']; ?>" id="pre_addr_line1" class="form-control wizard-required" style="text-transform:uppercase" required />
                                            <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Address Line 2 <span class="mandate">*</span></label>
                                            <input type="text" name="pre_addr_line2" value="<?php echo $editdetail['per_add_2']; ?>" id="pre_addr_line2" class="form-control wizard-required" style="text-transform:uppercase" required />
                                            <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="control-label">Select State <span class="mandate">*</span></label>
                                            <select name="pre_state" class="form-control wizard-required" required id="pre_state">
                                                <option value="Andaman and Nicobar Islands" <?php if ($editdetail['per_state'] == "Andaman and Nicobar Islands") {
                                                                                                echo ' selected="selected"';
                                                                                            } ?>>Andaman and Nicobar Islands</option>
                                                <option value="Andhra Pradesh" <?php if ($editdetail['per_state'] == "Andhra Pradesh") {
                                                                                    echo ' selected="selected"';
                                                                                } ?>>Andhra Pradesh</option>
                                                <option value="Arunachal Pradesh" <?php if ($editdetail['per_state'] == "Arunachal Pradesh") {
                                                                                        echo ' selected="selected"';
                                                                                    } ?>>Arunachal Pradesh</option>
                                                <option value="Assam" <?php if ($editdetail['per_state'] == "Assam") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>Assam</option>
                                                <option value="Bihar" <?php if ($editdetail['per_state'] == "Bihar") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>Bihar</option>
                                                <option value="Chandigarh" <?php if ($editdetail['per_state'] == "Chandigarh") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>Chandigarh</option>
                                                <option value="Chhattisgarh" <?php if ($editdetail['per_state'] == "Chhattisgarh") {
                                                                                    echo ' selected="selected"';
                                                                                } ?>>Chhattisgarh</option>
                                                <option value="Dadra and Nagar Haveli" <?php if ($editdetail['per_state'] == "Dadra and Nagar Haveli") {
                                                                                            echo ' selected="selected"';
                                                                                        } ?>>Dadra and Nagar Haveli</option>
                                                <option value="Daman and Diu" <?php if ($editdetail['per_state'] == "Daman and Diu") {
                                                                                    echo ' selected="selected"';
                                                                                } ?>>Daman and Diu</option>
                                                <option value="Delhi" <?php if ($editdetail['per_state'] == "Delhi") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>Delhi</option>
                                                <option value="Goa" <?php if ($editdetail['per_state'] == "Goa") {
                                                                        echo ' selected="selected"';
                                                                    } ?>>Goa</option>
                                                <option value="Gujarat" <?php if ($editdetail['per_state'] == "Gujarat") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>Gujarat</option>
                                                <option value="Haryana" <?php if ($editdetail['per_state'] == "Haryana") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>Haryana</option>
                                                <option value="Himachal Pradesh" <?php if ($editdetail['per_state'] == "Himachal Pradesh") {
                                                                                        echo ' selected="selected"';
                                                                                    } ?>>Himachal Pradesh</option>
                                                <option value="Jammu and Kashmir" <?php if ($editdetail['per_state'] == "Jammu and Kashmir") {
                                                                                        echo ' selected="selected"';
                                                                                    } ?>>Jammu and Kashmir</option>
                                                <option value="Jharkhand" <?php if ($editdetail['per_state'] == "Jharkhand") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>Jharkhand</option>
                                                <option value="Karnataka" <?php if ($editdetail['per_state'] == "Karnataka") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>Karnataka</option>
                                                <option value="Kenmore" <?php if ($editdetail['per_state'] == "Kenmore") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>Kenmore</option>
                                                <option value="Kerala" <?php if ($editdetail['per_state'] == "Kerala") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>Kerala</option>
                                                <option value="Lakshadweep" <?php if ($editdetail['per_state'] == "Lakshadweep") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>Lakshadweep</option>
                                                <option value="Madhya Pradesh" <?php if ($editdetail['per_state'] == "Madhya Pradesh") {
                                                                                    echo ' selected="selected"';
                                                                                } ?>>Madhya Pradesh</option>
                                                <option value="Maharashtra" <?php if ($editdetail['per_state'] == "Maharashtra") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>Maharashtra</option>
                                                <option value="Manipur" <?php if ($editdetail['per_state'] == "Manipur") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>Manipur</option>
                                                <option value="Meghalaya" <?php if ($editdetail['per_state'] == "Meghalaya") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>Meghalaya</option>
                                                <option value="Mizoram" <?php if ($editdetail['per_state'] == "Mizoram") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>Mizoram</option>
                                                <option value="Nagaland" <?php if ($editdetail['per_state'] == "Nagaland") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>Nagaland</option>
                                                <option value="Narora" <?php if ($editdetail['per_state'] == "Narora") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>Narora</option>
                                                <option value="Natwar" <?php if ($editdetail['per_state'] == "Natwar") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>Natwar</option>
                                                <option value="Odisha" <?php if ($editdetail['per_state'] == "Odisha") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>Odisha</option>
                                                <option value="Paschim Medinipur" <?php if ($editdetail['per_state'] == "Paschim Medinipur") {
                                                                                        echo ' selected="selected"';
                                                                                    } ?>>Paschim Medinipur</option>
                                                <option value="Pondicherry" <?php if ($editdetail['per_state'] == "Pondicherry") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>Pondicherry</option>
                                                <option value="Punjab" <?php if ($editdetail['per_state'] == "Punjab") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>Punjab</option>
                                                <option value="Rajasthan" <?php if ($editdetail['per_state'] == "Rajasthan") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>Rajasthan</option>
                                                <option value="Sikkim" <?php if ($editdetail['per_state'] == "Sikkim") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>Sikkim</option>
                                                <option value="Tamil Nadu" <?php if ($editdetail['per_state'] == "Tamil Nadu") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>Tamil Nadu</option>
                                                <option value="Telangana" <?php if ($editdetail['per_state'] == "Telangana") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>Telangana</option>
                                                <option value="Tripura" <?php if ($editdetail['per_state'] == "Tripura") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>Tripura</option>
                                                <option value="Uttar Pradesh" <?php if ($editdetail['per_state'] == "Uttar Pradesh") {
                                                                                    echo ' selected="selected"';
                                                                                } ?>>Uttar Pradesh</option>
                                                <option value="Uttarakhand" <?php if ($editdetail['per_state'] == "Uttarakhand") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>Uttarakhand</option>
                                                <option value="Vaishali" <?php if ($editdetail['per_state'] == "Vaishali") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>Vaishali</option>
                                                <option value="West Bengal" <?php if ($editdetail['per_state'] == "West Bengal") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>West Bengal</option>
                                            </select>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="control-label">Enter City <span class="mandate">*</span></label>
                                            <input type="text" name="pre_city" value="<?php echo $editdetail['per_city']; ?>" id="pre_city" maxlength="30" class="form-control wizard-required" required />
                                            <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="control-label">Pincode <span class="mandate">*</span></label>
                                            <input type="text" name="pre_pincode" value="<?php echo $editdetail['per_pincode']; ?>" id="pre_pincode" maxlength="6" class="form-control wizard-required" required />
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>

                                    <div class="form-group clearfix">
                                        <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                        <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                                    </div>
                                </fieldset>
                                <!-- //student edu -->
                                <fieldset class="wizard-fieldset">
                                    <h5 class="card-title" style="color:#001b54;">10<sup>th</sup> Std. Examination Details</h5>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label class="control-label">Institution Studied <span class="mandate">*</span></label>
                                            <input type="text" name="X_Institution" value="<?php echo $editdetail['stu_inst']; ?>" class="form-control   wizard-required" style="text-transform:uppercase" required />
                                            <div class="wizard-form-error"></div>

                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="control-label">Total % or CGPA <span class="mandate">*</span></label>
                                            <input type="number" name="X_CGPA" value="<?php echo $editdetail['stu_cgpa']; ?>" step="0.01" class="form-control  wizard-required" required />
                                            <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="control-label">Year of Passing <span class="mandate">*</span>
                                            </label>
                                            <select name="X_year" class="form-control wizard-required" style="text-transform:uppercase" required>
                                                <option value="2021" <?php if ($editdetail['stu_yr_pass'] == "2021") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>2021</option>
                                                <option value="2020" <?php if ($editdetail['stu_yr_pass'] == "2020") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>2020</option>
                                                <option value="2019" <?php if ($editdetail['stu_yr_pass'] == "2019") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>2019</option>
                                                <option value="2018" <?php if ($editdetail['stu_yr_pass'] == "2018") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>2018</option>
                                                <option value="2017" <?php if ($editdetail['stu_yr_pass'] == "2017") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>2017</option>
                                                <option value="2016" <?php if ($editdetail['stu_yr_pass'] == "2016") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>2016</option>
                                                <option value="2015" <?php if ($editdetail['stu_yr_pass'] == "2015") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>2015</option>
                                                <option value="2014" <?php if ($editdetail['stu_yr_pass'] == "2014") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>2014</option>
                                                <option value="2013" <?php if ($editdetail['stu_yr_pass'] == "2013") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>2013</option>
                                                <option value="2012" <?php if ($editdetail['stu_yr_pass'] == "2012") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>2012</option>
                                                <option value="2011" <?php if ($editdetail['stu_yr_pass'] == "2011") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>2011</option>
                                                <option value="2010" <?php if ($editdetail['stu_yr_pass'] == "2010") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>2010</option>
                                                <option value="2009" <?php if ($editdetail['stu_yr_pass'] == "2009") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>2009</option>
                                                <option value="2008" <?php if ($editdetail['stu_yr_pass'] == "2008") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>2008</option>
                                                <option value="2007" <?php if ($editdetail['stu_yr_pass'] == "2007") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>2007</option>
                                                <option value="2006" <?php if ($editdetail['stu_yr_pass'] == "2006") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>2006</option>
                                                <option value="2005" <?php if ($editdetail['stu_yr_pass'] == "2005") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>2005</option>
                                                <option value="2004" <?php if ($editdetail['stu_yr_pass'] == "2004") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>2004</option>
                                                <option value="2003" <?php if ($editdetail['stu_yr_pass'] == "2003") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>2003</option>
                                                <option value="2002" <?php if ($editdetail['stu_yr_pass'] == "2002") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>2002</option>
                                                <option value="2001" <?php if ($editdetail['stu_yr_pass'] == "2001") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>2001</option>
                                                <option value="2000" <?php if ($editdetail['stu_yr_pass'] == "2000") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>2000</option>

                                            </select>
                                            <div class="wizard-form-error"></div>
                                        <?php } ?>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="card-heading">
                                            <h5 class="card-title" style="color:#001b54;">XII<sup>th </sup>Std.
                                                Examination
                                                Details</h5>
                                        </div>
                                    </div>
                                    <?php foreach ($studetails as $studetail) { ?>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label class="control-label">Institution Studied <span class="mandate">*</span>
                                                </label>
                                                <input type="text" name="XI_institution" value="<?php echo $studetail['stu_inst']; ?>" class="form-control wizard-required" style="text-transform:uppercase" required />
                                                <div class="wizard-form-error"></div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="control-label">Total % or CGPA <span class="mandate">*</span></label>
                                                <input type="number" name="XI_CGPA" value="<?php echo $studetail['stu_cgpa']; ?>" step="0.01" class="form-control wizard-required" required />
                                                <div class="wizard-form-error"></div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="control-label">Year of Passing <span class="mandate">*</span>
                                                </label>

                                                <select name="XI_year" class="form-control wizard-required" style="text-transform:uppercase" required>
                                                    <option value="<?php echo $studetail['stu_yr_pass']; ?>"><?php echo $studetail['stu_yr_pass']; ?></option>
                                                    <option value="2021" <?php if ($studetail['stu_yr_pass'] == "2021") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>2021</option>
                                                    <option value="2020" <?php if ($studetail['stu_yr_pass'] == "2020") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>2020</option>
                                                    <option value="2019" <?php if ($studetail['stu_yr_pass'] == "2019") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>2019</option>
                                                    <option value="2018" <?php if ($studetail['stu_yr_pass'] == "2018") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>2018</option>
                                                    <option value="2017" <?php if ($studetail['stu_yr_pass'] == "2017") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>2017</option>
                                                    <option value="2016" <?php if ($studetail['stu_yr_pass'] == "2016") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>2016</option>
                                                    <option value="2015" <?php if ($studetail['stu_yr_pass'] == "2015") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>2015</option>
                                                    <option value="2014" <?php if ($studetail['stu_yr_pass'] == "2014") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>2014</option>
                                                    <option value="2013" <?php if ($studetail['stu_yr_pass'] == "2013") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>2013</option>
                                                    <option value="2012" <?php if ($studetail['stu_yr_pass'] == "2012") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>2012</option>
                                                    <option value="2011" <?php if ($studetail['stu_yr_pass'] == "2011") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>2011</option>
                                                    <option value="2010" <?php if ($studetail['stu_yr_pass'] == "2010") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>2010</option>
                                                    <option value="2009" <?php if ($studetail['stu_yr_pass'] == "2009") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>2009</option>
                                                    <option value="2008" <?php if ($studetail['stu_yr_pass'] == "2008") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>2008</option>
                                                    <option value="2007" <?php if ($studetail['stu_yr_pass'] == "2007") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>2007</option>
                                                    <option value="2006" <?php if ($studetail['stu_yr_pass'] == "2006") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>2006</option>
                                                    <option value="2005" <?php if ($studetail['stu_yr_pass'] == "2005") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>2005</option>
                                                    <option value="2004" <?php if ($studetail['stu_yr_pass'] == "2004") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>2004</option>
                                                    <option value="2003" <?php if ($studetail['stu_yr_pass'] == "2003") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>2003</option>
                                                    <option value="2002" <?php if ($studetail['stu_yr_pass'] == "2002") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>2002</option>
                                                    <option value="2001" <?php if ($studetail['stu_yr_pass'] == "2001") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>2001</option>
                                                    <option value="2000" <?php if ($studetail['stu_yr_pass'] == "2000") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>2000</option>
                                                </select>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        <?php } ?>
                                        </div>
                                        <div class="form-group clearfix">
                                            <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                            <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                                        </div>
                                </fieldset>
                                <?php foreach ($editdetails as $editdetail) { ?>
                                    <fieldset class="wizard-fieldset">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Extra Curricular Activities
                                                </label>
                                                <input type="text" name="extra_curricular" value="<?php echo $editdetail['extra_cur_activ']; ?>" class="form-control " style="text-transform:uppercase" />
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label">How do you come to know
                                                    about Jain (Deemed-to-be-University) <span class="mandate">*</span></label>
                                                <select name="source" class="form-control wizard-required" required>
                                                    <option value="Facebook" <?php if ($editdetail['knw_jain'] == "Facebook") {
                                                                                    echo ' selected="selected"';
                                                                                } ?>>Facebook</option>
                                                    <option value="Website" <?php if ($editdetail['knw_jain'] == "Website") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>Website</option>
                                                    <option value="Google Search" <?php if ($editdetail['knw_jain'] == "Google Search") {
                                                                                        echo ' selected="selected"';
                                                                                    } ?>>Google Search</option>
                                                    <option value="Instagram" <?php if ($editdetail['knw_jain'] == "Instagram") {
                                                                                    echo ' selected="selected"';
                                                                                } ?>>Instagram</option>
                                                    <option value="Twitter" <?php if ($editdetail['knw_jain'] == "Twitter") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>Twitter</option>
                                                    <option value="LinkedIn" <?php if ($editdetail['knw_jain'] == "LinkedIn") {
                                                                                    echo ' selected="selected"';
                                                                                } ?>>LinkedIn</option>
                                                    <option value="Reference" <?php if ($editdetail['knw_jain'] == "Reference") {
                                                                                    echo ' selected="selected"';
                                                                                } ?>>Reference</option>
                                                    <option value="Hoarding" <?php if ($editdetail['knw_jain'] == "Hoarding") {
                                                                                    echo ' selected="selected"';
                                                                                } ?>>Hoarding</option>
                                                    <option value="Newspaper Advertisement" <?php if ($editdetail['knw_jain'] == "Newspaper Advertisement") {
                                                                                                echo ' selected="selected"';
                                                                                            } ?>>Newspaper Advertisement</option>
                                                    <option value="Pamphlet" <?php if ($editdetail['knw_jain'] == "Pamphlet") {
                                                                                    echo ' selected="selected"';
                                                                                } ?>>Pamphlet</option>
                                                    <option value="Poster" <?php if ($editdetail['knw_jain'] == "Poster") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>Poster</option>
                                                    <option value="Banner" <?php if ($editdetail['knw_jain'] == "Banner") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>Banner</option>
                                                    <option value="Word of Mouth" <?php if ($editdetail['knw_jain'] == "Word of Mouth") {
                                                                                        echo ' selected="selected"';
                                                                                    } ?>>Word of Mouth</option>
                                                    <option value="SMS" <?php if ($editdetail['knw_jain'] == "SMS") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>SMS</option>
                                                    <option value="E-mailer" <?php if ($editdetail['knw_jain'] == "E-mailer") {
                                                                                    echo ' selected="selected"';
                                                                                } ?>>E-mailer</option>
                                                    <option value="WhatsApp" <?php if ($editdetail['knw_jain'] == "WhatsApp") {
                                                                                    echo ' selected="selected"';
                                                                                } ?>>WhatsApp</option>
                                                    <option value="Alumni" <?php if ($editdetail['knw_jain'] == "Alumni") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>Alumni</option>
                                                    <option value="Seminar" <?php if ($editdetail['knw_jain'] == "Seminar") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>Seminar</option>
                                                    <option value="Walk-in" <?php if ($editdetail['knw_jain'] == "Walk-in") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>Walk-in</option>
                                                    <option value="webinar" <?php if ($editdetail['knw_jain'] == "webinar") {
                                                                                echo ' selected="selected"';
                                                                            } ?>>webinar</option>
                                                </select>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Hostel Accommodation <span class="mandate">*</span></label>
                                                <select name="hostel_accom" class="form-control wizard-required" required>
                                                    <option value="Yes" <?php if ($editdetail['host_acc'] == "Yes") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>Yes</option>
                                                    <option value="No" <?php if ($editdetail['host_acc'] == "No") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>No</option>
                                                </select>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Have you previously applied
                                                    to Jain (Deemed-to-be-University)? <span class="mandate">*</span></label>
                                                <select name="previous_applied" class="form-control wizard-required" required>
                                                    <option value="Yes" <?php if ($editdetail['app_jain'] == "Yes") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>Yes</option>
                                                    <option value="No" <?php if ($editdetail['app_jain'] == "No") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>No</option>
                                                </select>
                                                <div class="wizard-form-error"></div>
                                            </div>

                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Have you studied PUC at
                                                    Jain College?<span class="mandate">*</span></label>
                                                <select name="studied_puc" class="form-control wizard-required" required>
                                                    <option value="Yes" <?php if ($editdetail['puc_at_jain'] == "Yes") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>Yes</option>
                                                    <option value="No" <?php if ($editdetail['puc_at_jain'] == "No") {
                                                                            echo ' selected="selected"';
                                                                        } ?>>No</option>
                                                </select>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Preferred Center for Jain
                                                    Entrance Test 2021 (JET 2021) <span class="mandate">*</span></label>
                                                <select name="test_center" class="form-control wizard-required" readonly="readonly" required>
                                                    <option value="BANGALORE" <?php if ($editdetail['jain_test_loc'] == "BANGALORE") {
                                                                                    echo ' selected="selected"';
                                                                                } ?>>BANGALORE</option>
                                                </select>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                            <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                                        </div>
                                    <?php } ?>
                                    </fieldset>

                                    <fieldset class="wizard-fieldset">
                                        <div class="form-row">
                                            <div class="input-group mb-1">
                                                <label class="control-label">Photo (JPG, PNG format only
                                                    and size should not exceed 1 MB) <span class="mandate">*</span></label>
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="file" name="edit_file_array[]" class="form-control-file border wizard-required" id="apphoto" required="required">
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="input-group mb-1">
                                                <label class="control-label">10th Mark Sheet <span class="mandate">*</span></label>
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="file" name="edit_file_array[]" class="form-control-file border wizard-required" id="appsslc" required="required">
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="input-group mb-1">
                                                <label class="control-label">Upload your Higher
                                                    Secondary / XII Standard with marks cards <span class="mandate">*</span></label>
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="file" name="edit_file_array[]" class="form-control-file border wizard-required" id="apppuc" required="required">
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>

                                        <div id="ugdisplay" class="form-row">
                                            <div class="input-group mb-1">
                                                <label class="control-label">UG Certificate<span class="mandate">*</span></label>
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="file" name="edit_file_array[]" class="form-control-file border wizard-required" id="ugfup">
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                            <a href="javascript:;" class="form-wizard-next-btn float-right" id="termsHide">Next</a>
                                            <!-- <button type="submit" style="border: none;" id="edit_final_form_submit" class="form-wizard-submit float-right">Submit</button> -->
                                        </div>

                                    </fieldset>

                                    <!-- terms and conditions -->

                                    <fieldset id="tAndC" class="wizard-fieldset">
                                        <!-- begin container-fluid -->
                                        <div class="container-fluid">
                                            <!-- begin row -->
                                            <div class="row formavlidation-wrapper">
                                                <div class="col-xl-12">
                                                    <div class="card card-statistics">
                                                        <div class="card-header">
                                                            <div class="card-heading">
                                                                <h5 class="card-title">Terms and Conditions</h5>
                                                            </div>
                                                        </div>

                                                        <div class="card-body" style="line-height: 1.9;">
                                                            <div style="height: 400px;" class="overflow-auto">
                                                                <h5>Dear Applicant,</h5>
                                                                <p><b> •</b> You can pay the Non Refundable application fee for the preferred programme through Online Payment gateway Mode using valid Credit Card / Debit Card or Net Banking facility to proceed further. </p>
                                                                <p><b> •</b> Candidates can also purchase the Non Refundable Online Application Coupon from the Admissions Office and redeem the same by entering the specific coupon code on the Online Payment Gateway under the heading ‘Coupon Code’.</p>
                                                                <p><b> •</b> Yes, I have understood the application fee terms and procedure and have the credit / debit cards or the required details for Net banking for online payment gateway option.</p>

                                                                <h5> Eligibility :</h5>

                                                                </label>

                                                                <div>
                                                                    <p>The applicant(s) are to fulfill these criteria to be eligible to seek provisional admission for UG Programs.</p>
                                                                    <p>1. The applicant(s) need to appear for and clear the IREU Entrance Test (JET) Process that includes Written Test, Group Discussion and Personal Interview.</p>

                                                                    <p>2. The applicant(s) are required to obtain the minimum cut-off percentage and above at the 12th Board/ 2nd PUC examination/ Diploma/Equivalent examination recognized by Jain. The cut-off percentage will be communicated to the applicant(s) during the JET Process. The cut-off percentage differs from Course to Course. For further information, contact the Admissions Office.</p>
                                                                    <p>3. Visit the website for the admission process of B.Tech (Regular) and B.Tech (Lateral).</p>

                                                                    <h5>Please Note : </h5>
                                                                    <ul>
                                                                        <li><strong>A :</strong> • IB students should score 30 credits to qualify for the respective Program. Provisional admission will be given on predicted scores. Students who fail to score the required credits lose their admission. Cambridge Board students must study 2 or 3 subjects at advanced level.
                                                                        </li>
                                                                        <li style="padding-left:30px">• For eligibility criteria of Social Groups (SC/ST Category), kindly contact the Admissions Office.</li>
                                                                        <li style="padding-left:30px">• Jain reserves the right to change/alter the admission process and the candidates are hereby informed to visit the website or contact the Admissions Office for updates on eligibility and the admission process of the preferred choice of Program and Course.</li>
                                                                        <li style="padding-left:30px">• Candidate(s) are advised to visit the website or contact the Admissions Office for the Eligibility Criteria of their preferred choice of Program and for JET Process updates.</li>

                                                                    </ul>
                                                                    <ul>
                                                                        <li><strong>B :</strong>The applicant(s) are to visit the website, www.IREU.ac.in for regular updates pertaining to the IREU Entrance Test and follow the process accordingly.</li>
                                                                    </ul>

                                                                    <ul>
                                                                        <li><strong>C :</strong>The information about UG JET will be updated in the website and the candidate(s) are to visit the website for JET updates.
                                                                            UG JET selection process will consist of written test followed by a personal interview
                                                                        </li>
                                                                    </ul>

                                                                    <ul>
                                                                        <li><strong>D :</strong>The information about B.Tech and B.Des JET will be updated in the website and the candidate(s) are to visit the website for JET updates.
                                                                            B.Tech JET: JET process includes written test and the selected candidate(s) will be informed regarding the counseling process and counseling date(s).
                                                                            B.Des JET: JET process includes written test, portfolio review and personal interview
                                                                        </li>
                                                                    </ul>
                                                                    <ul>
                                                                        <li><strong>E :</strong>Any change of request for IREU Entrance Test dates shall not be entertained.
                                                                        </li>
                                                                    </ul>
                                                                    <ul>
                                                                        <li><strong>F :</strong>It is mandatory for the applicant(s) to carry along with them the ‘IREU Entrance Test Hall Ticket’ for the JET process.
                                                                        </li>
                                                                    </ul>




                                                                    <ul>
                                                                        <li><strong>G :</strong>The applicant(s) are required to submit following documents, for the JET process:</li>
                                                                        <ul style="line-height:1.2em !important;padding-left:30px;margin-top:0px !important">
                                                                            <li><b> •</b> Downloaded JET Application Form duly signed by the Applicant and the Parent.</li>
                                                                            <li><b>•</b> 10th Marks Sheet</li>
                                                                            <li><b>•</b> 12th Marks Sheet </li>
                                                                            <li><b>•</b>2 recent passport and 2 stamp size photographs in formal dress and of photo size of 35mm x 45 mm with white background - Standard Indian Passport Format (name of the applicant(s) and the application number to be written on the back side of the photographs)</li>
                                                                        </ul>
                                                                    </ul>

                                                                    <ul>
                                                                        <li><strong>H :</strong>Applicant(s) must note that if selected, admission is provisional and subject to rules. Any documents that are pending to be submitted to the respective Study Campus Administrative Office, IREU on the date communicated to the Candidate(s). Failing to submit the documents leads to disqualifying the applicant(s) admission. The list of original documents to be submitted are as below:</li>
                                                                        <ul style="line-height:1.2em !important;padding-left:30px;margin-top:0px !important">
                                                                            <li><b>•</b> 10th Mark sheet</li>
                                                                            <li><b>•</b> 12th Mark sheet</li>
                                                                            <li><b>•</b> Transfer Certificate from last Institution studied (qualifying examination)</li>
                                                                            <li><b>•</b> Migration Certificate </li>
                                                                            <li><b>•</b> Copy of Aadhar Card</li>
                                                                            <li><b>•</b> Copy of PAN Card</li>
                                                                            <li><b>•</b> Copy of Passport </li>
                                                                            <li><b>•</b> Work Experience Certificate, Joining Letter / Proof of Work Details and latest salary slip (Mandatory)-for relevant programs only</li>

                                                                        </ul>
                                                                    </ul>

                                                                    <ul>
                                                                        <li><strong>I :</strong>An undertaking for pending original documents unavailable currently [applicable only for candidates writing/passing their exam in March – June - 2021] must be submitted to the Admission Office. These documents must be submitted to the respective Study Campus Administrative Office, IREU on the date communicated to the Candidate(s).</li>
                                                                    </ul>

                                                                    <ul>
                                                                        <li><strong>J :</strong>Candidates selected in the JET process will receive an email of Provisional Admission Letter. The offer will be valid up to the date mentioned in the Provisional Admission Letter.</li>
                                                                    </ul>

                                                                    <ul>
                                                                        <li><strong>K :</strong>As part of the provisional admission requirement, fees for the first year along with the registration fee must be paid as per the timelines mentioned in the Provisional Admission Letter.</li>
                                                                    </ul>

                                                                    <ul>
                                                                        <li><strong>L :</strong>As part of the safety measures against Covid-19, reserves the right to facilitate the academic sessions via online mode till the time the situation is conducive to facilitate sessions on campus.</li>
                                                                    </ul>
                                                                    <ul>
                                                                        <li><strong>M :</strong>It is mandatory to attend the sessions from day one of the commencement of the respective Program.</li>
                                                                    </ul>



                                                                    <h5>Note: </h5>
                                                                    <ul>
                                                                        <li><b>i.</b>IREU reserves the right to change/alter the dates or timing at any given time during the application and admission process.</li>
                                                                        <li><b>ii.</b>IREU shall not be held responsible for any loss, damage or delay to the Application and supporting documents that are sent through post/courier or received at the Study Campus Administrative Office or Admissions Office.</li>
                                                                        <li><b>iii.</b>IREU shall not be held responsible for any inadvertent error that may have crept in the online submission of application or IREU Entrance Test Hall Ticket /Results being published.</li>
                                                                        <li><b>iv.</b>Registration fee is non-refundable.</li>
                                                                        <li><b>v.</b>The University does not collect any type of capitation/donation and do not authorize any third party to issue or process application and admission. </li>
                                                                        <li><b>vi.</b>If the Application is incomplete or incorrect, the University has the right to reject it.</li>
                                                                        <li><b>vii.</b>Applicant(s) are advised to keep a photocopy of the printed application form, for any further reference.</li>
                                                                        <li><b>viii.</b>Please be aware that ignorance of the guidelines/terms & conditions, will not be accepted as an excuse.</li>
                                                                        <li><b>ix.</b>All the disputes are subject to Bangalore (Karnataka, India) Jurisdiction.</li>

                                                                    </ul>

                                                                </div> </br>


                                                                <h5> Cancellation Process</h5>


                                                                <div>
                                                                    <p>Cancellation is as per prevailing UGC Guidelines on Refund of Fees. Registration fee is non-refundable. Candidate(s) and Parents/Guardians are to read, understand the Student Admission Cancellation and Refund Rules Summary available in the website (www.IREUuniuversity.ac.in) and adhere accordingly. </p>
                                                                    <p>The candidate in person must submit the application for cancellation by presenting the following:</p>

                                                                    <ul>
                                                                        <li><b>a.</b>(i) Original fee paid receipt, (ii) Provisional Allotment/Admission Letter (PAL) (iii) Bank pass book front sheet and cheque leaf (cancelled) of the bank to which transfer of money is to be done</li>
                                                                        <li><b>b.</b>No email, telephonic or courier/postal communication will be accepted for cancellation/refund process.</li>
                                                                    </ul>

                                                                </div>
                                                                </br>

                                                                <h5>Statement of Understanding</h5>


                                                                <div>
                                                                    <ul>
                                                                        <li><b>I.</b> I certify that I will provide complete and accurate responses to the items on this application. If any of the information changes, I will notify the Admissions Office of IREU in timely manner.</li>
                                                                        <li><b>II.</b> I authorize release of any information submitted by me with this application to any person, firm, corporation, association, or government agency only to verify or explain information.</li>

                                                                        <li><b>III.</b> I understand that if I fail to appear for the JET process on the stipulated date and time, shall be considered as “Not Selected”.</li>

                                                                        <li><b>IV.</b> I understand admittance into the programme can in no way be considered a guarantee for obtaining the Degree.</li>

                                                                        <li><b>V.</b> I understand that the programme is composed of participants from many different countries, and many cultural and religious backgrounds. I agree to cooperate with all participants with generosity and tolerance.</li>
                                                                        <li><b>VI.</b> I understand the decision of the Admissions Committee shall be final and binding.</li>
                                                                        <li><b>VII.</b> I understand that I need to fulfill the eligibility criteria as prescribed by the University, failing which my admissions process shall not be not processed further.</li>

                                                                        <li><b>VIII.</b> I understand and agree that the Cancellation is as per prevailing UGC Regulations and that I need to visit www.IREU.ac.in to read and understand the Student Admission Cancellation and Refund Rules Summary. I agree to adhere to the Student Admission Cancellation and Refund Rules Summary.</li>
                                                                        <li><b>IX.</b> I agree and understand that my admission into IREU stands cancelled / nullified, if any of the documents related to my qualifying exams are found to be fraudulent / misrepresented / falsified /manipulated / tampered with. </li>

                                                                        <li><b>X.</b> I agree that this application and the accompanying supporting documentation will remain with Admissions Office, IREU even if I am not accepted into the programme.</li>

                                                                        <li><b>XI.</b> I understand the definition of ragging and the penalty of ragging under the UGC Regulations on Curbing the Menace of Ragging in Higher Educational Institutions, 2009, and the directions of Hon’ble Supreme Court of India.</li>
                                                                        <li><b>XII.</b> I understand and undertake to face disciplinary action/legal proceedings including Cancellation of Admission/Debarring from examinations, valuation and assessment process/Expulsion from IREU , if I’m found guilty of any aspect of ragging.</li>
                                                                    </ul>
                                                                </div> </br>

                                                                <h5>Undertaking</h5>


                                                                <div>
                                                                    <p> I hereby declare that:</p>

                                                                    <p>I hereby undertake to uphold the Vision and Mission of IREU and strive to excel in my studies with all ability. I hereby declare that I need to have at least 75% attendance in each subject at the end of each semester to be eligible for the end semester examination. I shall strive towards the ideals of the University and my conduct and behavior or act shall not come under the definition of ragging. I further undertake that the Registrar/Controller of Examinations has right not to permit me for any University Exam (or)/detain me or terminate my admission at any (point of) time during my study.</p>

                                                                    <p> I shall during my course of study always abide by the rules and regulations of IREU as notified time to time.</p>
                                                                    <br />
                                                                    <p><b>Disclaimer:</b> <b>Neither Admissions Office nor IREU is responsible for any inadvertent error that may have crept in the results being published on the INTERNET/Website or via E-mail. The results published on Internet/Website or via E-mail are for immediate information to the applicants. IREU reserves the right to correct the mistake, if any, at any point of the selection and admission process. Rules and regulations of the University are issued as University orders from time to time.</b></p>
                                                                    </br>
                                                                    <p>For any further details, contact the Admissions Office at:</p>
                                                                    <p><b>JGI Knowledge Campus</b></p>
                                                                    <p><b># 44/4, District Fund Road, Jayanagar 9th Block</b></p>
                                                                    <p><b>Bangalore-560069</b></p>
                                                                    <p><b>P: 080 4665 0100</b></p>
                                                                    <p>E: enquiry.ug@IREU.ac.in</p>
                                                                    <p>W: www.IREU.ac.in</p>


                                                                </div> </br>

                                                            </div>

                                                            <ul>
                                                                <li style="list-style: none; margin:10px -10px; font-family: Arial;">
                                                                    <div class="form-row">
                                                                        <div class="card-heading">
                                                                            <h5 class="card-title" style="color:#001b54;">Declaration</h5>
                                                                        </div>
                                                                    </div>
                                                                    <span>
                                                                        <input type="checkbox" id="confirm" name="confirm" value="Yes" required>
                                                                    </span>
                                                                    I have read and agree to the above guidelines and terms & conditions of the University Application and Admission Process.
                                                                </li>
                                                            </ul>
                                                            <div class="form-group text-right">
                                                                <a href="javascript:;" class="form-wizard-previous-btn float-left" id="termsShow">Previous</a>
                                                                <button type="submit" style="border: none;" id="final_form_submit" class="form-wizard-submit float-right">Submit</button>
                                                            </div>

                                                        </div>


                                                    </div>

                                                </div>

                                            </div>

                                            <!-- end row -->

                                        </div>
                                    </fieldset>



                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->


    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js_edit/app_edit_form.js"></script>
    <script src="./assets/js/jquery-ui.min.js"></script>


    <script>
        $(function() {
            //menu toggle
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });


            //script for ug input hide
            var hiddenDiv = $("#ugdisplay");
            if ($("#prg_type").val() == "ug") {
                hiddenDiv.css({
                    'display': 'none'
                });
                $('#ugfup').last().removeClass('wizard-required');
            }
            $("#prg_type").change(function() {
                if ($("#prg_type").val() == "ug") {
                    hiddenDiv.css({
                        'display': 'none'
                    });
                    $('#ugfup').last().removeClass('wizard-required');
                } else {
                    hiddenDiv.css({
                        'display': 'block'
                    });
                    $('#ugfup').last().addClass('wizard-required');
                }
            });

            //script for datepicker for all broswers 
            var element = $("#dob").attr('type');
            if (element == 'text') {
                $("#dob").datepicker();
            }
            // select tag change
            $("#prg_type").change(function() {
                var program_type = $(this).val();
                $.ajax({
                    url: './includes/selectchange.php',
                    method: 'POST',
                    data: {
                        program_type: program_type
                    },
                    dataType: "text",
                    success: function(data) {
                        $("#prog_name").html(data);
                    }
                });
            });

            //guardian yes or no radio btn 
            $(".t").click(function() {
                if ($(this).val() == "NO") {
                    $("#guid1").hide();

                } else {
                    $("#guid1").show();

                }
            });

            // terms hid and show nav          
            $("#termsHide").click(function() {
                if ($('#tAndC').hasClass("show")) {
                    $(".form-wizard-header").hide();
                }
            });

            $("#termsShow").click(function() {
                $(".form-wizard-header").show();
            });

        });

        //***************/
        // edit_final_form_submit - use when u want to submit the form 
        //***************/
        $("#mutlistep_edit_form").on('submit', (function(e) {
            e.preventDefault();
            console.log("bro");
            $.ajax({
                url: 'editappnext.php',
                method: 'POST',
                dataType: 'JSON',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(response) {
                    var data = JSON.parse(response);
                    console.log(data.filename);
                    //  res.forEach(element => {
                    //      console.log(element);
                    //  });
                    // alert(res.applicayionID);
                    // console.log(res.applicayionID);
                },
                // error: function(exception) {
                //     alert(exception);
                // }
            });

        }));
    </script>

</body>

</html>