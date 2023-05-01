<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C Programming</title>
    <link rel="icon" type="image/x-icon" href="./images/1.png">
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
        <div class="main-cont">
            <h3>What is C?⁣</h3>
            <ul>
                <li>Since the late 19th century, C has been a popular programming language for general-purpose use.</li>
                <li>C language was developed by Dennis M. Ritchie at bell laboratory in early 1970s</li>
                <li>Its applications are very diverse. It ranges from developing operating systems to databases and all.⁣ It is system programming language used to do low level programming (e.g., driver or kernel)</li>
                <li>Even if it’s old, it is still a very popular programming language.⁣</li>
                <li>C has also been used widely while creating iOS and Android kernels.⁣</li>
                <li>MySQL database is written using C.⁣</li>
                <li>Ruby and Pearl are mostly written using C.⁣</li>
                <li>Most part of Apache and NGINX is written using C.⁣</li>
                <li>Embedded Systems are created using C⁣</li>
            </ul>

            <h3>Why should we learn C/ Features of C?</h3>
            <ol>
                <li>As mentioned above, it is one of the most popular programming languages in the world.</li>
                <li>Learning any other popular programming language such as Python or C++ becomes a cakewalk already if you know C.</li>
                <li>C is a flexible language and that gets proven by the fact that it can be used in a variety of applications as well as technologies.</li><span id="m2"></span>
                <li>C is very fast when compared to other programming languages be it Java or Python.
                <li>C takes only significant CPU time for interpretation. That is why a lot of Python libraries such as NumPy, pandas, Scikit-learn, etc. are built using C.</li>
                <li>Being close to Machine language, some of its functions include direct access to machine-level hardware APIs.</li>
            </ol>

            <h3>C Data Types & Constants</h3><br>
            <h4>Datatype</h4>
            <p>It is the type of value which the variable holds. <br>Here, we will focus on the most basic ones:</p></li><span id="m3"></span>
            <img src="../images/c/c1.png" alt="" class="img2">

            <h3>Constants</h3>
            <ul>
                <li>When you don't want the variables you declare to get modified intentionally or mistakenly in the later part of your program by you or others, you use the const keyword (this will declare the variable as "constant", which means unchangeable and read-only).</li>
                <li>You should always declare the variable as constant when you have values that are unlikely to change, like any mathematical constant as PI.</li><span id="m4"></span>
                <li>When you declare a constant variable, it must be assigned a value.</li>
                <p>Here’s an example of how we declare a constant.</p>
                <img src="../images/c/c2.png" alt="" class="img2">
            </ul>
            
            <h3>Operators</h3>
            <p>Special symbols that are used to perform actions or operations are known as operators. They could be both unary or binary. <br>For example, the symbol asterisk (*) is used to perform multiplication in C so it is an operator and it is a binary operator. <br> This section covers all types of operators. </p>
            
            <h5>Types of operators</h5>
            <ul>
                <li>Arithmetic Operators</li>
                <li>Relational Operators</li>
                <li>Logical Operators</li>
                <li>Bitwise Operators</li>
                <li>Assignment Operators</li>
            </ul><br>
            
            <h3>C if...else statements</h3>
            <p>Sometimes, we wish to execute one set of instructions if a particular condition is met, and another set of instructions if it is not. This kind of situation is dealt with in C language using a decision control system. <br>The condition for the if statement is always enclosed within a pair of parentheses. If the condition is true, then the set of statements following the if statement will execute. And if the condition evaluates to false, then the statement will not execute, instead, the program skips that enclosed part of the code. <br>An expression in if statements are defined using relational operators. Comparing two values using relational operators allows us to determine whether they are equal, unequal, greater than, or less than. <br>If we want to execute a particular code in some situation and its vice versa /opposite/or different code if that situation doesn’t occurs then if..else statements can be used. Its all depend on the condition. If the condition returns true value the situation has occurred and the true part of code will be executed and if condition returns false value false part of the code will be executed</p>
            
            <p>Following is the <b> syntax of if-else statements:</b></p>
            <img src="../images/c/c3.png" alt="" class="img2">
            
            <p>One example where we could use the if-else statement is:</p>
            <img src="../images/c/c4.png" alt="" class="img2">
            
            <p><b>Output:</b></p><span id="m5"></span>
            <img src="../images/c/c5.png" alt="" class="img3">

            <h3>Functions</h3>
            <ul>
                <li>Functions are used to divide a large C program into smaller and less complex pieces.</li>
                <li>Function can be called multiple or several times to provide reusability and modularity to the C program.</li>
                <li>Functions are also called procedures or subroutines or methods.</li>
                <li>A function is also a piece of code that performs a specific task.</li>
            </ul> <br>
            <p><b>A function is nothing but a group of code put together and given a name and it can be called anytime without writing the whole code again and again in a program.</b>  <br>I know its syntax is a bit difficult to understand but don’t worry after reading this whole information about Functions you will know each and every term or thing related to Functions.</p><br>

            <h4>Types of functions</h4>
            <ol>
                <li><h5>Library functions:</h5></li>
                <p>Library functions are pre-defined functions in C Language. These are the functions that are included in C header files prior to any other part of the code in order to be used. <br>E.g. printf(), scanf(), etc.</p>

                <li><h5> User-defined functions:</h5></li>
                <p>User-defined functions are functions created by the programmer for the reduction of the complexity of a program. Rather, these are functions that the user creates as per the requirements of a program. <br>E.g. Any function created by the programmer.</p>
            </ol><br>

            <h4><b> Here’s the basic syntax of a function</b></h4>
            <img src="../images/c/c6.png" alt="" class="img2">

        </div>
    </div>
    <!-- FOOTER -->
    <div id="footib">
        <?php
        require_once('../basics/footer2.php')
        ?></div>
</body>

</html>