<?php
session_start();
// define('LOGGED_IN', true);
require 'core.php';
require 'Loginrequest.php';
require 'Registrationrequest.php';
require 'api/v1/LoginController.php';
require 'api/v1/RegisterController.php';
require 'checkemail.php';
require 'logoutrequest.php';
require 'api/v1/LogoutController.php';
