<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
<title>Login form</title>
<link rel="stylesheet" href="style.css">
<style>
.{
box-sizing:border-box;


}
.child{
 
float:left;
width:50%;

}
@media (min-width:768px){
.parent{
display:flex;
}
}
</style>

</head>
<body>
<!--20BCE1240 Vemasani Varshini-->
<
  <section class="parent">
  <section class="child">
    <br>
    <br>
    <p align="center">
<img src="billing.jpg" alt="divide bill" width="300" height="440">
</p>

</section>
    <section class="child">
 <div class="center">
      <h2 align="center" >Login</h2>
      <br>
      <h3 align="center" color:"blue">Please enter the credentials</h3>
      <form action="evd.php" method="post">
        <div class="txt_field">
          <input type="text" name="email" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="psw" required>
          <span></span>
          <label>Password</label>
        </div>
        <input type="checkbox" checked="checked" name="remember"> Remember me
        <br><br>
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="#">Signup</a>
        </div>
      </form>
<br>
<br><br>
</div>
</section>

<section class="child">
  <br>
  <br>
  <p align="center">
<video width="440" height="220" controls loop autoplay muted>
<source src="mp1.mp4" type="video/mp4">
<img src="Bill-Split.jpg" alt="im2" width="440" height="220">

</p>
<p align="center">
<img src="Bill-Split.jpg" alt="im2" width="360" height="220">
</p>
</section>
</section>
</body>
</html>
