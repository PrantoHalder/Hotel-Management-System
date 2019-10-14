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
    <title>Welcome to Hotel Heaven Booking Page</title>
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
        .booking {
            border-left: solid 4px ;
            border-color: #0f151a1a;
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
    <h1 style="text-align: center">Welcome to Hotel Heaven Room Booking</h1>
</div>
<div class="row jumbotron">
    <div class="col-md-6">
        <div class="thumbnail">
            <img style="height: 500px" src="../images/luxurious/a%20(3).jpg" alt="Fjords" style="width:100%">
            <div class="caption">
                <h3>Double Bed Super Deluxe</h3>
                <h4>Family Choice</h4>
                <p><b>Price&nbsp;:</b>&nbsp;<del>8500</del>&nbsp;TK ,&nbsp; &nbsp; <b>8000 TK</b></p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="jumbotron booking">
            <form class="form-horizontal" role="form" action="validation-booking.php" method="post">
                <div id="error-t"></div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="first-name">First Name :</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="first-name" placeholder="First Name" name="fname" required="true">
                    </div>
                    <label class="control-label col-md-2" for="last-name">Last Name :</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="last-name" placeholder="Last Name"  name="lname" required="true">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2">Gender :</label>
                    <div class=col-md-10>
                        <label class="radio-inline">
                            <input checked type="radio" name="optradio" value="male">Male
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="optradio" value="female">Female
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="optradio" value="others">Others
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="email">Email :</label>
                    <div class="col-md-4">
                        <input type="email" class="form-control" name="email" placeholder="Enter email">
                    </div>
                    <label class="control-label col-md-2" for="label">Persons :</label>
                    <div class="col-md-4">
                        <select class="form-control" name="persons">
                            <option>Choose One</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </div>

                </div>

                <div class="form-group">
                    <label class="control-label col-md-2" for="nationality">Nationality :</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="nationality" placeholder="Country" name="nationality" required="true">
                    </div>
                    <label class="control-label col-md-2" >Age :</label>
                    <div class="col-md-4">
                        <input type="number" class="form-control" name="age" id="age" min="18" max="80" required="true">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2" for="profession">Profession :</label>
                    <div class="col-md-4 ">
                        <select class="form-control" name="profession">
                            <option selected>Choose One</option>
                            <option value="student">Student</option>
                            <option value="employee">Employee</option>
                            <option value="banker">Banker</option>
                            <option value="police">Police</option>
                            <option value="others">Others</option>
                            <option value="un-employed">Not-Yet</option>
                        </select>
                    </div>
                    <label class="control-label col-md-2" for="mobile-number">Mobile No :</label>
                    <div class="col-md-4">
                        <input class="form-control" type="tel" id="mobile-number" placeholder="Mobile Number" name="m_Number" required="true">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" for="nid">National ID Number :</label>
                    <div class="col-md-8">
                        <input class="form-control" type="text" name="nid" placeholder="Please Enter Your National ID Card Number" required="true">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Check-In-Date :</label>
                    <div class="col-md-2">
                        <input class="form-control" type="date" name="date-of-check" required="true">
                    </div>

                    <label class="col-md-offset-1 control-label col-md-3">Check-Out-Date :</label>
                    <div class="col-md-2">
                        <input class="form-control" type="date" name="date-of-out" required="true">
                    </div>
                </div>
                <div class="form-group">
                   <label class="control-label col-md-3">Permanent Address : </label>
                    <div class="col-md-8">
                        <input class="form-control" type="text" id="address" placeholder="Please Enter Permanent Address" name="paddr" required="true">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Room Name :</label>
                    <div class="col-md-4 ">
                        <select class="form-control" name="r_name" >
                            <option>Choose One</option>
                            <option value="Single Bed Deluxe(R-303)">Single Bed Deluxe(R-303)</option>
                            <option value="Single Bed Super Deluxe(R-403)">Single Bed Super Deluxe(R-403)</option>
                            <option value="Single Bed Super Deluxe(R-404)">Single Bed Super Deluxe(R-404)</option>
                            <option value="Double Bed Deluxe(503)">Double Bed Deluxe(503)</option>
                            <option value="Double Bed Super Deluxe(603)">Double Bed Super Deluxe(603)</option>
                            <option value="Double Bed Super Deluxe(604)">Double Bed Super Deluxe(604)</option>
                            <option value="Double Bed Super Deluxe(605)">Double Bed Super Deluxe(605)</option>
                        </select>
                    </div>
                    <label class="control-label col-md-2">Price :</label>
                    <div class="col-md-2">
                        <input type="text" name="price" class="form-control" placeholder="Amount" required="true">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Bkash Reference Number :</label>
                    <div class="col-md-4">
                        <input class="form-control " type="text" name="bkash-ref" placeholder="BKash Reference" required="true">
                    </div>
                </div>


                <div class="form-group">
                    <div class=" col-md-offset-7 col-md-2">
                        <div class="checkbox">
                            <label><input type="checkbox"> Remember me</label>
                        </div>
                    </div>

                </div>
                <div class="form-group">
                    <div class=" col-md-offset-6 col-md-3">
                        <button type="submit" name="submit" value="submit" class="btn btn-warning form-control">Submit</button>
                    </div>
                </div>
            </form>
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