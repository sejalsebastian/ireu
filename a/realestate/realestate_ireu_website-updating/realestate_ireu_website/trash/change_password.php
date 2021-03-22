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
                    <h3 class="text-center">Change Password</h3>

                </div>
                <div class="card-body">
                    <form>
                    <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder=" Old Password">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="New Password">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="Retype New Password">
                        </div>
                        
                        
                        <div class="form-group">
                            <input type="submit" value="Reset password" class="btn float-right login_btn">
                        </div>
                    </form>
                </div>
              
            </div>
        </div>
    </div>
</body>

</html>