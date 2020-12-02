<?php//ob_start();  ?>


<?php include "headerall.php";?>



<?php
//$localhost='';
//$root='';
//$dbuser='';
//$dbname='';


//$db=mysqli_connect("localhost:3306","greendig_tboy","jetlog77$","greendig_property") or die(mysqli_error($con));

//$db['db_host'] = "localhost:3306";

//$db['db_user'] = "greendig_tboy";

//$db['db_pass'] = "jetlog77$";

//$db['db_name'] = "greendig_property";

//foreach($db as $key => $value){
	
	//define(strtoupper($key), $value);
	
	//}

//$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	
//if(isset($_POST['submit'])){
	
//estate table row variables
//$name='';
//$charge='';
//$address='';
//$access='';
//$floor='';
//$utility='';
//$descrip='';
//$temp_file='';
//$images='';

//details table row variables
//$last_id='';
//$insert_id='';
//$img_name='';
//$insert='';
//$images='';
//$proid='';
//$rooms='';

include"db.php";    
	?>   
	








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
<h2 class="text-center"><i class="fa fa-edit"></i> Edit Property Details</h2>
<hr class="alert-info" style="width:1000px; color:#CCC">


	<div  class="container mx-auto">
 
			  <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
			  
			 
			  <?php 
			  
			  if(isset($_GET['id'])){
				  $property_id = $_GET['id'];
				  
				  $querysel=mysqli_query($db,"SELECT * FROM estate WHERE id = $property_id");
				  if(!$querysel){
					  echo "Failed query";
					  
				  }else{
				   while($row=mysqli_fetch_array($querysel)){
					   $id=$row['id'];
					   $name=$row['name'];	
                       $charge=$row['charge'];		
		               $address= $row['address'];	
                       $access=$row['access'];	
		               $floor=$row['floor'];	
                       $utility=$row['utility'];	
		               $descrip=$row['descrip'];	
		               $rooms=$row['rooms'];	
		               $image=$row['images'];
	   
					   
				   } 
				  }
 
				  
			  

			//to update product
			if(isset($_POST['update'])){
				
									   
									     //$id = $row['id'];
		                                 $name=$_POST['name'];	
                                         $charge=$_POST['charge'];		
		                                 $address=$_POST['address'];	
                                         $access=$_POST['access'];	
		                                 $floor=$_POST['floor'];	
                                         $utility=$_POST['utility'];	
		                                 $descrip=$_POST['descrip'];	
                                         $rooms=$_POST['rooms'];	
												
											//to prevent undefined image index error
			                     //   if(isset($image) && isset( $image_temp)){
									//	$image=$_FILES['images']['name'];
									//	$image_temp = $_FILES['images']['tmp_name'];
									//	move_uploaded_file($image_temp, "uploads/$image");
													 
									//}
													 
													  //define upload path for image
											// $image = $_FILES['image']['name'];
											// $tmp_image = $_FILES['image']['tmp_name'];
											//  move_uploaded_file($tmp_image, "imgelectro/$image");
											// }
											
											
											
											
											
											
											
											
											
											
											
											//	if(empty($_POST['images'])) { 
											//	echo "Image post_image is empty";     //start to confirm that post_image column is not empty
											//	}else{


												
												//$queryimg="SELECT * FROM estate WHERE id = $property_id"; 
												//$select_image = mysqli_query($con, $queryimg);
											
												//while($row=mysqli_fetch_assoc($select_image)){
												
										       // $image = $row['images'];    //end to confirm that post_image column is not empty
												//}
												//$image=$_POST['images'];
												
												//}
				
				
					$queryupdate = "UPDATE estate SET ";
					$queryupdate .="name= '{$name}', ";
					$queryupdate .="price= '{$price}', ";
					$queryupdate .="charge= '{$charge}', ";
					$queryupdate .="address= '{$address}', ";
					$queryupdate .="access= '{$access}', ";
					$queryupdate .="floor= '{$floor}', "; 
					$queryupdate .="utility= '{$utility}', ";
					$queryupdate .="images= '{$image}', ";
					$queryupdate .="descrip= '{$descrip}', ";
				    $queryupdate .="rooms= '{$rooms}' ";
                    $queryupdate .="WHERE id = {$property_id}"; 
					$updatepropquery = mysqli_query($con, $queryupdate); 
				
				//product update validation
				if(!$updatepropquery){echo "<h4 class='text-danger text-center'>Cannot update property details please try again</h4>";}else{	
				
				echo "<h4 class='text-primary text-center'>Property details have been updated successfully !!</h4>";}
				       
				
				
				
			  }}
				
				
				
					?>		
			  
			  
			  
			  
			  
			  
			  
			  
			  


<div class="form-group">

<label for="Property" class="col-lg-2 control-label">Name of Property</label>
<div class="col-lg-12">
<input type="text" name="name" id="name" class="form-control" value="<?php if(isset($name)){echo $name;} ?>">
</div>
</div>

<div class="form-group">
<label for="charge" class="col-lg-2 control-label">Monthly Charge</label>
<div class="col-lg-12">
<input type="text" name="charge" id="charge" class="form-control" value="<?php if(isset($charge)){echo $charge;} ?>">  

</div>
</div>

<div class="form-group">
<label for="address" class="col-lg-2 control-label">Address</label>
<div class="col-lg-12">
<input type class="form-control" name="address" id="address"  value="<?php if(isset($address)){echo $address;} ?>">
</div>
</div>

<div class="form-group">
<label for="access" class="col-lg-2 mx-auto control-label">Access</label>
<div class="col-lg-12">
<input type="text" name="access" id="access" class="form-control"  value="<?php if(isset($access)){echo $access;} ?>" > 
</div>
</div>



<div class="form-group">
<label for="floorspace" class="col-lg-2 control-label">Floor Space</label>
<div class="col-lg-12">
<input type="text" name="floor"  id="floor" class="form-control" value="<?php if(isset($floor)){echo $floor;} ?>" > 
</div>
</div>


<div class="form-group">
<label for="rooms" class="col-lg-2 control-label">Rooms</label>
<div class="col-lg-12">
<input type="number" name="rooms"  id="rooms" class="form-control"  value="<?php if(isset($rooms)){echo $rooms;} ?>" > 
</div>
</div>



<div class="form-group">
<label for="utility" class="col-lg-2 control-label">Utility</label>
<div class="col-lg-12">
<input type="text" name="utility"  id="utility" class="form-control"  value="<?php if(isset($utility)){echo $utility;} ?>" > 
</div>
</div>

<div class="form-group">
<label for="Description" class="col-lg-2 control-label">Description</label>
<div class="col-lg-12">
<input type="text" class="form-control" name="descrip"  id="description" value="<?php if(isset($descrip)){echo $descrip;} ?>" >
</div>
</div>


<div class="form-group">
<label for="images" class="col-lg-2 control-label">Featured Image</label>
<div class="col-lg-12">
<input type="text" class="form-control" name="images" value="<?php if(isset($image)){echo $image;} ?>" > 
           <br>
		 <label for="Upload">Upload new image</label>
		 <input type="file" style="cursor:pointer;" name="img[]" multiple> 


</div>
</div>



<!--<div class="form-group">
<label for="images" class="col-lg-2 control-label">Rooms Images</label>
<div class="col-lg-12">
<input type="file" name="img[]" multiple> 
</div>
</div>-->


<div class="form-group">
<div class="col-lg-12 col-lg-offset-2">
<button type="reset" class="btn btn-danger pull-left">Cancel</button>
<button type="submit" name="update" class="btn btn-primary pull-left" style="margin-left:9px">Update</button>
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