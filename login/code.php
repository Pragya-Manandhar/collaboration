<?php
//connection of database.
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "login";
$conn = mysqli_connect($servername, $user, $pass, $dbname);


if(isset($_POST['submit'])){  
    //Writing query from phpMyAdmin

    $query = "SELECT * FROM `login` WHERE email ='".$_POST['email']."' and password = '".$_POST['password']."'";
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result)>0){
        $_SESSION['email']=$_POST['email'];
        header('location:index.php');
    }
    else{
        echo"Invalid email or password";
        echo"<br>";
        echo '<a href="login.php">retry logging in</a>';
    }


}
?>        