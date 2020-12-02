
<?php
$localhost='';
$root='';
$dbuser='';
$dbname='';


$db=mysqli_connect("localhost:3306","greendig_tboy","jetlog77$","greendig_property") or die(mysqli_error());

	
//if(isset($_POST['submit'])){
	
//estate table row variables
$name='';
$charge='';
$address='';
$access='';
$floor='';
$utility='';
$descrip='';
$temp_file='';
$images='';

//details table row variables
$last_id='';
$insert_id='';
$img_name='';
$insert='';
$images='';
$proid='';
$rooms='';


	//posting details of user from insert page as submit button is clicked for estate table row variables
	if (isset($_POST['submit'])){
		$name=mysqli_real_escape_string($db, $_POST['name']);	
        $charge=mysqli_real_escape_string($db, $_POST['charge']);		
		$address=mysqli_real_escape_string($db, $_POST['address']);	
        $access=mysqli_real_escape_string($db, $_POST['access']);	
		$floor=mysqli_real_escape_string($db, $_POST['floor']);	
        $utility=mysqli_real_escape_string($db, $_POST['utility']);	
		$descrip=mysqli_real_escape_string($db, $_POST['descrip']);	
		$rooms=mysqli_real_escape_string($db, $_POST['rooms']);	
		
	   
		//$img_name=mysqli_real_escape_string($db, $_POST['images']);	
		//$last_id=mysqli_real_escape_string($db, $_POST['proid']);	
	
		

		$target_dir="uploads/";
		$target_file="target_dir".basename($_FILES["images"]["name"]);
		$temp_file=$_FILES["images"]["name"];
		move_uploaded_file($_FILES["images"]["tmp_name"],$target_file);
//form field validation to ensure that form fields are filled properly
//if (empty($name)){
//	array_push($errors, "name is required");}

			
//if (empty($descrip)){
	//array_push($errors, "Please give a brief description of your property...");
	  //  }	
	
	//if there are no errors, save user to database
	//if(count($errors)==0) {
		//$password=md5($password); //encrypt password before storing in database (security)
		
		$query="INSERT INTO estate(name,charge,address,access,floor,utility,descrip,images,rooms) VALUES('$name','$charge','$address','$access','$floor','$utility','$descrip','$temp_file','$rooms')";     //store user data into database
		
	//old code that am not using 	
	//$insert=$mysqli->query($query);
	//$last_id=$mysqli->insert_id;
	
	$insert=mysqli_query($db, $query);			// fetching the rows returned by the sql query $query over database connection $db into a variable definition $insert
	
	//while ($row = mysqli_fetch_array($query)){    //start while

	$last_id='';
	
	$c=count($_FILES['img']['name']);	
		
		if($insert){       // start an if statement for  variable $insert which are the rows returned by the query
		//$c='';
		//$img_name='';
		//$last_id='';
		//$proid='';
		
		
	if ($c < 10){            // start another if for variable $c
	for ($i=0; $i <$c; $i++){
		$img_name=$_FILES['img']['name'][$i];
		move_uploaded_file($_FILES['img']['tmp_name'][$i] , "uploads/" .$img_name);
		
		//original code that am not using
	 	// $query_multi="INSERT INTO details(images,proid) VALUES ('$img_name','$last_id')";
		// $ins=$mqsqli->query($query_multi);
		
		$querymulti="INSERT INTO details(images,proid) VALUES ('$img_name','$last_id')";
	   $ins=mysqli_query($db, $querymulti);   //result of query $querymulti over connection $db next display result in while function if u wish
	  
	   }  //end for
	  
	   
	}  //end if
	   
	   
	   
	}//end of if ($insert)
	
	
	//} //end while
	
		}

	 // end of isset post(submit)
	
	
?>

<?php include "header.php";

?>


<style>
/* Start Contact form*/
	#contact{
		padding:20px;
		margin-left:0;
		margin-right:0;
		background-color:#203142!important;
		color:whitesmoke;
		}
	
	
	#contact .font-awesome-underline{
		width: 202px;
		border:3px solid #f15025;
		margin: 0 auto 20px auto;
		
			}	
			
		#contact .font-awesome-underline:after{
		content:"\f133";
		font-family:"FontAwesome";	
		font-size:18px;
		color:#f15025;
		position: relative;
		top: -8px;
		background:#203142;
		padding: 0 10px;
		}
		
		#contact button{
			color:#FFF;
			background-color:#f15025;
			border-color:#C30;
			}
		
		#contact button:hover {
			background-color:#F30;
			color:whitesmoke;
			
			}
			
			#contact .col-md-6{
				margin-top:5px;
				padding:0;
				margin:0;
				}
				
			#contact .h1 p{
			margin-top: 20px;
			}	
			
			#contact form{
				margin-top: 20px;
				}	
			
			#contact .iframe{
			margin-top: 20px;
			}	
			
			#contact .btn-link{
			padding: 4px;
			border-radius:6px 6px 6px 6px;
			border-color:2px solid #f15025;
			width: 100px;
			font-size:20px;	
			text-decoration:none;
			margin-top: 20px;
				}
			
				
		/* end Contact form*/
		
		
		
		
		
		
</style>
<!--start contact div-->
<section id = "contact-form">
<!--start container div-->
<div class="container contact-form">
<center><h2><strong class="text-primary">Add </strong> Property
</h2></center>
<hr>
<!--start row div-->
<div class="row">

<!--start form -->
<div class="col-md-6">
 <form class="wow slideInLeft slow delay-.2s" id="form" action="contact.php" method="post" role="form" style="display: block;">
<div class="form-group">
<label>Name of property</label>
<input type="text" name="name" class="form-control" required data-error="required">
</div>


<div class="form-group">
<label>Monthly Charge</label>
<input type="email" name="email" class="form-control" required data-error="required" >
</div>

<div class="form-group">
<label>Address</label>
<textarea class="form-control" rows="5" required data-error="required" name="msg"></textarea>
</div>


<div class="form-group">
<label>Access</label>
<input type="email" name="email" class="form-control" required data-error="required" >
</div>



<div class="form-group">
<label>Floor space</label>
<input type="email" name="email" class="form-control" required data-error="required" >

</div>


<div class="form-group">
<label>Rooms</label>
<input type="number" name="rooms"  id="rooms" class="form-control" placeholder="Rooms" value="" required> 

</div>




<div class="form-group">
<label>Utiity</label>
<input type="email" name="email" class="form-control" required data-error="required" >

</div>


<div class="form-group">
<label>Description</label>
<textarea class="form-control" rows="5" required data-error="required" name="msg"></textarea>
</div>


<div class="form-group">
<label>Featured Image</label>
<!--<div class="col-lg-10">-->
<input type="file" name="images" value="" required> 
<!--</div>-->
</div>



<div class="form-group">
<label>Rooms Images</label>
<!--<div class="col-lg-10">-->
<input type="file" name="img[]" multiple> 
<!--</div>-->
</div>


<div class="form-group">

<button type="submit" class="btn btn-primary btn-block" name="submit" id="submit" data-submit="...Sending" value="Send">Send</button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
        <div class="clearfix"></div>
</div>
<!--end form-->
</form>
</div>







</div>
<!--end row div-->
</div>
<!--end container div-->
</section>
<!--end contact div-->






<?php include "./templates/footer.php";


?>
</body>
</html>