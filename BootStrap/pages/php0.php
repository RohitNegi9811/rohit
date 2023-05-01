<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
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
                                <li>Data Types
                                    <hr>
                                </li>
                            </a>
                            <a href="#m3">
                                <li>Statements
                                    <hr>
                                </li>
                            </a>
                            <a href="#m4">
                                <li>Functions
                                    <hr>
                                </li>
                            </a>
                            <a href="#m5">
                                <li>OOP
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
            <h3>PHP Overview</h3>
            <p>PHP is a server-side scripting language, which is used to manage dynamic web pages, databases and build websites with features like session tracking and e-commerce. On a day of 1995, Rasmus Lerdorf unleashed the first version of “Hypertext Preprocessor” also known as the PHP language. It is also integrated with several popular databases like MySQL, PostgreSQL, Microsoft SQL Server, Oracle etc.</p>

            <h3>Uses of PHP</h3>
            <p>PHP can perform several system functions like opening files, CRUD operations on data stores, general-purpose scripting, etc. Besides system operations, there are also other uses like</p>
            <ul>
                <li>Handling Forms: PHP can handle form operations. It can gather data, save data to a file and send data through emails.</li>
                <li>Database Operations: PHP can also create, read, update and delete elements in your database.</li>
                <li>Encryption: It can perform advanced encryption and encrypt data for you.</li>
                <li>Dynamic Page Content: It can generate dynamic page content.</li>
            </ul>

            <h3>Basic Syntax PHP</h3>
            <p>A PHP script can be written anywhere inside the HTML document. A PHP script starts with &lt;?php tag and ends with ?>. We can write our logic inside this tag and it will be executed accordingly.</p>
            <img src="../images/php/php1.png" alt="" id="m-2">

            <h3>Displaying output in php</h3>
            <p>In php,Output is displayed on the browser using echo as follows:</p>
            <span id="m2"></span>
            <img src="../images/php/php2.png" alt="" id="m-2">

            <h3>Data Types in PHP</h3>
            <h4>PHP DataTypes</h4>
            <p>Data type specifies the type of value a variable requires to do various operations without causing an error. By default, PHP provides the following built-in data types:</p>
            <ul>
                <li>String</li>
                <li>Integer</li>
                <li>Float</li>
                <li>Boolean</li>
                <li>Array</li>
                <li>NULL</li>
            </ul>
            <ol>
                <li>
                    <h5>String</h5>
                </li>
                <p>A string is a sequence of characters that holds letters and numbers. It can be anything written inside single or double quotes. </p>
                <img src="../images/php/php3.png" alt="" class="img2">

                <li>
                    <h5>Integer</h5>
                </li>
                <p>An integer is a non-decimal number typically ranging between -2,147,483,648 and 2,147,483,647.</p>
                <img src="../images/php/php4.png" alt="" class="img2">

                <li>
                    <h5>Float</h5>
                </li>
                <p>A float is a number with a decimal point. It can be an exponential number or a fraction.</p>
                <img src="../images/php/php5.png" alt="" class="img2">

                <li>
                    <h5>Boolean</h5>
                </li>
                <p>A Boolean represents two values: True or False.</p>
                <img src="../images/php/php6.png" alt="" class="img2">

                <li>
                    <h5>Array</h5>
                </li>
                <p>Array is a collection of similar data elements stored in a single variable.</p>
                <img src="../images/php/php7.png" alt="" class="img2">

                <li>
                    <h5>NULL</h5>
                </li>
                <p>Null is a special data type with only one value which is NULL. In PHP, if a variable is created without passing a value, it will automatically assign itself a value of NULL.</p>
                <img src="../images/php/php8.png" alt="" class="img2">
                <span id="m3"></span>
            </ol>

            <h3>PHP Conditional & Iterative Statements</h3><br>
            <h4>PHP Conditional Statements</h4>
            <p>Conditional Statements are used to perform actions based on different conditions. Sometimes when we write a program, we want to perform some different actions for different actions. We can solve this by using conditional statements. <br>
            <b>In PHP we have these conditional statements:</b></p>
            <ol>
                <li>if Statement.</li>
                <li>if-else Statement</li>
                <li>If-elseif-else Statement</li>
                <li>Switch statement</li>
            </ol><br>

            <h4>PHP Iterative Statements</h4>
            <p>terative statements are used to run same block of code over and over again for a certain number of times. <br>
            <b>In PHP, we have the following loops:</b></p>
            <ol> <span id="m4"></span>
                <li>while Loop</li>
                <li>do-while Loop</li>
                <li>for Loop</li>
                <li>foreach loop</li>
            </ol>

            <h3>Function in PHP</h3>
            <p>Function arguments are variables of some supported data type that are processed within the body of the function. It can take input as an argument and return value. 
            <br> PHP has more than 1000 built-in functions, and in addition, you can also create your own functions. </p>

            <h4>Advantages:</h4>
            <ul>        
                <li>Functions reduce the complexity of a program and give it a modular structure.</li>
                <li>A function can be defined only once and called many times. </li>
                <li>It saves a lot of code writing because you don't need to write the same logic multiple times, you can write the logic once and reuse it. </li>
            </ul>

            <h4>User Defined Functions:</h4>
            <p>Apart from built-in functions, We can also create our own functions and call them easily. A user-defined function looks something like this:</p>
            <img src="../images/php/php9.png" alt="" class="img2">
            <p><b> Note: </b>A function name should only start with letters and underscore only. It can’t start with numbers and special symbols. <br>Example: </p>
            <span id="m5"></span>
            <img src="../images/php/php10.png" alt="" class="img2">

            <h3>PHP OOPS consistes of:</h3>
            <ul>
                <li>Classes</li>
                <li>Objects</li>
                <li>Access Modifiers</li>
                <li>Constructors and Destructors</li>
                <li>Inheritance</li>
                <li>Interface</li>
                <li>Class Constants</li>
                <li>Static Properties</li>
            </ul>
            
            <h3>Types of Superglobal variables</h3>
            <ul>
                <li>$GLOBALS</li>
                <li>$_SERVER</li>
                <li>$_REQUEST</li>
                <li>$_POST</li>
                <li>$_GET</li>
                <li>$_COOKIE</li>
                <li>$_SESSION</li>
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