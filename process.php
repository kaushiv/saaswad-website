<?php

if (isset($_POST['btn-send'])) {
    $UserName = $_POST['UName'];
    $Email = $_POST['Email'];
    $No = $_POST['no'];
    $Address = $_POST['address'];
    $Subject = $_POST['Subject'];
    $Msg = $_POST['msg'];

    if (empty($UserName) || empty($Email) || empty($Subject) || empty($Msg) || empty($No) || empty($Address)) {
        header('location:contact.php?error');
    } else {
        $to = "kaushiv1@gmail.com";
        $from = "kaushiv@saaswad.com";
        $headers = "From:" . $from;
        $Msg = $Msg . " " . strval($No) . " " . $Address . "   " . $Email;
        if (mail($to, $Subject, $Msg, $headers)) {
            header('location:contact.php?success');
        }
    }
} else {
    header("location:contact.php");
}
