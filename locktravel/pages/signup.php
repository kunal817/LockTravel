<?php 

    session_start();
?>
<html>
    <head>
        <title>Login/Signup</title>
        <link rel="stylesheet" href="../assets/resources/bootstrap-4.5.0-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/stylesheets/main.css">
		<link rel="stylesheet" href="../assets/stylesheets/signup.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="footer, address, phone, icons" />
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        
    </head>
    <body>
        <div class="banner">
            <div class="navbar" id="nav">
                <img src="../assets/images/logo.png" alt="logo" class="logo">
                <ul>
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="../pages/places.html">Places</a></li>
                    <li><a href="../pages/gallery.html">Gallery</a></li>
                    <li><a href="../pages/about us.html">About us</a></li>
                    <li><a href="../pages/contact us.html">Contact us</a></li>
					<li><a href="../pages/signup.php" class="active fa fa-user-circle" >Login/Signup</a></li>
                </ul>
            </div>
            <div class="form-container">
            <div class="form-modal">
    
                <div class="form-toggle">
                    <button id="login-toggle" onclick="toggleLogin()">log in</button>
                    <button id="signup-toggle" onclick="toggleSignup()">sign up</button>
                </div>
            
                <div id="login-form">
                    <form action="../validation.php" method="POST">
                        <input type="text" name="username" placeholder="Enter username" required/>
                        <input type="password" name="password" placeholder="Enter password" id="myinput" required/>
                        <p><a href="#" onclick="myFunction()"><span id="toggle">Show Password</span></a></p>
                        <button type="submit" class="btn login">login</button>
                        <p><a href="javascript:void(0)">Forgot password</a> </p>
                      <p><a href="javascript:void(0)" onclick="toggleSignup()">Register Account</a> </p>
                      
                    </form>
                </div>
            
                <div id="signup-form">
                    <form action="../signup.php" method="POST">
                        <input type="email" name="email" placeholder="Enter your email" required/>
                        <input type="text" name="username" placeholder="Choose username" required/>
                        <input type="password" name="password" placeholder="Create password" required/>
                        <button type="submit" class="btn signup"><i class="fa fa-spinner fa-pulse"></i> create account
                      </button> 
                      <p><a href="javascript:void(0)" onclick="toggleLogin()">Login to Your Account</a> </p>
                    </form>
                </div>
                <?php
                    $full_url ="https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                    if (strpos($full_url,"signup=email_exits")==true){
                    echo "<p class='error'>This email id is already in use. Please try another email id!</p>";
                    }
                    
                    elseif (strpos($full_url,"signup=username_exits")==true){
                        echo "<p class='error'>This username is already in use. Please try another username!</p>";
                        }
                    elseif (strpos($full_url,"signup=sucess")==true){
                        echo "<p class='success'>Signed up Successfully!</p>";
                        }
                    elseif (strpos($full_url,"login=invalid username/password")==true){
                           echo "<p class='error'>invalid username/password!</p>";
                        }
                
                ?>
            
            </div>
            
</div>

        

        <footer class="footer-distributed">

			<div class="footer-left">
                <img src="../assets/images/logo.png">
				

				<p class="footer-links">
					<a href="../index.html">Home</a>
					|
					<a href="places.html">Places</a>
					|
					<a href="gallery.html">Gallery</a>
					|
					<a href="contact us.html">Contact us</a>
				</p>

				<p class="footer-company-name">© 2021 LockTravel Pvt. Ltd. All rights reserved.</p>
			</div>

			<div class="footer-center">
				<div>
					<i class="fa fa-map-marker"></i>
					  <p><span>GITA Bbsr, 
                        Badaraghunathpur, Madanpur</span>
						Bhubaneswar, Odisha - 752054</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+91 9876543210</p>
				</div>
				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@locktravel.com">support@locktravel.com</a></p>
				</div>
			</div>
			<div class="footer-right">
				<p class="footer-company-about">
					<span>About us</span>
					We are group of three B.Tech students, this is our final year project and this project can help you a lot</p>
				<div class="footer-icons">
					<a href="#"><img class="social-logo" src="../assets/images/fb.png"></a>
					<a href="#"><img class="social-logo" src="../assets/images/twit.png"></a>
					<a href="#"><img class="social-logo" src="../assets/images/insta.png"></i></a>
					<a href="#"><img class="social-logo" src="../assets/images/lin.png"></a>
					<a href="#"><img class="social-logo" src="../assets/images/mail.png"></i></a>
				</div>
			</div>
		</footer>
        <script type="text/javascript" src="../assets/scripts/main.js"></script>
        <script type="text/javascript" src="../assets/scripts/signup.js"></script>
        <script type="text/javascript" src="../assets/resources/jquery.min.js"></script>
    </body>
</html>