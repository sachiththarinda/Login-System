<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="signin">
	<form  action="includes/login.inc.php" method="POST">
	<input type="text" name="mailuid" placeholder="Username/Email..."><br><br>
	<input type="Password" name="pwd" placeholder="Password..."><br><br>
	<button type="sumbit" name="login-submit">Login</button>

</form>
    <a href="signup.php">Sign Up</a>

    <form  action="includes/logout.inc.php" method="POST">
	<button type="sumbit" name="logout-submit">Logout</button>
</form>
</div> 



</body>
</html>