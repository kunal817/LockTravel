<?php

    session_start();

    $con = mysqli_connect('127.0.0.1:3307','root');
    

    mysqli_select_db($con,'locktravel');

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $s = "select * from logininfo where username='$username' && password = '$password'";
    $res = mysqli_query($con,$s);
    $num = mysqli_num_rows($res);
    if ($num == 1){
        $_SESSION['username']=$username;
        header('Location:user/home.php');
    }
    else{
        header('Location:pages/signup.php?invalid username/password');

    }

?>