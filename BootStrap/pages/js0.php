<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript</title>
    <link rel="icon" type="image/x-icon" href="./images/1.png">
    <link rel="stylesheet" href="./js-php.css">

</head>

<body>
    <span id="m1"></span>
    <?php
    // require_once('../basics/navi.php');
    require_once('../basics/nv.php');
    ?>
    <div class="whole">
        <div class="left-nav">
            <div class="sidebar">
                <nav>
                    <ul>
                        <b>
                            <a href="#m1">
                                <li>Introduction
                                    <hr>
                                </li>
                            </a>
                            <a href="#m2">
                                <li>How to use JS
                                    <hr>
                                </li>
                            </a>
                            <a href="#m3">
                                <li>Variables in JS
                                    <hr>
                                </li>
                            </a>
                            <a href="#m4">
                                <li>JS Objects
                                    <hr>
                                </li>
                            </a>
                            <a href="#m5">
                                <li>DOM in JS
                                    <hr>
                                </li>
                            </a>
                            <!-- <a href="#m4">
                                <li>Code
                                    <hr>
                                </li>
                            </a> -->
                        </b>
                    </ul>
                </nav>
            </div>

        </div>
        <span id="m1"></span>
        <div class="main-cont">
            <h3>What is JavaScript?</h3>
            <ul>
                <li>JavaScript is a lightweight, OOP language.</li>
                <li>It is a scripting language for web pages.</li>
                <li>It is used to add interactivity and dynamic effects to web pages.</li>
                <li>“.js” is the extension.</li>
                <li>Nowadays used in server-side development.</li>
                <li>JS Frontend Frameworks: React, Angular, Vue.</li>
                <li>JS Backend Frameworks: Express, Node.</li>
            </ul><br>
            <h3>How to execute JavaScript?</h3>
            <p>JavaScript can be executed right inside one’s browser. You can open the JS console and start writing JS there. <br>
                Another way to execute JS is a runtime like Node.js which can be installed and used to run JavaScript code. <br>
                Yet another way to execute JavaScript is by inserting it inside the &lt;script&gt; tag of an HTML document.</p> <br>

            <h3>Getting Started with JavaScript</h3>
            <p>To start using JavaScript, you'll need a text editor and a web browser. There are many text editors available, such as Sublime Text, Atom, and Visual Studio Code, which are all popular choices among developers.<br><span id="m2"></span>
                Once you have a text editor set up, you can start writing JavaScript code. To do this, you'll need to create a new file with a .js extension and then type your code into the file. You can then save the file and open it in your web browser to see the results.</p><br>

            <h3>How to use JavaScript</h3><br><span id="m3"></span>
            <video width="640" height="360" controls id="vid">
                <source src="../images/js/vid.mp4" type="video/mp4">
            </video>

            <h3>Variables in JavaScript</h3><br>
            <h4>What are Variables?</h4>
            <p>In JavaScript, variables are used to store data. They are an essential part of any programming language, as they allow you to store, retrieve, and manipulate data in your programs. <br>
                There are a few different ways to declare variables in JavaScript, each with its own syntax and rules. In this blog post, we'll take a look at the different types of variables available in JavaScript and how to use them.</p>

            <h4>Declaring Variables</h4>
            <p>To declare a variable in JavaScript, you use the "var" keyword followed by the name of the variable. For example:</p>
            <img src="../images/js/js1.png" alt="" class="img2">

            <h4>Data Types</h4>
            <p>In JavaScript, there are several data types that you can use to store different types of data. Some common data types include:</p>
            <ul>
                <li>Numbers (e.g. 10, 3.14)</li>
                <li>Strings (e.g. "hello", 'world')</li>
                <li>Booleans (e.g. true, false)</li>
                <li>Arrays (e.g. [1, 2, 3])</li>
                <li>Objects (e.g. { name: "John", age: 30 })</li>
            </ul>

            <h3>JavaScript Basics</h3>
            <ul>
                <li>If else conditionals</li>
                <li>If else ladder</li>
                <li>Switch case</li>
                <li>Ternary Operator</li><span id="m4"></span>
                <li>For Loops</li>
                <li>While Loop</li>
                <li>Functions</li>
            </ul>

            <h3>JavaScript Objects</h3>
            <ul>
                <li>Strings</li>
                <li>Arrays</li>
                <li>Methods</li>
                <li>Loops with Arrays</li>
                <li>Map, Filter and Reduce</li><span id="m5"></span>
                <li>Date</li>
                <li>Math</li>
                <li>Number</li>
                <li>Boolean</li>
            </ul>

            <h3>Document Object Model</h3>
            <ul>
                <li>Window Object</li>
                <li>Document Object</li>
                <li>getElementbyId</li>
                <li>getElementsByClassName</li>
                <li>getElementsByName</li>
                <li>getElementsByTagName</li>
                <li>innerHTML</li>
                <li>outerHTML</li>
            </ul>

            <h3>OOPS in JavaScript</h3>
            <ul>
                <li>Class</li>
                <li>Objects</li>
                <li>Constructor</li>
                <li>Static Method</li>
                <li>Encapsulation</li>
                <li>Inheritance</li>
                <li>Polymorphism</li>
                <li>Abstraction</li>
            </ul>
        </div>
    </div>
    <!-- FOOTER -->
    <div id="footib">
        <?php
        require_once('../basics/footer2.php')
        ?></div>
</body>

</html>