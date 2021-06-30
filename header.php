<?php
   session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="signin">
      <?php
           if (isset($_SESSION['userId'])) {
             echo ' <form  action="includes/logout.inc.php" method="POST">
	          <button type="sumbit" name="logout-submit">Logout</button>
              </form>';
           }
           else {
             echo '<form  action="includes/login.inc.php" method="POST">
	<input type="text" name="mailuid" placeholder="Username/Email..."><br><br>
	<input type="Password" name="pwd" placeholder="Password..."><br><br>
	<button type="sumbit" name="login-submit">Login</button>
     </form>
    <a href="signup.php">Sign Up</a>';
           }
      ?>

	

   
</div> 



</body>
</html>