<?php 

    session_start();
?>
<html>
    <head>
        <title>Bokaro</title>
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
						<img src="../../assets/images/jagannath_temple.jpg" alt="">
					</div>
					<div class="col-md-6">
						<h1 class="title">Bokaro Steel City</h1>
						<p class="fa fa-map-marker"></p><span>Jharkhand, India</span>
						<div class="box">
						<p class="brief"><b>Best time:</b> September - November</p>
						<p class="brief"><b>Weather:</b> Pleasent and Moderate during these months.</p>
						<h2>Planning a Trip? <a href="#packages">View our Packages</a></h2>
						<span class="read-more"><a href="https://www.incredibleindia.org/content/incredibleindia/en/destinations/bokaro.html" class="btn btn-dark">Read More...</a></span>
						</div>
					</div>
					<div class="details-section">
						<div class="subsection">
						<h1 class="sub-title">Bokaro Steel City - "The Steel Capital of India"</h1>
						<p>Bokaro Steel City, often referred as the City of Scholars, is among the main industrial cities in 
							Jharkhand and one of the most industrialized zones in India. Bokaro is a city with lakes, greenery and beautiful 
							parks which make it a place suited for relaxation and peace. Besides being the center of India's industrial revolution 
							back in the 1960s and 1970s, Bokaro has been able to establish itself as one of the most well-planned cities in the 
							country.</p><br><p>The city located on the banks of River Damodar is the largest producer of steel and iron in the country and 
							houses some of the biggest factories. Being surrounded by a very green area it is also full of wonderful lakes and parks that 
							dot its beautiful landscape. Bokaro, is situated in the easternmost part of Jharkhand and closer to West Bengal which explains
							 the Bengali influence in its culture. The city is high on culture and is truly cosmopolitan in nature.</p>
							 </div>
						<h3>#Places to visit</h3>
						<div class="row places-to-visit">
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">1. Ayyappa Temple</h5>
									<img class="card-img-top" src="../../assets/images/Bokaro/Ayapa_Temple.jpg" alt="Card image cap">
									<div class="card-body">
									  <p class="card-text"><b>Address</b>: Sector 5, Bokaro Steel City, Jharkhand 827005</p>
									  <p class="card-text"><b>Hours:</b> Daily 5:30am-8:30pm</p>
									  <p class="card-text"><b>Entry Fee</b>: Free</p>
									  <a href="https://www.rvatemples.com/listings/bokaro-ayyappa-temple/">Know More..</a>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">2. St. Mary's Catholic Church</h5>
									<img class="card-img-top" src="../../assets/images/Bokaro/Bokaro Church.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: Church Square, Sector 4D, Bokaro Steel City, Jharkhand 827004</p>
									  <p class="card-text"><b>Hours:</b> Sunday 8-10am</p>
									  <p class="card-text"><b>Entry Fee</b>: Free</p>
									  <a href="#">Know More..</a>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">3. City Park</h5>
									<img class="card-img-top" src="../../assets/images/Bokaro/City Park.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: Sector 1, Bokaro Steel City, Jharkhand 827001</p>
										<p class="card-text"><b>Hours:</b> 9:30am-6:00pm</p>
										<p class="card-text"><b>Entry Fee</b>: Rs.30/person</p>
										<a href="https://bokaro.nic.in/tourist-place/city-park/">Know More..</a>
									</div>
								  </div>
							</div>
							
						</div>
						<div class="row places-to-visit">
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">4. Garga Dam</h5>
									<img class="card-img-top" src="../../assets/images/Bokaro/Garga Dam.jfif" alt="Card image cap">
									<div class="card-body">
									  <p class="card-text"><b>Address</b>: Garga Dam Rd, Railway Colony, Bokaro Steel City, Jharkhand 827010</p>
									  <p class="card-text"><b>Hours:</b> Daily 24hrs</p>
									  <p class="card-text"><b>Entry Fee</b>: Free</p>
									  <a href="https://www.holidify.com/places/bokaro-steel-city/garga-dam-sightseeing-4260.html">Know More..</a>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">5. Jagannath Temple</h5>
									<img class="card-img-top" src="../../assets/images/Bokaro/jagannath_temple.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>:  Sector 4D, Bokaro Steel City, Jharkhand 827004</p>
									  <p class="card-text"><b>Hours:</b> Daily 5:00pm-6:00pm</p>
									  <p class="card-text"><b>Entry Fee</b>: Free</p>
									  <a href="https://www.tripadvisor.in/Attraction_Review-g2287427-d9786743-Reviews-Jagannath_Temple-Bokaro_Steel_City_Bokaro_District_Jharkhand.html">Know More..</a>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">6.Jawaharlal Nehru Biological Park</h5>
									<img class="card-img-top" src="../../assets/images/Bokaro/jawaharlal-nehru-biological-park.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: Dr.Zakir Hussain Marg, Gumla Colony, Bokaro Steel City, Jharkhand 827004</p>
										<p class="card-text"><b>Hours:</b> 5:30am-8:30pm</p>
										<p class="card-text"><b>Entry Fee</b>: Rs.20/Person</p>
										<a href="https://bokaro.nic.in/tourist-place/jawaharlal-nehru-biological-park/">Know More..</a>
									</div>
								  </div>
							</div>
							
						</div>
						<div class="row places-to-visit">
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">7. Ram Mandir</h5>
									<img class="card-img-top" src="../../assets/images/Bokaro/Ram_Mandir,_Bokaro.jpg" alt="Card image cap">
									<div class="card-body">
									  <p class="card-text"><b>Address</b>: Sector 1, Bokaro Steel City, Jharkhand 827001</p>
									  <p class="card-text"><b>Hours:</b> Daily 5:00am-8:30pm</p>
									  <p class="card-text"><b>Entry Fee</b>: Free</p>
									  <a href="https://www.nativeplanet.com/bokaro/attractions/ram-mandir/#overview">Know More..</a>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">8. Jama Masjid</h5>
									<img class="card-img-top" src="../../assets/images/Bokaro/Mosque.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: Opposite Circus Maidan, Sector 4, Bokaro Steel City, Jharkhand 827004</p>
									  <p class="card-text"><b>Hours:</b> Daily 24hrs </p>
									  <p class="card-text"><b>Entry Fee</b>: Free</p>
									  <a href="#">Know More..</a>
									</div>
								  </div>
							</div>			
						</div>
						<h3>#Places to Stay</h3>
						<div class="row places-to-visit">
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">1. Hotel Reliance</h5>
									<img class="card-img-top" src="../../assets/images/Bokaro/Hotel Reliance.jpg" alt="Card image cap">
									<div class="card-body">
									  <p class="card-text"><b>Address</b>: 
										Plot no - HP-1, Co-operative colony, Naya more, Bokaro steel city, Bokaro</p>
									  <p class="card-text"><b>Charges:</b> Rs.1700-Rs.2000/Day</p>
									  <p class="card-text"><b>Cancellation Charges:</b> Free</p>
									  <p class="card-text"><b>Rating:</b> 4.7/5</p>
									  <a href="https://www.makemytrip.com/hotels/hotel-details/?hotelId=202002111543529427&mtkeys=defaultMtkey&_uCurrency=INR&checkin=04222021&checkout=04232021&city=CTBAO&cmp=SEO&country=IN&lat=23.65321&lng=86.13352&locusId=CTBAO&locusType=city&modifyDates=true&rank=1&roomStayQualifier=1e0e&searchText=Bokaro&seoReq=1616922429121">Know More..</a>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">2. Hotel Classic</h5>
									<img class="card-img-top" src="../../assets/images/Bokaro/oyo-35466-hotel-classic.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: 
											City Centre, Sector 4, Bokaro Steel City, Jharkhand 827004</p>
										  <p class="card-text"><b>Charges:</b> Rs.900-Rs.1200/Day</p>
										  <p class="card-text"><b>Cancellation Charges:</b> Free</p>
										  <p class="card-text"><b>Rating:</b> 4.0/5</p>
										  <a href="https://www.tripadvisor.in/Hotel_Review-g12375763-d17743202-Reviews-OYO_35466_Hotel_Classic-Bokaro_District_Jharkhand.html">Know More..</a>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">3. Hotel Ananda</h5>
									<img class="card-img-top" src="../../assets/images/Bokaro/hotel Ananda.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: Hotel Ananda E-3, City Centre, Sector-4, Bokaro Steel City Jharkhand-827004</p>
										  <p class="card-text"><b>Charges:</b> Rs.1200-Rs.1500/Day</p>
										  <p class="card-text"><b>Cancellation Charges:</b> Free</p>
										  <p class="card-text"><b>Rating:</b> 4.2/5</p>
										  <a href="https://www.makemytrip.com/hotels/hotel-details/?hotelId=201412031333237353&mtkeys=defaultMtkey&_uCurrency=INR&checkin=04222021&checkout=04232021&city=CTBAO&cmp=SEO&country=IN&lat=23.66887&lng=86.1426&locusId=CTBAO&locusType=city&modifyDates=true&rank=2&roomStayQualifier=1e0e&searchText=Bokaro&seoReq=1616922429121">Know More..</a>
									</div>
								  </div>
							</div>
							
						</div>
						<div class="row places-to-visit">
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">4. Hotel Yuvraj Regency</h5>
									<img class="card-img-top" src="../../assets/images/Bokaro/hotel-yuvraj-regency.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: B-23, city center, sector-iv, Bokaro Steel City, Jharkhand 827009</p>
										  <p class="card-text"><b>Charges:</b> Rs.1260-Rs.2000/Day</p>
										  <p class="card-text"><b>Cancellation Charges:</b> Free</p>
										  <p class="card-text"><b>Rating:</b> 3.7/5</p>
										  <a href="https://www.tripadvisor.in/Hotel_Review-g2287427-d10278528-Reviews-Hotel_Yuvraj_Regency-Bokaro_Steel_City_Bokaro_District_Jharkhand.html">Know More..</a>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">5. Hotel Kartar</h5>
									<img class="card-img-top" src="../../assets/images/Bokaro/hotel Kartar.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: Hotel Kartar Bedi Market, Main Road, Chas, Bokaro 827013</p>
										  <p class="card-text"><b>Charges:</b> Rs.799-Rs.1500/Day</p>
										  <p class="card-text"><b>Cancellation Charges:</b> Free</p>
										  <p class="card-text"><b>Rating:</b> 3.5/5</p>
										  <a href="https://www.makemytrip.com/hotels/hotel-details/?hotelId=202010191005355504&mtkeys=defaultMtkey&_uCurrency=INR&checkin=04222021&checkout=04232021&city=CTBAO&cmp=SEO&country=IN&lat=23.63711&lng=86.16331&locusId=CTBAO&locusType=city&modifyDates=true&rank=8&roomStayQualifier=1e0e&searchText=Bokaro&seoReq=1616922429121">Know More..</a>
									</div>
								  </div>
							</div>
							
						</div>
						<h3>#Places to Eat</h3>
						<div class="row places-to-visit">
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">1. Sri Hari Hotel</h5>
									<img class="card-img-top" src="../../assets/images/Bokaro/Sri Hari Hotel.jpg" alt="Card image cap">
									<div class="card-body">
									  <p class="card-text"><b>Address</b>: 
										City Centre, Sector 4, Bokaro Steel City, Jharkhand 827004</p>
									  <p class="card-text"><b>Options:</b> Dine-in, Takeaway, Delivery</p>
									  <p class="card-text"><b>Meals:</b> Lunch, Dinner</p>
									  <p class="card-text"><b>Rating:</b> 4.0/5</p>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">2. Ginger Restaurant</h5>
									<img class="card-img-top" src="../../assets/images/Bokaro/ginger-restaurant.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: 
											B-18, City Center, Sector 4, Bokaro Steel City, Jharkhand 827001</p>
										  <p class="card-text"><b>Options:</b> Dine-in, Takeaway, Delivery</p>
										  <p class="card-text"><b>Meals:</b> Breakfast, Lunch, Dinner</p>
										  <p class="card-text"><b>Rating:</b> 3.9/5</p>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">3. Mansarovar Food Plaza</h5>
									<img class="card-img-top" src="../../assets/images/Bokaro/mansarovar-food-plaza.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: 
											Plot No.GD 4/5, City Center, Sector 4, Bokaro Steel City, Jharkhand 827004</p>
										  <p class="card-text"><b>Options:</b> Dine-in, Takeaway,No-Contact-Delivery</p>
										  <p class="card-text"><b>Meals:</b> Breakfast, Lunch, Dinner</p>
										  <p class="card-text"><b>Rating:</b> 3.5/5</p>
									</div>
								  </div>
							</div>
							
						</div>
						<div class="row places-to-visit">
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">4. NatKhat</h5>
									<img class="card-img-top" src="../../assets/images/Bokaro/NatKhat.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: 
											City Centre, Sector 4, Bokaro Steel City, Jharkhand 827004</p>
										  <p class="card-text"><b>Options:</b> Dine-in, Takeaway</p>
										  <p class="card-text"><b>Meals:</b> Breakfast,Lunch</p>
										  <p class="card-text"><b>Rating:</b> 4.3/5</p>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">5. The Royal Darbar</h5>
									<img class="card-img-top" src="../../assets/images/Bokaro/the-royal-darbaar.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: 
											F-15, City Centre, Sector 4, Bokaro Steel City, Jharkhand 827004</p>
										  <p class="card-text"><b>Options:</b> Dine-in</p>
										  <p class="card-text"><b>Meals:</b> Lunch, Dinner</p>
										  <p class="card-text"><b>Rating:</b> 3.8/5</p>
									</div>
								  </div>
							</div>
							
						</div>
						<h3 id="packages">#Our Packages</h3>
						<div class="row places-to-visit">
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">Package#1. Golden Package</h5>
									<img class="card-img-top" src="../../assets/images/Bokaro/bokaro steel city.jpg" alt="Card image cap">
									<div class="card-body">
									  <h5 class="card-title">B.S. City Tour Package</h5>
									  <p class="card-text">2Night and 3Day</p>
									  <p class="card-text">Sightseeing+Meals</p>
									  <p class="card-text">2 Adult and 2 Child</p>
									  <p class="card-text"><b>Price:</b> Rs.10,000+GST.</p>
									  <a href="../detail.php" class="btn btn-dark">Book Package</a>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">Package#2 Diamond Package</h5>
									<img class="card-img-top" src="../../assets/images/Bokaro/Bokaro_Steel_City_at_Night_.jpg" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">B.S. City Tour Package</h5>
									  <p class="card-text">3Night and 4Day</p>
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
									<img class="card-img-top" src="../../assets/images/Bokaro/bokaro mall.jpg" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">B.S. City Tour Package</h5>
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
					<a href="../signup.php">Contact Us</a>
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
    </body>
</html>