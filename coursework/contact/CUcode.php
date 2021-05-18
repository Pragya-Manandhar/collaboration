<?php
//connection of database.
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "coursework";
$conn = mysqli_connect($servername, $user, $pass, $dbname);

if(isset($_POST['submit'])){  
    //Writing query from phpMyAdmin
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $course=$_POST['course'];
    $message=$_POST['message'];


    
//If the field is empty
    if (empty($name) || empty($phone) || empty($email) || empty($course) || empty($message)) {
        header('location:contact us.php?error');
    }
// If everything is filled up 
    else
    {
    $query = "INSERT INTO `contact` (`Name`, `Phone`, `Email`, `Course`, `Message`) VALUES ('$name','$phone','$email','$course','$message')";
    $result = mysqli_query($conn,$query);
    if($query==true){
        echo"<script>alert('Query Successfully Submitted. Thank You!')</script>";
        header('location:contact us.php?success');
        
    }
    else{
        echo"<script>alert('Something Went Wrong')</script>";
        
    }
    
}


}

?>