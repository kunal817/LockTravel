<?php 

    session_start();
?>

<html>
    <head>
        <title>My Pakages</title>
        <link rel="stylesheet" href="../../assets/resources/bootstrap-4.5.0-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/stylesheets/main.css">
		    <link rel="stylesheet" href="../assets/stylesheets/my packages.css">
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

            <div class="main-div">
              <h1>My Tour Pakages</h1>
              <div class="center-div">
                <div class="table-responsive">
                  <table>
                    <thead>
                      <tr>
                        <th>Sl. No</th>
                        <th>Name</th>
                        <th>Tour Destination</th>
                        <th>Package Type</th>
                        <th>Journey Date</th>
                        <th>Payment Status</th>
                      </tr>
                    </thead> 
                    <tbody>
                    <?php 


                          $con = mysqli_connect('127.0.0.1:3307','root');
                          $query=mysqli_select_db($con,'locktravel');
                          
                          $selectquery = "SELECT * FROM packageinfo left join paymentinfo on packageinfo.username = paymentinfo.username ";
                          $query2 = mysqli_query($con,$selectquery);
                          $nums = mysqli_num_rows($query2);  
                          $i=1;  
                          while ($res = mysqli_fetch_array($query2)){
                            
                            ?>
                            <tr>
                              <td><?php echo $i; ?></td>
                              <td><?php echo $res['name']; ?></td>
                              <td><?php echo $res['destination']; ?></td>
                              <td><?php echo $res['package']; ?></td>
                              <td><?php echo $res['journey_date']; ?></td>
                              <td><?php echo $res['payment_info']; ?></td>
                            </tr>
                        <?php
                        $i++;
                          }
                          ?>

                    </tbody>     
                  </table>
                </div>
                <?php
                    if ($nums==0){
                            
                            ?>
                            <h1 class="below"><?php echo "Currently You have not booked any tour packages"; ?></h1>
                  <?php         
                    }
                       ?>
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