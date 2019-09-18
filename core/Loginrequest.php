<?php
class Login extends core
{
    public function LoginValues($email, $password)
    {
        $secure = password_hash($password, PASSWORD_DEFAULT);
        $login = $this->query("SELECT * FROM users WHERE email='$email'");

        $user_data = mysqli_fetch_array($login);
        $userpass = $user_data['password'];
        var_dump($user_data['password']);

        $count_row = $login->num_rows;

        if ($count_row == 1 && password_verify($password, $userpass)) {
            // this login var will use for the session thing

            $_SESSION['login'] = true;

            $_SESSION['uid'] = $user_data['uid'];

            return true;
        } else {
            return false;
        }
    }
}
