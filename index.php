<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<!-- <style>
		background-color: #000;
	</style> -->
</head>
<body>


	<h2 style="font-size: 40px">LOGIN</h2>

	<form action="actions/login.php" method="POST">

		<h3 style="font-size: 30px">Welcome Back...</h3>

		<input type="email" placeholder="Email" name="email" id="email" required=""/><br/><br/>

		<input type="password" placeholder="Password" name="password" id="password" required=""/><br/><br/>

		<input type="submit" name="login" id="login" value="Login"/><br/><br/>

	</form>
	</br>
	<a href="signup.php">New user? Create account</a>
</body>
</html>