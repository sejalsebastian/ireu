<?php
include("includes/config.php");
session_start();
$name = $_SESSION['email'];
$stuid = $_SESSION['stu_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My_payments</title>
     <!-- Bootstrap core CSS -->
     <?php include('./includes/page_header.php'); ?>
     
    <link href="assets/css/user_app.css" rel="stylesheet">
</head>
<body>

<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading"><a class="navbar-brand" href="#">
                <img src="assets/img/jain_logo.png" alt="" width="130px">
            </a> </div>
        <div class="list-group list-group-flush">
            <a href="./user_application" class="list-group-item list-group-item-action sid_nav">New Application Form</a>
            <a href="./my_application" class="list-group-item list-group-item-action sid_nav">My Applications</a>
            <a href="#" class="list-group-item list-group-item-action sid_nav">My Payments</a>
        </div>
    </div>
    <!-- Sidebar -->
    
     <!-- Page Content -->
<div id="page-content-wrapper">
<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <button class="btn " id="menu-toggle"><span class="navbar-toggler-icon"></span></button>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="https://jgigroup.org/juug/assets/img/avtar/student.jpg" alt="avtar-img" width="20px">
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="stud_logout.php?logout">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<!-- app form display -->
<!-- <?php echo $name,'<br>', $stuid; ?> -->

<div  class="jumbotron jumbotron-fluid">
  <div style="padding: 0 3rem;" class="container table-responsive">
  <div style="height: 400px; overflow:scroll;">
  <table style="width: auto;" class="table table-striped apptable">
  <thead>
  <h4 class="Applicationsh4">Payments</h4>
  <hr>
    <tr>
      <th scope="col">Application No</th>
      <th scope="col">Name</th>  
      <th scope="col">Fee Payment Status</th>
    </tr>
  </thead>
  
  <tbody>
  <?php include('./includes/myappliactiondetail.php') ?>
        <?php foreach ($details as $detail) { ?>
          <tr>
            <td><?php echo $detail['app_id'] ?></td>
            <td><?php echo $detail['stu_name'] ?></td>
            <td><?php if($detail['fee_status'] == NULL){ echo "Unpaid"; } else {echo $detail['fee_status'];} ?></td>       
          </tr>
        <?php } ?>
  </tbody>
</table>
  </div>
  </div>
</div>

</div>
<!-- /#page-content-wrapper -->


<!-- /#wrapper -->
</div>
<!-- Bootstrap core JavaScript -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="./assets/jsnext/app_form.js"></script>
<!-- toggle for side bar -->
<script>
$("#menu-toggle").click(function(e) {
e.preventDefault();
$("#wrapper").toggleClass("toggled");
});
</script>
</body>
</html>