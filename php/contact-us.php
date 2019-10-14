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
    <h1 style="text-align: center">Conact Us </h1>
</div>

<div class="container-fluid">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-3">
            <img src="../images/about-us/directors/a%20(1%20of%201)-32.jpg" style="height: 300px"class="img-circle">
            <br>
            <br>

        </div>
        <div class="col-md-7">
            <div class="jumbotron">
                <h3 style="text-decoration: underline">Contact's</h3>
                <br>
                <p>Name : Pranto Halder Shovon</p>
                <p>Phone Number : 01913838189</p>
                <p>Email : prantohalder117@gmail.com</p>
                <p>Facebook : facebook/shovon</p>
            </div>
        </div>
      </div>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-3">
            <img src="../images/about-us/directors/bisty%20(1%20of%201)-8.jpg" style="height: 300px"class="img-circle">

        </div>
        <div class="col-md-7">
            <div class="jumbotron">
                <h3 style="text-decoration: underline">Contact's</h3>
                <br>
                <p>Name : Bristy Biswash</p>
                <p>Phone Number : 01835803581</p>
                <p>Email : bristybiswash@gmail.com</p>
                <p>Facebook : facebook/biswash</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-3">
            <img src="../images/about-us/directors/c.JPG" style="height: 300px"class="img-circle">

        </div>
        <div class="col-md-7">
            <div class="jumbotron">
                <h3 style="text-decoration: underline">Contact's</h3>
                <br>
                <p>Name : Indrajit Das</p>
                <p>Phone Number : 01751686568</p>
                <p>Email : indrojit70@gmail.com</p>
                <p>Facebook : facebook/indra.jit.37</p>
            </div>
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
