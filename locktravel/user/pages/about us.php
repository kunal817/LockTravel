<?php 

    session_start();
?>
<html>
    <head>
        <title>About us</title>
        <link rel="stylesheet" href="../../assets/resources/bootstrap-4.5.0-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/stylesheets/main.css">
		<link rel="stylesheet" href="../../assets/stylesheets/about.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="footer, address, phone, icons" />
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="httpss://pro.frontawesome.com/releases/v5.10.0/css/all.css">
		<link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet'>
        
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
                    <li><a href="../pages/about us.php" class="active">About us</a></li>
                    <li><a href="../pages/my profile.php">My Profile</a></li>
                    <li><a href="../pages/contact us.php">Contact us</a></li>
					<li><a href="../../logout.php">Logout</a></li>
                </ul>
            </div>
<div class="about-section">
		<div class="container">
			<div class="site-title text-center">
				<h3>About LockTravel</h3>
				<h2>Wanna find some cool places to visit in your current city? or Are you clueless about which places to visit and where 
					to stay in this new city you've moved to recently?</h2>
				<p>Don't worry, because Locktravel is the perfect solution to all your problems. From which places to visit to where to get rooms 
					to stay for your short vaccation, Locktravel has it all. This website has everything you wanna know about these cities. It will 
					ensure that you make the most out of your trip and get to know more about some local delicacise and many underrated places 
					that will remind you of heaven on Earth.</p>
			</div>
		</div>
		<div class="profile-area">
			<h1>Our Team</h1>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="card">
						<div class="img1"><img src="../../assets/images/jagannath_temple.jpg" alt="Kunalpic"></div>
						<div class="img2"><img src="../../assets/images/kunalpic.jpeg" alt="Kunalpic"></div>
						<div class="main-text">
							<h2>Kunal Kumar Gupta</h2>
							<p>Kunal is a final year CSE student at Gandhi Institute for Technological 
								Advancement(GITA), Bhubaneswar. He is from Bokaro, Jharkhand and has put in a lot of efforts in searching for all the well
								 known as well as underrated places in Bokaro.</p>
						</div>
						<div class="socials">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
						</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
						<div class="img1"><img src="../../assets/images/maithon_dam.jpg" alt="Khushbu"></div>
						<div class="img2"><img src="../../assets/images/khushpic.jpeg" alt="Khushbu"></div>
						<div class="main-text">
							<h2>Khushbu Singh</h2>
							<p>Khushbu is a final year CSE student at Gandhi Institute for Technological 
								Advancement(GITA), Bhubaneswar. She is from Dhanbad, Jharkhand and has put in a lot of efforts in searching for all the 
								well known as well as underrated places in Dhanbad.</p>
						</div>
						<div class="socials">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
						</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
						<div class="img1"><img src="../../assets/images/hirakud_dam.jpg" alt="Kunalpic"></div>
						<div class="img2"><img src="../../assets/images/bhapic.jpeg" alt="Kunalpic"></div>
						<div class="main-text">
							<h2>Bhavana Rajan</h2>
							<p>Bhavana is a final year CSE student at Gandhi Institute for Technological 
								Advancement(GITA), Bhubaneswar. She is from Sambalpur, Odisha and has put in a lot of efforts in searching for all the well
								 known as well as underrated places in Sambalpur.</p>
						</div>
						<div class="socials">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
			
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

				<p class="footer-company-name">?? 2021 LockTravel Pvt. Ltd. All rights reserved.</p>
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