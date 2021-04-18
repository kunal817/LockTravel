<?php

    session_start();
    

    $con = mysqli_connect('127.0.0.1:3307','root');
    

    mysqli_select_db($con,'locktravel');

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $s = "select * from logininfo where email='$email'";
    $res = mysqli_query($con,$s);
    $num = mysqli_num_rows($res);

    $r = "select * from logininfo where username='$username'";
    $res2 = mysqli_query($con,$r);
    $num2 = mysqli_num_rows($res2);


    if ($num == 1){
        header('Location:pages/signup.php?signup=email_exits');
        echo "This email id is already in use. Please try another email id.";
    }
    elseif ($num2 == 1){
        header('Location:pages/signup.php?signup=username_exits');
        echo "This Username is already in use. Please try another username.";
    }
    else{
        $query = "insert into logininfo(email,username,password) values('$email','$username','$password') ";
        
        mysqli_query($con,$query);
        echo "Registration Successfull";
        header('Location:pages/signup.php?signup=sucess');
    }

    

?>