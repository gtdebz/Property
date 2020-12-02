
<?php include "headerall.php";?>






<style>
.banner{
	width:100%;
	height:350px;
	background-image:url(images/prop2.jpg);
	background-repeat:no-repeat;
	background-size:cover;
	margin-top:-6%;
	
	}
		
		
		   /* Old Back to top new css */
	#myBtn1 {
    display: none; /* Hidden by default */
    position: fixed; /* Fixed/sticky position */
    bottom: 15px; /* Place the button at the bottom of the page */
    right: 30px; /* Place the button 30px from the right */
    z-index: 99; /* Make sure it does not overlap */
    border: none; /* Remove borders */
    outline: none; /* Remove outline */
    background-color:#066;; /* Set a background color */
    color: white; /* Text color */
    cursor: pointer; /* Add a mouse pointer on hover */
    padding: 8px 15px; /* Some padding */
    border-radius: 3px; /* Rounded corners */
    font-size: 15px; /* Increase font size */
	
}

 #myBtn1:hover {
    background-color:#066; /* Add a dark-grey background on hover */
	opacity:0.5;
	color:white;
	-webkit-transform: scale(1.3)
}
/*end of old back to top*/
	
</style>
<br><br><br>


<div class="banner">

</div>





<br>
<div class="clearfix"></div>
<!--<hr style="width:1000px; font-weight:light; color:#999">-->
<h2 class="text-center"><i class="fa fa-check-square-o"></i> Add New Property</h2>
<hr class="alert-info" style="width:1000px; color:#CCC">
<?php
//$localhost='';
//$root='';
//$dbuser='';
//$dbname='';

include "db.php";
//$db=mysqli_connect("localhost:3306","greendig_tboy","jetlog77$","greendig_property") or die(mysqli_error());

	
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
         if(!$insert){
		
		 echo "<h4 class='text-danger text-center'>Cannot add new property please try again...</h4>";

         }else{	
				
		 echo "<h4 class='text-success text-center'>New Property has been added successfully !!</h4>";
				       
	    }
	
	
	
	
	
	
	
	
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


	<div  class="container mx-auto">
 
			  <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
              <div class="row"> 

</div>

<div class="form-group">

<label for="Property" class="col-lg-2 control-label">Name of Property</label>
<div class="col-lg-12">
<input type="text" name="name" id="name" class="form-control" placeholder="Name of Property"  value="" required>
</div>
</div>

<div class="form-group">
<label for="charge" class="col-lg-2 control-label">Monthly Charge</label>
<div class="col-lg-12">
<input type="text" name="charge" id="charge" class="form-control" placeholder="Monthly Charge"  value="" required>  

</div>
</div>

<div class="form-group">
<label for="address" class="col-lg-2 control-label">Address</label>
<div class="col-lg-12">
<textarea class="form-control" name="address" id="address" rows="3" id="textarea"></textarea>
</div>
</div>

<div class="form-group">
<label for="access" class="col-lg-2 mx-auto control-label">Access</label>
<div class="col-lg-12">
<input type="text" name="access" id="access" class="form-control" placeholder="Access" value="" required> 
</div>
</div>



<div class="form-group">
<label for="floorspace" class="col-lg-2 control-label">Floor Space</label>
<div class="col-lg-12">
<input type="text" name="floor"  id="floor" class="form-control" placeholder="Floor Space" value="" required> 
</div>
</div>


<div class="form-group">
<label for="rooms" class="col-lg-2 control-label">Rooms</label>
<div class="col-lg-12">
<input type="number" name="rooms"  id="rooms" class="form-control" placeholder="Rooms" value="" required> 
</div>
</div>



<div class="form-group">
<label for="utility" class="col-lg-2 control-label">Utility</label>
<div class="col-lg-12">
<input type="text" name="utility"  id="utility" class="form-control" placeholder="Utility" value="" required> 
</div>
</div>

<div class="form-group">
<label for="Description" class="col-lg-2 control-label">Description</label>
<div class="col-lg-12">
<textarea class="form-control" name="descrip"  id="description" rows="3" id="textarea"></textarea>
</div>
</div>


<div class="form-group">
<label for="images" class="col-lg-2 control-label">Featured Image</label>
<div class="col-lg-12">
<input type="file" name="images" value="" required> 
</div>
</div>



<div class="form-group">
<label for="images" class="col-lg-2 control-label">Rooms Images</label>
<div class="col-lg-12">
<input type="file" name="img[]" multiple> 
</div>
</div>


<div class="form-group">
<div class="col-lg-12 col-lg-offset-2">
<button type="reset" class="btn btn-danger pull-left">Cancel</button>
<button type="submit" name="submit" class="btn btn-primary pull-left" style="margin-left:9px">Submit</button>
</div>

</form>





<button onclick="topFunction()" id="myBtn1" title="Go to top"><i class="fa fa-angle-up"></i></button> 



<!--javascript code for back to top button-->
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn1").style.display = "block";
    } else {
        document.getElementById("myBtn1").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
} </script>


 
 
 <!--Scroll to top script-->
   <script src="js/scrolltop.js"></script>
   


</body>

</html>

<?php include 'footer.php'?>