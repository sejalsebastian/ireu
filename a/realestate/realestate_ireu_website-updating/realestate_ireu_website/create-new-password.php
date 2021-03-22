<html>

<head>
    <title>Reset Password</title>
    <?php include('./includes/page_header.php'); ?>



    <link rel="stylesheet" type="text/css" href="css/reset_password.css">

</head>

<body class="intern">
    <div class="container">


        <div class="d-flex justify-content-center h-100">

            <div class="card">
                <img src="./img/logo.png" class="img-fluid m-logo-size lazyload mx-auto" alt="Home" width="170px" height="150px" style="padding-top: 10px;" /></a>

                <div class="card-header">
                    <h3 class="text-center">Reset Your New Password</h3>

                </div>
                <?php
                $selector = $_GET["selector"];
                $validator = $_GET["validator"];

                if (empty($selector) || empty($validator)) {
                    echo "could nt validate ur request";
                } else {
                    if (
                        ctype_xdigit($selector) !== false
                        && ctype_xdigit($validator) !== false
                    ) {
                ?>
                        <div class="card-body">
                            <form action="includes/reset-password.php" method="post">
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="hidden" name="selector" value="<?php echo $selector ?>;">
                                    <input type="hidden" name="validator" value="<?php echo $validator ?>;">
                                    <input type="password" class="form-control" placeholder="Enter a new password" name="pwd">


                                </div>
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>

                                    <input type="password" class="form-control" placeholder="repeat a new password" name="pwd-repeat">


                                </div>


                                <div class="form-group">
                                    <input type="submit" value="Reset password" class="btn float-right login_btn" name="reset-password-submit">
                                </div>
                            </form>
                        </div>
                <?php
                    }
                }
                ?>



            </div>
        </div>
    </div>
</body>

</html>