<?php include "headeradmin.php";


?>




<br><br><br>

<div class="container">			 <!--start container div-->

<div class="card mx-auto" style="width:38rem;">
  <!--<p class="card-text"><i class="fa fa-user" style="font-size:24px; text-align:center;"></i></p>-->
  <div class="card-header">Register</div>
    <div class="card-body">
    <form id="register_form" action="" method="post">
    
    <div class="form-group">
    <label for="Username">Full Name</label>
    <input type="text" class="form-control" id="username" placeholder="Enter Full name">
    <!--<small id="emailHelp" class="form-text text-muted">Enter Email above.</small>-->
  </div>
      
  <div class="form-group">
    <label for="Email1">Email address</label>
    <input type="email" class="form-control" id="Email1" aria-describedby="emailHelp" placeholder="Enter email">
    <!--<small id="emailHelp" class="form-text text-muted">Enter Email above.</small>-->
  </div>
  
  <div class="form-group">
    <label for="Password1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password 1">
  </div>
  
  <div class="form-group">
    <label for="Password2">Re enter Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password 2">
  </div>
  
  
 <div class="form-group">
 <label for="usertype">Usertype</label>
 <select name="usertype" class="form-control" id="usertype">
 <option value="1">Admin</option>
 <option value="0">Other</option>
 </select>
  <!--<input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>-->
  </div>
  
  
  
  <button type="submit" class="btn btn-primary"><span class="fa fa-user"></span>&nbsp;Register</button>
  <span><a href="index.php">Login</a></span>
  
  
</form>
   
  </div>
  
  <div class="card-footer text-muted">
  <a href="#">Forgot Password?</a>
  </div>
  
  
  
  
  
</div>

</div>    <!--end container div-->

</body>
</html>

<br>
<br>