<?php

$servername= 'localhost';		//define variable database servername
$dbuser='root';					//define variable database user
$dbpassword='';					//define variable database password
$dbname='property';				//define variable database name
//session_start();      //Start register and login session
//$username="";         			//define variable username
$name="";					//define variable first name
//$first_name="";					//define variable first name
//$last_name="";					//define variable last name
//$phone_no="";					//define variable phone number
//$message="";					//define variable message
$email="";						//define variable email
//$password="";                    //define password
//$password_1="";					//define variable password 1
//$password_2="";					//define variable password 2
//$errors=array();				//define variable errors
//$servername= 'localhost';		//define variable database servername
//$dbuser='root';					//define variable database user
//$dbpassword='';					//define variable database password
//$dbname='cms';				//define variable database name
$errors='';
$search='';
$id='';
$post_topic='';
$post='';
$post_title='';
$description='';
$date='';
$keyword='';
$respost='';
//connect to database
// first parameter resource
//$con = mysqli_connect('localhost', 'root', '', 'property') or die("Couldn't connect" . mysqli_error($con));


// if the register button is clicked pass user data through POST global
//if(isset($_POST['submit-result'])){
	
//if(isset($_POST['submit_result'])){
	//$search = $_POST['search'];
		
//$type=mysqli_real_escape_string($con, $_POST['type']);	
//$bedrooms=mysqli_real_escape_string($con, $_POST['bedrooms']);	
//$city=mysqli_real_escape_string($con, $_POST['city']);	
//$purpose=mysqli_real_escape_string($con, $_POST['purpose']);	
//$minprice=mysqli_real_escape_string($con, $_POST['min_price']);
//$maxprice=mysqli_real_escape_string($con, $_POST['max_price']);	

//form field validation to ensure that form fields are filled properly
//if (empty($username)){
	//array_push($errors, "Username is required");}
	
//if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
//	array_push($errors, "Please enter a valid email");}
	
	//if (empty($password_1)){
	//array_push($errors, "Password is required");}
	
//if ($password_1!=$password_2){
	//array_push($errors, "The two passwords do not match");}	
	
	
//if there are no errors, save user to database
	//if(count($errors)==0) {
		//$password=md5($password_1); 
		//encrypt password before storing in database (security)
		

		
		
//$sql="SELECT * FROM city WHERE city_name LIKE '%".$_POST['search']."%' ";
//}



// first parameter resource
//$con = mysqli_connect('localhost', 'root', '', 'property') or die("Couldn't connect" . mysqli_error($con));
	$con1 = mysqli_connect('localhost', 'root', '', 'property')or die("Could not connect to database" . mysqli_error($con1));
if(isset($_POST['submit'])){
	 $search = $_POST['search'];


$sql="SELECT * FROM purpose WHERE city_name LIKE '%$search%'";

$resulta=mysqli_query($con1,$sql);            //fetch result of query $sql

//if(mysqli_num_rows($res) == 0){
	//if(!$res){
	//$array =[];
	
		if(!$resulta){
		die("Query failed" . mysqli_error($con1));
	}
	
		$resulta=mysqli_num_rows($resulta);    // count resultant rows coming out from query
		
		if($resulta == 0){				// if num of rows coming from database does not exist
			echo "<h1 style='color:#fff;'>No result</h1>";
			
		}else{
			
			echo  "<h2 style='color:#fff;'>Result here</h2>"
			
		?>
		<?php 
		
					}      //break out of php phase first if statement above         
		
		?>    
			
			
		
		<?php 
		
					}      //break out of php phase second if statement above         
		
		?>    
			
			
	
	
	
	
	<?php
	//Newsletter email submission
	
//  $connection = mysqli_connect('localhost', 'root', '', 'property');
		
	//newsletter login page
	if(isset($_POST['newssubmit'])){
			$email=mysqli_real_escape_string($con1, $_POST['email']);
		
	//	$email=mysqli_real_escape_string($connection, $_POST['email']);	
        //$password=mysqli_real_escape_string($db, $_POST['password']);		

//form field validation to ensure that form fields are filled properly
//if (empty($email)){
	//array_push($errors, "Email is required");}
	
//if (empty($password)){
	//array_push($errors, "Password is required");
	  //  }

	
	//if there are no errors, save user to database
   //if(count($errors)==0) {
	   

		//$password=md5($password); //encrypt password before storing in database (security)
		$sqlnewsletter="INSERT INTO newsletter(email)VALUE('$email')";     //store user data into database
	$sqlnewsletter_query=mysqli_query($con1, $sqlnewsletter);
		
		
		if(!$sqlnewsletter_query){
			
			echo "<script type='text/javascript'>alert('Sorry subscription failed...Please try again');
			document.location='index.php'</script>";
		
		}
		
		else{
			
			echo "<script type='text/javascript'>alert('Thank you for subscribing to our newsletter...We'll get back to you');
		   document.location='index.php'</script>";
		
		}
		//$_SESSION['username'] = $username;
		//$_SESSION['success'] = "Thank you $email...we'll get back to you soon" ; 
	//	header ('location: index.php'); //redirect to homepage
		
	//}
	
    } 
	
	?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<?php
	
	
	
	//log user in from login page
	if (isset($_POST['login-submit'])){
		$username=mysqli_real_escape_string($db, $_POST['username']);	
        $password=mysqli_real_escape_string($db, $_POST['password']);		

//form field validation to ensure that form fields are filled properly
if (empty($username)){
	array_push($errors, "Username is required");}
	
if (empty($password)){
	array_push($errors, "Password is required");
	    }
	
	
	//if there are no errors, save user to database
	if(count($errors)==0) {
		$password=md5($password); //encrypt password before storing in database (security)
		$sql="INSERT INTO skintouchusers(username, password) VALUES('$username', '$password')";     //store user data into database
	mysqli_query($db, $sql);
		
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "Welcome $username you are now logged in" ; 
		header ('location: loginpage2.php'); //redirect to homepage
		
		}
	
	}
	
	
	?>
	
	<?php
	
	
	//Contact us page from homepage
	if (isset($_POST['Contact'])){
		$name=mysqli_real_escape_string($con1, $_POST['name']);
		$email=mysqli_real_escape_string($con1, $_POST['email']);	
       // $phone=mysqli_real_escape_string($db, $_POST['phone_no']);	
		//$location=mysqli_real_escape_string($db, $_POST['location']);	
        //$password=mysqli_real_escape_string($db, $_POST['message']);		

//form field validation to ensure that form fields are filled properly
if (empty($name)){
	array_push($errors, "First name is required");}
	
if (empty($email)){
	array_push($errors, "Last name is required");
	    }
//if (empty($phone)){
	//array_push($errors, "Phone number is required");}
	
//if (empty($password)){
	//array_push($errors, "Email is required");
	  //  }
		
//if (empty($username)){
	//array_push($errors, "Please enter some content in message field");}			
	
	//if there are no errors, save user to database
	if(count($errors)==0) {
		//$password=md5($password); //encrypt password before storing in database (security)
		$sql="INSERT INTO estatelog(name,email) VALUES('$name','$email')";     //store user data into database
	mysqli_query($con1, $sql);
		
		$_SESSION['name'] = $name;
		$_SESSION['success'] = "Thank you for contacting us $name your message has been sent" ; 
		//use alert box instead of header ('location: Contactuspage.php'); //redirect to homepage
		
		}
	
	}
	
	
//logout
//if (isset($_GET['logout'])){
	//session_destroy();
	//unset($_SESSION['username']);
	//header('location: index.php');
//}
	?>
	
	
