<!DOCTYPE html>
<html>
<head>
   


    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Herald College</title>
<link rel="stylesheet" href="./css/contactus.css"> 
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,700;1,600&family=Zilla+Slab+Highlight:wght@700&display=swap" rel="stylesheet">

</head>

<body>

<section class="section-header">
            <a href="index.html"> </a>
            <nav>
                <div class="logo">
                  <h1>H</h1>
              </div>
                 
                  <div class="nav-links">
                      <ul>
                          <li><a href="../index.html">Home</a></li>
                          <li><a href="../gallery.html">Gallery</a></li>
                          <li><a href="contact_us.php">Contact Us</a></li>
                          <li><a href="../course.html">Course</a></li>
                          <li><a href="../events.html">Events</a></li>
                      
                      </ul>
                  </div>
              </nav>
<div class="container">
    <h1>Contact us</h1>
    <p>We would gladly respond for more details and whereabouts of our college.</p>

            <div class="contact-box">
                
                <div class="contact-left">
                    <h3>SEND YOUR REQUESTS</h3>
                    <form action="CUcode.php" method="POST">
                    <div class="card mt-5">
                        <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            else
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>
                        </div>
                        <div class="input-row">
                            <div class="input-group">
                                <label> Name</label>
                                <input type="text" placeholder="Pragya Manandhar" name="name">
                            </div>
                            <div class="input-group">
                                <label> Phone </label>
                                <input type="number" placeholder="+977 9845167342" name="phone">
                            </div>
                            <div class="input-group">
                                <label> Email </label>
                                <input type="email" placeholder="pragyamdr21@gmail.com" name="email">
                            </div>
                            <div class="input-group">
                                <label> Course </label>
                                <input type="text" placeholder="BBA" name="course" name="course">
                            </div>
                        </div>
                        <label>Message</label>
                        <textarea rows="5"  placeholder="your queries" name="message"></textarea>
                        
                    <button type ="submit" name="submit">SEND</button>
                    </form>
                
            </div>
            <div class="contact-right">
                <h3>Reach Us Out</h3>
                <table>
                    <tr>
                        <td>Email</td>
                        <td>heraldcollege@gmail.com.np</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>+977 9845098450</td>
                    </tr>

                    <tr>
                        <td>Address</td>
                        <td>Naxal Bhagwati, Kathmandu</td>
                    </tr>
                </table>
                </div>
            </div>
            </div>
</section>


</body>

</html>