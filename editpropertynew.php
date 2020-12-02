<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Weservice</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="#" rel="icon">
  <link href="#" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/stylepropgrid.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Weservice
    Theme URL: https://weservice.com/
    Author: Weservice Group
    
  ======================================================= -->
</head>
<style>

.navbar-default.navbar-reduce {                        /*navbar default color after scrolling down */
  transition: all .5s ease-in-out;
  padding-top: 19px;
  padding-bottom: 19px;
  background-color:#033;                      
}

.navbar-default.navbar-reduce .nav-link {
  color: #CCFFFF;                         /*active link navbar li items color*/
}

.navbar-default.navbar-reduce .nav-link:before {
 /* background-color: #2eca6a;*/
  /* background-color:#99CCFF;               /*nav underline afterscroll*/
 background-color: #7B23DC;
 color:#00EC76;
}


</style>
<body>

  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Property</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Keyword</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Type">Type</label>
              <select class="form-control form-control-lg form-control-a" id="Type">
                <option>Select Type</option>
                <option>For Rent</option>
                <option>For Sale</option>
                <option>Open House</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="city">City</label>
              <select class="form-control form-control-lg form-control-a" id="city">
                <option>Select City</option>
                <option>Ikeja</option>
                <option>Maryland</option>
			   <option>VI</option>
                <option>Ketu</option>
                <option>Dopemu</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bedrooms">Bedrooms</label>
              <select class="form-control form-control-lg form-control-a" id="bedrooms">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="garages">Penth-house</label>
              <select class="form-control form-control-lg form-control-a" id="garages">
                <option>Preference</option>
                <option>Yes</option>
                <option>No</option>
                <option>Indifferent</option>
                <option>Reserved</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bathrooms">Bathrooms</label>
              <select class="form-control form-control-lg form-control-a" id="bathrooms">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="price">Min Price</label>
              <select class="form-control form-control-lg form-control-a" id="price">
                <option>Unlimite</option>
                <option><span>&#8358;</span>50,000</option>
                <option><span>&#8358;</span>100,000</option>
                <option><span>&#8358;</span>150,000</option>
                <option><span>&#8358;</span>200,000</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Search Property</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--/ Form Search End /-->

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html">We<span class="color-b">Service</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="property-grid.html">Property</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog-grid.html">Blog</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Pages
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="property-single.html">Property Single</a>
              <a class="dropdown-item" href="blog-single.html">Blog Single</a>
              <a class="dropdown-item" href="agents-grid.html">Agents Grid</a>
              <a class="dropdown-item active" href="agent-single.html">Agent Single</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
		   	 			
	<?php
			  
			  //open database connection
$db=mysqli_connect("localhost","root","","property") or die('No Database Connection' . mysqli_error($con));
//include "db.php";
//start query
if (isset($_GET['posts'])){
	
	 $id=$_GET['posts'];

	 $query= "SELECT * FROM estate where id='$id'";
	
   $result1 = mysqli_query($db, $query);      //get result of $query 

if(!$result1){echo "No results found";}else{
 while($row = mysqli_fetch_assoc($result1)) {         // display the results through a "while" code function in table row

	$images = $row['images'];
    $id = $row['id']; 
	$name = $row['name'];
	$charge = $row['charge'];
	$address = $row['address'];
    $access = $row['access'];
	$floor = $row['floor'];
	$utility = $row['utility'];
	$descrip = $row['descrip'];
    $rooms = $row['rooms'];

 ?>	
            <h1 class="title-single"><?php echo $row['name']; ?></h1>
            <span class="color-text-a">2019 Weservice Property Index</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="#">Agents</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
			 
			  <!--end query-->
                
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Agent Single Star /-->
  <section class="agent-single">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-md-6">
              <div class="agent-avatar-box">
			  
			  <!--start query-->
		
                <img src="uploads/<?php echo $row['images'];?>"  width="550" height="800" alt="" class="agent-avatar img-fluid">
              </div>
            </div>
            <div class="col-md-5 section-md-t3">
              <div class="agent-info-box">
                <div class="agent-title">
                  <div class="title-box-d">
                    <h4 class="title-d">Property Details</h4>
                  </div>
                </div>
                <div class="agent-content mb-3">
                <!--  <p class="content-d color-text-a">>-->
				
                  <div class="info-agents color-a">
				  <p>
                  <i class="fa fa-map-marker" style="color:#f15025"></i> &nbsp;<strong>Location: </strong>
				   <?php  echo $row['address']; ?> 
                  </p>
				  
				   <p>
                  <i class="fa fa-money" style="color:#f15025"></i> &nbsp;<strong>Price: </strong>
				   <?php  echo $row['charge']; ?> 
                  </p>
                    <p>
                     <i class="fa fa-bed" style="color:#f15025"></i> &nbsp;<strong>Rooms: </strong>
                     <!-- <span class="color-text-a"></span>--><?php echo $row['rooms']; ?>
                    </p>
                    <p>
                      <i class="fa fa-building" style="color:#f15025"></i> &nbsp;<strong>Floor: </strong>
                      <!--  <span class="color-text-a"> 999 123 456 789</span>--><?php echo $row['floor']; ?>
                    </p>
                    <p>
                      <i class="fa fa-wrench" style="color:#f15025"></i> &nbsp;<strong>Utility: </strong>
                       <!-- <span class="color-text-a"> agents@example.com</span>--><?php echo $row['utility']; ?>
                    </p>
                    <p>
                      <i class="fa fa-pencil" style="color:#f15025"></i> &nbsp;<strong>Description: </strong>
                       <!-- <span class="color-text-a"> Margaret.Es</span>--><?php echo $row['descrip']; ?>
                    </p>
                    <p>
                      <i class="fa fa-unlock" style="color:#f15025"></i> &nbsp;<strong>Access: </strong>
                       <!-- <span class="color-text-a"> agents@example.com</span>--><?php echo $row['access']; ?>
					
                    </p>

                  </div>
                </div>
				

				 
            <?php }}}  ?>
				
				
				
<br>
<div class="clearfix"></div>
<!--<hr style="width:1000px; font-weight:light; color:#999">-->
<h2 class="text-center"><i class="fa fa-edit"></i> Edit Property Details</h2>
<hr class="alert-info" style="width:1000px; color:#CCC">


	<div  class="container mx-auto">
 
			  <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
			  
			 <?php 

//$db=mysqli_connect("localhost", "root", "", "property")or die('Could not connect to database' . mysqli_error($con));
?>
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
					//$queryupdate .="price= '{$price}', ";
					$queryupdate .="charge= '{$charge}', ";
					$queryupdate .="address= '{$address}', ";
					$queryupdate .="access= '{$access}', ";
					$queryupdate .="floor= '{$floor}', "; 
					$queryupdate .="utility= '{$utility}', ";
					$queryupdate .="images= '{$image}', ";
					$queryupdate .="descrip= '{$descrip}', ";
				    $queryupdate .="rooms= '{$rooms}' ";
                    $queryupdate .="WHERE id = {$property_id}"; 
					$updatepropquery = mysqli_query($db, $queryupdate); 
				
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

				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
                <div class="socials-footer">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-dribbble" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 section-t8">
          <div class="title-box-d">
            <h3 class="title-d">My Properties (6)</h3>
          </div>
        </div>
        <div class="row property-grid grid">
          <div class="col-sm-12">
            <div class="grid-option">
              <form>
                <select class="custom-select">
                  <option selected>All</option>
                  <option value="1">New to Old</option>
                  <option value="2">For Rent</option>
                  <option value="3">For Sale</option>
                </select>
              </form>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="img/property-1.jpg" alt="" class="img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="#">204 Mount
                        <br /> Olive Road Two</a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">rent | $ 12.000</span>
                    </div>
                    <a href="#" class="link-a">Click here to view
                      <span class="ion-ios-arrow-forward"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title">Area</h4>
                        <span>340m
                          <sup>2</sup>
                        </span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Beds</h4>
                        <span>2</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Baths</h4>
                        <span>4</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Garages</h4>
                        <span>1</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!--  <div class="col-md-4">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="img/property-3.jpg" alt="" class="img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="#">204 Mount
                        <br /> Olive Road Two</a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">rent | $ 12.000</span>
                    </div>
                    <a href="#" class="link-a">Click here to view
                      <span class="ion-ios-arrow-forward"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title">Area</h4>
                        <span>340m
                          <sup>2</sup>
                        </span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Beds</h4>
                        <span>2</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Baths</h4>
                        <span>4</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Garages</h4>
                        <span>1</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="img/property-6.jpg" alt="" class="img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="#">204 Mount
                        <br /> Olive Road Two</a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">rent | $ 12.000</span>
                    </div>
                    <a href="#" class="link-a">Click here to view
                      <span class="ion-ios-arrow-forward"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title">Area</h4>
                        <span>340m
                          <sup>2</sup>
                        </span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Beds</h4>
                        <span>2</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Baths</h4>
                        <span>4</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Garages</h4>
                        <span>1</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="img/property-7.jpg" alt="" class="img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="#">204 Mount
                        <br /> Olive Road Two</a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">rent | $ 12.000</span>
                    </div>
                    <a href="#" class="link-a">Click here to view
                      <span class="ion-ios-arrow-forward"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title">Area</h4>
                        <span>340m
                          <sup>2</sup>
                        </span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Beds</h4>
                        <span>2</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Baths</h4>
                        <span>4</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Garages</h4>
                        <span>1</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="img/property-8.jpg" alt="" class="img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="#">204 Mount
                        <br /> Olive Road Two</a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">rent | $ 12.000</span>
                    </div>
                    <a href="#" class="link-a">Click here to view
                      <span class="ion-ios-arrow-forward"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title">Area</h4>
                        <span>340m
                          <sup>2</sup>
                        </span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Beds</h4>
                        <span>2</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Baths</h4>
                        <span>4</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Garages</h4>
                        <span>1</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="img/property-10.jpg" alt="" class="img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="#">204 Mount
                        <br /> Olive Road Two</a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">rent | $ 12.000</span>
                    </div>
                    <a href="#" class="link-a">Click here to view
                      <span class="ion-ios-arrow-forward"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title">Area</h4>
                        <span>340m
                          <sup>2</sup>
                        </span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Beds</h4>
                        <span>2</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Baths</h4>
                        <span>4</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Garages</h4>
                        <span>1</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Agent Single End /-->

  <!--/ footer Star /-->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">EstateAgency</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                Enim minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat duis
                sed aute irure.
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Phone .</span> contact@example.com</li>
                <li class="color-a">
                  <span class="color-text-a">Email .</span> +54 356 945234</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">The Company</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Site Map</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Legal</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Agent Admin</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Careers</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Affiliate</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Privacy Policy</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">International sites</h3>
            </div>
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Venezuela</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">China</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Hong Kong</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Argentina</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Singapore</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Philippines</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 <!-- <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">Home</a>
              </li>
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Property</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Blog</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-dribbble" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
         <!-- <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">EstateAgency</span> All Rights Reserved.
            </p>
          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
            --
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!--  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/scrollreveal/scrollreveal.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
<?php include 'footer.php' ?>