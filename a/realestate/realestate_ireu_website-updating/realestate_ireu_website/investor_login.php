<?php

session_start();
include("./includes/config.php");

$username = $password = "";
$errors = array('username' => '', 'password' => '', 'gerror' => '');
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    //check username
    if (empty($_POST['username'])) {
        $errors['username'] = 'username is empty <br />';
    } else {
        $username = htmlspecialchars($_POST['username']);
        // if (strlen($username) < 3) {
        //     $errors['username'] =  'username must be valid';
        // }
    }
    //check password
    if (empty($_POST['password'])) {
        $password = htmlspecialchars($_POST['password']);
        $errors['password'] = 'password is empty <br />';
    }
    // else{
    // $errors['password'] = htmlspecialchars($_POST['password']);
    // } 



    if (array_filter($errors)) {
        $errors['gerror'] = 'there is error';
    } else {
        //sql query to ckeck if user exists in db
        $sql = "SELECT `investor_username`, `investor_password` FROM `investor_login` WHERE investor_username ='" . $_POST['username'] . "' AND investor_password = '" . $_POST['password'] . "' ";
        $result = mysqli_query($db, $sql);



        if (mysqli_fetch_assoc($result)) {
            $_SESSION['username'] = $_POST['username'];
            header('Location: ./investor_page/index.php');
            die;
        } else {
            $errors['gerror'] = 'please enter correct username and password';
        }
    }
}


?>
<html>

<head>
    <title>Investor Login Page</title>
    <?php include('./includes/page_header.php'); ?>


    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="css/login.css">

</head>

<body class="investor">
    <div class="container">


        <div class="d-flex justify-content-center h-100">

            <div class="card">
                <img src="./img/logo.png" class="img-fluid m-logo-size lazyload mx-auto" alt="Home" width="170px" height="150px" style="padding-top: 10px;" /></a>

                <div class="card-header">
                    <h3 class="text-center">Sign In</h3>

                </div>
                <div class="card-body">
                    <form method="POST" action="./investor_login.php" novalidate>
                        <div><?php echo $errors['gerror']; ?></div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="username" name="username">
                        </div>
                        <div><?php echo $errors['username']; ?></div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="password" name=password>
                        </div>
                        <div><?php echo $errors['password']; ?></div>
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