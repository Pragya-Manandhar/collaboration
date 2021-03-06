
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='login.css'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@700&display=swap" rel="stylesheet">  
</head>
<body>
   
    <div class="container">
        <form action="code.php" method="POST">
            <div class="logo">
                <img src="image/logo.png" >
            </div>
            <H1>Login </H1>
            <div class="formgroup">
                <label> Email </label>
                <input placeholder="Example@example.com" type="email" class="form-control" name="email" required>
            </div>
            <div class="formgroup">
                <label> Password </label>
                <input placeholder="Password" type="password" class="form-control" name="password" required>
            </div>
            <div class="card mt-5">
            <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Enter valid email or password ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

             ?>               
            </div>
            <input type="Submit" class="btn" name="submit"> 
        </form>

    </div>
    
</body>
</html>
