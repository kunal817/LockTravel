<?php 

    session_start();
?>
<html>
    <head>
        <title>Places</title>
        <link rel="stylesheet" href="../assets/resources/bootstrap-4.5.0-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/stylesheets/main.css">
		<link rel="stylesheet" href="../assets/stylesheets/places.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="footer, address, phone, icons" />
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        
    </head>
    <body>
        <div class="banner">
            <div class="navbar" id="nav">
                <img src="../assets/images/logo.png" alt="logo" class="logo">
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

			<div class="places-section">
				<div class="container">
					<div class="site-title">
						<h1>Places To Visit in India</h1>
	
					</div>
					<div class="row">
						<div class="col-md-6 places-cards">
							<div class="card shadow" style="width: 27rem;">
								<h5 class="card-title">1. Sambalpur</h5>
								<div class="inner">
									<img class="card-img-top" src="../assets/images/hirakud_dam.jpg" alt="Hirakud Dam">
									<div class="middle">
										<div class="text">Hirakud Dam</div>
									  </div>
								</div>
								<div class="card-body">
								  
								  <p class="card-text">Famous for its Sambalpuri Saree, the Sambalpur District is the western part of state of Odisha. It is
									one of the oldest district and city of Odisha.</p>
									<a href="places/Sambalpur.php" class="btn btn-dark">Know More...</a>
								</div>
							  </div>
							</div>
							<div class="col-md-6 places-cards">
								<div class="card shadow" style="width: 27rem;">
									<h5 class="card-title">2. Dhanbad</h5>
									<div class="inner">
										<img class="card-img-top" src="../assets/images/bhatinda_fall.jpg" alt="Card image cap">
										<div class="middle">
											<div class="text">Bhatinda Fall</div>
										  </div>
									</div>
									<div class="card-body">
										
										<p class="card-text">Famous as "The Coal Capital of India", Dhanbad is located in Jharkhand state in eastern part of India. 
											It is second largest industrial city of Jharkhand.</p>
										<a href="places/Dhanbad.php" class="btn btn-dark">Know More...</a>
									</div>
								  </div>
								</div>
								<div class="col-md-6 places-cards">
									<div class="card shadow" style="width: 27rem;">
										<h5 class="card-title">3. Bokaro Steel City</h5>
										<div class="inner">
											<img class="card-img-top" src="../assets/images/jagannath_temple.jpg" alt="Card image cap">
											<div class="middle">
												<div class="text">Jagannath Temple</div>
											  </div>
										</div>
										<div class="card-body">
											<p class="card-text">Bokaro Steel City, often referred as the City of Scholars, is among the main industrial cities in 
											  Jharkhand and one of the most industrialized zones in India.</p>
											<a href="places/Bokaro.php" class="btn btn-dark">Know More...</a>
										</div>
									  </div>
									</div>
						</div>
					</div>
				</div>
        

        <footer class="footer-distributed">

			<div class="footer-left">
                <img src="../assets/images/logo.png">
				

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
					<a href="#"><img class="social-logo" src="../assets/images/fb.png"></a>
					<a href="#"><img class="social-logo" src="../assets/images/twit.png"></a>
					<a href="#"><img class="social-logo" src="../assets/images/insta.png"></i></a>
					<a href="#"><img class="social-logo" src="../assets/images/lin.png"></a>
					<a href="#"><img class="social-logo" src="../assets/images/mail.png"></i></a>
				</div>
			</div>
		</footer>
        <script type="text/javascript" src="../assets/scripts/main.js"></script>
		<script type="text/javascript" src="../assets/resources/jquery.min.js"></script>
    </body>
</html>