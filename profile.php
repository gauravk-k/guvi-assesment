<?php

session_start();

if(!isset($_SESSION['email'])){
	header('Location: index.php');
	exit();
}
else{

	require_once  'vendor/autoload.php';

	$databaseConnection = new MongoDB\Client;

	$myDatabase = $databaseConnection->myDB;

	$userCollection = $myDatabase->users;

	$userEmail = $_SESSION['email'];

	
	$data = array(
		"Email" => $userEmail,
	);

	$fetch = $userCollection->findOne($data);
?>

<?php include 'html/profile.html'; ?>

<?php } ?>