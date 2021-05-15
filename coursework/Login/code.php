<?php
session_start();
?>
<?php
//connection of database.
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "coursework";
$conn = mysqli_connect($servername, $user, $pass, $dbname);


if(isset($_POST['submit'])){  
    //Writing query from phpMyAdmin

    $query = "SELECT * FROM `login` WHERE email ='".$_POST['email']."' and password = '".$_POST['password']."'";
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result)>0){
        $_SESSION['email']=$_POST['email'];
        header('location:panel.php');
    }
    else{
        header('location:login.php?error');
    }


}
?>        