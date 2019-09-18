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

    <link rel="stylesheet" href="../css/register.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/fontawesome.css">
</head>

<body>
    <section id="containers" class="">
        <div id="form" class="col-md-5">
            <form action="" method="post" id="data" enctype="multipart/form-data">
                <div id="imagePreview"></div>
                <input type="file" name="file" id="file" class="img inputfile" />
                <label for="file"><i class="fa fa-camera"></i></label><br>
                <label for="">Full Name</label><br>
                <input type="text" name="fullname" id="" class="col-8" placeholder="Full name.." required><br>
                <label for="">Email</label><br>
                <input type="email" name="email" id="" class="col-8" placeholder="Email" required><br>
                <label for="">Password</label><br>
                <input type="password" name="password" id="" class="col-8" placeholder="Password.." required><br>
                <label for="">Role</label><br>
                <select name="role" id="" class="col-8">
                    <option value="Dancer">Dancer</option>
                    <option value="Music Artist">Music Artist</option>
                    <option value="Model">Model</option>
                    <option value="Actor">Actor/Actress</option>
                </select><br><br>
                <input type="submit" value="Pay $3" name="Register" class="btn btn-primary">
            </form>
            <p>Already have an account? <a href="http://otugeme.test/forms/login.php">Login</a></p>
        </div>
    </section>
    <script src="../js/form.js"></script>
    <script src="../js/jquery.js"></script>
    <script>
        $(function() {
            $("#file").on("change", function() {
                var files = !!this.files ? this.files : [];
                if (!files.length || !window.FileReader) return;

                if (/^image/.test(files[0].type)) {
                    var reader = new FileReader();
                    reader.readAsDataURL(files[0]);

                    reader.onloadend = function() {
                        $("#imagePreview").css("background-image", "url(" + this.result + ")");
                    }
                }
            });
        });
    </script>
</body>

</html>