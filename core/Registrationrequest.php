<?php
class Register extends core
{
    public function RegisterValues($firstname, $lastname, $email, $password)
    {
        $passwords = password_hash($password, PASSWORD_DEFAULT);
        $check_email = "SELECT * FROM user WHERE email='$email'";
        $sql_data = "INSERT INTO user (firstname, lastname, email, password)
        VALUES ('$firstname', '$lastname', '$email', '$passwords')";
        $check = $this->query($check_email);
        // checking if the  email is available in db   
        $count_row = $check->fetch();
        var_dump($count_row);
        // if the email is not in db then insert to the table
        if ($count_row == false) {
            $regis = $this->query($sql_data);
            var_dump($regis);
            if ($regis) {
                return TRUE;
            }
        } else {
            return FALSE;
        }
    }
}
