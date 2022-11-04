<?php
    session_start();
    $name = trim($_POST['name']);
    $rgd_no = trim($_POST['regno']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $pass = trim($_POST['pass']);
    $conpass = trim($_POST['conpass']);

    $_SESSION['regno'] = $rgd_no;

    if (empty($name)) {
        echo '<script> alert("Please enter your name") </script>';
        $page = file_get_contents("http://localhost/iwp%20project/SignUp.html");
        echo $page;
    }

    if(empty($rgd_no))
    {
        echo '<script> alert("Please enter your registration number") </script>';   
        $page = file_get_contents("http://localhost/iwp%20project/SignUp.html");
        echo $page;
    }

    $patt = "/[0-9]{2}[a-zA-z]{3}[0-9]{4}/";
    if(!preg_match($patt,$rgd_no))
    {
        echo '<script> alert("Please enter valid registartion number") </script>';   
        $page = file_get_contents("http://localhost/iwp%20project/SignUp.html");
        echo $page;
    }

    if(empty($email))
    {
        echo '<script> alert("Please enter your email id") </script>';   
        $page = file_get_contents("http://localhost/iwp%20project/SignUp.html");
        echo $page;
        die;
    }

    if(empty($phone))
    {
        echo '<script> alert("Please enter your phone number") </script>';   
        $page = file_get_contents("http://localhost/iwp%20project/SignUp.html");
        echo $page;
        die;
    }

    if(empty($pass))
    {
        echo '<script> alert("Please enter your password") </script>';   
        $page = file_get_contents("http://localhost/iwp%20project/SignUp.html");
        echo $page;
        die;
    }

    if(strlen($pass)<8)
    {
        echo '<script> alert("Password should have minimum 8 characters") </script>';   
        $page = file_get_contents("http://localhost/iwp%20project/SignUp.html");
        echo $page;
        die;
    }

    if(empty($conpass))
    {
        echo '<script> alert("Please enter your confirm password") </script>';   
        $page = file_get_contents("http://localhost/iwp%20project/SignUp.html");
        echo $page;
        die;
    }

    if($pass != $conpass)
    {
        echo '<script> alert("Password and confirm password should match") </script>';   
        $page = file_get_contents("http://localhost/iwp%20project/SignUp.html");
        echo $page;
        die;
    }

    include('connect.php');
    $query = 'insert into users values("' . $name . '","' . $rgd_no . '","' . $email . '",' .  $phone . ',"' .$pass . '");';
    $retvalue = mysqli_query($conn,$query);
    if($retvalue)
    {
        $page = file_get_contents("http://localhost/iwp%20project/vara2.html"); // redirecting to login page
        echo $page;   
    }
    else
    {
        echo '<script> alert("Sign up failed due to some error in database updation...") </script>';      
        echo '<script> alert("Sorry... please re-enter the details to signup")</script>';
        $page = file_get_contents("http://localhost/iwp%20project/SignIp.html"); // redirecting to login page
        echo $page;  
    }