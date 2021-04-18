<?php
    $con = mysqli_connect('127.0.0.1:3307','root');
    

    mysqli_select_db($con,'locktravel');

    $user = $_POST['user'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $comment = $_POST['comment'];

    $query = "insert into userinfo(user,email,mobile,comment)
    values('$user','$email','$mobile','$comment') ";

    mysqli_query($con,$query);

    header('Location:pages/contact us.php')

?>