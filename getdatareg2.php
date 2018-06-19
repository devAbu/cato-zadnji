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

	$country = $_POST['country'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$first = $_POST['first'];
	$last = $_POST['last'];
	$date = $_POST['date'];
	$country2 = $_POST['country2'];
	$street1 = $_POST['street1'];
	$street2 = $_POST['street2'];
	$city = $_POST['city'];
	$region = $_POST['region'];
	$postal = $_POST['postal'];
	$phone = $_POST['phone'];

	

    $query = "INSERT INTO registration (Country, Email, Password1,FirstName,LastName,Date,Ethnicity,StreetAdr1, StreetAdr2,City,Province, PostalCode, PhoneNum) 
  			  VALUES('$country', '$email', '$password', '$first', '$last', '$date','$country2', '$street1', '$street2', '$city', '$region', '$postal', '$phone' )";
		
	if(mysqli_query($connection,$query)){
		header("location:index.html");
	}else{
		header("refresh:1,url=Registration.php");
	}
}
?>
