<?php 

    session_start();
?>
<html>
    <head>
        <title>Gallery</title>
        <link rel="stylesheet" href="../assets/resources/bootstrap-4.5.0-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/stylesheets/main.css">
		<link rel="stylesheet" href="../assets/stylesheets/gallery.css">
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
                    <li><a href="../pages/places.php">Places</a></li>
                    <li><a href="../pages/gallery.php" class="active">Gallery</a></li>
                    <li><a href="../pages/about us.php">About us</a></li>
					<li><a href="../pages/my profile.php">My Profile</a></li>
                    <li><a href="../pages/contact us.php">Contact us</a></li>
					<li><a href="../../logout.php">Logout</a></li>
                </ul>
            </div>
<div class="outer-gallery">
	<h1>Travelling Gallery</h1>
	
<div id="gallery">
	<div><img src="../assets/images/Sambalpur/hirakud_dam.jpg"/><a href="#lightbox-1">Hirakud Dam</a></div>
	<div><img src="../assets/images/Bokaro/jagannath_temple.jpg"/><a href="#lightbox-2">Jagannath Temple</a></div>
	<div><img src="../assets/images/Dhanbad/bekar bandh park.jpg"/><a href="#lightbox-3">Bekar Bandh Park</a></div>
	<div><img src="../assets/images/Sambalpur/Badrama Wildlife.jpg"/><a href="#lightbox-4">Badrama Wildlife</a></div>
	<div><img src="../assets/images/Bokaro/Bokaro Church.jpg"/><a href="#lightbox-5">Bokaro Church</a></div>
	<div><img src="../assets/images/Dhanbad/bhatinda_fall.jpg"/><a href="#lightbox-6">Bhatinda Fall</a></div>
	<div><img src="../assets/images/Sambalpur/budharaja temple.jpg"/><a href="#lightbox-7">Budharaja Temple</a></div>
	<div><img src="../assets/images/Sambalpur/cattle island.jpg"/><a href="#lightbox-8">Cattle Island</a></div>
	<div><img src="../assets/images/Sambalpur/Debrigarh-Wildlife-Sanctuary.jpg"/><a href="#lightbox-9">Debrigarh Wildlife</a></div>
	<div><img src="../assets/images/Sambalpur/deer park.jpg"/><a href="#lightbox-10">Deer Park</a></div>
	<div><img src="../assets/images/Dhanbad/birsa munda park.jpg"/><a href="#lightbox-11">Birsa Munda Park</a></div>
	<div><img src="../assets/images/Dhanbad/charak khurd hot springs.jpg"/><a href="#lightbox-12">Hot Springs</a></div>
	<div><img src="../assets/images/Bokaro/Ayapa_Temple.jpg"/><a href="#lightbox-13">Ayyappa Temple</a></div>
	<div><img src="../assets/images/Sambalpur/deul-dhara-waterfall.jpg"/><a href="#lightbox-14">Deul Dhara</a></div>
	<div><img src="../assets/images/Sambalpur/odia-baptist-church.jpg"/><a href="#lightbox-15">Odia Baptist Church</a></div>
	<div><img src="../assets/images/Sambalpur/Gudguda Waterfall.jpg"/><a href="#lightbox-16">Gudguda Waterfall</a></div>
	<div><img src="../assets/images/Bokaro/Garga Dam.jfif"/><a href="#lightbox-17">Garga Dam</a></div>
	<div><img src="../assets/images/Sambalpur/hatibari.jpg"/><a href="#lightbox-18">HatiBari</a></div>
	<div><img src="../assets/images/Sambalpur/Huma Temple.jpeg"/><a href="#lightbox-19">Huma Temple</a></div>
	<div><img src="../assets/images/Bokaro/jawaharlal-nehru-biological-park.jpg"/><a href="#lightbox-20">Zoo</a></div>
	<div><img src="../assets/images/Dhanbad/St. Anthony Church.jpg"/><a href="#lightbox-21">Dhanbad Church</a></div>
	<div><img src="../assets/images/Sambalpur/kandhara temple.jpg"/><a href="#lightbox-22">Kadhara Temple</a></div>
	<div><img src="../assets/images/Bokaro/Mosque.jpg"/><a href="#lightbox-23">Bokaro Mosque</a></div>
	<div><img src="../assets/images/Dhanbad/Kalyaneswari Temple.jpg"/><a href="#lightbox-24">Kalyaneswari Temple</a></div>
	<div><img src="../assets/images/Sambalpur/ropeway-near-Hirakud-dam.jpg"/><a href="#lightbox-25">Ropeway</a></div>
	<div><img src="../assets/images/Sambalpur/vikramkhol.JPG"/><a href="#lightbox-26">Vikramkhol</a></div>
	<div><img src="../assets/images/Sambalpur/ushakothi wildlife.jpg"/><a href="#lightbox-27">Ushakothi Wildlife</a></div>
	<div><img src="../assets/images/Bokaro/Ram_Mandir,_Bokaro.jpg"/><a href="#lightbox-28">Ram Mandir</a></div>
	<div><img src="../assets/images/Dhanbad/topchachi.jpg"/><a href="#lightbox-29">Topchachi</a></div>
	<div><img src="../assets/images/Dhanbad/Ram Raj Mandir.jpg"/><a href="#lightbox-30">Ramraj Mandir</a></div>
	<div><img src="../assets/images/Bokaro/City Park.jpg"/><a href="#lightbox-31">City Park</a></div>
	<div><img src="../assets/images/Dhanbad/IMG_20190102_104543-EFFECTS.jpg"/><a href="#lightbox-32">Maithon</a></div>
	
  </div>
  <div class="lightbox" id="lightbox-1">
	<div class="content"><img src="../assets/images/Sambalpur/hirakud_dam.jpg"/>
	  <div class="title"><b>Hirakud Dam</b>, Sambalpur</div><a class="close" href="#gallery"></a>
	</div>
  </div>
  <div class="lightbox" id="lightbox-2">
	<div class="content"><img src="../assets/images/Bokaro/jagannath_temple.jpg"/>
	  <div class="title"><b>Jagannath Temple</b>, Bokaro Steel City</div><a class="close" href="#gallery"></a>
	</div>
  </div>
  <div class="lightbox" id="lightbox-3">
	<div class="content"><img src="../assets/images/Dhanbad/bekar bandh park.jpg"/>
	  <div class="title"><b>Bekar Bandh Park</b>, Dhanbad</div><a class="close" href="#gallery"></a>
	</div>
  </div>
  <div class="lightbox" id="lightbox-4">
	<div class="content"><img src="../assets/images/Sambalpur/Badrama Wildlife.jpg"/>
	  <div class="title"><b>Badrama Wildlife Sanctuary</b>, Sambalpur</div><a class="close" href="#gallery"></a>
	</div>
  </div>
  <div class="lightbox" id="lightbox-5">
	<div class="content"><img src="../assets/images/Bokaro/Bokaro Church.jpg"/>
	  <div class="title"><b>Bokaro Church</b>, Bokaro Steel City</div><a class="close" href="#gallery"></a>
	</div>
  </div>
  <div class="lightbox" id="lightbox-6">
	<div class="content"><img src="../assets/images/Dhanbad/bhatinda_fall.jpg"/>
	  <div class="title"><b>Bhatinda fall</b>, Dhanbad</div><a class="close" href="#gallery"></a>
	</div>
  </div>
  <div class="lightbox" id="lightbox-7">
	<div class="content"><img src="../assets/images/Sambalpur/budharaja temple.jpg"/>
	  <div class="title"><b>Budharaja Temple</b>, Sambalpur</div><a class="close" href="#gallery"></a>
	</div>
  </div>
  <div class="lightbox" id="lightbox-8">
	<div class="content"><img src="../assets/images/Sambalpur/cattle island.jpg"/>
	  <div class="title"><b>Cattle Island</b>, Sambalpur</div><a class="close" href="#gallery"></a>
	</div>
  </div>
  <div class="lightbox" id="lightbox-9">
	<div class="content"><img src="../assets/images/Sambalpur/Debrigarh-Wildlife-Sanctuary.jpg"/>
	  <div class="title"><b>Debrigarh Wildlife Sanctuary</b>, Sambalpur</div><a class="close" href="#gallery"></a>
	</div>
  </div>
  <div class="lightbox" id="lightbox-10">
	<div class="content"><img src="../assets/images/Sambalpur/deer park.jpg"/>
	  <div class="title"><b>Deer Park</b>, Sambalpur</div><a class="close" href="#gallery"></a>
	</div>
  </div>
  <div class="lightbox" id="lightbox-11">
	<div class="content"><img src="../assets/images/Dhanbad/birsa munda park.jpg"/>
	  <div class="title"><b>Birsa Munda Park</b>, Dhanbad</div><a class="close" href="#gallery"></a>
	</div>
  </div>
  <div class="lightbox" id="lightbox-12">
	<div class="content"><img src="../assets/images/Dhanbad/charak khurd hot springs.jpg"/>
	  <div class="title"><b>Charak Khurd Hot springs</b>, Dhanbad</div><a class="close" href="#gallery"></a>
	</div>
  </div>
  <div class="lightbox" id="lightbox-13">
	<div class="content"><img src="../assets/images/Bokaro/Ayapa_Temple.jpg"/>
	  <div class="title"><b>Ayyappa Temple</b>, Bokaro Steel City</div><a class="close" href="#gallery"></a>
	</div>
  </div>
  <div class="lightbox" id="lightbox-14">
	<div class="content"><img src="../assets/images/Sambalpur/deul-dhara-waterfall.jpg"/>
	  <div class="title"><b>Duel Dhara Waterfall</b>, Sambalpur</div><a class="close" href="#gallery"></a>
	</div>
  </div>
  <div class="lightbox" id="lightbox-15">
	<div class="content"><img src="../assets/images/Sambalpur/odia-baptist-church.jpg"/>
	  <div class="title"><b>Odia Baptist Church</b>, Sambalpur</div><a class="close" href="#gallery"></a>
	</div>
  </div>
  <div class="lightbox" id="lightbox-16">
	<div class="content"><img src="../assets/images/Sambalpur/Gudguda Waterfall.jpg"/>
	  <div class="title"><b>Gudguda Waterfall</b>, Sambalpur</div><a class="close" href="#gallery"></a>
	</div>
  </div>
  <div class="lightbox" id="lightbox-17">
	<div class="content"><img src="../assets/images/Bokaro/Garga Dam.jfif"/>
	  <div class="title"><b>Garga Dam</b>, Bokaro Steel City</div><a class="close" href="#gallery"></a>
	</div>
  </div>
  <div class="lightbox" id="lightbox-18">
	<div class="content"><img src="../assets/images/Sambalpur/hatibari.jpg"/>
	  <div class="title"><b>Hatibari</b>, Sambalpur</div><a class="close" href="#gallery"></a>
	</div>
  </div>
  <div class="lightbox" id="lightbox-19">
	<div class="content"><img src="../assets/images/Sambalpur/Huma Temple.jpeg"/>
	  <div class="title"><b>Huma Temple</b>, Sambalpur</div><a class="close" href="#gallery"></a>
	</div>
  </div>
  <div class="lightbox" id="lightbox-20">
	<div class="content"><img src="../assets/images/Bokaro/jawaharlal-nehru-biological-park.jpg"/>
	  <div class="title"><b>Jawaharlal Nehru Biological Park</b>, Bokaro Steel City</div><a class="close" href="#gallery"></a>
	</div>
  </div>
  <div class="lightbox" id="lightbox-21">
	<div class="content"><img src="../assets/images/Dhanbad/St. Anthony Church.jpg"/>
	  <div class="title"><b>St. Anthony Church</b>, Dhanbad</div><a class="close" href="#gallery"></a>
	</div>
  </div>
  <div class="lightbox" id="lightbox-22">
	<div class="content"><img src="../assets/images/Sambalpur/kandhara temple.jpg"/>
	  <div class="title"><b>Kandhara Temple</b>, Sambalpur</div><a class="close" href="#gallery"></a>
	</div>
  </div>
  <div class="lightbox" id="lightbox-23">
	<div class="content"><img src="../assets/images/Bokaro/Mosque.jpg"/>
	  <div class="title"><b>Bokaro Mosque</b>, Bokaro Steel City</div><a class="close" href="#gallery"></a>
	</div>
  </div>
  <div class="lightbox" id="lightbox-24">
	<div class="content"><img src="../assets/images/Dhanbad/Kalyaneswari Temple.jpg"/>
	  <div class="title"><b>Kalyaneswari Temple</b>, Dhanbad</div><a class="close" href="#gallery"></a>
	</div>
  </div>
  <div class="lightbox" id="lightbox-25">
	<div class="content"><img src="../assets/images/Sambalpur/ropeway-near-Hirakud-dam.jpg"/>
	  <div class="title"><b>Ropeway near Hirakud Dam</b>, Sambalpur</div><a class="close" href="#gallery"></a>
	</div>
  </div>
  <div class="lightbox" id="lightbox-26">
	<div class="content"><img src="../assets/images/Sambalpur/vikramkhol.JPG"/>
	  <div class="title"><b>Vikramkhol</b>, Sambalpur</div><a class="close" href="#gallery"></a>
	</div>
  </div>
  <div class="lightbox" id="lightbox-27">
	<div class="content"><img src="../assets/images/Sambalpur/ushakothi wildlife.jpg"/>
	  <div class="title"><b>Ushakothi Wildlife Sanctuary</b>, Sambalpur</div><a class="close" href="#gallery"></a>
	</div>
  </div>
  <div class="lightbox" id="lightbox-28">
	<div class="content"><img src="../assets/images/Bokaro/Ram_Mandir,_Bokaro.jpg"/>
	  <div class="title"><b>Ram Mandir</b>, Bokaro Steel City</div><a class="close" href="#gallery"></a>
	</div>
  </div>
  <div class="lightbox" id="lightbox-29">
	<div class="content"><img src="../assets/images/Dhanbad/topchachi.jpg"/>
	  <div class="title"><b>Topchachi</b>, Dhanbad</div><a class="close" href="#gallery"></a>
	</div>
  </div>
  <div class="lightbox" id="lightbox-30">
	<div class="content"><img src="../assets/images/Dhanbad/Ram Raj Mandir.jpg"/>
	  <div class="title"><b>Ramraj Mandir</b>, Dhanbad</div><a class="close" href="#gallery"></a>
	</div>
  </div>
  <div class="lightbox" id="lightbox-31">
	<div class="content"><img src="../assets/images/Bokaro/City Park.jpg"/>
	  <div class="title"><b>City Park</b>, Bokaro Steel City</div><a class="close" href="#gallery"></a>
	</div>
  </div>
  <div class="lightbox" id="lightbox-32">
	<div class="content"><img src="../assets/images/Dhanbad/IMG_20190102_104543-EFFECTS.jpg"/>
	  <div class="title"><b>Maithon</b>, Dhanbad</div><a class="close" href="#gallery"></a>
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