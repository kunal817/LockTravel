<?php 

    session_start();
?>
<html>
    <head>
        <title>Dhanbad</title>
        <link rel="stylesheet" href="../../assets/resources/bootstrap-4.5.0-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../assets/stylesheets/main.css">
		<link rel="stylesheet" href="../../assets/stylesheets/places.css">
        <script type="text/javascript" src="../../assets/resources/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="footer, address, phone, icons" />
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        
    </head>
    <body>
        <div class="banner">
            <div class="navbar" id="nav">
                <img src="../../assets/images/logo.png" alt="logo" class="logo">
				<p class="user"><?php echo $_SESSION['username'];?></p>
                <ul>
                    <li><a href="../../home.php">Home</a></li>
                    <li><a href="../places.php" class="active">Places</a></li>
                    <li><a href="../gallery.php">Gallery</a></li>
                    <li><a href="../about us.php">About us</a></li>
                    <li><a href="../my profile.php">My Profile</a></li>
                    <li><a href="../contact us.php">Contact us</a></li>
					<li><a href="../../../logout.php">Logout</a></li>
                </ul>
            </div>
			<div class="subplaces-section">
				<div class="container">
					<div class="row">
					<div class="col-md-6">
						<img src="../../assets/images/maithon_dam.jpg" alt="">
					</div>
					<div class="col-md-6">
						<h1 class="title">Dhanbad</h1>
						<p class="fa fa-map-marker"></p><span>Jharkhand, India</span>
						<div class="box">
						<p class="brief"><b>Best time:</b> October - March</p>
						<p class="brief"><b>Weather:</b> Pleasent and Moderate during these months.</p>
						<h2>Planning a Trip? <a href="#packages">View our Packages</a></h2>
						<span class="read-more"><a href="https://dhanbad.nic.in/about-district/" class="btn btn-dark">Read More...</a></span>
						</div>
					</div>
					<div class="details-section">
						<div class="subsection">
						<h1 class="sub-title">Dhanbad - "The Coal Capital of India"</h1>
						<p>Commonly known as India’s Coal Capital, Dhanbad is one of the most populated cities in Jharkhand. Dhanbad is best
							 known for being a commercial mega-producer and owner of the most significant number of coal mines, factories and 
							 industry bases. Due to the presence of the coal industries, this city has gained immense commercial 
							 success.</p><br><p>Dhanbad also houses the prestigious Indian Institute of Technology, one of the most reputed
								  institutes across the globe. Apart from being a commercial hub, Dhanbad is an amalgamation of natural and
								   humanmade attractions. Dhanbad is also home to various religious sites; one such iconic temple is the Shakti 
								   Mandir due to its unique possessions. Dams like the Maithon Dam or the Panchet Dam are often considered the 
								   centre of tourist activity, surrounded by hills, dense forests and lakes. </p>
							 </div>
						<h3>#Places to visit</h3>
						<div class="row places-to-visit">
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">1. Bhatinda fall</h5>
									<img class="card-img-top" src="../../assets/images/Dhanbad/bhatinda_fall.jpg" alt="Card image cap">
									<div class="card-body">
									  <p class="card-text"><b>Address</b>: Tetengabad, Jharkhand 828129</p>
									  <p class="card-text"><b>Hours:</b> Daily 8:00am-6:30pm</p>
									  <p class="card-text"><b>Entry Fee</b>: Free</p>
									  <a href="https://dhanbad.nic.in/tourist-place/bhatinda-fall/#:~:text=Bhatinda%20Fall%20is%20located%20just,greenery%20and%20the%20rugged%20hillocks.&text=The%20cascading%20waterfalls%20instill%20a%20sense%20of%20serenity%20and%20a%20melancholic%20charm.">Know More..</a>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">2. Maithon dam</h5>
									<img class="card-img-top" src="../../assets/images/Dhanbad/maithon_dam.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: Kenjapahar Ist part A1, Maithon, Jharkhand 828207</p>
									  <p class="card-text"><b>Hours:</b> Daily 9:00am-6:00pm</p>
									  <p class="card-text"><b>Entry Fee</b>: Free</p>
									  <a href="https://dhanbad.nic.in/tourist-place/maithon-dam/">Know More..</a>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">3. Birsa munda park</h5>
									<img class="card-img-top" src="../../assets/images/Dhanbad/birsa munda park.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: Bhuli Hirak Rd, Nawadih, Dhanbad, Jharkhand 826004</p>
										<p class="card-text"><b>Hours:</b> Daily 9:00am-7:00pm</p>
										<p class="card-text"><b>Entry Fee</b>: Rs.20/person</p>
										<a href="https://dhanbad.nic.in/tourist-place/birsa-munda-park/">Know More..</a>
									</div>
								  </div>
							</div>
							
						</div>
						<div class="row places-to-visit">
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">4. Panchet dam</h5>
									<img class="card-img-top" src="../../assets/images/Dhanbad/Panchet dam.jpg" alt="Card image cap">
									<div class="card-body">
									  <p class="card-text"><b>Address</b>: Panchet, Dhanbad, Jharkhand</p>
									  <p class="card-text"><b>Hours:</b> 6:00am-4:00pm</p>
									  <p class="card-text"><b>Entry Fee</b>: Free</p>
									  <a href="https://dhanbad.nic.in/tourist-place/panchet-dam/">Know More..</a>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">5. Ramraj mandir</h5>
									<img class="card-img-top" src="../../assets/images/Dhanbad/Ram Raj Mandir.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: Chitahi, Bhagmara, Jharkhand 828128</p>
									  <p class="card-text"><b>Hours:</b> Daily 24 hrs</p>
									  <p class="card-text"><b>Entry Fee</b>: Free</p>
									  <a href="https://www.justdial.com/Dhanbad/Ramraj-Mandir/9999PX326-X326-181013215920-W4N6_BZDET">Know More..</a>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">6. Shakti mandir</h5>
									<img class="card-img-top" src="../../assets/images/Dhanbad/Shakti Mandir.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: Shakti Mandir Rd, Dhanbad, Jharkhand 826001</p>
										<p class="card-text"><b>Hours:</b> 7:00am-4:00pm</p>
										<p class="card-text"><b>Entry Fee</b>: free</p>
										<a href="https://www.incredibleindia.org/content/incredibleindia/en/destinations/dhanbad/shakti-mandir.html">Know More..</a>
									</div>
								  </div>
							</div>
							
						</div>
						<div class="row places-to-visit">
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">7. Sambodhi Water Park</h5>
									<img class="card-img-top" src="../../assets/images/Bokaro/Ram_Mandir,_Bokaro.jpg" alt="Card image cap">
									<div class="card-body">
									  <p class="card-text"><b>Address</b>:Jealgora, Govindpur Uttrayan NH-2, Dhanbad, Jharkhand 828109 </p>
									  <p class="card-text"><b>Hours:</b> Daily 5:00am-8:30pm</p>
									  <p class="card-text"><b>Entry Fee</b>: Rs.200/per person</p>
									  <a href="#">Know More..</a>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">8. Tata Park </h5>
									<img class="card-img-top" src="../../assets/images/Dhanbad/Tata park.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: Jamadoba, Jharkhand 828110</p>
									  <p class="card-text"><b>Hours:</b> Daily 7:00am-8:00pm  </p>
									  <p class="card-text"><b>Entry Fee</b>:Rs.30/per person</p>
									  <a href="https://www.tatasteel.com/media/newsroom/press-releases/india/2018/jharia-division-of-tata-steel-dedicates-green-triangular-park-to-the-people-of-dhanbad/">Know More..</a>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">9. Topchanchi lake </h5>
									<img class="card-img-top" src="../../assets/images/Dhanbad/topchachi.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: Topchanchi, Jharkhand 828401</p>
									  <p class="card-text"><b>Hours:</b> Daily 7:00am-5:00pm</p>
									  <p class="card-text"><b>Entry Fee</b>: Free</p>
									  <a href="https://dhanbad.nic.in/tourist-place/topchanchi-lake/">Know More..</a>
									</div>
								  </div>
							</div>			
						</div>
						<h3>#Places to Stay</h3>
						<div class="row places-to-visit">
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">1. Cocoon</h5>
									<img class="card-img-top" src="../../assets/images/Dhanbad/cocoon hotel.jpg" alt="Card image cap">
									<div class="card-body">
									  <p class="card-text"><b>Address</b>: 
										beside Puja Talkies, near Railway Station, Forest Colony, Dhanbad, Jharkhand 826001</p>
									  <p class="card-text"><b>Charges:</b> Rs.4500 to Rs.5000/Day</p>
									  <p class="card-text"><b>Cancellation Charges:</b> Free</p>
									  <p class="card-text"><b>Rating:</b> 4.5/5</p>
									  <a href="https://www.cocoonhotel.in/">Know More..</a>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">2. Skylark</h5>
									<img class="card-img-top" src="../../assets/images/Dhanbad/hotel-skylark.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: 
											Bank More, Dhanbad, Jharkhand 826001</p>
										  <p class="card-text"><b>Charges:</b> Rs.2500 -Rs.3000/Day</p>
										  <p class="card-text"><b>Cancellation Charges:</b> Free</p>
										  <p class="card-text"><b>Rating:</b> 3.9/5</p>
										  <a href="https://www.makemytrip.com/hotels/hotel_skylark-details-dhanbad.html">Know More..</a>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">3.The Castle </h5>
									<img class="card-img-top" src="../../assets/images/Dhanbad/the castle.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: Savitree Apartment, Shastri Nagar, Bank More, Dhanbad, Jharkhand 826001</p>
										  <p class="card-text"><b>Charges:</b> Rs.1900-Rs.2000/Day</p>
										  <p class="card-text"><b>Cancellation Charges:</b> Free</p>
										  <p class="card-text"><b>Rating:</b> 4.1/5</p>
										  <a href="https://www.makemytrip.com/hotels/hotel_the_castle-details-dhanbad.html">Know More..</a>
									</div>
								  </div>
							</div>
							
						</div>
						<div class="row places-to-visit">
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">4. Sonotel hotel</h5>
									<img class="card-img-top" src="../../assets/images/Dhanbad/sonotel.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: Ozone Galleria Floor, 5, Saraidhella, Jharkhand 828127</p>
										  <p class="card-text"><b>Charges:</b> Rs.5800-Rs.6000/Day</p>
										  <p class="card-text"><b>Cancellation Charges:</b> Free</p>
										  <p class="card-text"><b>Rating:</b> 4.5/5</p>
										  <a href="https://sonotelhotels.com/">Know More..</a>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">5. Vivana</h5>
									<img class="card-img-top" src="../../assets/images/Dhanbad/vivana.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: C-33/2A P1 & C-33/2A P2 Kandra Industrial Area Kanshitand Bhitia More, NH-2, near NHAI Office, Dhanbad, Jharkhand 828109</p>
										  <p class="card-text"><b>Charges:</b> Rs.3700-Rs.4500/Day</p>
										  <p class="card-text"><b>Cancellation Charges:</b> Free</p>
										  <p class="card-text"><b>Rating:</b> 4.4/5</p>
										  <a href="https://www.makemytrip.com/hotels/hotel-details/?hotelId=202010191005355504&mtkeys=defaultMtkey&_uCurrency=INR&checkin=04222021&checkout=04232021&city=CTBAO&cmp=SEO&country=IN&lat=23.63711&lng=86.16331&locusId=CTBAO&locusType=city&modifyDates=true&rank=8&roomStayQualifier=1e0e&searchText=Bokaro&seoReq=1616922429121">Know More..</a>
									</div>
								  </div>
							</div>
							
						</div>
						<h3>#Places to Eat</h3>
						<div class="row places-to-visit">
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">1. Madhulika</h5>
									<img class="card-img-top" src="../../assets/images/Dhanbad/madhulika-feast-dhanbad.jpg" alt="Card image cap">
									<div class="card-body">
									  <p class="card-text"><b>Address</b>: 
										Shanti Bhawan, 9, Jharia Rd, Near, Bank More, Dhanbad, Jharkhand 826001</p>
									  <p class="card-text"><b>Options:</b> Dine-in, Takeaway, Delivery</p>
									  <p class="card-text"><b>Meals:</b> Break fast,Lunch</p>
									  <p class="card-text"><b>Rating:</b> 4.0/5</p>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">2. Lemon Chilli</h5>
									<img class="card-img-top" src="../../assets/images/Dhanbad/lemon.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: 
											Binod Bihari Chowk, Nawadih, Jharkhand 828130</p>
										  <p class="card-text"><b>Options:</b> Dine-in, Takeaway, Delivery</p>
										  <p class="card-text"><b>Meals:</b> Breakfast, Lunch, Dinner</p>
										  <p class="card-text"><b>Rating:</b> 4.2/5</p>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">3. Waikiki dhanbad </h5>
									<img class="card-img-top" src="../../assets/images/Dhanbad/waikiki-restaurant.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: 
											NH-32, Pandey Muhalla, Dhanbad, Jharkhand 826001</p>
										  <p class="card-text"><b>Options:</b> Dine-in, Takeaway,No-Contact-Delivery</p>
										  <p class="card-text"><b>Meals:</b> Breakfast, Lunch, Dinner</p>
										  <p class="card-text"><b>Rating:</b> 4.0/5</p>
									</div>
								  </div>
						</div>
							
						</div>
						<div class="row places-to-visit">
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">4. Konark restaurant </h5>
									<img class="card-img-top" src="../../assets/images/Dhanbad/konark-restaurant.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: 
											Steel Gate, Kusum Vihar, Chanakya Nagar, Dhanbad, Jharkhand 826005</p>
										  <p class="card-text"><b>Options:</b> Dine-in, Takeaway,No-Contact-Delivery</p>
										  <p class="card-text"><b>Meals:</b> Breakfast,Lunch,dinner</p>
										  <p class="card-text"><b>Rating:</b> 3.7/5</p>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">5. Barbecue restaurant </h5>
									<img class="card-img-top" src="../../assets/images/Dhanbad/barbecue-restaurat.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: 
											Pushpa Road, Hirak, Ring Road, Kusum Vihar, Murli Nagar, Dhanbad, Jharkhand 826005</p>
										  <p class="card-text"><b>Options:</b> Dine-in</p>
										  <p class="card-text"><b>Meals:</b> Lunch, Dinner</p>
										  <p class="card-text"><b>Rating:</b> 4.0/5</p>
									</div>
								  </div>
							</div>
							
						</div>
						<h3 id="packages">#Our Packages</h3>
						<div class="row places-to-visit">
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">Package#1. Golden Package</h5>
									<img class="card-img-top" src="../../assets/images/Dhanbad/dhanbad.jpg" alt="Card image cap">
									<div class="card-body">
									  <h5 class="card-title">Dhanbad Tour Package</h5>
									  <p class="card-text">3Night and 4Day</p>
									  <p class="card-text">Sightseeing+Meals</p>
									  <p class="card-text">2 Adult and 2 Child</p>
									  <p class="card-text"><b>Price:</b> Rs.15,000+GST.</p>
									  <a href="../detail.php" class="btn btn-dark">Book Package</a>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">Package#2 Diamond Package</h5>
									<img class="card-img-top" src="../../assets/images/Dhanbad/dhanbad2.jpg" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Dhanbad Tour Package</h5>
									  <p class="card-text">4Night and 5Day</p>
									  <p class="card-text">Hotel+Sightseeing+Meals</p>
									  <p class="card-text">4 Adult and 6 Child</p>
									  <p class="card-text"><b>Price:</b> Rs.30,000+GST.</p>
									  <a href="../detail.php" class="btn btn-dark">Book Package</a>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">Package#3 Platinum Package</h5>
									<img class="card-img-top" src="../../assets/images/Dhanbad/Dhanbad11.jpg" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Dhanbad Tour Package</h5>
									  <p class="card-text">5Night and 6Day</p>
									  <p class="card-text">Resort+Sightseeing+Meals</p>
									  <p class="card-text">7 Adult and 10 Child</p>
									  <p class="card-text"><b>Price:</b> Rs.80,000+GST.</p>
									  <a href="../detail.php" class="btn btn-dark">Book Package</a>
									</div>
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
					<a href="../../home.php">Home</a>
					|
					<a href="../places.php">Places</a>
					|
					<a href="../gallery.php">Gallery</a>
					|
					<a href="../contact us.php">Contact us</a>
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
    </body>
</html>