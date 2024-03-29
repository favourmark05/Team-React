<?php
require "core/init.php";
if (!$_SESSION['_id']) {
  header("location:index.php");
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Page</title>
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <section class="content">
    <div class="topImg">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
          <a class="navbar-brand text-white head" href="#">TEAM-REACT</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <!-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> -->
              </li>
              <li class="nav-item">
                <!-- <a class="nav-link" href="#">About Us</a> -->
              </li>
              <li class="nav-item">
                <a href="landingpage.php?q=logout" class="btn btn-danger">LOGOUT</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="carousel-caption d-none d-md-block ">
        <h1 class="tittle">WELCOME</h1>
        <p class="subject car">A trusted hand that you can trust</p>
      </div>
    </div>
  </section>


  <section class="welcome">
    <div class="container">
      <div class="card-deck my-5 mx-auto">
        <div class="card shadow">
          <img src="images/laptop-3265726_1920.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">TECH</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, modi.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>

        <div class="card shadow">
          <img src="images/chart-2785979_1920.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">TRAINED ANALIST</h5>
            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas, mollitia.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>

        <div class="card shadow">
          <img src="images/office-3309862_1920.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">CONTENT DEVELOPERS</h5>
            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores, impedit!</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container text-white text-center">copyright by Team-REACT</div>
  </footer>







  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="script.js"></script>
</body>

</html>