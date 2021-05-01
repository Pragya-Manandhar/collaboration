<?php
//connection of database.
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "colab";
$conn = mysqli_connect($servername, $user, $pass, $dbname);

if(isset($_POST['submit'])){  
    //Writing query from phpMyAdmin
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $course=$_POST['course'];
    $message=$_POST['message'];


    $query = "INSERT INTO `contact`INSERT INTO `contact`(`Name`, `Phone`, `Email`, `Course`, `Message`) VALUES ('$name','$phone','$email','$course','$message')";
    $result = mysqli_query($conn,$query);




    if($result==true){
        echo"<script>alert('Query Successfully Submitted. Thank You!')</script>";
        
    }
    else{
        echo"<script>alert('Something Went Wrong')</script>";
        
    }

}

?>