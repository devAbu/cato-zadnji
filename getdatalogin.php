<?php

$hostname = "localhost";
$username = "id3500015_nedim";
$pass = "konjina1";
$dataBaseName = "id3500015_nedo";

$connection = mysqli_connect($hostname, $username, $pass);
$selection = mysqli_select_db($connection, $dataBaseName);

$success = true;

if(!$connection){
	die("connection failed ".mysqli_error());
	$success = false;
}

if(!$selection){
	die("selection failed ".mysqli_error());
	$success = false;
}

if($success){

 $email=$_POST['email'];
 $password=$_POST['password'];
 
 //sql query to fetch information of registerd user and finds user match.
 $query = "SELECT * FROM login WHERE Password1='$password' AND Email='$email'";
 $result = mysqli_query($connection, $query);
 $rows = $result->num_rows;

 if($rows == 1){
 header("Location: WelcomeToWBC.html"); // Redirecting to other page
 }
 else
 {
 $error =" Username or password is incorrect";
 }
 mysqli_close($connection); // Closing connection

}
 
?>