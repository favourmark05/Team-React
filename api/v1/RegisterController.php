<?php
require_once "core/init.php";
if (isset($_REQUEST['Register']) || isset($_POST['Register'])) {
    if($_POST['password'] != $_POST['repeat_password']){
        echo "<script>alert('Password do not match')</script>";
    }

    $RegistrationRequests = $Registration->RegisterValues($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password']);

    if ($RegistrationRequests) {
        $Login = new Login();
        $LoginRequest = $Login->LoginValues($_POST['email'], $_POST['password']);
        if ($LoginRequest) {
            header("location: landingPage.php");
        }
    } else {
        echo "<script>alert('Error Email already exists please try again')</script>";
    }
}
