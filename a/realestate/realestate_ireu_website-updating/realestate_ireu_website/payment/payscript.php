<?php
// echo $_GET['name'],$_GET['mobile'],$_GET['email'];
session_start();
$apiKey = "rzp_test_rnyrWCRASjyyeC";
include('appdet.php');
// echo '<pre>';
// // echo var_dump($appdetails);
// // echo var_dump($details);
// // foreach  ($appdetails as $appdetail) {
// //     echo $appdetail['firstname'].' '.$appdetail['lastname'];
// // }
// echo '</pre>';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payments</title>
     <!-- Custom styles for this template -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/user_edit_app.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/js/jquery-ui.min.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>

<body>
<div class="d-flex" id="wrapper">
 <!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading"><a class="navbar-brand" href="#">
                    <img src="../assets/img/Jain-logo.png" alt="" width="130px">
                </a> </div>
            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action sid_nav">New Application Form</a>
                <a href="./my_application" class="list-group-item list-group-item-action sid_nav">My Applications</a>
                <a href="./my_payments" class="list-group-item list-group-item-action sid_nav">My Payments</a>

            </div>
</div>

<!-- Page Content -->
<div id="page-content-wrapper">

<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <button class="btn " id="menu-toggle"><span class="navbar-toggler-icon"></span></button>
    
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="../assets/img/student.jpg" alt="avtar-img"
                        width="20px">
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="stud_logout.php?logout">Logout</a>

                </div>
            </li>
        </ul>
  
</nav>



    <div class="app-main" id="main" style="margin-top: 1rem;">
        <!-- begin container-fluid -->
        <div class="container-fluid">
            <!-- begin row -->
            <div class="row formavlidation-wrapper">
                <div class="col-xl-3"></div>
                <div class="col-xl-6">
                    <div class="card card-statistics">
                        <div class="card-header">
                            <div class="card-heading">
                                <h4 class="card-title">Fee Payment</h4>
                            </div>
                        </div>
                        <div class="card-body" id="feediv">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0" style="font-size: 0.9rem;">
                                <?php foreach ($details as $detail) { ?>
                                    <tr>
                                        <td>Application Number</td>
                                        <td><label for="inputEmail4"><?php echo $detail['app_id']; ?></label></td>
                                    </tr>
                                    <tr>
                                        <td>Course</td>
                                        <td><label for="inputEmail4"><?php echo $detail['prog_name']; ?></label></td>
                                    </tr>

                                    <tr>
                                        <td>Total Fee</td>
                                        <td><label for="inputEmail4">Rs 600</label></td>
                                    </tr>
                                    <?php } ?>
                                    <!-- razor pay code  -->
                                    <tr>
                                        <td></td>
                                        <td>
                                         <a  class="btn btn-success" href="./payment.php">Pay now</a>
                                        </td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3"></div>
            </div>

            <!-- end row -->

        </div>

        <!-- end container-fluid -->

    </div>

<!-- nav end -->
</div>
</div>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- script for toggle btn -->
 <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
 </script>

</body>

</html>