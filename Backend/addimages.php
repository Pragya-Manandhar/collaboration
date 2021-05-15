<?php
error_reporting(0);
include("connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="ttps://fonts.googleapis.com/css2?family=Crete+Round&family=Original+Surfer&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/addimages.css">
    <title>AdminPanel</title>
</head>
<body>
    <div class="sidenav">
        <ul>
        <li><a href="admin.html">
            <span class="icon"><i class="fa fa-user" aria-hidden="true"></i></span>
            <span class="title">Admin</span>
        </a></li>
        <li><a href="addevent.html">
            <span class="icon"><i class="fa fa-plus" aria-hidden="true"></i></span>
            <span class="title">Add Event</span>
        </a></li>
        <li><a href="addimages.html">
            <span class="icon"><i class="fa fa-plus" aria-hidden="true"></i></span>
            <span class="title">Add Image</span>
        </a></li>
        <li><a href="#">
            <span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
            <span class="title">Logout</span>
        </a></li>
    </ul>
    </div>
    
    
</body>
<div class="add">
    <form action="" method="POST"  enctype="multipart/form-data">
         <input type="file" name="uploadfile" >
         <input type="submit" name="submit" value="Upload" name="submit">
        </div> 
        </form>
</div>
<?php
if($_POST ['submit'])
{
    $filename = $_FILES["uploadfile"] ["name"];
    $tempname = $_FILES["uploadfile"] ["tmp_name"];
    $folder = "gallery/" .$filename;
    move_uploaded_file($tempname,$folder);

    if($filename!="")
    {
        $query ="INSERT INTO GALLERY VALUES('$folder')";
        $data = mysqli_query($conn,$query);

        if($data)
        {
            echo "inserted";
        }
    }
    else
    {
        echo"failed";
    }
}

?>


</html>