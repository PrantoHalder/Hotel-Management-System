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
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link  rel="stylesheet" href="../css/header.css">



</head>
<body>
<div class=" size">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Hotel Royal</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">ROOMS</a></li>
                    <li><a href="#">RESTURANT</a></li>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="contact-us.php">CONTACT US</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>

</div>
<div class="container-fluid footer">
    <?php include 'footer.php';?>
</div>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</html>
