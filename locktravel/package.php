<?php
    session_start();
    $con = mysqli_connect('127.0.0.1:3307','root');
    

    mysqli_select_db($con,'locktravel');

    $name = $_POST['full_name'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $Email = $_POST['Email'];
    $journey_date = $_POST['journey_date'];
    $destination = $_POST['destination'];
    $package = $_POST['package'];
    $address = $_POST['address'];
    $postal_code = $_POST['postal_code'];


    $query = "insert into packageinfo(name,username,phone,email,journey_date,destination,package,address,postal_code)
    values('$name','$username','$phone','$Email','$journey_date','$destination','$package','$address','$postal_code')";

    mysqli_query($con,$query);

    if (($destination == 'Sambalpur' || $destination == 'sambalpur') &&($package == 'Platinum')){
        $bill = "Rs. 60,000";
        $tax = "Rs. 6,000";
        $total_bill = "Rs. 66,000";
    }

    elseif (($destination == 'Sambalpur' || $destination == 'sambalpur') &&($package == 'Diamond')){
        $bill = "Rs. 20,000";
        $tax = "Rs. 2,000";
        $total_bill = "Rs. 22,000";
    }
    elseif (($destination == 'Sambalpur' || $destination == 'sambalpur') &&($package == 'Golden')){
        $bill = "Rs. 7,000";
        $tax = "Rs. 700";
        $total_bill = "Rs. 7,700";
    }
    elseif (($destination == 'Dhanbad' || $destination == 'dhanbad') &&($package == 'Platinum')){
        $bill = "Rs. 80,000";
        $tax = "Rs. 8,000";
        $total_bill = "Rs. 88,000";
    }
    elseif (($destination == 'Dhanbad' || $destination == 'dhanbad') &&($package == 'Diamond')){
        $bill = "Rs. 30,000";
        $tax = "Rs. 3,000";
        $total_bill = "Rs. 33,000";
    }
    elseif (($destination == 'Dhanbad' || $destination == 'dhanbad') &&($package == 'Golden')){
        $bill = "Rs. 15,000";
        $tax = "Rs. 1,500";
        $total_bill = "Rs 16,500";
    }
    elseif (($destination == 'Bokaro Steel City' || $destination == 'bokaro steel city') &&($package == 'Platinum')){
        $bill = "Rs. 80,000";
        $tax = "Rs. 8,000";
        $total_bill = "Rs. 88,000";
    }
    elseif (($destination == 'Bokaro Steel City' || $destination == 'bokaro steel city') &&($package == 'Diamond')){
        $bill = "Rs. 30,000";
        $tax = "Rs. 3,000";
        $total_bill = "Rs. 33,000";
    }
    elseif (($destination == 'Bokaro Steel City' || $destination == 'bokaro steel city') &&($package == 'Golden')){
        $bill = "Rs. 10,000";
        $tax = "Rs. 1,000";
        $total_bill = "Rs 11,000";
    }

    
    $_SESSION['destination'] =$destination;
    $_SESSION['address']=$address;
    $_SESSION['package'] =$package;
    $_SESSION['bill'] =$bill;
    $_SESSION['tax'] =$tax;
    $_SESSION['total_bill'] =$total_bill;
    header('Location:user/pages/bill.php')

?>