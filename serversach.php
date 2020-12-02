<?php

$city_id = '';
$purpose ='';
$city_name ='';
$purpose_id = '';
$rooms = '';
$image = '';
$minprice = '';
$maxprice ='';
$construct='';
$submit='';
$search='';
$x='';
$foundnum='';
$keywords='';

$image='';
$conn='';












// if the register button is clicked pass user data through POST global
if(isset($_GET['submit'])){
	$image=mysqli_real_escape_string($conn, $_GET['image']);	
$city_id=mysqli_real_escape_string($conn, $_GET['city_id']);	
$city_name=mysqli_real_escape_string($conn, $_GET['city_name']);	
$purpose=mysqli_real_escape_string($conn, $_GET['purpose']);	
$rooms=mysqli_real_escape_string($conn, $_GET['rooms']);	
$minprice=mysqli_real_escape_string($conn, $_GET['minprice']);	
$maxprice=mysqli_real_escape_string($conn, $_GET['maxprice']);	
		

//form field validation to ensure that form fields are filled properly


//form field validation to ensure that form fields are filled properly
if (empty($image)){
	array_push($errors, "Image is required");}







if (empty($city_id)){
	array_push($errors, "City Id is required");}
	
//if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
	//array_push($errors, "Please enter a valid email");}
	
	if (empty($city_name)){
	array_push($errors, "City name is required");}
	
	
	if (empty($purpose)){
	array_push($errors, "Purpose of property search sale  or rent is required");}
	
	if (empty($rooms)){
	array_push($errors, "Room no. name is required");}
	
	
	if (empty($minprice)){
	array_push($errors, "Minimum price is required");}
	
	
	
	if (empty($maxprice)){
	array_push($errors, "Maximum price is required");}
	
	
	
	
		
//if ($password_1 != $password_2){
	//array_push($errors, "The two passwords do not match");}	
	//print "The two passwords do not match";
	
//if there are no errors, save user to database
	//if(count($errors)==0) {
		//$password=md5($password_1); //encrypt password before storing in database (security)
		
	}
		?>