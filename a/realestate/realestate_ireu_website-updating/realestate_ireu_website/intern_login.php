<html>

<head>
    <title>Intern Login Page</title>
    <?php include('./includes/page_header.php'); ?>


    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="css/login.css">

</head>

<body class="intern">
    <div class="container">


        <div class="d-flex justify-content-center h-100">

            <div class="card">
                <img src="./img/logo.png" class="img-fluid m-logo-size lazyload mx-auto" alt="Home" width="170px" height="150px" style="padding-top: 10px;" /></a>

                <div class="card-header">
                    <h3 class="text-center">Sign In</h3>

                </div>
                <div class="card-body">
                    <form>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="username">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="password">
                        </div>
                        <div class="row align-items-center remember">
                            <input type="checkbox">Remember Me
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Login" class="btn float-right login_btn">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <!-- <div class="d-flex justify-content-center links">
                        Don't have an account?<a href="#">Sign Up</a>
                    </div> -->
                    <div class="d-flex justify-content-center">
                        <a href="#">Forgot your password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>