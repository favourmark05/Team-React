<?php
class logout
{
    public function user_logout(Type $var = null)
    {
        $_SESSION['login'] = false;
        session_destroy();  
    }
    
}