<?php 
session_start();

?>
<html>
     <head>
          <title>Home page</title>
</head>
<body>
<h1>Welcome <?php echo $_SESSION['uname'];?></h1>
</body>
</html>
