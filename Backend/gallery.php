<!DOCTYPE html>
<html>
<head>
   


    <meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Herald College</title>
<link rel="stylesheet" href="css/gallery.css"> 
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Crete+Round&family=Original+Surfer&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link rel="stylesheet" href="lightbox.min.css" />

<script src="Js/lightbox-plus-jquery.min.js"></script>
<title>GALLERY</title>
</head>

<body>

    <section class="sub-header">
      <nav>
        <div class="logo">
          <h1>H</h1>
      </div>
         
          <div class="nav-links">
              <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="gallery.html">Gallery</a></li>
                  <li><a href="contact_us.html">Contact Us</a></li>
                  <li><a href="course.html">Course</a></li>
                  <li><a href="events.html">Events</a></li>
              
              </ul>
          </div>
      </nav>
      <?php
      include("connection.php");
      error_reporting(0);
      $query = "select * from gallery";
      $data = mysqli_query($conn,$query);
      $total = mysqli_num_rows($data);
      
      if($total!=0)
      {
        while($result=mysqli_fetch_assoc(data))
        {
          echo " 
          <img src='".$result['picsource']."' height='400' width='400' ";
        }
      }
      else{
        echo "no records found";
      }

      ?>
        </body>
      </html>