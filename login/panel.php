<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="student.css">
    <title>AdminPanel</title>
</head>
<body>

<?php

//connection of database.
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "CW";
$conn = mysqli_connect($servername, $user, $pass, $dbname);

$query=mysqli_query($conn,"select * from login where email ='".$_SESSION['email']."'");
while ($row=mysqli_fetch_array($query)) {
     $role= $row['role'];
}
if ($role=='admin') {
?>

    <div class="sidenav">
        <ul>
        <li><a href="#">
            <span class="icon"><i class="fa fa-user" aria-hidden="true"></i></span>
            <span class="title">Admin</span>
        </a></li>
        <li><a href="#">
            <span class="icon"><i class="fa fa-plus" aria-hidden="true"></i></span>
            <span class="title">Add Event</span>
        </a></li>
        <li><a href="#">
            <span class="icon"><i class="fa fa-plus" aria-hidden="true"></i></span>
            <span class="title">Add Image</span>
        </a></li>
        <li><a href="logout.php">
            <span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
            <span class="title">Logout</span>
        </a></li>
    </ul>
    </div>
    <div class="welcome"> 
    <h1>Welcome <span class="colorchange">Admin</span></h1>
</div>

<?php } else {?>
    <header>
    <div class="logout">
        <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>
            Logout
        </a>
</header>
    <div class="content">
    <h1>Welcome</h1>

</div>
<div class="main">
    <div class="events">
        <h1>Public Event</h1>
        <li><a href="#">Event 1</a></li>
        <li><a href="#">Event 1</a></li>
        <li><a href="#">Event 1</a></li>
        <li><a href="#">Event 1</a></li>  
        </div>

    <div class="events">
         <h1>Event For You</h1>
        <li><a href="#">Event 1</a></li>
         <li><a href="#">Event 1</a></li>
         <li><a href="#">Event 1</a></li>
         <li><a href="#">Event 1</a></li>
        </div>

     <div class="events">
          <h1>Event For Hrealdians</h1>
          <li><a href="#">Event 1</a></li>
         <li><a href="#">Event 1</a></li>
         <li><a href="#">Event 1</a></li>
         <li><a href="#">Event 1</a></li>
        </div>

</div>
  
?>


<?php } ?>
    
    
</body>

</html>
