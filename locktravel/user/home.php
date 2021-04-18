<?php 

    session_start();
?>

<html>
    <head>
        <title>LockTravel-The new normal to Travel around</title>
        <link rel="stylesheet" href="assets/resources/bootstrap-4.5.0-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/stylesheets/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="footer, address, phone, icons" />
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        
    </head>
    <body>
        <div class="banner">
            <div class="navbar" id="nav">
                <img src="../assets/images/logo.png" alt="logo" class="logo">
                <p class="user">Welcome, <?php echo $_SESSION['username'];?></p>
                <ul>
                    <li><a href="home.php" class="active">Home</a></li>
                    <li><a href="pages/places.php">Places</a></li>
                    <li><a href="pages/gallery.php">Gallery</a></li>
                    <li><a href="pages/about us.php">About us</a></li>
                    <li><a href="pages/my profile.php">My Profile</a></li>
                    <li><a href="pages/contact us.php">Contact us</a></li>
                    <li><a href="../logout.php">Logout</a></li>
                </ul>
            </div>

            <div class="content">
                <h1>LOCKTRAVEL</h1>
                <p> The new normal to travel around the world after <br> such a long and boring lockdown, sitting inside a locked home.</p>
                <div>
                    <button onclick="window.location.href='#explore'" class="btns" type="button"><span class="btns-btns"></span>GET STARTED</button>
                    <button onclick="window.location.href='../../LockTravel/user/pages/contact us.php'" class="btns" type="button"><span class="btns-btns"></span>CONTACT US</button>
                </div>
            </div>
        </div>
        <div class="section" id="explore">
            <h1>Let's explore the world around us</h1>
            <span>Search Destination</span>
            <div class="search">
                <input type="text" placeholder="Type your Destination City...">
                <div class="search-btns">
                <a href="#"><i class="fa fa-search search-config" aria-hidden="true"></i></i></a>
                </div>
            </div>
            <div class="featured">
                <h1>Featured Destinations</h1>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="card shadow" style="width: 21rem;">
                            <div class="inner">
                                <img class="card-img-top" src="../assets/images/hirakud_dam.jpg" alt="Hirakud Dam">
                                <div class="middle">
                                    <div class="text">Hirakud Dam</div>
                                  </div>
                            </div>
                            
                            <div class="card-body text-center">
                              <h5 class="card-title">Sambalpur</h5>
                              <p class="card-text">Famous for its Sambalpuri Saree, the Sambalpur District is the western part of state of Odisha. It is
                                  one of the oldest district and city of Odisha.
                              </p>
                              <a href="../user/pages/places/Sambalpur.php" class="btn btn-dark">Know More...</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow" style="width: 21rem;">
                            <div class="inner">
                                <img class="card-img-top" src="../assets/images/bhatinda_fall.jpg" alt="Card image cap">
                                <div class="middle">
                                    <div class="text">Bhatinda Fall</div>
                                  </div>
                            </div>
                            
                            <div class="card-body text-center">
                              <h5 class="card-title">Dhanbad</h5>
                              <p class="card-text">Famous as "The Coal Capital of India", Dhanbad is located in Jharkhand state in eastern part of India. 
                                  It is second largest industrial city of Jharkhand.</p>
                              <a href="../user/pages/places/Dhanbad.php" class="btn btn-dark">Know More...</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow" style="width: 21rem;">
                            <div class="inner">
                                <img class="card-img-top" src="../assets/images/jagannath_temple.jpg" alt="Card image cap">
                                <div class="middle">
                                    <div class="text">Jagannath Temple</div>
                                  </div>
                            </div>
                            
                            <div class="card-body text-center">
                              <h5 class="card-title">Bokaro Steel City</h5>
                              <p class="card-text">Bokaro Steel City, often referred as the City of Scholars, is among the main industrial cities in 
                                Jharkhand and one of the most industrialized zones in India.</p>
                              <a href="../user/pages/places/Bokaro.php" class="btn btn-dark">Know More...</a>
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
					<a href="home.php">Home</a>
					|
					<a href="pages/places.php">Places</a>
					|
					<a href="pages/gallery.php">Gallery</a>
					|
					<a href="pages/contact us.php">Contact us</a>
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
					We are group of three B.Tech students, this is our final year project and this project can help you a lot. You can follow us through the
                below given social media handles.</p>
				<div class="footer-icons">
					<a class="facebook" href="#"><img class="social-logo" src="../assets/images/fb.png"></a>
					<a class="twitter" href="#"><img class="social-logo" src="../assets/images/twit.png"></a>
					<a class="instagram" href="#"><img class="social-logo" src="../assets/images/insta.png"></i></a>
					<a class="linkedin" href="#"><img class="social-logo" src="../assets/images/lin.png"></a>
					<a href="#"><img class="social-logo" src="../assets/images/mail.png"></i></a>
				</div>
			</div>
		</footer>
        <script type="text/javascript" src="../assets/scripts/main.js"></script>
        <script type="text/javascript" src="../assets/resources/jquery.min.js"></script>
    </body>
</html>