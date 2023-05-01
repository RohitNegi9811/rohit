<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C++ Programming</title>
    <link rel="icon" type="image/x-icon" href="../images/1.png">
    <link rel="stylesheet" href="./c-c.css">
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
                                <li>Data Types
                                    <hr>
                                </li>
                            </a>
                            <a href="#m3">
                                <li>Constants
                                    <hr>
                                </li>
                            </a>
                            <a href="#m4">
                                <li>Operators
                                    <hr>
                                </li>
                            </a>
                            <a href="#m5">
                                <li>Functions
                                    <hr>
                                </li>
                            </a>
                        </b>
                    </ul>
                </nav>
            </div>

        </div>
        <div class="main-cont">
            <h3>What is C++?</h3>
            <ul>
                <li>C++ was developed by Bjarne Stroustrup, as an extension to the C language.</li>
                <li>Despite being an 80s creation, C++ has been a popular programming language throughout these years.</li>
                <li>C++ is a cross-platform language that can be used to create high-performance applications and software systems.</li>
                <li>C++ is very close to the hardware making it comparatively easy for programmers to give the instructions directly to the system without any intermediary giving programmers a high level of control over system resources and memory.</li>
            </ul><br>

            <h3>Why should we learn C++/ Features of C++?</h3>
            <ul>
                <li>C++ is one of the world's most popular programming languages.</li>
                <li>In today's operating systems, GUIs, and embedded systems, C++ is widely used.</li>
                <li>It is one of the most popular programming languages for its object-orientedness. C++ is an object-oriented programming language that gives a clear structure to programs and allows code to be reused, lowering development costs.</li>
                <li>With C++, you can develop applications or heavy games that can run on different platforms.</li>
                <li>As C++ is close to other programming languages such as C# and Java, which makes it easy for programmers to switch to C++ or vice versa while it is actually very easy to learn.</li>
            </ul><br>

            <h3>How is it different from C?</h3>
            <ul>
                <li>The syntax of C++ is almost identical to that of C, as C++ was developed as an extension of C.</li>
                <li>In contrast to C, C++ supports classes and objects, while C does not.</li>
            </ul><br>

            <h3>Basic Structure & Syntax</h3>
            <p>Programming in C++ involves following a basic structure throughout. To understand that basic structure, the first program we learned writing in C++ will be referred to. </p><span id="m2"></span>
            <img src="../images/c++/c++1.png" alt="" class="img2">

            <h3>C++ Data Types & Constants</h3><br>
            <h4>C++ Data Types</h4>
            <p>Data types define the type of data a variable can hold; for example, an integer variable can hold integer data, a character can hold character data, etc. <br> Data types in C++ are categorized into three groups:</p>

            <h5>Built-in data types </h5>
            <p>These data types are pre-defined for a language and could be used directly by the programmer. <br>Examples are: Int, Float, Char, Double, Boolean</p>

            <h5>User-defined data types</h5>
            <p>These data types are defined by the user itself. <br>Examples are: Class, Struct, Union, Enum</p>

            <h5>Derived data types </h5>
            <p>These data types are derived from the primitive built-in data types. <br>Examples are: Array, Pointer, Function</p><br>
            <p>Some of the popular built-in data types and their applications are:</p><span id="m3"></span>
            <img src="../images/c++/c++2.png" alt="" class="img2">

            <h3>C++ Constants</h3>
            <p>Constants are unchangeable; when a constant variable is initialized in a program, its value cannot be changed afterwards.</p>
            <img src="../images/c++/c++3.png" alt="" class="img2">
            <span id="m4"></span>
            <p><b>OUTPUT:</b></p>
            <img src="../images/c++/c++4.png" alt="" class="img3">

            <h3>C++ Operators</h3>
            <p>Special symbols that are used to perform actions or operations are known as operators. They could be both unary or binary. <br>For example, the symbol + is used to perform addition in C++ when put in between two numbers, so it is a binary operator. There are different types of operators. They are as follows:</p><br>

            <h4>Arithmetic Operators</h4>
            <img src="../images/c++/c++5.png" alt="" class="img4">

            <h4>Relational Operators</h4>
            <img src="../images/c++/c++6.png" alt="" class="img4">

            <h4>Logical Operators</h4>
            <img src="../images/c++/c++7.png" alt="" class="img4">

            <h4>Bitwise Operators</h4>
            <img src="../images/c++/c++8.png" alt="" class="img4">

            <h4>Assignment Operators</h4>
            <span id="m5"></span>
            <img src="../images/c++/c++9.png" alt="" class="img2">

            <h3>Functions</h3>
            <p>Functions are the main part of top-down structured programming. We break the code into small pieces and make functions of that code. Functions could be called multiple or several times to provide reusability and modularity to the C++ program. <br><br>Functions are also called procedures or subroutines or methods and they are often defined to perform a specific task. And that makes functions a group of code put together and given a name that can be called anytime without writing the whole code again and again in a program.</p>

            <h4>Advantages of Functions</h4>
            <ul>
                <li>The use of functions allows us to avoid re-writing the same logic or code over and over again.</li>
                <li>With the help of functions, we can divide the work among the programmers.</li>
                <li>We can easily debug or can find bugs in any program using functions.</li>
                <li>They make code readable and less complex.</li>
            </ul>

            <h4>Types of functions</h4><br>
            <h5>Library functions:</h5>
            <p>Library functions are pre-defined functions in C++ Language. These are the functions that are included in C++ header files prior to any other part of the code in order to be used. <br>E.g. sqrt(), abs(), etc.</p>

            <h5>User-defined functions:</h5>
            <p>User-defined functions are functions created by the programmer for the reduction of the complexity of a program. Rather, these are functions that the user creates as per the requirements of a program. <br>E.g. Any function created by the programmer.</p> <br>

            <h4>Example of a function for swapping two numbers:</h4>
            <img src="../images/c++/c++10.png" alt="" class="img2"><br>

            <h4><b>Output:</b></h4>
            <img src="../images/c++/c++11.png" alt="" class="img3">
        </div>
    </div>
    <!-- FOOTER -->
    <div id="footib">
        <?php
        require_once('../basics/footer2.php')
        ?></div>
</body>

</html>