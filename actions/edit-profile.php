<?php

session_start();

require_once  '../vendor/autoload.php';

$databaseConnection = new MongoDB\Client;

$myDatabase = $databaseConnection->myDB;

$userCollection = $myDatabase->users;


if(isset($_POST['update'])){

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$phoneNo = $_POST['phoneNo'];
	$dob = $_POST['dob'];
	$age = $_POST['age'];
	$country = $_POST['country'];
    $hidden_id = $_POST['hidden_id'];
}




$data = array('$set' => array(

	"Firstname" => $fname,
	"Lastname" => $lname,
	"Email" => $email,
	"Phone Number" => $phoneNo,
	"Date of Birth" => $dob,
	"Age" => $age,
	"Country" =>$country,
));


$update = $userCollection->updateOne(['_id' => new \MongoDB\BSON\ObjectID($hidden_id)], $data);

if($update){
	header('Location: ../profile.php');
}
else{
	?>
		<center><h4 style="color: red;">UPDATE FAILED</h4></center>
		<center><a href="../edit-profile.php?id=<?php echo $hidden_id;?>">Try Again</a></center>
	<?php
}

?>