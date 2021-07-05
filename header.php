<?php
   session_start();
?>

<!DOCTYPE html>	
<html>
<head>

	<link rel="stylesheet" type="text/css" href="includes/style.css">
<style type="text/css">

</style>
</head>
<body style="background-image: url('pexel.jpg');">

	<header>

    
	

	<div class="navbar-second">
      <?php
           if (isset($_SESSION['userId'])) {
             echo ' <form class="nav" action="includes/logout.inc.php" method="POST">
	          
	          <button type="sumbit" name="logout-submit">Logout</button>
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

    <button type="sumbit" name="login-submit" >Login</button>

    <a href="signup.php" style="text-decoration: underline;">Sign Up </a>
     </form>';
           }
      ?>
      
  
</div> 
</header>



</body>
</html>