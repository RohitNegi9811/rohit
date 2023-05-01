<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: #454f5d;
            margin: 0;
        }

        .left-nav {
            display: flex;
            margin-top: 84px;
        }

        .sidebar {
            background-color: black;
            height: 65rem;
            width: 13vw;
            padding-top: 50px;
            line-height: 50px;
            color: white;
            margin-top: -8px;
            position: fixed;
        }

        .sidebar li {
            padding-bottom: 25px;
            list-style: none;
            font-size: 25px;
        }

        .sidebar li:hover {
            padding-left: 10px;
        }

        @media screen and (max-width: 391px) {

            .sidebar {
                padding-top: 35px;
                line-height: 25px;
            }

            .sidebar li {
                font-size: 8px;
                margin-left: -30px;
            }

            .sidebar li:hover {
                padding-left: 3px;
            }
        }
    </style>
</head>

<body>
    <div class="left-nav">
        <div class="sidebar">
            <nav>
                <ul>
                    <b>
                        <li>Introduction
                            <hr>
                        </li>
                        <li>Working
                            <hr>
                        </li>
                        <li>Basics
                            <hr>
                        </li>
                        <li>Code
                            <hr>
                        </li>
                        <li>Conclusion
                            <hr>
                        </li>
                    </b>
                </ul>
            </nav>
        </div>
    </div>

</body>

</html>