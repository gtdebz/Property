<?php
session_start();
if(isset($_SESSION["admin"])){
	header: location."admin_login.php";
	exit();
	}

?>
<?php //include ("headeradmin.php");


?>

<?php include ("headerall.php");  ?>

<?php     
    date_default_timezone_set("Africa/Lagos");


?>


<style>
.fa {
	color:#066;
	
}

</style>


<br><br>
<div  class="container">  <!--start container div-->
<div class="row">

<div class="col-md-4">

<div class="card mx-auto">

<h1 class="card-title mx-auto" style="font-size:70px;"> <i class="fa fa-users"></i></h1>
  <div class="card-body">
    <h4 class="card-title">Admin Login Profile</h5>
    <p class="card-text"><i class="fa fa-user"> &nbsp;</i><?php echo $_SESSION['username']; ?></p>
    <!--<h5 class="card-title">Profile</h5>-->
    <p class="card-text"><i class="fa fa-user"> &nbsp;</i>Admin</p>
     <p class="card-text"><i class="fa fa-calendar"> &nbsp;</i>Last Login: <?php  echo date('M d, Y');  ?></p>
     <a href="" class="btn btn-primary"><i class="fa fa-edit" style="color:#fff;"> Edit Profile</i></a>
	<a class="btn btn-primary" href="admin_login.php"><i class="fa fa-fw fa-lg fa-sign-out faa-tada faa-fast" style="color:#fff;"></i> Logout</a>
      
	 
    </div>
    </div>
    
    </div>
    
  
 <!--   <form>
   
                   
                  
                

  <div class="input-group form-group">
   <!-- <label for="exampleInputEmail1">Email address</label>--
     <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <!--<small id="emailHelp" class="form-text text-muted">Enter Email above.</small>--
  </div>
  <div class="input-group form-group">
   <!-- <label for="exampleInputPassword1">Password</label>--
     <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
 <!-- <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>--
  <button type="submit" class="btn btn-primary"><a href="#" class="btn btn-primary">Submit</a></button>
</form>-->
   
 
 
 <div class="col-md-8">
 <div  class="jumbotron" style="width:100%; height:100%;">
 <h5>Welcome to Admin &nbsp;<span class="text-success"><?php echo $_SESSION['username'] . '...'; ?></span></h5>
 <div class="page-item pull-right" style="margin-top:-5%; margin-right:1%;">
 <a href="../index.php" style="text-decoration:none;"><h6><i class="fa fa-home"></i> Back to Your Homepage</h6></a>
 </div>
 
 
  <div class="row">
 
 <div class="col-sm-6">
 <iframe src="http://free.timeanddate.com/clock/i6ta5eyg/n125/szw110/szh110/cf100/hnce1ead6" frameborder="0" width="110" height="110"></iframe>

 </div>
 
 
 
 
 <div class="col-sm-6">
 <div class="card">
      <div class="card-body">
        <h5 class="card-title">New Property Requests</h5>
        <p class="card-text">Here you can manage property requests</p>
        <a href="#" class="btn btn-primary">View Requests</a>
      </div>
    </div>
  </div>
 
 
 
 
 
 
 </div>
 </div>
 </div>
 
 
 
 
 
 
 
 
 
</div>

</div>    <!--end container div-->
<p></p>
<p></p>

 <div class="container">
        <div class="row">
        
        
        
        <div class="col-md-4">
        
         <div class="card">
      <div class="card-body">
        <h5 class="card-title">Categories</h5>
        <p class="card-text">Here you can manage categories</p>
        <a href="#" data-toggle="modal" data-target="#form_category" class="btn btn-primary">Add</a>
        <a href="#" class="btn btn-primary">Manage</a>
      </div>
    </div>
        
        
        
        
        
        </div>
        
        
        
        
        
        
         <div class="col-md-4">
           <div class="card">
      <div class="card-body">
        <h5 class="card-title">Invoices</h5>
        <p class="card-text">Here you can add and manage payment invoices</p>
        <a href="#" data-toggle="modal" data-target="#form_brand" class="btn btn-primary">Add</a>
        <a href="#" class="btn btn-primary">Manage</a>
      </div>
    </div>
         </div>
         
         
         
         
         
          <div class="col-md-4">
            <div class="card">
      <div class="card-body">
        <h5 class="card-title">Property</h5>
        <p class="card-text">Here you can manage your properties</p>
        <!--Original code for modal adding
        <a href="insert.php" data-toggle="modal" data-target="#form_products" class="btn btn-primary">Add</a>-->
         <a href="insert.php" class="btn btn-primary">Add</a>
        <a href="viewdetails.php" class="btn btn-primary">Manage</a>
      </div>
    </div>
          </div>
</div>
</div>



<?php 
//Category form
//include_once("./templates/category.php");
?>


<?php 
//Brand form
//include_once("./templates/brand.php");
?>


<?php 
//Product form
//include_once("./templates/products.php");
?>



<?php 

include ("../footer.php");
?>



</body>
</html>