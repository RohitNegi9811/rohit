<?php
require('conn.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = $_POST["name"];
  $email = $_POST["email"];
  $number = $_POST["number"];
  $pass = $_POST["password"];
  $cpass = $_POST["cpassword"];

  $check = false;

  $sql1 = "SELECT name FROM rohit WHERE number = '$number' ";
  $result1 = mysqli_query($conn, $sql1);
  $num1 = mysqli_num_rows($result1);
  $row1 = $result1->fetch_assoc();
  if ($num1 == true) {
    echo "<br><br><div class='alert alert-danger alert-dismissible fade show r_alert' role='alert'><strong>ERROR! </strong> number is already registered! <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
  }
  elseif (($pass == $cpass) && $check == false) {
    $sql = "INSERT INTO rohit (name, email, number, date, password)
      VALUES ('$name', '$email', '$number',current_timestamp(), '$pass') ";

    $result = mysqli_query($conn, $sql);
    if ($result) {
      header("location: log_in.php"); //write this on top of html
    } else {
      echo "<br><br><div class='alert alert-danger alert-dismissible fade show r_alert' role='alert'><strong>ERROR! </strong>Some error has occured, please try again after sometime!<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
    }
  } 
  else {
    echo "<br><br><div class='alert alert-danger alert-dismissible fade show r_alert' role='alert'><strong>ERROR! </strong>Please match your passwords!<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="sign_up.css">


  <a href="/BootStrap/index1.php">
    <div class="imag"><img src="1_log_in.jpg" alt=""></div>
  </a>

  <div class="center">
    <h1>Create Account</h1>
    <form action="" method="post">
      <div class="txt_field">
        <label><b>Your Name </b> <br></label>
        <input type="text" name="name" id="" placeholder="First and last name" required onfocus="this.style.boxShadow='10px 5px 15px #fcdf03'" onblur="this.style.boxShadow='0px 5px 15px white'"><br><br>
      </div>

      <div class="txt_field">
        <label><b>Email</b><br></label>
        <input type="email" name="email" id="" placeholder="Enter email" required onfocus="this.style.boxShadow='10px 5px 15px #fcdf03'" onblur="this.style.boxShadow='0px 5px 15px white'">
        <br><br>
      </div>

      <div class="txt_field">
        <label><b>Number</b><br></label>
        <input type="text" name="number" id="" placeholder="Mobile number" required onfocus="this.style.boxShadow='10px 5px 15px #fcdf03'" onblur="this.style.boxShadow='0px 5px 15px white'">
        <br><br>
      </div>

      <div class="txt_field">
        <label><b>Password</b><br></label>
        <input type="password" name="password" id="" placeholder="At least 6 characters" required>
        <br><br>
      </div>

      <div class="txt_field">
        <label><b>Confirm Password</b><br></label>
        <input type="password" name="cpassword" id="" placeholder="Type same as above" required>
        <br><br>
      </div>

      <!-- <div class="pass">Forgot Password?</div> -->
      <button type="submit">Sign up</button>
      <br><br>
      <hr>
      <div class="signup_link">
        Already have an account? <a href="log_in.php">Login</a>
      </div>
    </form>
  </div>

  </body>

</html>