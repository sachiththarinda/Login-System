<?php
   session_start();
?>

<!DOCTYPE html>	
<html>
<head>

	<link rel="stylesheet" type="text/css" href="includes/style.css">
<style type="text/css">
  .nav a {
  float: left;
  font-size: 18px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  background-color: black;
 

}

.nav a:hover{
  background-color: grey;
}

.navbar-second{
  color: black;
}
</style>
</head>
<body style="background-image: url('pexel.jpg');">

	<header>
	

	<div class="navbar-second">
      <?php
           if (isset($_SESSION['userId'])) {
             echo ' <form class="nav" action="includes/logout.inc.php" method="POST">
	          
	          <button type="sumbit" name="logout-submit" style="border: none;
    width: 190px; background: black; color:white ; font-size: 16px;  line-height: 25px; padding: 10px 0; border-redius: 12px; cursor: pointer;">Logout</button>
              </form>';
           }
           else {
             echo '<form class="nav" action="includes/login.inc.php" method="POST">
              
        <a href="index.php">Home</a>
        <a href="a">Portfolio</a>
        <a href="a">About me</a>
       <a href="a">Contact</a>

	<input type="text" name="mailuid" placeholder="Username/Email..." style="color:black">
	<input type="Password" name="pwd" placeholder="Password..." style="color:black">

    <button type="sumbit" name="login-submit" style="border: none;
    width: 190px; background: black; color:white ; font-size: 16px;  line-height: 25px; padding: 10px 0; border-redius: 12px; cursor: pointer;" >Login</button>

    <a href="signup.php" >Sign Up </a>
     </form>';
           }
      ?>
      
  
</div> 
</header>



</body>
</html>