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
    <title>MyApplication</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/user_app.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/a4810d46b6.js"></script>
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
            <a href="#" class="list-group-item list-group-item-action sid_nav">My Applications</a>
            <a href="./my_payments" class="list-group-item list-group-item-action sid_nav">My Payments</a>
        </div>
    </div>
    <!-- Sidebar -->
    
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
<!-- app form display -->
<!-- <?php echo $name,'<br>', $stuid; ?> -->

<div  class="jumbotron jumbotron-fluid">
  <div style="padding: 0 3rem;" class="container table-responsive">
  <div style="height: 400px; overflow:scroll;">
  <table style="width: auto;" class="table table-striped apptable">
  <thead>
  <h4 class="Applicationsh4">Applications</h4>
  <hr>
    <tr>
      <th scope="col">Application No</th>
      <th scope="col">Name</th>
      <th scope="col">Program Name</th>
      <th scope="col">Course Specialization</th>
      <th scope="col">Fee Payment Status</th>
      <th scope="col">Edit</th>
      <th scope="col">View</th>
    </tr>
  </thead>
  <tbody>
  <?php include('./includes/myappliactiondetail.php') ?>
        <?php foreach ($details as $detail) { ?>
          <tr>
            <td><?php echo $detail['app_id'] ?></td>
            <td><?php echo $detail['stu_name'] ?></td>
            <td><?php echo $detail['prog_type'] ?></td>
            <td><?php echo $detail['prog_name'] ?></td>
            <td><?php if($detail['fee_status'] == NULL){ echo "Unpaid"; } else {echo $detail['fee_status'];} ?></td>
            <td><a href='./user_edit_application.php?applicationnumber=<?php echo $detail['app_id']; ?>' class="btn btn-icon btn-xs btn-outline-primary" title="Edit"><i class="fa fa-pencil"></i></a></td>
          </tr>
        <?php } ?>
  </tbody>
</table>
  </div>
  </div>
</div>
</div>
<!-- /#page-content-wrapper -->
<!-- <?php $detail['app_id'];?> -->

<!-- /#wrapper -->
</div>
<!-- Bootstrap core JavaScript -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="./assets/jsnext/app_form.js"></script>

<script>
$("#menu-toggle").click(function(e) {
e.preventDefault();
$("#wrapper").toggleClass("toggled");
});
</script>
</body>