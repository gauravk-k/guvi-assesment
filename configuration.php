<?php
session_start();

$conn = new mysqli('localhost:4306', 'root', '', 'loginregister'); 


if(isset($_POST["act"])){
  if($_POST["act"] == "signup"){
    register();
  }
  else if($_POST["act"] == "login"){
    login();
    
  }
}

function signup(){
  global $conn;

  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $email = $_POST["email"];
  $phoneno = $_POST["phoneno"];
  $password = $_POST["password"];
  $dob = $_POST["dob"];
  $age = $_POST["age"];
  $country = $_POST["country"];

  if(empty($name) || empty($username) || empty($password)){
    echo "Please Fill Out The Form!";
    exit;
  }

  $user = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");
  if(mysqli_num_rows($user) > 0){
    echo "Username Has Already Taken";
    exit;
  }

  $query = "INSERT INTO tb_user VALUES('', '$name', '$username', '$password')";
  mysqli_query($conn, $query);
  echo "Registration Successful";
}

function login(){
  global $conn;

  $username = $_POST["email"];
  $password = $_POST["password"];

  $user = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$email'");

  if(mysqli_num_rows($user) > 0){

    $row = mysqli_fetch_assoc($user);

    if($password == $row['password']){
      echo "Login Successful";
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
    }
    else{
      echo "Wrong Password";
      exit;
    }
  }
  else{
    echo "User Not Registered";
    exit;
  }
}
?>