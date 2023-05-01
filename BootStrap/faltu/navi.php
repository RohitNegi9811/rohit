<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

  <style>
    .second {
      display: none;
    }

    .navbar {
      position: fixed;
      top: 0;
      width: 100%;
      padding-bottom: 20px;
    }

    body {
      background: #454f5d;
    }

    .whole {
      display: flex;
      color: white;
    }

    #hii {
      margin-right: 115px;
    }

    .nav-ul {
      margin-left: 100px;
    }

    #nav-img {
      height: 38px;
      width: 45px;
      margin: 0px;
      margin-right: 85px;
      margin-left: 45px;
    }

    .nav-item {
      margin-left: 75px;
      font-size: 18px;
    }

    .nav-item:hover {
      text-decoration: underline;
      color: aquamarine;
    }

    #hii {
      margin-right: 35px;
    }

    @media screen and (max-width: 413px) {
      .second {
        display: block;
      }

      .main {
        display: none;
      }
    }
  </style>
</head>

<body>

  <div class="main">
    <nav class="navbar navbar-expand-lg bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand text-light bg-dark" href="../index1.php"><img src="../images/home.png" alt="" id="nav-img"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-ul">
            <li class="nav-item">
              <a class="nav-link text-light bg-dark" href="../pages/html0.php">HTML</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-light bg-dark" href="../pages/css0.php">CSS</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-light bg-dark" href="../pages/js0.php">JS</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-light bg-dark" href="../pages/php0.php">PHP</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-light bg-dark" href="../pages/c0.php">C</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-light bg-dark" href="../pages/c++0.php">C++</a>
            </li>
          </ul>
          <a href="../forms/log_in.php"><button class="btn btn-outline-danger" id="hii" type="submit">Login</button></a>
          <a href="../forms/sign_up.php"><button class="btn btn-outline-success" id="hii" type="submit">SignUp</button></a>

          <!-- <form class="d-flex" role="search" action="https://www.google.com/search" method="get">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form> -->
        </div>
      </div>
    </nav>
  </div>

  <div class="second">
    <nav class="navbar bg-dark" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand text-light bg-dark" href="../index1.php"><img src="./images/home.png" alt="" id="nav-img"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-ul">
            <li class="nav-item">
              <a class="nav-link text-light bg-dark" href="../pages/html0.php">HTML</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-light bg-dark" href="../pages/css0.php">CSS</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-light bg-dark" href="../pages/js0.php">JS</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-light bg-dark" href="../pages/php0.php">PHP</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-light bg-dark" href="../pages/c0.php">C</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-light bg-dark" href="../pages/c++0.php">C++</a>
            </li>
          </ul>
          <a href="../forms/log_in.php"><button class="btn btn-outline-danger" id="hii" type="submit">Login</button></a>
          <a href="../forms/sign_up.php"><button class="btn btn-outline-success" id="hii" type="submit">SignUp</button></a>

          <!-- <form class="d-flex" role="search" action="https://www.google.com/search" method="get">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form> -->
        </div>
      </div>
    </nav>
  </div>

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->

</body>

</html>