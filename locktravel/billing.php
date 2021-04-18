<?php

$con = mysqli_connect('127.0.0.1:3307','root');


mysqli_select_db($con,'locktravel');

$username = $_POST['username'];
$package_type = $_POST['package_type'];
$destination = $_POST['destination'];
$bill = $_POST['bill'];
$tax = $_POST['tax'];
$total_bill = $_POST['total_bill'];

$query = "insert into billinginfo(username,package_type,destination,bill,tax,total_bill)
values('$username','$package_type','$destination','$bill','$tax','$total_bill')";

mysqli_query($con,$query);


header('Location:user/pages/payment.php')

?>