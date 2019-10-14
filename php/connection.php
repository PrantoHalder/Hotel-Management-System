<?php
function conn(){
    $user='root';
    $pass='';

    $conn = new PDO('mysql:host=localhost;dbname=booking', $user, $pass) or die("Connection not completed");



    return $conn;
}

