<?php
if(isset($_POST["reset-password-submit"])){
    $selector=$_POST["selector"];
     $validator=$_POST["validator"];
      $password=$_POST["pwd"];
       $passwordRepeat=$_POST["pwd-repeat"];

       if(empty($password) || empty($passwordRepeat)){
        header("Location: ../create-new-password.php?newpwd=empty");
        exit();

       }
       elseif($password!=$passwordRepeat){
        header("Location: ../create-new-password.php?newpwd=paddwordntsame");
        exit();
       }

       $currentdate=date("U");

    include('config.php');

    $sql= "SELECT * FROM `pwd_reset` WHERE pwdResetSelector=? AND pwdResetExpires>=?";
    $stmt = mysqli_stmt_init($db);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was an errror";
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "ss", $selector,$currentdate);
        mysqli_stmt_execute($stmt);

        $result=mysqli_stmt_get_result($stmt);
        if(!$row=mysqli_fetch_assoc($result)){
            echo "you need to re-submit ur reset request11";
            exit();
        }
        else{
            $tokenbin=hex2bin($validator);
            $tokenCheck=password_verify($tokenbin,$row["pwdResetToken"]);

            if($tokenCheck===false){
                echo "you need to re-submit ur reset request";
                exit();
            }
            elseif($tokenCheck === true){
                $tokenEmail=$row['pwdResetEmail'];
                $sql= "SELECT * FROM `student` WHERE stu_email=?;";
                $stmt = mysqli_stmt_init($db);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    echo "There was an errror";
                    exit();
                } 
                else {
                    mysqli_stmt_bind_param($stmt,"s",$tokenEmail);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    if (!$row = mysqli_fetch_assoc($result)) {
                        echo "there was an error";
                        exit();
                    } 
                    else {
                   $sql= "UPDATE `student` SET stu_password=? WHERE stu_email=?;";
                        $stmt = mysqli_stmt_init($db);
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            echo "There was an errror";
                            exit();
                        } else {
                            $newPwdhash=password_hash($password,PASSWORD_DEFAULT);
                            mysqli_stmt_bind_param($stmt, "ss", $newPwdhash,$tokenEmail);
                            mysqli_stmt_execute($stmt);

                            $sql= "DELETE FROM `pwd_reset` WHERE pwdResetEmail=?;";
                            $stmt = mysqli_stmt_init($db);
                            if (!mysqli_stmt_prepare($stmt, $sql)) {
                                echo "There was an errror";
                                exit();
                            } else {
                                mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                                mysqli_stmt_execute($stmt);
                                header("Location: ../index.php?newpwd=passwordupdated");

                            }
                        }
                    }

                }
            }
        }
    }

    }
else {
    header("Location: ../reset_pass.php");
}
