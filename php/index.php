<?php
/**
 * Created by PhpStorm.
 * User: Indrajit
 * Date: 1/6/2018
 * Time: 11:49 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to Hotel Heaven</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">

    <link  rel="stylesheet" href="../css/header.css">
    <link  rel="stylesheet" href="../css/index-css.css">



    <style>
        footer {
            background-color: black;
            color: azure;
            text-align: center;
            height: 100px;
        }
        #footer-p {
            padding-top: 38px;
        }
        #level {
            height: 184px;
            background-image: url("../images/body-level.png");
            background-size: contain;
        }
        .nav-font {
            font-size: 20px;
        }
        .log-btn{
            font-size: 20px;
        }
    </style>

</head>
<body>
<div class="size">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color: rgba(225, 225, 225, 0.73)">Hotel Heaven</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="nav-font active"><a href="index.php">Home</a></li>
                    <li class="nav-font"><a href="resturant.php">RESTURANT</a></li>
                    <li class="nav-font"><a href="rooms.php">ROOMS</a></li>
                    <li class="nav-font"><a href="about%20us.php">ABOUT US</a></li>
                    <li class="nav-font"><a href="contact-us.php">CONTACT US</a></li>
                </ul>

            </div>
        </div>
    </nav>

</div>
<div class=" container-fluid" id="level">
<h1 style="text-align: center">Welcome to Hotel Heaven </h1>
</div>
<div class=" index-body">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="slide-size item active">
                <img src="../images/luxurious/a%20(1).jpeg" alt="Los Angeles" style="width:100%;">
            </div>

            <div class="slide-size item">
                <img src="../images/luxurious/a%20(1).jpg" alt="Chicago" style="width:100%;">
            </div>

            <div class="slide-size item">
                <img src="../images/luxurious/a%20(2).jpg" alt="New york" style="width:100%;">
            </div>
            <div class="slide-size item">
                <img src="../images/luxurious/a%20(3).jpg" alt="New york" style="width:100%;">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
</div>

    <footer>
        <p id="footer-p"><sup>@</sup>Copyrights and<sup>TM</sup>,&nbsp; All rights reserved  Hotel Heaven  Inc. Ltd..&nbsp;( <i id="demo"></span> </i> )&nbsp;&nbsp;<b id="time"></b></p>

    </footer>

    <script>
        document.getElementById("demo").innerHTML = Date();
    </script>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</html>
