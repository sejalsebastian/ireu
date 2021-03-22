<?php
include("includes/config.php");
session_start();
//getting id 
$name = $_SESSION['email'];
$sql = "SELECT `stu_id` FROM `student` WHERE stu_email ='$name' limit 1";
$result = mysqli_query($db, $sql);


if (mysqli_num_rows($result) > 0) {
    // output id of user
    if ($row = mysqli_fetch_assoc($result)) {
        $_SESSION['stu_id'] = "" . $row["stu_id"];
    }
}

if (!isset($_SESSION['email'])) {
    header("Location: register.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--Fav Icons-->
    <link href="assets/img/favicon.png" rel="icon" sizes="32*32">

    <title>User application</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link href="./assets/css/user_edit_app.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/js/jquery-ui.min.css">
    <style>
        .mandate {
            color: red;
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
                <a href="#" class="list-group-item list-group-item-action sid_nav">New Application Form</a>
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
                            <form action="next.php" id="mutlistep_edit_form" method="post" role="form" enctype="multipart/form-data">
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
                                            <?php include('./includes/select_programtype.php'); ?>
                                            <select id="programtype" class="form-control" name="programtype" required>
                                                <option value="default">Select Program Type</option>
                                                <?php foreach ($programmes as $programme) { ?>
                                                    <option value="<?php echo $programme['prog_id']; ?>"><?php echo $programme['prog_name']; ?></option>
                                                <?php } ?>
                                            </select>

                                            <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">PROGRAM NAME<span class="mandate">*</span></label>
                                            <select name="programname" id="programname" class="form-control wizard-required">
                                                <option value="default">Select Program Name</option>
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

                                            <label class="control-label">First Name </label> (As per
                                            10th/SSLC standard marks card) <span class="mandate">*</span>

                                            <input type="text" class="form-control wizard-required" id="fname" name="fname" value="" required style="text-transform:uppercase" />
                                            <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group col-md-6">

                                            <label class="control-label">Last Name </label> <span class="mandate">*</span>
                                            <input type="text" class="form-control wizard-required" style="text-transform:uppercase" id="lname" name="lname" value="" required />
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label class="control-label">Email <span class="mandate">*</span></label>
                                            <input type="text" class="form-control wizard-required" id="email" name="email" value="" required />
                                            <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="control-label">Date of Birth <span class="mandate">*</span></label>
                                            <input type="date" class="form-control wizard-required " autocomplete="off" placeholder="dd/mm/yyyy" id="dob" name="dob" value="" required>
                                            <div class="wizard-form-error"></div>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label class="control-label">Registered Mobile Number
                                                <span class="mandate">*</span></label>
                                            <input type="text" class="form-control wizard-required" maxlength="10" id="mobile_no" name="mobile_no" value="" required />
                                            <div class="wizard-form-error"></div>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label class="control-label">Alternative Mobile
                                                Number</label>
                                            <input type="text" id="alt_mobile_no" name="alt_mobile_no" value="" class="form-control" maxlength="10" />

                                        </div>

                                        <div class="form-group col-md-4">
                                            <label class="control-label">Gender <span class="mandate">*</span></label>
                                            <select name="gender" class="form-control wizard-required" id="gender" required>
                                                <option value="default">SELECT</option>
                                                <option value="MALE">MALE</option>
                                                <option value="FEMALE">FEMALE</option>
                                                <option value="OTHER">OTHER</option>
                                            </select>
                                            <div class="wizard-form-error"></div>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label class="control-label">Religion <span class="mandate">*</span></label>
                                            <select name="religion" class="form-control wizard-required" id="religion" required>
                                                <option value="default">SELECT</option>
                                                <option value="HINDUISM">HINDUISM</option>
                                                <option value="ISLAM">ISLAM</option>
                                                <option value="CHRISTIANITY">CHRISTIANITY</option>
                                                <option value="BUDDHISM">BUDDHISM</option>
                                                <option value="SIKHISM">SIKHISM</option>
                                                <option value="JAINISM">JAINISM</option>
                                                <option value="OTHERS">OTHERS</option>
                                            </select>
                                            <div class="wizard-form-error"></div>
                                        </div>


                                        <div class="form-group col-md-4">
                                            <label class="control-label">Caste</label>
                                            <input type="text" id="caste" name="caste" value="" class="form-control" />

                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="control-label">Category <span class="mandate">*</span></label>
                                            <select name="category" class="form-control wizard-required" id="category" required>
                                                <option value="default">CASTE CATEGORY</option>
                                                <option value="GENERAL">GENERAL</option>
                                                <option value="OBC">OBC</option>
                                                <option value="NT">NT</option>
                                                <option value="SC">SC</option>
                                                <option value="ST">ST</option>
                                                <option value="BC">BC</option>
                                                <option value="PWD">PWD</option>
                                                <option value="EWS">EWS</option>
                                                <option value="EBC">EBC</option>
                                                <option value="PC">PC</option>
                                                <option value="WBC">WBC</option>
                                                <option value="UR">UR</option>
                                                <option value="UR(GEN)">UR(GEN)</option>
                                                <option value="MOBC">MOBC</option>
                                                <option value="STH">STH</option>
                                                <option value="STP">STP</option>
                                            </select>
                                            <div class="wizard-form-error"></div>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label class="control-label">Aadhar No</label>
                                            <input type="text" id="aadhar_no" name="aadhar_no" value="" class="form-control" maxlength="12" style="text-transform:uppercase" />
                                            <em class="error help-block aadhar_no"></em>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label class="control-label">Blood Group <span class="mandate">*</span></label>
                                            <select name="blood_group" class="form-control wizard-required" id="blood_group" required>
                                                <option value="default">Select</option>
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                            </select>
                                            <div class="wizard-form-error"></div>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label class="control-label">PWD (Disability)<span class="mandate">*</span></label>
                                            <select name="physical_status" class="form-control wizard-required" id="physical_status" required>
                                                <option value="default">SELECT</option>
                                                <option value="YES">YES</option>
                                                <option value="NO">NO</option>
                                            </select>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>


                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label class="control-label">Father's Name <span class="mandate">*</span></label>
                                            <input type="text" name="father_name" value="" id="father_name" class="form-control wizard-required" style="text-transform:uppercase" required />
                                            <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="control-label">Mobile Number <span class="mandate">*</span></label>
                                            <input type="text" name="f_phone_no" value="" id="f_phone_no" class="form-control wizard-required" maxlength="10" required />
                                            <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="control-label">Father's Email</label>
                                            <input type="email" name="f_email" id="f_email" value="" class="form-control" style="text-transform:uppercase" />
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label class="control-label">Father Occupation/Business Entity</label>
                                            <input type="text" name="f_occupation" value="" id="f_occupation" class="form-control" style="text-transform:uppercase" />
                                        </div>
                                    </div>


                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label class="control-label">Mother's Name <span class="mandate">*</span></label>
                                            <input type="text" name="mother_name" value="" id="mother_name" class="form-control wizard-required" style="text-transform:uppercase" required />
                                            <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="control-label">Mobile Number <span class="mandate">*</span></label>
                                            <input type="text" name="m_phone_no" value="" id="m_phone_no" class="form-control wizard-required" maxlength="10" required />
                                            <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="control-label">Mother's Email</label>
                                            <input type="email" name="m_email" id="m_email" value="" class="form-control" style="text-transform:uppercase" />
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="control-label">Mother Occupation/Business Entity</label>
                                            <input type="text" name="m_occupation" value="" id="m_occupation" class="form-control" style="text-transform:uppercase" />
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label class="control-label">Combined Parent Annual Income<span class="mandate">*</span></label>
                                            <select name="parents_income" class="form-control wizard-required" id="parents_income" required>
                                                <option value="default">Choose</option>
                                                <option value="3Lakh to 5Lakh">3Lakh to 5Lakh</option>
                                                <option value="5Lakh to 10Lakh">5Lakh to 10Lakh</option>
                                                <option value="10Lakh to 15Lakh">10Lakh to 15Lakh</option>
                                                <option value="15Lakh to 20+">15Lakh to 20+</option>
                                            </select>
                                            <div class="wizard-form-error"></div>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label class="control-label">Preferred Point of Contact<span class="mandate">*</span></label>
                                            <select name="preferred_contact" class="form-control wizard-required" id="preferred_contact" required>
                                                <option value="default">Select</option>
                                                <option value="FATHER">FATHER</option>
                                                <option value="MOTHER">MOTHER</option>
                                                <option value="GUARDIAN">GUARDIAN</option>
                                                <option value="Both the Parents">Both the Parents</option>
                                            </select>


                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <!-- gaurdian content -->
                                    <h5 style="color:#003a6a" href=""> <strong> Name of the Local Guardian (With Relationship) if any,
                                            Yes<input class="t" type="radio" value="YES" id="chkYes" name="chkPassPort" onclick="distrail('YES')" />
                                            No<input class="t" type="radio" value="NO" id="chkNo" name="chkPassPort" onclick="distrail('NO')" /> </strong></h5>


                                    <div id="guid" class="form-row">
                                        <div class="form-group col-md-4">
                                            <label class="control-label">Guardian's Name
                                            </label>
                                            <input type="text" id="guardian_name" name="guardian_name" value="" class="form-control" style="text-transform:uppercase" />
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="control-label">Mobile No</label>
                                            <input type="text" id="guardian_mobile" name="guardian_mobile" value="" class="form-control" maxlength="10" />
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="control-label">Relationship </label>
                                            <input type="text" id="guardian_relation" name="guardian_relation" value="" class="form-control" style="text-transform:uppercase" />
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
                                            <input type="text" name="cor_addr_line1" value="" id="cor_addr_line1" class="form-control wizard-required" style="text-transform:uppercase" required />
                                            <div class="wizard-form-error"></div>

                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Address Line 2 <span class="mandate">*</span></label>
                                            <input type="text" name="cor_addr_line2" value="" id="cor_addr_line2" class="form-control wizard-required" style="text-transform:uppercase" required />
                                            <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="control-label">Select State <span class="mandate">*</span></label>
                                            <select name="cor_state" class="form-control wizard-required" id="cor_state">
                                                <option value="default">Select</option>
                                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                <option value="Assam">Assam</option>
                                                <option value="Bihar">Bihar</option>
                                                <option value="Chandigarh">Chandigarh</option>
                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                                <option value="Daman and Diu">Daman and Diu</option>
                                                <option value="Delhi">Delhi</option>
                                                <option value="Goa">Goa</option>
                                                <option value="Gujarat">Gujarat</option>
                                                <option value="Haryana">Haryana</option>
                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                <option value="Jharkhand">Jharkhand</option>
                                                <option value="Karnataka">Karnataka</option>
                                                <option value="Kenmore">Kenmore</option>
                                                <option value="Kerala">Kerala</option>
                                                <option value="Lakshadweep">Lakshadweep</option>
                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                <option value="Maharashtra">Maharashtra</option>
                                                <option value="Manipur">Manipur</option>
                                                <option value="Meghalaya">Meghalaya</option>
                                                <option value="Mizoram">Mizoram</option>
                                                <option value="Nagaland">Nagaland</option>
                                                <option value="Narora">Narora</option>
                                                <option value="Natwar">Natwar</option>
                                                <option value="Odisha">Odisha</option>
                                                <option value="Paschim Medinipur">Paschim Medinipur</option>
                                                <option value="Pondicherry">Pondicherry</option>
                                                <option value="Punjab">Punjab</option>
                                                <option value="Rajasthan">Rajasthan</option>
                                                <option value="Sikkim">Sikkim</option>
                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                <option value="Telangana">Telangana</option>
                                                <option value="Tripura">Tripura</option>
                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                <option value="Uttarakhand">Uttarakhand</option>
                                                <option value="Vaishali">Vaishali</option>
                                                <option value="West Bengal">West Bengal</option>
                                            </select>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="control-label">City <span class="mandate">*</span></label>
                                            <input type="text" name="cor_city" value="" id="cor_city" maxlength="30" class="form-control wizard-required" required />
                                            <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="control-label">Pincode <span class="mandate">*</span></label>
                                            <input type="text" name="cor_pincode" value="" id="cor_pincode" maxlength="6" class="form-control wizard-required" required />
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
                                            <input type="text" name="pre_addr_line1" value="" id="pre_addr_line1" class="form-control wizard-required" style="text-transform:uppercase" required />
                                            <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Address Line 2 <span class="mandate">*</span></label>
                                            <input type="text" name="pre_addr_line2" value="" id="pre_addr_line2" class="form-control wizard-required" style="text-transform:uppercase" required />
                                            <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="control-label">Select State <span class="mandate">*</span></label>
                                            <select name="pre_state" class="form-control wizard-required" id="pre_state">
                                                <option value="default">Select</option>
                                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                <option value="Assam">Assam</option>
                                                <option value="Bihar">Bihar</option>
                                                <option value="Chandigarh">Chandigarh</option>
                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                                <option value="Daman and Diu">Daman and Diu</option>
                                                <option value="Delhi">Delhi</option>
                                                <option value="Goa">Goa</option>
                                                <option value="Gujarat">Gujarat</option>
                                                <option value="Haryana">Haryana</option>
                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                <option value="Jharkhand">Jharkhand</option>
                                                <option value="Karnataka">Karnataka</option>
                                                <option value="Kenmore">Kenmore</option>
                                                <option value="Kerala">Kerala</option>
                                                <option value="Lakshadweep">Lakshadweep</option>
                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                <option value="Maharashtra">Maharashtra</option>
                                                <option value="Manipur">Manipur</option>
                                                <option value="Meghalaya">Meghalaya</option>
                                                <option value="Mizoram">Mizoram</option>
                                                <option value="Nagaland">Nagaland</option>
                                                <option value="Narora">Narora</option>
                                                <option value="Natwar">Natwar</option>
                                                <option value="Odisha">Odisha</option>
                                                <option value="Paschim Medinipur">Paschim Medinipur</option>
                                                <option value="Pondicherry">Pondicherry</option>
                                                <option value="Punjab">Punjab</option>
                                                <option value="Rajasthan">Rajasthan</option>
                                                <option value="Sikkim">Sikkim</option>
                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                <option value="Telangana">Telangana</option>
                                                <option value="Tripura">Tripura</option>
                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                <option value="Uttarakhand">Uttarakhand</option>
                                                <option value="Vaishali">Vaishali</option>
                                                <option value="West Bengal">West Bengal</option>
                                            </select>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="control-label">Enter City <span class="mandate">*</span></label>
                                            <input type="text" name="pre_city" value="" id="pre_city" maxlength="30" class="form-control wizard-required" required />
                                            <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="control-label">Pincode <span class="mandate">*</span></label>
                                            <input type="text" name="pre_pincode" value="" id="pre_pincode" maxlength="6" class="form-control wizard-required" required />
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
                                            <input type="text" name="X_Institution" id="X_Institution" value="" class="form-control   wizard-required" style="text-transform:uppercase" required />
                                            <div class="wizard-form-error"></div>

                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="control-label">Total % or CGPA <span class="mandate">*</span></label>
                                            <input type="number" name="X_CGPA" id="X_CGPA" value="" step="0.01" class="form-control  wizard-required" required />
                                            <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="control-label">Year of Passing <span class="mandate">*</span>
                                            </label>
                                            <select name="X_year" id="X_year" class="form-control wizard-required" style="text-transform:uppercase" required>
                                                <option value="default">Select Year</option>
                                                <option value="2021">2021</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                                <option value="2017">2017</option>
                                                <option value="2016">2016</option>
                                                <option value="2015">2015</option>
                                                <option value="2014">2014</option>
                                                <option value="2013">2013</option>
                                                <option value="2012">2012</option>
                                                <option value="2011">2011</option>
                                                <option value="2010">2010</option>
                                                <option value="2009">2009</option>
                                                <option value="2008">2008</option>
                                                <option value="2007">2007</option>
                                                <option value="2006">2006</option>
                                                <option value="2005">2005</option>
                                                <option value="2004">2004</option>
                                                <option value="2003">2003</option>
                                                <option value="2002">2002</option>
                                                <option value="2001">2001</option>
                                                <option value="2000">2000</option>

                                            </select>
                                            <div class="wizard-form-error"></div>

                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="card-heading">
                                            <h5 class="card-title" style="color:#001b54;">XI<sup>th </sup>Std.
                                                Examination
                                                Details</h5>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label class="control-label">Institution Studied <span class="mandate">*</span>
                                            </label>
                                            <input type="text" name="XI_institution" value="" class="form-control wizard-required" style="text-transform:uppercase" required />
                                            <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="control-label">Total % or CGPA <span class="mandate">*</span></label>
                                            <input type="number" name="XI_CGPA" value="" step="0.01" class="form-control wizard-required" required />
                                            <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="control-label">Year of Passing <span class="mandate">*</span>
                                            </label>

                                            <select name="XI_year" class="form-control wizard-required" style="text-transform:uppercase" required>
                                                <option value="default">Select Year</option>
                                                <option value="2021">2021</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                                <option value="2017">2017</option>
                                                <option value="2016">2016</option>
                                                <option value="2015">2015</option>
                                                <option value="2014">2014</option>
                                                <option value="2013">2013</option>
                                                <option value="2012">2012</option>
                                                <option value="2011">2011</option>
                                                <option value="2010">2010</option>
                                                <option value="2009">2009</option>
                                                <option value="2008">2008</option>
                                                <option value="2007">2007</option>
                                                <option value="2006">2006</option>
                                                <option value="2005">2005</option>
                                                <option value="2004">2004</option>
                                                <option value="2003">2003</option>
                                                <option value="2002">2002</option>
                                                <option value="2001">2001</option>
                                                <option value="2000">2000</option>
                                            </select>
                                            <div class="wizard-form-error"></div>
                                        </div>

                                    </div>
                                    <div class="form-group clearfix">
                                        <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                        <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                                    </div>
                                </fieldset>

                                <fieldset class="wizard-fieldset">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Extra Curricular Activities
                                            </label>
                                            <input type="text" name="extra_curricular" id="extra_curricular" value="" class="form-control " style="text-transform:uppercase" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">How do you come to know
                                                about Jain (Deemed-to-be-University) <span class="mandate">*</span></label>
                                            <select name="source" id="source" class="form-control wizard-required" required>
                                                <option value="default">Choose</option>
                                                <option value="Facebook">Facebook</option>
                                                <option value="Website">Website</option>
                                                <option value="Google Search">Google Search</option>
                                                <option value="Instagram">Instagram</option>
                                                <option value="Twitter">Twitter</option>
                                                <option value="LinkedIn">LinkedIn</option>
                                                <option value="Reference">Reference</option>
                                                <option value="Hoarding">Hoarding</option>
                                                <option value="Newspaper Advertisement">Newspaper Advertisement</option>
                                                <option value="Pamphlet">Pamphlet</option>
                                                <option value="Poster">Poster</option>
                                                <option value="Banner">Banner</option>
                                                <option value="Word of Mouth">Word of Mouth</option>
                                                <option value="SMS">SMS</option>
                                                <option value="E-mailer">E-mailer</option>
                                                <option value="WhatsApp">WhatsApp</option>
                                                <option value="Alumni">Alumni</option>
                                                <option value="Seminar">Seminar</option>
                                                <option value="Walk-in">Walk-in</option>
                                                <option value="webinar">webinar</option>
                                            </select>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Hostel Accommodation <span class="mandate">*</span></label>
                                            <select name="hostel_accom" id="hostel_accom" class="form-control wizard-required" required>
                                                <option value="default">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Have you previously applied
                                                to Jain (Deemed-to-be-University)? <span class="mandate">*</span></label>
                                            <select name="previous_applied" id="previous_applied" class="form-control wizard-required" required>
                                                <option value="default">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                            <div class="wizard-form-error"></div>
                                        </div>

                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Have you studied PUC at
                                                Jain College?<span class="mandate">*</span></label>
                                            <select name="studied_puc" id="studied_puc" class="form-control wizard-required" required>
                                                <option value="default">Select</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Preferred Center for Jain
                                                Entrance Test 2021 (JET 2021) <span class="mandate">*</span></label>
                                            <select id="test_center" name="test_center" class="form-control wizard-required" readonly="readonly" required>
                                                <option value="BANGALORE">BANGALORE</option>
                                            </select>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="form-group clearfix">
                                        <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                        <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                                    </div>
                                </fieldset>

                                <fieldset class="wizard-fieldset">
                                    <div class="form-row">
                                        <div class="input-group mb-1">
                                            <label class="control-label">Photo (JPG, PNG format only
                                                and size should not exceed 1 MB) <span class="mandate">*</span></label>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="file" name="file_array[]" class="form-control-file border wizard-required" id="photo" required="required">
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="input-group mb-1">
                                            <label class="control-label">10th Mark Sheet <span class="mandate">*</span></label>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="file" name="file_array[]" class="form-control-file border wizard-required" id="sslc_certificate" required="required">
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="input-group mb-1">
                                            <label class="control-label">Upload your Higher
                                                Secondary / XII Standard with marks cards <span class="mandate">*</span></label>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="file" name="file_array[]" class="form-control-file border wizard-required" id="puc2_certificate" required="required">
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>

                                    <div id="ugdisplay" class="form-row" style="display: none;">
                                        <div class="input-group mb-1">
                                            <label class="control-label">UG Certificate</label>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="file" name="file_array[]" class="form-control-file border" id="UG_certificate">
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>

                                    <div class="form-group clearfix">
                                        <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                        <a href="javascript:;" class="form-wizard-next-btn float-right" id="termsHide">Next</a>
                                        <!-- <button type="submit" style="border: none;" id="final_form_submit" class="form-wizard-submit float-right">Submit</button> -->
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
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/jsnext/app_form.js"></script>
    <script src="./assets/js/jquery-ui.min.js"></script>
    <!-- script for slect option change -->
    <script>
        // ajax call to get course type   
        $(document).ready(function() {
            $("#programtype").change(function() {
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
                        $("#programname").html(data);
                    }
                });
            });
        });
        // $(document).ready(function(){
        //   $("#programtype").change( function (){
        //        var program_type = $(this).val();
        //     //    alert(program_type);
        //     $.ajax({
        //                     url: './includes/selectchange.php',
        //                     method: 'POST',
        //                     data: {program_type:program_type},
        //                     dataType: "text",
        //                     success: function(data) {
        //                         $("#programname").html(data);
        //                     }
        //                 });
        //             });    
        // });
    </script>
    <!-- script for toggle btn -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
    <!-- script for radio btn -->
    <script>
        function distrail(opt) {
            if (opt == "NO") {
                $("#guid").hide();
            } else if (opt == "YES") {
                $("#guid").show();
            }
        }
    </script>
    <!-- script for datepicker for all broswers -->
    <script>
        $(function() {
            var element = $("#dob").attr('type');
            if (element == 'text') {
                $("#dob").datepicker();
            }
        })
    </script>
    <!-- script for upload display button -->
    <script>
        var elem = document.getElementById("programtype");
        elem.onchange = function() {
            var hiddenDiv = document.getElementById("ugdisplay");
            hiddenDiv.style.display = (this.value == "UG PROGRAM") ? "none" : "block";
            if (this.value == "UG PROGRAM") {
                document.getElementById("UG_certificate").disabled = true;
                console.log("true it");
                $("#UG_certificate").removeClass("wizard-required");
                $("#UG_certificate").prop('required', false);
            } else {
                document.getElementById("UG_certificate").disabled = false;
                console.log("false it");
                $("#UG_certificate").last().addClass("wizard-required");
                $("#UG_certificate").prop('required', true);
            }

        };


        $("#final_form_submit").on('submit', (function(e) {
            e.preventDefault();
            console.log("bro");
            $.ajax({
                url: 'next.php',
                method: 'POST',
                dataType: 'JSON',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    //   alert(data.lastid);
                    $("#see").html(data.lastid);
                    alert(data.stu_id);
                },
                error: function(exception) {
                    alert(exception);
                }
            });

        }));
    </script>
    <!-- hide headers -->
    <script>
        $(document).ready(function() {

            $("#termsHide").click(function() {
                // document.getElementById("UG_certificate").disabled = false;  
                if ($('#tAndC').hasClass("show")) {
                    $(".form-wizard-header").hide();
                    console.log("done man");
                }
            });

            $("#termsShow").click(function() {
                $(".form-wizard-header").show();
            });

        });
    </script>

</body>

</html>