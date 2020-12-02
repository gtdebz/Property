<?php include "headeradmin.php";


?>




<br><br><br>

<div class="container">			 <!--start container div-->

<div class="card mx-auto" style="width: 18rem;">
  <div class="card-header text-center"><i class="fa fa-user" style="font-size:84px;"></i></div>
  
  <div class="card-body">
    <h5 class="card-title text-center">
    User Login</h5>
    <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
    <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <!--<small id="emailHelp" class="form-text text-muted">Enter Email above.</small>-->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
 <!-- <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>-->
  
  <button type="submit" class="btn btn-primary"><i class="fa fa-lock">&nbsp;</i>Login</button>
  <a href="index.php">Register</a>
</form>
   
  </div>
  
  <div class="card-footer text-muted">
  <a href="#">Forgot Password?</a>
  </div>
  
  
</div>

</div>    <!--end container div-->