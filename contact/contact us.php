<!DOCTYPE html>
<html>
<head>
   


    <meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Herald College</title>
<link rel="stylesheet" href="style.css"> 
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,700;1,600&family=Zilla+Slab+Highlight:wght@700&display=swap" rel="stylesheet">

</head>

<body>

    <section class="section-header">
        <nav>
            <a href="index.html"><img src="images/logo.jpg"</a>
            <div class="nav-links">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="about us.html">About Us</a></li>
                    <li><a href="course.html">Course</a></li>
                    <li><a href="events.html">Events</a></li>
                    <li><a href="">Log In</a></li>
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
                        <div class="input-row">
                            <div class="input-group">
                                <label> Name</label>
                                <input type="text" placeholder="Fullname" name="name">
                            </div>
                            <div class="input-group">
                                <label> Phone </label>
                                <input type="number" placeholder="Phone number" name="phone">
                            </div>
                            <div class="input-group">
                                <label> Email </label>
                                <input type="email" placeholder="Email" name="email">
                            </div>
                            <div class="input-group">
                                <label> Course </label>
                                <input type="text" placeholder="Select you course" name="course">
                            </div>
                        </div>
                        <label>Message</label>
                        <textarea rows="7" cols="90"  placeholder="Your Queries" name="message"></textarea>
                        
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