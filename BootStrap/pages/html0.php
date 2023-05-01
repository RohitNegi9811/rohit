<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML</title>
    <link rel="icon" type="image/x-icon" href="../images/1.png">
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
                                <li>Working
                                    <hr>
                                </li>
                            </a>
                            <a href="#m3">
                                <li>Basics
                                    <hr>
                                </li>
                            </a>
                            <a href="#m4">
                                <li>Code
                                    <hr>
                                </li>
                            </a>
                        </b>
                    </ul>
                </nav>
            </div>

        </div>
        <div class="main-cont">
            <h3>What is HTML?</h3>
            <ul>
                <li>HTML is an initialism for "HyperText Markup Language".</li>
                <li>It is the language of the web.</li>
                <li>It is used to create websites.</li>
                <li>It is used to define a page layout, meaning it is a barebone page structure.</li>
                <li>HTML is used for making pages of the website also called webpages that we see on the internet</li>
                <li>The set of tags is written in HTML Document.</li>
                <li>".html" or ".htm" is the extension.</li>
            </ul><br>

            <h3>Features of HTML</h3>
            <ul>
                <li>It is platform-independent.</li>
                <li>Images, videos, and audio can be added to a web page.</li>
                <li>Hypertext can be added to the text.</li>
                <li>It is a markup language.</li>
                <li>It is interpreted language</li>
            </ul><br>

            <h3>A beautiful analogy to understand HTML:</h3>
            <img src="../images/html/html1.png" alt="" id="m2">

            <h3 id="">HTML Working</h3>
            <p>When we want to access any information on the internet we search that on a web browser. The web browser gets all the content from the web servers. This content is stored in the webservers in the form of an HTML document.<br>

                An HTML document is first written with some tags in any code editor or your choice of a text editor and then saved with the “ .html ” extension. After this, the browser interprets the HTML document, reads it, and renders a web page.</p>

            <h3>Basic HTML tags:</h3>
            <img src="../images/html/html3.png" alt="" class="img2" id="m3">

            <h3>A basic HTML document:</h3>
            <img src="../images/html/html2.png" alt="" class="img2">
            <p>
            <ul>
                <li>
                    <b class="texto">&lt;html&gt;</b> : Every HTML code must be enclosed between basic HTML tags. It begins with <b class="texto">&lt;html&gt;</b> and ends with <b class="texto">&lt;html&gt;</b> tag.
                </li><br>

                <li>
                    <b class="texto">&lt;head&gt;</b>: The head tag comes next which contains all the header information of the web page or documents like the title of the page and other miscellaneous information. This information is enclosed within the head tag which opens with <b class="texto">&lt;head&gt;</b> and ends with <b class="texto">&lt;head&gt;</b>. The contents will of this tag will be explained in the later sections of the course.
                </li><br>

                <li>
                    <b class="texto">&lt;title&gt;</b>: We can mention the title of a web page using the <b class="texto">&lt;title&gt;</b> tag. This is header information and hence is mentioned within the header tags. The tag begins with <b class="texto">&lt;title&gt;</b> and ends with <b class="texto">&lt;title&gt;</b>.
                </li><br>

                <li>
                    <span id="m4"></span>
                    <b class="texto">&lt;body&gt;</b>: Next step is the most important of all the tags we have learned so far. The body tag contains the actual body of the page which will be visible to all the users. This opens with <b class="texto">&lt;body&gt;</b> and ends with <b class="texto">&lt;body&gt;</b>. All content enclosed within this tag will be shown on the web page be it writings or images or audio or videos or even links. We will see later in the section how using various tags we may insert mentioned contents into our web pages.
                </li><br>
            </ul>
            </p>
            <h3>A basic HTML codes:</h3>
            <img src="../images/html/html4.png" alt="" class="img2">
            <img src="../images/html/html5.png" alt="" class="img2">
        </div>
    </div>
    <!-- FOOTER -->
    <div id="footib">
        <?php
        require_once('../basics/footer2.php')
        ?></div>
</body>

</html>