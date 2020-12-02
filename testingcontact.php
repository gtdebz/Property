<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <section id="contact">
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <!-- SECTION TITLE -->
                    <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
                         <h2>Get in touch</h2>
                         <p>Kindly send us your messages and comments.</p>
                    </div>
               </div>

                <div class="col-md-7 col-sm-10">
                   <!-- CONTACT FORM HERE -->
                  <div class="form-group">
                        <form id="contact-form" role="form" id="form" action="contact.php" method="post">
                              <div class="col-md-6 col-sm-6 pull-left">
                                   <input type="text" class="form-control" name="name" placeholder="Name" data-error="required">
                              </div>
                              <div class="col-md-6 col-sm-6 pull-left">
                                   <input type="email" class="form-control" name="email" placeholder="Email" data-error="required">
                              </div>
                             <!-- <div class="col-md-3 col-sm-6 pull-right ">
                                   <input type="phone" class="form-control" name="phone" placeholder="Phone (Optional)">
                              </div>
                              <div class="col-md-3 col-sm-6 pull-right">
                                   <input type="text" class="form-control" name="address" placeholder="Address (Optional)" >
                              </div>-->
                              <div class="col-md-12 col-sm-12">
                                   <textarea class="form-control" rows="5" name="message" placeholder="Message" required></textarea>
                              </div>
                             
                        </form> <div class="col-md-offset-8 col-md-4 col-sm-offset-6 col-sm-6">
                                   <center><button id="submit" type="submit" class="btn btn-sucess btn-block" name="" style="margin-left:210px;">Send</button></center>
                              </div>
                  </div>
               </div>

               <div class="col-md-5 col-sm-8">
                    <!-- CONTACT INFO -->
                    <div class="wow fadeInUp contact-info" data-wow-delay="0.4s">
                         <div class="section-title">
                              <h2>Contact Info</h2>
                              <p>Head Office...</p>
                         </div>
                         
                         <p><i class="fa fa-map-marker"></i> 456 New Street, VI, Lagos City, NIGERIA</p>
                         <p><i class="fa fa-comment"></i> <a href="mailto:info@company.com">inforealestate@hotmail.com</a></p>
                         <p><i class="fa fa-phone"></i> 010-020-0340</p>
                    </div>
               </div>

          </div>
     </div>
</section>


<section class="home-newsletter">
<div class="container">
<div class="row">
<div class="col-sm-12">
	<div class="single" id="newsletter">
		<h2>Subscribe to our Newsletter</h2>  <form method="post" action="index.php">
	<div class="input-group" >
  
         <input type="email" class="form-control" placeholder="Enter your email">
         <span class="input-group-btn">
         <button class="btn1 btn-theme" onclick="display()" type="button" id="submit1"><a href="#" style="color:#FFF">Subscribe</a></button></
         </span>
          </div></form>
	</div>
</div>
</div>
</div>
</section>

<!--end contact us-->

<script>
function newsletter(){
var newsletter=document.getElementById('newsletter');
newsletter.innerhtml="Thank you or signing up we'll get back to you soon!"
};
</script>
</body>
</html>