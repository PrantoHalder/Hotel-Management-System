<?php
/**
 * Created by PhpStorm.
 * User: Indrajit
 * Date: 1/14/2018
 * Time: 8:08 PM
 */
// here getting the connection page only.
//include("connection.php");

//If the submit button is clicked

if(isset($_POST['submit'])){
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $gender=$_POST["optradio"];
    $mail=$_POST["email"];
    $persons=$_POST["persons"];
    $nationality=$_POST["nationality"];
    $age=$_POST["age"];
    $profession=$_POST["profession"];
    $m_number=$_POST["m_Number"];
    $nid=$_POST["nid"];
    $d_check=$_POST["date-of-check"];
    $d_out=$_POST["date-of-out"];
    $p_addr=$_POST["paddr"];
    $r_name=$_POST["r_name"];
    $price=$_POST["price"];
    $bkash=$_POST["bkash-ref"];


    if((!empty($fname))&&(!empty($lname))&&(!empty($gender))&&(!empty($mail))&&(!empty($persons))&&(!empty($nationality))&&(!empty($age))&&(!empty($profession))&&(!empty($m_number))&&(!empty($nid))&&(!empty($d_check))&&(!empty( $d_out))&&(!empty($p_addr))&&(!empty( $r_name))&&(!empty($price))&&(!empty($bkash)))
    {
        $sql="insert into booking(f_name,l_name,gender,mail,persons,nationality,age,profession,mobile_number,nid,check_in_date,check_out_date,per_addr,room_name,price,bkash_ref)values('$fname','$lname','$gender','$mail','$persons','$nationality','$age','$profession','$m_number','$nid','$d_check','$d_out','$p_addr','$r_name','$price','$bkash')";
       //$conn=conn();
        $conn=mysqli_connect('localhost','root','','booking');
        /*try {
             $con=conn();

            $con->exec($sql);
            echo "New record created successfully".$fname;


        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }*/

         $query=mysqli_query($conn,$sql);
         if($query){
             echo'<h2 style="color:orange; font-size: 48px">Thanks for choosing our Hotel<h2>';
         }



//$conn = null;


    }

    else
    {
        header('location:warning.php');
    }
}

    /*echo"hello ".$fname." ".$lname;
    echo" You are a ".$gender." person <br>";
    echo"holly<br> ".$mail;
    echo"<br>we have ".$persons." members ";
    echo"Your nationality is ".$nationality;
    echo "your age is ".$age." profession is ".$profession." your mobile is ".$m_number;
    echo"<br> NID is : ".$nid;
    echo"<br> your start date is :".$d_check." and out date is : ".$d_out."  address is : ".$p_addr;
    echo " your room name is : ".$r_name." price is : ".$price;
    echo " the bkash reference is : ".$bkash ;
    //then the rest code is checked .
    if(isset($_POST['f-name'])){

    }*/

// header('location:booking.php');


//here we just call the connection method

?>
