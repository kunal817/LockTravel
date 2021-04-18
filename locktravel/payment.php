<?php

    session_start();

    $con = mysqli_connect('127.0.0.1:3307','root');
    

    mysqli_select_db($con,'locktravel');

    $username = $_POST['username'];
    $payment_info = "Successful";

    $query = "insert into paymentinfo(username,payment_info)
    values('$username','$payment_info') ";

    mysqli_query($con,$query);

    header('Location:user/pages/my packages.php')

?>