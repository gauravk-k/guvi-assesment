<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
		body {
    font-family: Arial, sans-serif;
    background-color: rgb(123, 123, 123);
    text-align: center;
}

.error-message {
    
    color: #ce2525;
    
    font-size: 50px; 
    margin-top: 45vh;
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
session_start();

require_once '../vendor/autoload.php';

$databaseConnection = new MongoDB\Client;

$myDatabase = $databaseConnection->myDB;

$userCollection = $myDatabase->users;

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = sha1($_POST['password']);
}

$data = array(
    "Email" => $email,
    "Password" => $password
);


$fetch = $userCollection->findOne($data);

if ($fetch) {
    
    $_SESSION['email'] = $fetch['Email'];

    
    header('Location: ../profile.php');
    exit();
} else {
    ?>
    <div class="error-message">USER NOT FOUND ! ! !</div>
    <a class="try-again-link" href="../index.php">Try Again</a>
    <?php
}
?>

</body>
</html>
