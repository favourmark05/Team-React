<?php
require_once "core/init.php";
$Registration=new Register();
if (isset($_REQUEST['Register']) || isset($_POST['Register'])) {
    if($_REQUEST['password'] != $_REQUEST['repeat_password']){
        echo "<script>alert('Password do not match')</script>";
    }
echo $_POST['email'];
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
