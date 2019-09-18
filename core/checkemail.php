<?php
// require_once "init.php";
class checkemail extends core
{
public function emailCheck($email)
{
    $this->query("SELECT email FROM users WHERE email=$email");
    return $this->rows();
}
}