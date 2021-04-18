<?php 

    session_start();
?>

<html>
    <head>
        <title>Contact us</title>
        <link rel="stylesheet" href="../../assets/resources/bootstrap-4.5.0-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/stylesheets/main.css">
		    <link rel="stylesheet" href="../assets/stylesheets/My Profile.css">
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
                    <li><a href="../pages/places.php">Places</a></li>
                    <li><a href="../pages/gallery.php">Gallery</a></li>
                    <li><a href="../pages/about us.php">About us</a></li>
                    <li><a href="../pages/my profile.php" class="active">My Profile</a></li>
                    <li><a href="../pages/contact us.php">Contact us</a></li>
                    <li><a href="../../logout.php">Logout</a></li>
                </ul>
            </div>

            <?php 


                $con = mysqli_connect('127.0.0.1:3307','root');
                $query=mysqli_select_db($con,'locktravel');

                $u_name = $_SESSION['username']; 
                          
                $selectquery = "SELECT * FROM logininfo where username = '$u_name'";
                $query2 = mysqli_query($con,$selectquery);
                $nums = mysqli_num_rows($query2);   
                while ($res = mysqli_fetch_array($query2)){
                            
            ?>

            <div class="profile-sec">
                <div class="profile-subsec">
                    <h1 class="fa fa-user-circle"></h1>
                    <h2 class="title"><?php echo $_SESSION['username'];?></h2>
                    <div class="left-sec">
                        
                        <p><b>Username:</b> <?php echo $_SESSION['username'];?></p>
                        <p><b>Email:</b> <?php echo $res['email'];?></p>
                        <span><a href="../pages/my packages.php" class="btn btn-dark">My packages</a></span>
                        <a href="../pages/change_pass.php"class="btn btn-dark">Change Password</a>
                    </div>
                </div>
            </div>
                    <?php 
                }
                ?>

                     
        
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