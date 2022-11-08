<?php 
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'varshi');
$e1=$_POST['email'];
$p1=$_POST['psw'];
$s="select * from register where uemail='$e1' && upw='$p1'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
    $_SESSION['uname']=$e1;
    
    header('location:home.php');
}
else{
    header('location:vara2.php');
}