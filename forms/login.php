<?php
require_once '../core/init.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Next Celebrity</title>

    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/fontawesome.css">
</head>

<body id="login">
    <section id="containers" class="">
        <div id="form" class="col-md-5">
            <form action="" method="post" id="data">
                <label for="">Email</label><br>
                <input type="email" name="email" id="" class="col-8" placeholder="Email" required><br>
                <label for="">Password</label><br>
                <input type="password" name="password" id="" class="col-8" placeholder="Password.." required><br><br>
                <input type="submit" value="Login" name="login" class="btn btn-primary">
            </form>
            <p>Dont have an account? <a href="http://otugeme.test/forms/register.php">Register</a></p>
        </div>
    </section>
    <script src="../js/form.js"></script>
    <script src="../js/jquery.js"></script>

</body>

</html>