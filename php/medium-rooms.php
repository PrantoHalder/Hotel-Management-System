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
    <title>Welcome to Hotel Heaven Room</title>
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
        #res-level {
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
        #res-back{
            background-image: url("../images/resturant-back.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            margin-top:-20px ;
            padding-bottom: 160px;
        }
        #res-heading{
            padding-top: 30px;
        }
        #para{
            text-align: justify;
        }
        .rate{
            text-align: center;
            font-weight: bolder;
        }
        .room-type{
            font-size: 18px;
            font-weight: bolder;
        }
        .text{
            text-align: left;
        }
        .text-b{
            text-align: right;
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
                    <li class="nav-font"><a href="index.php">Home</a></li>
                    <li class="nav-font "><a href="resturant.php">RESTURANT</a></li>
                    <li class="nav-font active"><a href="rooms.php">ROOMS</a></li>
                    <li class="nav-font"><a href="about%20us.php">ABOUT US</a></li>
                    <li class="nav-font"><a href="contact-us.php">CONTACT US</a></li>
                </ul>
            </div>
        </div>
    </nav>

</div>

<div class=" container-fluid" id="res-level">
    <h1 style="text-align: center">Welcome to Hotel Heaven Rooms</h1>
</div>

<div class="container-fluid">
    <div class="row">

        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked" role="tablist">
                <li class="room-type "><a href="rooms.php">Luxurious Rooms</a></li>
                <li class="room-type active"><a href="medium-rooms.php">Medium Rooms</a></li>
                <li class="room-type"><a href="normal-rooms.php">Normal</a></li>
            </ul>
        </div>

        <div class="col-md-1">

        </div>

        <div class="col-md-8">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="slide-size item active">
                            <img src="../images/medium/2.jpeg" style="width:100%;">
                        </div>

                        <div class="slide-size item">
                            <img src="../images/medium/1.jpg"  style="width:100%;">
                        </div>

                        <div class="slide-size item">
                            <img src="../images/medium/5.jpg"  style="width:100%;">
                        </div>
                        <div class="slide-size item">
                            <img src="../images/medium/3.jpg" style="width:100%;">
                        </div>
                        <div class="slide-size item">
                            <img src="../images/medium/4.jpg" style="width:100%;">
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
    </div>
</div>

</div>
<div class="jumbotron">
    <div class="container-fluid">
        <h2 style="text-align: center">Our Special Offer is going on</h2>
        <h3 style="text-align: center">All rooms are air conditional</h3>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="thumbnail">
                <img style="height: 500px" src="../images/medium/Rooms/1.jpg"  style="width:100%">
                <div class="caption">
                    <h3>Single Bed Deluxe</h3>
                    <h4>Couples Choice</h4>
                    <p><b>Room No :302</b></p>
                    <p class="rate">Price&nbsp;:&nbsp;1500&nbsp;TK</p>
                    <div class="text btn btn-info">
                        <a href="details-1.php"><p>Details</p></a>
                    </div>
                    <div class="text-b btn btn-info">
                        <a href="booking.php"><p>Booking</p></a>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <img style="height: 500px" src="../images/medium/Rooms/2.jpg"  style="width:100%">
                <div class="caption">
                    <h3>Single Bed Super Deluxe</h3>
                    <h4>Couples Choice</h4>
                    <p><b>Room No :402</b></p>
                    <p class="rate">Price&nbsp;:&nbsp;2000&nbsp;TK</p>
                    <div class="text btn btn-info">
                        <a href="details-2.php"><p>Details</p></a>
                    </div>
                    <div class="text-b btn btn-info">
                        <a href="booking.php"><p>Booking</p></a>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <img style="height: 500px" src="../images/medium/Rooms/3.jpg"  style="width:100%">
                <div class="caption">
                    <h3>Double Bed Super Deluxe</h3>
                    <h4>Family Choice</h4>
                    <p><b>Room No :502</b></p>
                    <p class="rate">Price&nbsp;:&nbsp;2100&nbsp;TK</p>
                    <div class="text btn btn-info">
                        <a href="details-3.php"><p>Details</p></a>
                    </div>
                    <div class="text-b btn btn-info">
                        <a href="booking.php"><p>Booking</p></a>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="thumbnail">
                <img style="height: 500px" src="../images/medium/Rooms/4.jpg"  style="width:100%">
                <div class="caption">
                    <h3>Double Bed Super Deluxe</h3>
                    <h4>Family Choice</h4>
                    <p><b>Room No :602</b></p>
                    <p class="rate">Price&nbsp;:&nbsp;2300&nbsp;TK</p>
                    <div class="text btn btn-info">
                        <a href="details-4.php"><p>Details</p></a>
                    </div>
                    <div class="text-b btn btn-info">
                        <a href="booking.php"><p>Booking</p></a>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <img style="height:500px" src="../images/medium/Rooms/6.jpg" style="width:100%">
                <div class="caption">
                    <h3>Double Bed Super Deluxe</h3>
                    <h4>Family Choice</h4>
                    <p><b>Room No :702</b></p>
                    <p class="rate">Price&nbsp;:&nbsp;2500&nbsp;TK</p>
                    <div class="text btn btn-info">
                        <a href="details-5.php"><p>Details</p></a>
                    </div>
                    <div class="text-b btn btn-info">
                        <a href="booking.php"><p>Booking</p></a>
                    </div>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <img style="height: 500px" src="../images/medium/Rooms/7.jpg"  style="width:100%">
                <div class="caption">
                    <h3>Single Bed Super Deluxe</h3>
                    <h4>Couples</h4>
                    <p><b>Room No :703</b></p>
                    <p class="rate">Price&nbsp;:&nbsp;2800&nbsp;TK</p>
                    <div class="text btn btn-info">
                        <a href="details-6.php"><p>Details</p></a>
                    </div>
                    <div class="text-b btn btn-info">
                        <a href="booking.php"><p>Booking</p></a>
                    </div>
                </div>
                </a>
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
