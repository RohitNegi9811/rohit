<?php
require('./conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $email = $_POST["email"];
  $pass = $_POST["password"];

  $sql = "SELECT * FROM rohit WHERE email = '$email' AND password = '$pass' ";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  if ($num == 1) {
    $login = true;
    echo "<br><br><div class='alert alert-success alert-dismissible fade show r_alert' role='alert'><strong>SUCCESS! </strong>You  are logged in!<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";

    $sql = "SELECT name FROM rohit WHERE email = '$email' AND password = '$pass' ";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);  
    $row = $result->fetch_assoc();


    session_start();
    $_SESSION['loggedin']= true;
    $_SESSION['email']= $email;
    $_SESSION['name']= $row["name"];
    header("location: /BootStrap/index1.php");

  }
  else {
    echo "<br><br><div class='alert alert-danger alert-dismissible fade show r_alert' role='alert'><strong>ERROR! </strong>Please check your credentials!<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
  }
  
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

    <link rel="stylesheet" href="log_in.css">


  <a href="/BootStrap/index1.php"><div class="imag"><img src="1_log_in.jpg" alt=""></div></a>

  <div class="center">
    <h1>Login</h1>
    <form action="" method="post">
       <div class="txt_field">
        <label><b>Enter your Email ID</b> <br></label>
        <input type="email" name="email" id="" placeholder="Enter email" required onfocus="this.style.boxShadow='10px 5px 15px #fcdf03'" onblur="this.style.boxShadow='0px 5px 15px white'"><br><br>
       </div>
       <div class="txt_field">
        <label><b>Password</b><br></label>
        <input type="password" name="password" id="" placeholder="Enter password" required onfocus="this.style.boxShadow='10px 5px 15px #fcdf03'" onblur="this.style.boxShadow='0px 5px 15px white'">
        <br><br>
       </div>
       <!-- <div class="pass">Forgot Password?</div> -->
       <button type="submit">Login</button>
       <br><br><hr>
       <div class="signup_link">
        Not a Member? <a href="/BootStrap/forms/sign_up.php">Signup</a>
       </div>
    </form>
  </div>

</body>
</html>