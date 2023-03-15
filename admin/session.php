<?php
    session_start();
    require_once "auth.php";
    $cuser = new Auth();

    if(!isset($_SESSION["user"])){
        header("Location:login.php");
        die;
    }

    $cemail = $_SESSION["user"];
    $data = $cuser->currentUser($cemail);

    $cid = $data["id"];
    $cname = $data["name"];
    $csurname = $data["surname"];
    $cemail = $data["email"];
    $cpass = $data["pass"];
    $cauth = $data["auth"];
    $cimg = $data["img"];
    $cdate = $data["date"];
?>