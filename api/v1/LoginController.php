<?php
require_once '../core/init.php';
$Login = new Login();

if (isset($_REQUEST['login']) || isset($_POST['login'])) {
    $LoginRequest = $Login->LoginValues($_POST['email'], $_POST['password']);
    if ($LoginRequest) {
        // header("location: http://otugeme.test/views/home.php");
        echo "welcome";
    } else {
        echo "<script>alert('Error')</script>";
    }
}
