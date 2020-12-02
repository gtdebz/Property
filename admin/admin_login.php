

<?php

include "server.php";
?>



<?php //include "headeradmin.php";


?>


<?php include "headeralladmin_login.php";


?>

<style>
.fa{
	color:#066!important;
	
}



</style>

<br><br><br>

<div class="container">			 <!--start container div-->

<div class="card mx-auto" style="width: 18rem;">
  <div class="card-header text-center"><i class="fa fa-user" style="font-size:84px;"></i></div>
  
  <div class="card-body">
    <h5 class="card-title text-center">Admin
    User Login</h5>
    <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
    <form action="" name="form1" method="post">
  <div class="form-group">
    <label for="exampleInputUsername11">Username</label>
    <input type="text" class="form-control" id="" name="username" placeholder="username" required>
    <!--<small id="emailHelp" class="form-text text-muted">Enter Email above.</small>-->
  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="Password" name="password" placeholder="Password" required>
  </div>
 <!-- <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>-->
  
  <button type="submit" name="submit1" class="btn btn-primary">Submit</button>
</form>
   
  </div>
</div>

</div>    <!--end container div-->


<?  include  "db.php";   ?>





<?php
//connect to database
// first parameter resource
//$db = mysqli_connect('localhost:3306', 'greendig_tboy', 'jetlog77$', 'greendig_property');
//$query=mysqli_query($db, "realestate");
//mysqli_select_db($db, "greendig_property");


// if the register button is clicked pass user data through POST global
if(isset($_POST['submit1'])){

$res=mysqli_query($db, "select * from admin_login where $username='$_POST[username]' && $password='$_POST[password]'");
//$sql=mqli_fetch_array($db, $res);
echo "<script>document.location:'dashboard.php'</script>";
?>











	




<?php

}
?>







</body>