<?php
$logout=new logout();
if (isset($_GET['q'])) {
    $logout->user_logout();
    header('location:../forms/login.php');
}