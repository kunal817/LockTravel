<?php 

    session_start();
?>
<html>
    <head>
        <title>Chnage Password</title>
        <link rel="stylesheet" href="../../assets/resources/bootstrap-4.5.0-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/stylesheets/main.css">
		    <link rel="stylesheet" href="../assets/stylesheets/detail.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="footer, address, phone, icons" />
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
      <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="banner">
            <div class="navbar" id="nav">
                <img src="../../assets/images/logo.png" alt="logo" class="logo">
                <p class="user"><?php echo $_SESSION['username'];?></p>
                <ul>
                    <li><a href="../home.php">Home</a></li>
                    <li><a href="../pages/places.php" class="active">Places</a></li>
                    <li><a href="../pages/gallery.php">Gallery</a></li>
                    <li><a href="../pages/about us.php">About us</a></li>
                    <li><a href="../pages/my profile.php">My Profile</a></li>
                    <li><a href="../pages/contact us.php">Contact us</a></li>
                    <li><a href="../../logout.php">Logout</a></li>
                </ul>
            </div>

<div class="form-container">
	<div class="form-subcontainer">
			<div class="wrapper">
    <div class="title">
      Change Password!
    </div>
	<form action="../../change_pwd.php" method="post">
    <div class="form">
    <div class="inputfield">
    <label>Username</label>
          <input type="text" class="input" name="username" value="<?php echo $_SESSION['username'];?>" readonly>
       </div>
       <div class="inputfield">
          <label> Old Password</label>
          <input type="password" class="input" name="old_pwd" placeholder="Enter Old Password">
       </div> 
        <div class="inputfield">
        <label>New Password</label>
          <input type="password" class="input" name="new_pwd" placeholder="Enter new Password">
       </div>  
       <div class="inputfield">
       <label>Confirm new Password</label>
          <input type="password" class="input" name="cnf_pwd" placeholder="confirm new Password">
       </div>  
       <div class="inputfield">
        <input type="submit" value="Update" class="btn">
      </div>
    </div>
	<form>
</div>
<?php
                    $full_url ="https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                    if (strpos($full_url,"pwd_changed")==true){
                    echo "<p class='success'>Password Changed Sucessfully!</p>";
                    }
                    
                    elseif (strpos($full_url,"pwd_not_matched")==true){
                        echo "<p class='error'>Password does not match!</p>";
                        }
                    
                ?>
</div>
</div>
    <script src="app.js"></script>
        
        <footer class="footer-distributed">

			<div class="footer-left">
                <img src="../../assets/images/logo.png">
				

				<p class="footer-links">
					<a href="../home.php">Home</a>
					|
					<a href="places.php">Places</a>
					|
					<a href="gallery.php">Gallery</a>
					|
					<a href="contact us.php">Contact us</a>
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
					<a href="#"><img class="social-logo" src="../../assets/images/fb.png"></a>
					<a href="#"><img class="social-logo" src="../../assets/images/twit.png"></a>
					<a href="#"><img class="social-logo" src="../../assets/images/insta.png"></i></a>
					<a href="#"><img class="social-logo" src="../../assets/images/lin.png"></a>
					<a href="#"><img class="social-logo" src="../../assets/images/mail.png"></i></a>
				</div>
			</div>
		</footer>
        <script type="text/javascript" src="../../assets/scripts/main.js"></script>
        <script type="text/javascript" src="../../assets/resources/jquery.min.js"></script>
    </body>
</html>