<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cascading Style Sheets</title>
    <link rel="icon" type="image/x-icon" href="./images/1.png">
    <link rel="stylesheet" href="./css-html.css">
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
                                <li>Why use CSS
                                    <hr>
                                </li>
                            </a>
                            <a href="#m3">
                                <li>Types of CSS
                                    <hr>
                                    <ul id="ul2">
                                        <a href="#m3-1"><li>inline</li></a>
                                        <a href="#m3-2"><li>internal</li></a>
                                        <a href="#m3-3"><li>external</li></a>
                                    </ul>
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
            <h3>What is CSS?</h3>
            <ul>
                <li>CSS stands for Cascading Style Sheets</li>
                <li>CSS describes how HTML elements are to be displayed on screen, paper, or in other media</li>
                <li>CSS saves a lot of work. It can control the layout of multiple web pages all at once</li>
                <li>External stylesheets are stored in CSS files</li>
            </ul><br>

            <h3>Webpage with and without CSS</h3>
            <img src="../images/css/css1.png" alt="" id="m2">

            <h3>Why use CSS</h3>
            <ol>
                <li>
                    <h4>Solves a big problem</h4>
                </li>
                <p>Before CSS, tags like font, color, background style, element alignments, border and size had to be repeated on every web page. This was a very long process. For example: If you are developing a large website where fonts and color information are added on every single page, it will be become a long and expensive process. CSS was created to solve this problem. It was a W3C recommendation.</p>

                <li>
                    <h4>Saves a lot of time</h4>
                </li>
                <p>CSS style definitions are saved in external CSS files so it is possible to change the entire website by changing just one file.</p>

                <li>
                    <h4>Provide more attributes</h4>
                </li>
                <p>CSS provides more detailed attributes than plain HTML to define the look and feel of the website.</p>
            </ol><br>

            <h3>What does CSS do</h3>
            <ul id="ul1">
                <li>You can add new looks to your old HTML documents.</li>
                <li>You can completely change the look of your website with only a few changes in CSS code.</li>
            </ul>
            
            <span id="m3-1"></span>
            <h3>Ways to add CSS</h3>
            <ul>
                <li><b class="texto">Inline</b> - by using the style attribute inside HTML elements</li>
                <li><b class="texto">Internal</b> - by using a &lt;style&gt; element in the &lt;head&gt; section</li>
                <li><b class="texto">External</b> - by using a &lt;link&gt; element to link to an external CSS file</li>
            </ul>
            <h4>Inline CSS</h4>
            <p>
            <ul class="ulq">
                <li>An inline CSS is used to apply a unique style to a single HTML element. </li>
                <li>An inline CSS uses the style attribute of an HTML element. </li>
                <li>The following example sets the text color of the &lt;h1&gt; element to blue, and the text color of the &lt;p&gt; element to red:</li>
                <span id="m3-2"></span>
                <li><img src="../images/css/css2.png" alt="" class="img2"></li>

            </ul>
            </p>

            <h4 id="m3-2">Internal CSS</h4>
            <p>
            <ul class="ulq">
                <li>An internal CSS is used to define a style for a single HTML page. </li>
                <li>An internal CSS is defined in the &lt;head&gt; section of an HTML page, within a &lt;style&gt; element. </li>
                <li>The following example sets the text color of ALL the &lt;h1&gt; elements (on that page) to blue, and the text color of ALL the &lt;p&gt; elements to red. In addition, the page will be displayed with a "powderblue" background color:</li>
                <li><img src="../images/css/css3.png" alt="" class="img2"><span id="m3-3"></span></li>
                
            </ul>
            </p>

            <h4 >External CSS</h4>
            <p>
            <ul class="ulq">
                <li>An external style sheet is used to define the style for many HTML pages. </li>
                <li>To use an external style sheet, add a link to it in the &lt;head&gt; section of each HTML page:</li>
                <li><img src="../images/css/css4.png" alt="" class="img2"></li>
            </ul>
            </p>
        </div>
    </div>
    <!-- FOOTER -->
    <div id="footib">
    <?php
    require_once('../basics/footer2.php')
    ?></div>
</body>

</html>