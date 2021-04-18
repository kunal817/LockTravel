<?php

    session_start();

    $con = mysqli_connect('127.0.0.1:3307','root');
    

    mysqli_select_db($con,'locktravel');

    $username = $_POST['username'];
    $old_pwd = md5($_POST['old_pwd']);
    $new_pwd = $_POST['new_pwd'];
    $cnf_pwd = $_POST['cnf_pwd'];
    $pwd=md5($new_pwd);

    $s = "select * from logininfo where username='$username' && password = '$old_pwd'";
    $res = mysqli_query($con,$s);
    $num = mysqli_num_rows($res);

    $query = "update logininfo set password='$pwd' where username='$username'";

        if($num ==1 && $new_pwd == $cnf_pwd){
            
            mysqli_query($con,$query);
            header('Location:user/pages/change_pass.php?pwd_changed');
        }
    else{
        header('Location:user/pages/change_pass.php?pwd_not_matched');

    }

?>