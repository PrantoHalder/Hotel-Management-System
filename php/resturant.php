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
    <title>Welcome to Heaven Returant</title>
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
                    <li class="nav-font active"><a href="resturant.php">RESTURANT</a></li>
                    <li class="nav-font"><a href="rooms.php">ROOMS</a></li>
                    <li class="nav-font"><a href="about%20us.php">ABOUT US</a></li>
                    <li class="nav-font"><a href="contact-us.php">CONTACT US</a></li>
                </ul>
            </div>
        </div>
    </nav>

</div>
<div class=" container-fluid" id="res-level">
    <h1 style="text-align: center">Welcome to Hotel Heaven Resturant</h1>
</div>
<div class=" container-fluid" id="res-back">
    <h1 id="res-heading">Multi Cuisine Resturant</h1>
    <div class="row">
        <div class="col-lg-7" "><h3 id="para">Our multi cuisine restaurant features sophisticated
                interpretations of traditional fare that is accented with artistic touches, presenting one of the most unique
                dining experiences in Khulna. A combination of gracious service, inventive cuisine, stylish décor and stunning
                views ensure that the restaurant is a hit with both guests and locals alike. Using its panoramic city views for
                inspiration, the focal point of the restaurant is an incredible city view. </h3></div>
        <div class="col-lg-7""></div>
</div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="thumbnail">
                <img style="height: 360px" src="../images/food-menu/1st.jpg" alt="Fjords" style="width:100%">
                <div class="caption">
                    <p class="rate">Price&nbsp;:&nbsp;700&nbsp;TK</p>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <img style="height: 360px" src="../images/food-menu/2nd.jpg" alt="Fjords" style="width:100%">
                <div class="caption">
                    <p class="rate">Price&nbsp;:&nbsp;2000&nbsp;TK</p>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <img style="height: 360px" src="../images/food-menu/3rd.jpg" alt="Fjords" style="width:100%">
                <div class="caption">
                    <p class="rate">Price&nbsp;:&nbsp;1200&nbsp;TK</p>
                </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="thumbnail">
                <img style="height: 360px" src="../images/food-menu/4th.jpg" alt="Fjords" style="width:100%">
                <div class="caption">
                    <p class="rate">Price&nbsp;:&nbsp;700&nbsp;TK</p>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <img style="height: 360px" src="../images/food-menu/5th.jpg" alt="Fjords" style="width:100%">
                <div class="caption">
                    <p class="rate">Price&nbsp;:&nbsp;2000&nbsp;TK</p>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <img style="height: 360px" src="../images/food-menu/6th.jpg" alt="Fjords" style="width:100%">
                <div class="caption">
                    <p class="rate">Price&nbsp;:&nbsp;1200&nbsp;TK</p>
                </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="thumbnail">
                <img style="height: 360px" src="../images/food-menu/7th.jpg" alt="Fjords" style="width:100%">
                <div class="caption">
                    <p class="rate">Price&nbsp;:&nbsp;700&nbsp;TK</p>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <img style="height: 360px" src="../images/food-menu/8th.jpg" alt="Fjords" style="width:100%">
                <div class="caption">
                    <p class="rate">Price&nbsp;:&nbsp;2000&nbsp;TK</p>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <img style="height: 360px" src="../images/food-menu/9.jpg" alt="Fjords" style="width:100%">
                <div class="caption">
                    <p class="rate">Price&nbsp;:&nbsp;1200&nbsp;TK</p>
                </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="thumbnail">
                <img style="height: 360px" src="../images/food-menu/10.jpg" alt="Fjords" style="width:100%">
                <div class="caption">
                    <p class="rate">Price&nbsp;:&nbsp;700&nbsp;TK</p>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <img style="height: 360px" src="../images/food-menu/11.jpg" alt="Fjords" style="width:100%">
                <div class="caption">
                    <p class="rate">Price&nbsp;:&nbsp;2000&nbsp;TK</p>
                </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <img style="height: 360px" src="../images/food-menu/12.jpg" alt="Fjords" style="width:100%">
                <div class="caption">
                    <p class="rate">Price&nbsp;:&nbsp;1200&nbsp;TK</p>
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
