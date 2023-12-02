<!DOCTYPE html>
<html>
<head>
    <title>Signup Page</title>
    <style>
		body {
    font-family: Arial, sans-serif;
    background-color: rgb(123, 123, 123);
    
    text-align: center;
}

.success-message {
    color: green;
    font-size: 50px; 
    margin-top: 45vh;
}

.failure-message {
    color: red;
    font-size: 50px; 
    margin-top: 45px;
}

.try-again-link {
    text-decoration: none;
    color: #1a2db8;
    display: block;
    margin-top: 14px;
    font-size: 28px; 
}

.try-again-link:hover {
    color: #fff;
    font-size: 36px;
}

		</style>
</head>
<body>

<?php

require_once '../vendor/autoload.php';

$databaseConnection = new MongoDB\Client;

$myDatabase = $databaseConnection->myDB;

$userCollection = $myDatabase->users;

if (isset($_POST['signup'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phoneNo = $_POST['phoneNo'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $country = $_POST['country'];
    $password = sha1($_POST['password']);
}

$data = array(
    "Firstname" => $fname,
    "Lastname" => $lname,
    "Email" => $email,
    "Phone Number" => $phoneNo,
    "Password" => $password,
    "Date of Birth" => $dob,
    "Age" => $age,
    "Country" => $country,
);

$insert = $userCollection->insertOne($data);

if ($insert) {
    ?>
    <div class="success-message">Successfully Registered 👍</div>
    <a class="try-again-link" href="../index.php">Login</a>
    <?php
} else {
    ?>
    <div class="failure-message">Registration Failed</div>
    <a class="try-again-link" href="../signup.php">Try Again</a>
    <?php
}
?>

</body>
</html>
