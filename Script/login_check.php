<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "sritwik2";
    $dbname = "splitWise";
     
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
     
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $rgd = $_POST['rgd'];
    $pass = $_POST['psw'];

    //  checking existence of user
    $query = 'SELECT * FROM users WHERE regno="' . $rgd . '";';
    $res = mysqli_query($conn, $query);
    $rows = mysqli_num_rows($res);
    if ($rows == 1) {
        $user = mysqli_fetch_assoc($res);
        if ($user['password'] == $pass) {
            $_SESSION['regno'] = $rgd;
            $test = $_SESSION['regno'];
            echo "<script>
                localStorage.setItem('regno', JSON.stringify('$rgd'));
            </script>";
            header("Location: http://localhost/IWP-JComp/Script/dashboard.php");
        }
        else
        {
            echo "User exists but entered incorrect password";
        }
    } else {
        echo "<script> User not found </script>";
        header("Location: http://localhost/IWP-JComp/Pages/login.html");
    }
    $conn->close();
?>