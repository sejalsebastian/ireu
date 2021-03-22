<html>

<head>
    <title>Reset Password</title>
    <?php include('./includes/page_header.php'); ?>


    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="css/reset_password.css">

</head>

<body class="intern">
    <div class="container">


        <div class="d-flex justify-content-center h-100">

            <div class="card">
                <img src="./img/logo.png" class="img-fluid m-logo-size lazyload mx-auto" alt="Home" width="170px" height="150px" style="padding-top: 10px;" /></a>

                <div class="card-header">
                    <h3 class="text-center">Reset Password</h3>

                </div>
                <div class="card-body">
                    <form method="post" action="includes/reset_request.php">

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="email" class="form-control" placeholder="username" name="email">

                        </div>


                        <div class="form-group">
                            <input type="submit" value="Reset password" class="btn float-right login_btn" name="reset-request-submit">
                        </div>
                    </form>
                    <?php
                    if(isset($_GET["reset"])){
                        if($_GET["reset"]=="success"){
                            echo '<p>Check ur mail</p>';
                        } 
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>
</body>

</html>