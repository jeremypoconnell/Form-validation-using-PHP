<?php

    $emailEmptyErr = "";
    $nameEmptyErr = "";
    $passEmptyErr = "";
    $genderEmptyErr = "";
    $emailErr = "";
    $nameErr = "";
    $passErr = "";

    if(isset($_POST["submit"])) {
        $email          = checkInput($_POST["email"]);
        $name           = checkInput($_POST["name"]);
        $pass           = checkInput($_POST["pass"]);
        $gender         = checkInput($_POST["gender"]);

        // Email validation
        if(empty($email)){
            $emailEmptyErr = '<div class="error">
                Email can not be left blank.
            </div>';
        }
        else if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)){
            $emailErr = '<div class="error">
                    Email format is not valid.
            </div>';
        } else {
            echo $email . '<br>';
        }

        // Username validation
        if(empty($name)){
            $nameEmptyErr = '<div class="error">
                Username can not be empty.
            </div>';
        } // Allow letters and white space
        else if(!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = '<div class="error">
                Only letters and white space allowed.
            </div>';
        } else {
            echo $name . '<br>';
        }

        // Gender validation
        if(empty($gender)){
            $genderEmptyErr = '<div class="error">
                Specify your gender.
            </div>';
        } else {
            echo $gender . '<br>';
        }
    }

    function checkInput($input) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }
?>
