<?php

// session_start();
// if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
//     header("location : log_in.php");
//     exit;
// }
// else {
// $sql = "SELECT name FROM rohit WHERE email = '$email' AND password = '$pass' ";
// $result = mysqli_query($conn, $sql);
// $num = mysqli_num_rows($result);
// $row = $result->fetch_assoc();
// $_SESSION['name']= $row["name"];
// echo '<script>alert("Welcome $_SESSION[name]")</script>';
// }

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>- ProCoding -</title>

    <link rel="icon" type="image/x-icon" href="./images/1.png">
    <link rel="stylesheet" href="./styles1.css">

</head>

<body id="bodi">
    <!-- TOP NAVBAR -->
    <div class="first">
        <nav class="navbar navbar-expand-lg p-3 mb-2 bg-dark text-white abc">
            <div class="container-fluid">
                <a class="navbar-brand text-light bg-dark" href="./index1.php">
                    <img src="./images/home.png" alt="" class="nav-img-1"></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-light bg-dark" href="./pages/html0.php">HTML</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light bg-dark" href="./pages/css0.php">CSS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light bg-dark" href="./pages/js0.php">JS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light bg-dark" href="./pages/php0.php">PHP</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light bg-dark" href="./pages/c0.php">C</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light bg-dark" href="./pages/c++0.php">C++</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light bg-dark" href="#" class="s-n" onclick="myFunction1()">About Creater</a>
                        </li>
                    </ul>

                    <img src="./images/sun.png" alt="" class="nav-img3" id="nav-img-1" onclick="myFunction3()">
                    <img src="./images/moon.png" alt="" class="nav-img3" id="nav-img-2" onclick="myFunction4()">

                    <a href="./forms/log_in.php"><button class="btn btn-outline-danger" id="hii" type="submit">Login</button></a>
                    <a href="./forms/sign_up.php"><button class="btn btn-outline-success" id="hii" type="submit">SignUp</button></a>

                </div>
            </div>
        </nav>
    </div>

    <div class="second">
        <?php
        require_once('./basics/topnavi.php');
        ?>
    </div>

    <!-- MAIN CONTENT -->
    <div class="mc-sn">
        <div class="main-cont">
            <div class="content">
                <div class="content1">
                    <h2>Welcome to <span class="head">ProCoding</span></h2><br>
                    <h3>Learn <span class="auto-type"></span></h3>
                    Confused on which course to take? I have got you covered. Browse courses and find out the best
                    course for you. ProCoding is my attempt to teach basics and those coding techniques
                    to people in short time which take people months to learn.
                </div>
                <script src="https://unpkg.com/typed.js@2.0.14/dist/typed.umd.js"></script>

                <script>
                    var typed = new Typed(".auto-type", {
                        strings: ["Web-Development", "Coding", "HTML", "JavaScript", "CSS", "Python", "PHP"],
                        typeSpeed: 80,
                        backSpeed: 50,
                        loop: true
                    })
                </script>

                <div class="content2">
                    <img src="./images/content.jpg" alt="">
                </div>
            </div>


            <center><span class="cards-head">
                    Recommended Courses
                </span></center>

            <div class="cards">
                <a href="" class="loi">
                    <div class="hoi">
                        <img src="./images/newbie.png" alt=""><br>
                        <div class="card-content">
                            <h2><b> Newbie</b></h2>
                            <p>This is for the beginners or who want to learn the basic of the coding</p>
                        </div>
                    </div>

                </a>

                <a href="" class="loi">
                    <div class="hoi">
                        <img src="./images/inter.png" alt=""><br>
                        <div class="card-content">
                            <h2><b> Intermediate</b></h2>
                            <p>For those who know the basics and want to learn more </p>
                        </div>
                    </div>
                </a>

                <a href="" class="loi">
                    <div class="hoi">
                        <img src="./images/advance.png" alt=""><br>
                        <div class="card-content">
                            <h2><b>Advanced</b></h2>
                            <p>Choose this if you want to learn all there is to learn about the language</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- SIDE NAVBAR -->
        <div class="left-nav">
            <div class="sidebar">
                <div id="sidebar-img"><img src="./images/rohit.png" alt=""></div>
                <h3>My Skills</h3>
                <ul>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                    <li>BootStrap</li>
                    <li>PHP</li>
                    <li>Tailwind CSS</li>
                    <li>C</li>
                    <li>C++</li>
                </ul>
                <a href="./images/Resume.png" target="_blank"><button>click for more info</button></a>
            </div>
            <div class="navi-img2">
                <img src="" id="navi1" alt="">
                <img src="./images/navi-close.jpg" id="navi2" class="nava" alt="" onclick="myFunction2()">
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <?php
    // require_once('./basics/footer.php')
    ?>

    <div class="foot bg-dark text-white">
        <span class="foot-img">
            <img src="./forms/1_log_in.jpg" alt="">
        </span>
        <span class="foot-txt-1">
            PROCODING
        </span>
        <div class="foot-vl"></div>
        <div class="foot-txt-2">Copyright © 2023 to Rohit Negi</div>

        <span class="favis">
            <a href="https://www.facebook.com/"><img src="./images/facebook.png" alt=""></a>
            <a href="https://www.instagram.com/"><img src="./images/insta.png" alt=""></a>
            <a href="https://www.whatsapp.com/"><img src="./images/whatsapp.png" alt=""></a>
        </span>
    </div>

    <script>
        function myFunction1() {
            document.querySelector(".sidebar").style.display = "block";
            document.querySelector("#navi1").style.display = "none";
            document.querySelector("#navi2").style.display = "block";
            // Rohit
            document.querySelector(".mc-sn").style.display = "flex";
            document.querySelector(".main-cont").style.opacity = "0.3";
        }

        function myFunction2() {
            document.querySelector(".sidebar").style.display = "none";
            document.querySelector("#navi2").style.display = "none";
            document.querySelector("#navi1").style.display = "block";
            // Rohit
            document.querySelector(".main-cont").style.width = "100vw";
            document.querySelector(".main-cont").style.opacity = "1";
        }

        function myFunction3() {
            document.querySelector('body').style.backgroundColor = "#ebeced";
            document.querySelector('.content1').style.color = "black";
            document.querySelector('.cards-head').style.color = "black";
            document.querySelector('#nav-img-1').style.display = "none";
            document.querySelector('#nav-img-2').style.display = "block";

            let x = document.querySelectorAll('.hoi')
            x[0].style.backgroundImage = "url('./images/win.png')";
            x[1].style.backgroundImage = "url('./images/win.png')";
            x[2].style.backgroundImage = "url('./images/win.png')";

            let y = document.querySelectorAll('.card-content p')
            y[0].style.color = "black";
            y[1].style.color = "black";
            y[2].style.color = "black";
        }

        function myFunction4() {
            document.querySelector('body').style.backgroundColor = "#111827";
            document.querySelector('.content1').style.color = "white";
            document.querySelector('.cards-head').style.color = "white";
            document.querySelector('#nav-img-2').style.display = "none";
            document.querySelector('#nav-img-1').style.display = "block";

            let x = document.querySelectorAll('.hoi')
            console.log(x);
            x[0].style.backgroundImage = "url('./images/10.jpg')";
            x[1].style.backgroundImage = "url('./images/10.jpg')";
            x[2].style.backgroundImage = "url('./images/10.jpg')";

            let y = document.querySelectorAll('.card-content p')
            y[0].style.color = "white";
            y[1].style.color = "white";
            y[2].style.color = "white";
        }
    </script>
</body>

</html>