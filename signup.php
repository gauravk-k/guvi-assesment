<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	
	<link rel="stylesheet"  href="css/signup.css">



</head>
<body>

<h2 style="font-size: 40px">REGISTRATION</h2>


	<form action="actions/actions.php" method="POST">
		
		<input type="text" placeholder="Firstname" name="fname" id="fname" required=""/><br/><br/>

		<input type="text" placeholder="Lastname" name="lname" id="lname" required=""/><br/><br/>

		<input type="email" placeholder="Email" name="email" id="email" required=""/><br/><br/>

		<input type="text" placeholder="Phone No" name="phoneNo" id="phoneNo" required=""/><br/><br/>

		<input type="password" placeholder="Password" name="password" id="password" required=""/><br/><br/>

		<input class="do" type="date" placeholder="Date of Birth" name="dob" id="dob" required=""/><br/><br/>

		<input type="text" placeholder="Age" name="age" id="age" required=""/><br/><br/>

		<input type="text" placeholder="Country" name="country" id="country" required=""/><br/><br/>

		<input type="submit" name="signup" id="signup" value="Signup"/><br/><br/>

	</form>

	<a href="index.php">Already have an account? Login</a>
</body>
</html>