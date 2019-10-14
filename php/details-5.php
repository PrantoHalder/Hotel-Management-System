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
    <title>Welcome to Hotel Heaven Room Details</title>
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
        .text-b{
            text-align: right;
        }
        .image {
            width: -moz-available;
        }
        .img-para{
            text-align: center;
            font-weight: bolder;
        }
        #room-description{
            text-align:justify;
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
    <h1 style="text-align: center">Welcome to Hotel Heaven Room Details</h1>
</div>

<div class="container-fluid">
    <div class="row">

        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked" role="tablist">
                <li class="room-type active"><a href="rooms.php">Luxurious Rooms</a></li>
                <li class="room-type"><a href="medium-rooms.php">Medium Rooms</a></li>
                <li class="room-type"><a href="normal-rooms.php">Normal</a></li>
            </ul>
        </div>
        <div class="col-md-2">

        </div>


        <div class="col-md-7">
            <img class="image" src="../images/luxurious/a%20(4).jpg">
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
<div class="juumbtron">
    <div class="conteiner-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">
                    <img style="height: 300px" src="../images/luxurious/a%20(4).jpg" alt="Fjords" style="width:100%">
                    <div class="caption">
                        <p class="img-para">Bed Room</p>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <img style="height: 300px" src="../images/luxurious/drawing-room/1.jpg" alt="Fjords" style="width:100%">
                    <div class="caption">
                        <p class="img-para">Drawing Room</p>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <img style="height: 300px" src="../images/luxurious/bathroom/3.jpg" alt="Fjords" style="width:100%">
                    <div class="caption">
                        <p class="img-para">Bathroom Room</p>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="jumbotron">
            <div class="row">

                <div class="col-md-12">
                    <h3 style="color: #d59429">ROOM DESCRIPTION</h3>
                    <p id="room-description">The room is designed to inspire and relaxation, is named as Royal Executive Padma Suite.
                        The name Padma is derived from one of the biggest river of Bangladesh.
                        It is situated on the western part of our country.
                        It is double air-conditioned room, one part is drawing room with a couch and another part is for both
                        sleeping and taking rest. This suite has a couple bed. The room is specially designed for VVIP couple
                        (such as executives and high officials etc.). This suite comes with dream ax bed manufactured and designed
                        exclusively and modern fully equipped private bathroom finished in top quality ceramics with a bathtub.
                        Also its color and interior decoration has added its standard with the modern structural facilities.
                        This room has automated security door lock and electric supply.
                        This room is homed with a large wear-cabinet, a gossip-table,2 smart TV with satellite channels,
                        2 telephone sets, 2 dressing tables and a hygienic washroom with maximum facilities.
                        The tea and coffee is ready to be prepared when it is felt necessary. More ever we have amenities
                        including minibar, fruit basket, high speed Wi-Fi and newspaper. </p>
                </div>


            </div>
        </div>
    </div>
    <div class="container">
        <div class="jumbotron">
            <p>Price : <del>3000tk</del>&nbsp;&nbsp;2500tk</p>
            <div class="btn btn-info">
                <a href="booking.php"><p >Booking</p></a>
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
