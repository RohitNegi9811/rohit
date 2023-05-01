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

  <link rel="stylesheet" href="style.css">

  <style>

  </style>
</head>

<body>
  <?php
  require('navi.php');
  require('forms/conn.php');
  ?>
  <div class="whole">

    <div class="navi1">
      <ol>
        <li>HOME</li>
        <li>ABOUT</li>
        <li>My Intro</li>
        <li>CV</li>
      </ol>
    </div>

    <div class="main">

      <div class="content">
        Hii this is the content of my website.
      </div>

      <div class="cards">
        <a href="" class="loi">
          <div id="hoi">
            <img src="2.jpg" alt=""><br>
            <div class="card-content">
              <h2>Product 1</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac libero eu odio lobortis condimentum.</p>
            </div>
          </div>

        </a>

        <a href="" class="loi">
          <div id="hoi">
            <img src="2.jpg" alt=""><br>
            <div class="card-content">
              <h2>Product 2</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac libero eu odio lobortis condimentum.</p>
            </div>
          </div>
        </a>

        <a href="" class="loi">
          <div id="hoi">
            <img src="2.jpg" alt=""><br>
            <div class="card-content">
              <h2>Product 3</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac libero eu odio lobortis condimentum.</p>
            </div>
          </div>
        </a>


        <a href="" class="loi">
          <div id="hoi">
            <img src="2.jpg" alt=""><br>
            <div class="card-content">
              <h2>Product 4</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac libero eu odio lobortis condimentum.</p>
            </div>
          </div>
        </a>
      </div>
    </div>

  </div>



</body>

</html>