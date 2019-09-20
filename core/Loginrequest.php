<?php
class Login extends core
{
    public function LoginValues($email, $password)
    {
        $secure = password_hash($password, PASSWORD_DEFAULT);
        $login = $this->query("SELECT * FROM user WHERE email='$email'");

        $user_data = $login->fetchAll();
        $userpass = $user_data[0]['password'];

        if ($login == true && password_verify($password, $userpass)) {
            // this login var will use for the session thing

            $_SESSION['login'] = true;

            $_SESSION['_id'] = $user_data[0]['_id'];

            return true;
        } else {
            return false;
        }
    }
}
