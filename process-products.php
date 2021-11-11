<?php

if (isset($_POST['btn-info'])) {
    $UserName = $_POST['UName'];
    $Email = $_POST['Email'];
    $Msg = $_POST['msg'];

    if (empty($UserName) || empty($Email) || empty($Msg)) {
        header('location:industrial-radiator.php?error');
    } else {
        $to = "kaushiv1@gmail.com";
        $from = "kaushiv@saaswad.com";
        $headers = "From:" . $from;
        $Msg = $Msg . " " . strval($No) . " " . $Address . "   " . $Email;
        if (mail($to, $Subject, $Msg, $headers)) {
            header('location:industrial-radiator.php?success');
        }
    }
} else {
    header("location:industrial-radiator.php");
}

if (isset($_POST['btn-getQuote'])) {
    $UserName = $_POST['UName'];
    $Email = $_POST['Email'];
    $Msg = $_POST['msg'];
    $Product = $_POST['product'];

    if (empty($UserName) || empty($Email) || empty($Msg) || empty($Product)) {
        header('location:industrial-radiator.php?error');
    } else {
        $to = "kaushiv1@gmail.com";
        $from = "kaushiv@saaswad.com";
        $headers = "From:" . $from;
        $Msg = $Msg . " " . strval($No) . " " . $Address . "   " . $Email;
        if (mail($to, $Subject, $Msg, $headers)) {
            header('location:industrial-radiator.php?success');
        }
    }
} else {
    header("location:industrial-radiator.php");
}

if (isset($_POST['btn-downloadBrochure'])) {
    $UserName = $_POST['UName'];
    $Email = $_POST['Email'];
    $No = $_POST['no'];

    if (empty($UserName) || empty($Email) || empty($No)) {
        header('location:industrial-radiator.php?error');
    } else {
        $to = "kaushiv1@gmail.com";
        $from = "kaushiv@saaswad.com";
        $headers = "From:" . $from;
        $Msg = $Msg . " " . strval($No) . " " . $Address . "   " . $Email;
        if (mail($to, $Subject, $Msg, $headers)) {
            header('location:industrial-radiator.php?success');
        }
    }
} else {
    header("location:industrial-radiator.php");
}




?>