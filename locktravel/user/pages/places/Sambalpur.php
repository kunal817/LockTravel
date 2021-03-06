<?php 

    session_start();
?>
<html>
    <head>
        <title>Sambalpur</title>
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
					<li><a href="../../logout.php">Logout</a></li>
                </ul>
            </div>
			<div class="subplaces-section">
				<div class="container">
					<div class="row">
					<div class="col-md-6">
						<img src="../../assets/images/hirakud_dam.jpg" alt="">
					</div>
					<div class="col-md-6">
						<h1 class="title">Sambalpur</h1>
						<p class="fa fa-map-marker"></p><span>Odisha, India</span>
						<div class="box">
						<p class="brief"><b>Best time:</b> September - March</p>
						<p class="brief"><b>Weather:</b> Pleasent and Moderate during these months.</p>
						<h2>Planning a Trip? <a href="#packages">View our Packages</a></h2>
						<span class="read-more"><a href="https://www.incredibleindia.org/content/incredibleindia/en/destinations/bokaro.html" class="btn btn-dark">Read More...</a></span>
						</div>
					</div>
					<div class="details-section">
						<div class="subsection">
						<h1 class="sub-title">Sambalpur</h1>
						<p>Sambalpur is the gateway to the western zone of Orissa. It abounds in prolific rivers, lavish hills, lush green
							forests and affluent wildlife. It is a beautiful amalgamation of modernity and culture. Holding a significant
							historical importance, the place also has a flourishing textile and handloom industry popular for its unique
							patterns and style. In addition to that, Sambalpur has a flourishing tribal life with exclusive exquisite folk
							songs-dances and culture. Sambalpur got its name from Devi Samaleswari who is the main goddess of the region.
							One can also visit wildlife parks here to enjoy the beauty of nature that Sambalpur has in plenty. 
							The area is known for the world famous Hirakud Dam which is the main attraction for the tourists here.</p><br>
							<p>Sambalpur is famous for its handlooms and textile industry. This place is popular for its Sambalpuri Sarees. 
								Gole Bazaar is the main shopping centre. Price can range from a few hundred to a hundred thousand rupees. 
								There are many shops in the city, but the most famous shops can be spotted in Gole Bazar.</p>
							 </div>
						<h3>#Places to visit</h3>
						<div class="row places-to-visit">
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">1. Eco Retreat Odisha, Hirakud
									</h5>
									<img class="card-img-top" src="../../assets/images/Sambalpur/ropeway-near-Hirakud-dam.jpg" alt="Card image cap">
									<div class="card-body">
									  <p class="card-text"><b>Address</b>: Eco Retreat Odisha, Hirakud,768016
									  </p>
									  <p class="card-text"><b>Hours:</b> Daily 9:00am-5:00pm</p>
									  <p class="card-text"><b>Entry Fee</b>: Free</p>
									  <a href="https://www.makemytrip.com/hotels/eco_retreat_hirakud-details-sambalpur.html">Know More..</a>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">2. Hirakud Dam</h5>
									<img class="card-img-top" src="../../assets/images/Sambalpur/hirakud_dam.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: hirakud dam ,sambalpur,odisha 768016</p>
									  <p class="card-text"><b>Hours:</b> Daily 6:00am-6:00pm/p>
									  <p class="card-text"><b>Entry Fee</b>: Free</p>
									  <a href="https://sambalpur.nic.in/tourist-place/name-of-tourist-place-to-visit/">Know More..</a>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">3. Nehru Park</h5>
									<img class="card-img-top" src="../../assets/images/Sambalpur/nehru-park-hirakud-well.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: Near Gandhi Minar,Hirakud 768016</p>
										<p class="card-text"><b>Hours:</b> Daily 6:00am-6:00pm</p>
										<p class="card-text"><b>Entry Fee</b>: Rs.50/person</p>
										<a href="#">Know More..</a>
									</div>
								  </div>
							</div>
							
						</div>
						<div class="row places-to-visit">
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">4. Maa Samaleswari Temple</h5>
									<img class="card-img-top" src="../../assets/images/Sambalpur/maa-samaleswari-kalyanmandap-khetrajpur-sambalpur.jpg" alt="Card image cap">
									<div class="card-body">
									  <p class="card-text"><b>Address</b>: Garga Dam Rd, Railway Colony, Bokaro Steel City, Jharkhand 827010</p>
									  <p class="card-text"><b>Hours:</b> Daily 6???11:30am, 3???7:30pm</p>
									  <p class="card-text"><b>Entry Fee</b>: Free</p>
									  <a href="https://en.wikipedia.org/wiki/Samaleswari_Temple">Know More..</a>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">5. Deer Park </h5>
									<img class="card-img-top" src="../../assets/images/Sambalpur/deer park.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>:  Sakhipara, Sambalpur 768001 India</p>
									  <p class="card-text"><b>Hours:</b> Daily 8am???1pm, 3???5pm</p>
									  <p class="card-text"><b>Entry Fee</b>: Rs.5/person</p>
									  <a href="https://www.trawel.co.in/city/Sambalpur/deer-park-sambalpur">Know More..</a>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">6. Budharaja Hill</h5>
									<img class="card-img-top" src="../../assets/images/Sambalpur/budharaja temple.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: Budharaja, Sambalpur, Odisha 768004</p>
										<p class="card-text"><b>Hours:</b> Daily 24hrs</p>
										<p class="card-text"><b>Entry Fee</b>: free</p>
										<a href="https://en.wikipedia.org/wiki/Budharaja">Know More..</a>
									</div>
								  </div>
							</div>
							
						</div>
						<div class="row places-to-visit">
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">7. Maneswar Shiv Temple</h5>
									<img class="card-img-top" src="../../assets/images/Sambalpur/sri-mandhata-mahadev.jpg" alt="Card image cap">
									<div class="card-body">
									  <p class="card-text"><b>Address</b>: National Highway 42, Gulundipali, Odisha 768005</p>
									  <p class="card-text"><b>Hours:</b> Daily 24hrs</p>
									  <p class="card-text"><b>Entry Fee</b>: Free</p>
									  <a href="https://www.destimap.com/index.php?act=attraction&a=Maneswar-Shiva-Temple%2C-Sambalpur%2C-India">Know More..</a>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">8.Raja Veer Surendra Sai Palace
									</h5>
									<img class="card-img-top" src="../../assets/images/Sambalpur/???Raja-Bakhri.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>:  Kunjelpada, Sambalpur, Odisha 768001</p>
									  <p class="card-text"><b>Hours:</b> Daily 24hrs </p>
									  <p class="card-text"><b>Entry Fee</b>: Free</p>
									  <a href="#">Know More..</a>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">9. Gandhi Minar</h5>
									<img class="card-img-top" src="../../assets/images/Sambalpur/gandhi.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: Sambalpur, Hirakud, Odisha 768001</p>
									  <p class="card-text"><b>Hours:</b> Daily 08:00 ??? 16:30 </p>
									  <p class="card-text"><b>Entry Fee</b>: Rs.50/person</p>
									  <a href="https://www.trawel.co.in/city/Sambalpur/gandhi-minar-sambalpur">Know More..</a>
									</div>
								  </div>
							</div>			
						</div>
						<h3>#Places to Stay</h3>
						<div class="row places-to-visit">
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">1. Tribeni Hotel</h5>
									<img class="card-img-top" src="../../assets/images/Sambalpur/tribeni hotel" alt="Card image cap">
									<div class="card-body">
									  <p class="card-text"><b>Address</b>: 
										Veer Surendra Sai Marg, Pension Para, Sambalpur, Odisha 768001</p>
									  <p class="card-text"><b>Charges:</b> Rs.900-Rs.2000/Day</p>
									  <p class="card-text"><b>Cancellation Charges:</b> 600</p>
									  <p class="card-text"><b>Rating:</b> 4.9/5</p>
									  <a href="https://www.makemytrip.com/hotels/tribeni_hotel-details-sambalpur.html">Know More..</a>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">2. Hotel Sheela Towers</h5>
									<img class="card-img-top" src="../../assets/images/Sambalpur/sheelatowers.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: 
											Veer Surendra Sai Marg, Sakhipara, Sambalpur, Odisha 768001</p>
										  <p class="card-text"><b>Charges:</b> Rs.2000-Rs.3000/Day</p>
										  <p class="card-text"><b>Cancellation Charges:</b> 1000</p>
										  <p class="card-text"><b>Rating:</b> 4.1/5</p>
										  <a href="https://www.tripadvisor.in/Hotel_Review-g1213781-d1585363-Reviews-Hotel_Sheela_Towers-Sambalpur_Sambalpur_District_Odisha.html">Know More..</a>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">3. Hotel KC Palace</h5>
									<img class="card-img-top" src="../../assets/images/Sambalpur/hotel kc palace" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: GJ SH 6, Panchagochhia, Sambalpur, Odisha 768001</p>
										  <p class="card-text"><b>Charges:</b> Rs.1300-Rs.1500/Day</p>
										  <p class="card-text"><b>Cancellation Charges:</b> Free</p>
										  <p class="card-text"><b>Rating:</b> 3.9/5</p>
										  <a href="https://www.makemytrip.com/hotels/hotel_kc_palace-details-sambalpur.html">Know More..</a>
									</div>
								  </div>
							</div>
							
						</div>
						<div class="row places-to-visit">
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">4. Hotel Niiki</h5>
									<img class="card-img-top" src="../../assets/images/Sambalpur/hotel nikki.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: Veer Surendra Sai Marg, Pattnayakpada, Sambalpur, Odisha 768002</p>
										  <p class="card-text"><b>Charges:</b> Rs.3260-Rs.5000/Day</p>
										  <p class="card-text"><b>Cancellation Charges:</b> Free</p>
										  <p class="card-text"><b>Rating:</b> 4.3/5</p>
										  <a href="https://www.hotelniiki.com/">Know More..</a>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">5. Hotel Harjit Residency</h5>
									<img class="card-img-top" src="../../assets/images/Sambalpur/harjit-residency-sambalpur.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: Dayal Towers, VSS Marg, Sambalpur, Odisha 768001</p>
										  <p class="card-text"><b>Charges:</b> Rs.2014-Rs.3500/Day</p>
										  <p class="card-text"><b>Cancellation Charges:</b> Free</p>
										  <p class="card-text"><b>Rating:</b> 4.5/5</p>
										  <a href="https://www.goibibo.com/hotels/harjit-residency-hotel-in-sambalpur-5356557434141159380/">Know More..</a>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">6. Hotel Konark
									</h5>
									<img class="card-img-top" src="../../assets/images/Sambalpur/konark-hotel-sambalpur-poixi.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: Baraipali Chowk, N.H. 6, Panchagochhia, Sambalpur, Odisha 768006</p>
										  <p class="card-text"><b>Charges:</b> Rs.770-Rs.1000/Day</p>
										  <p class="card-text"><b>Cancellation Charges:</b> Free</p>
										  <p class="card-text"><b>Rating:</b> 3.5/5</p>
										  <a href="https://www.yatra.com/hotels/hotels-in-sambalpur/hotel-konark">Know More..</a>
									</div>
								  </div>
							</div>
							
							
						</div>
						<div class="row places-to-visit">
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">7. Hotel Upahar Palace</h5>
									<img class="card-img-top" src="../../assets/images/Sambalpur/hotel uphar" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: Veer Surendra Sai Marg, Hans Nagar, Sambalpur, Odisha 768001</p>
										  <p class="card-text"><b>Charges:</b> Rs.760-Rs.2000/Day</p>
										  <p class="card-text"><b>Cancellation Charges:</b> Free</p>
										  <p class="card-text"><b>Rating:</b> 3.7/5</p>
										  <a href="https://www.tripadvisor.in/Hotel_Review-g2287427-d10278528-Reviews-Hotel_Yuvraj_Regency-Bokaro_Steel_City_Bokaro_District_Jharkhand.html">Know More..</a>
									</div>
								  </div>
							</div>
							
							
						</div>
						<h3>#Places to Eat</h3>
						<div class="row places-to-visit">
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">1. The Hideout </h5>
									<img class="card-img-top" src="../../assets/images/Sambalpur/the hideout.jpg" alt="Card image cap">
									<div class="card-body">
									  <p class="card-text"><b>Address</b>: 
										City Centre Mall</p>
									  <p class="card-text"><b>Options:</b> Dine-in, Takeaway</p>
									  <p class="card-text"><b>Meals:</b> Lunch, Dinner</p>
									  <p class="card-text"><b>Rating:</b> 4.0/5</p>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">2. King's Kitchen</h5>
									<img class="card-img-top" src="../../assets/images/Sambalpur/the king's kitchen.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: 
											Adarsh Marg, Ainthapali, Sambalpur, Odisha 768004</p>
										  <p class="card-text"><b>Options:</b> Dine-in, Takeaway, Delivery</p>
										  <p class="card-text"><b>Meals:</b> Breakfast, Lunch, Dinner</p>
										  <p class="card-text"><b>Rating:</b> 4.0/5</p>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">3. Hungryy bear</h5>
									<img class="card-img-top" src="../../assets/images/Sambalpur/hungry bear.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: 
											Modipada, Sambalpur, Odisha 768002</p>
										  <p class="card-text"><b>Options:</b> Dine-in, Takeaway,No-Contact-Delivery</p>
										  <p class="card-text"><b>Meals:</b> Breakfast, Lunch, Dinner</p>
										  <p class="card-text"><b>Rating:</b> 4.5/5</p>
									</div>
								  </div>
							</div>
							
						</div>
						<div class="row places-to-visit">
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">4. Trupti Restaurant
									</h5>
									<img class="card-img-top" src="../../assets/images/Sambalpur/trupti-restaurant-s-takeaway-sambalpur-restaurants-pkcpu.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: 
											Veer Surendra Sai Marg, behind Ashoka Talkies, Sakhipara, Sambalpur, Odisha 768001</p>
										  <p class="card-text"><b>Options:</b> Dine-in, Takeaway</p>
										  <p class="card-text"><b>Meals:</b> Lunch,dinner</p>
										  <p class="card-text"><b>Rating:</b> 4.4/5</p>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">5. The Grand Siba</h5>
									<img class="card-img-top" src="../../assets/images/Sambalpur/grand-siba.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: 
											Budharaja Road, Budharaja, Sambalpur, Odisha 768004</p>
										  <p class="card-text"><b>Options:</b> Dine-in, Takeaway</p>
										  <p class="card-text"><b>Meals:</b> Breakfast,Lunch,Dinner</p>
										  <p class="card-text"><b>Rating:</b> 4.3/5</p>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">6. Spicy Affairs
									</h5>
									<img class="card-img-top" src="../../assets/images/Sambalpur/spicy-affairs-sambalpur-restaurants.jpg" alt="Card image cap">
									<div class="card-body">
										<p class="card-text"><b>Address</b>: 
											Farm Road, Modipada, Sambalpur, Odisha 768003</p>
										  <p class="card-text"><b>Options:</b> Dine-in,Takeaway,Delivery</p>
										  <p class="card-text"><b>Meals:</b> Lunch, Dinner</p>
										  <p class="card-text"><b>Rating:</b> 4.2/5</p>
									</div>
								  </div>
							</div>
							
						</div>
						<h3 id="packages">#Our Packages</h3>
						<div class="row places-to-visit">
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">Package#1. Golden Package</h5>
									<img class="card-img-top" src="../../assets/images/Sambalpur/sambalpur1.jpg" alt="Card image cap">
									<div class="card-body">
									  <h5 class="card-title">SBP City Tour Package</h5>
									  <p class="card-text">2Night and 3Day</p>
									  <p class="card-text">Sightseeing+Meals</p>
									  <p class="card-text">2 Adult and 2 Child</p>
									  <p class="card-text"><b>Price:</b> Rs.7,000+GST.</p>
									  <a href="../detail.php" class="btn btn-dark">Book Package</a>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">Package#2 Diamond Package</h5>
									<img class="card-img-top" src="../../assets/images/Sambalpur/Gudguda Waterfall.jpg" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">SBP City Tour Package</h5>
									  <p class="card-text">3Night and 4Day</p>
									  <p class="card-text">Hotel+Sightseeing+Meals</p>
									  <p class="card-text">4 Adult and 6 Child</p>
									  <p class="card-text"><b>Price:</b> Rs.20,000+GST.</p>
									  <a href="../detail.php" class="btn btn-dark">Book Package</a>
									</div>
								  </div>
							</div>
							<div class="col-md-4">
								<div class="card shadow" style="width: 20rem;">
									<h5 class="card-title">Package#3 Platinum Package</h5>
									<img class="card-img-top" src="../../assets/images/Sambalpur/Debrigarh-Wildlife-Sanctuary.jpg" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">SBP City Tour Package</h5>
									  <p class="card-text">5Night and 6Day</p>
									  <p class="card-text">Resort+Sightseeing+Meals</p>
									  <p class="card-text">7 Adult and 10 Child</p>
									  <p class="card-text"><b>Price:</b> Rs.60,000+GST.</p>
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
					<a href="../index.php">Home</a>
					|
					<a href="../places.php">Places</a>
					|
					<a href="../gallery.php">Gallery</a>
					|
					<a href="../blogs.php">Blogs</a>
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