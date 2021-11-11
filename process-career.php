<?php

if (isset($_POST['btn-career'])) {
    $UserName = $_POST['UName'];
    $Email = $_POST['Email'];
    $No = $_POST['no'];
    $Address = $_POST['address'];
    $Role = $_POST['Role'];
    $Msg = $_POST['msg'];
    $CV = $_POST['cv'];

    if (empty($UserName) || empty($Email) || empty($Role) || empty($Msg) || empty($No) || empty($Address) || empty($CV)) {
        header('location:career.php?error');
    } else {
        $to = "kaushiv1@gmail.com";
        $from = "kaushiv@saaswad.com";
        $headers = "From:" . $from;
        $Msg = $Msg . " " . strval($No) . " " . $Address . "   " . $Email;
        if (mail($to, $Subject, $Msg, $headers)) {
            header('location:career.php?success');
        }
    }
} else {
    header("location:career.php");
}

?>