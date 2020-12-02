<?php
session_start();      //Start register and login session
$username="";         			//define variable username
$first_name="";					//define variable first name
$last_name="";					//define variable last name
$phone="";					//define variable phone number
$message="";					//define variable message
$email="";						//define variable email
$password="";					//define variable password 1
$password_1="";					//define variable password 1
$password_2="";					//define variable password 2
$errors=array();				//define variable errors
$servername= 'localhost:3306';		//define variable database servername
$dbuser='greendig_tboy';					//define variable database user
$dbpassword='jetlog77$';					//define variable database password
$dbname='greendig_property';				//define variable database name
$result='';
$empty='';                      //define variable empty

	






// first parameter resource
$db = mysqli_connect('localhost:3306', 'greendig_tboy', 'jetlog77$', 'greendig_property');
//$query=mysqli_query($db, "realestate");
//mysqli_select_db($db, "property");

// if the register button is clicked pass user data through POST global
if(isset($_POST['submit1'])){
$username=mysqli_real_escape_string($db, $_POST['username']);	
//$email=mysqli_real_escape_string($db, $_POST['email']);	
$password=mysqli_real_escape_string($db, $_POST['password']);	
//$password_2=mysqli_real_escape_string($db, $_POST['password_2']);		




//form field validation to ensure that form fields are filled properly
//if (empty($username)){
	//array_push($errors, "Username is required");}
	
//if (!filter_var($email, FILTER_VALIDATE_EMAIL)){                //to ensure user inputs valid email
//	array_push($errors, "Please enter a valid email");}
	
	//if (empty($password)){
	//array_push($errors, "Password is required");}
	
//if ($password_1!=$password_2){
	//array_push($errors, "The two passwords do not match");}	
	
	
//if there are no errors, save user to database
	if(count($errors)==0) {
		$password=md5($password); //encrypt password before storing in database (security)
		
		
		
$sql="INSERT INTO admin_login(username, password) VALUES('$username','$password')"; // store user data in database
mysqli_query($db, $sql);
		
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "Welcome $username you are now registered" ; //welcome message to display on homepage (dashboard)
		header ('location: dashboard.php'); //redirect to homepage from admin_login.php
		}
	}
	
	
	
	
	
	//log user in from login page
	if (isset($_POST['Login'])){
		$username=mysqli_real_escape_string($db, $_POST['username']);	
        $password=mysqli_real_escape_string($db, $_POST['password']);		

//form field validation to ensure that form fields are filled properly
if (empty($username)){
	array_push($errors, "Username is required");}
	
if (empty($password)){
	array_push($errors, "Password is required");
	    }
	
	
	//if there are no errors, save user to database
	//if(count($errors)==0) {
		$password=md5($password); //encrypt password before storing in database (security)
		//$sql="INSERT INTO users(username, password) VALUES('$username', '$password')";     //store user data into database
	//mysqli_query($db, $sql);
		
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "Welcome $username you are now logged in" ; 
		//header ('location: loginpage.php'); //redirect to homepage
		
		}
	
	//}
	
	
	
	
	
	//Contact us page from homepage
	if (isset($_POST['Contact'])){
		$first_name=mysqli_real_escape_string($db, $_POST['First name']);
		$last_name=mysqli_real_escape_string($db, $_POST['Last name']);	
        $phone=mysqli_real_escape_string($db, $_POST['Phone number']);	
		$email=mysqli_real_escape_string($db, $_POST['email']);	
        $password=mysqli_real_escape_string($db, $_POST['password']);
				

//form field validation to ensure that form fields are filled properly
if (empty($first_name)){
	array_push($errors, "First name is required");}
	
if (empty($last_name)){
	array_push($errors, "Last name is required");
	    }
if (empty($phone)){
	array_push($errors, "Phone number is required");}
	
if (empty($email)){
	array_push($errors, "Email is required");
	    }
		
if (empty($message)){
	array_push($errors, "Please enter some content in message field");}			
	
	//if there are no errors, save user to database
	if(count($errors)==0) {
		$password=md5($password); //encrypt password before storing in database (security)
		$sql="INSERT INTO users(First name, Last Name, Phone number, email) VALUES('$first_name', '$last_name', '$phone', '$email')";     //store user data into database
	mysqli_query($db, $sql);
		
		$_SESSION['first_name'] = $first_name;
		$_SESSION['success'] = "Thank you for contacting us $first_name your message has been sent" ; 
		header ('location: FormSuccess.php'); //redirect to homepage
		
		}
	
	}
	
	
//logout
//if (isset($_GET['logout'])){
	//session_destroy();
	//unset($_SESSION['username']);
	//header('location: index.php');
//}
	?>
	
	
