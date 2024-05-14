<?php

if(isset($_POST["submit"])){

    $username = $_POST["Uid"];
    $name = $_POST["name"];
    $email = $_POST["Email"];
    $password = $_POST["Pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $email, $username, $password) !==false){
    header("location: ../signup.php?error=emptyInput");
        exit();
    }
    if (invalidUid($username) !==false) {
        header("location: ../signup.php?error=invalidUid");
        exit();
    }
    if (invalidEmail($email) !==false) {
        header("location: ../signup.php?error=invalidEmail");
        exit();
    }
    if (uidExists($conn, $username, $email) !==false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }
    

    createUser($conn, $name, $username, $email, $password);
}

else{
    header("location: ../signup.php");
    exit();
}
