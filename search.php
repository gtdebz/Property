
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>WeService</title>
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
    Theme Name: WeService
    Theme URL: https://weservice.com/
    Author: Weservice Group
  ======================================================= -->
</head>

<style>

		   /* Old Back to top new css */
	#myBtn1 {
    display: none;  	/*	Hidden by default */
    position: fixed;  	/*	Fixed/sticky position */
    bottom: 15px;  		/*	Place the button at the bottom of the page */
    right: 30px;  			/*Place the button 30px from the right */
    z-index: 99; 			/* Make sure it does not overlap */
    border: none; 			/* Remove borders */
    outline: none;			 /* Remove outline */
 	background-color:#033;  /* Set a background color */
    color: #fff!important; 			/* Text color */
    cursor: pointer; 		/* Add a mouse pointer on hover */
    padding: 8px 12px; 			/* Some padding */
    border-radius: 1px; 		/* Rounded corners */
    font-size: 15px; 		/* Increase font size */
	width:39px;
	font-color:#fff!important;
}

#myBtn fa{
	 color: #fff!important; 			/* Text color */
	}


 #myBtn1:hover {
    background-color:#066!important; /* Add a dark-grey background on hover */
	color:white;
	-webkit-transform: scale(1.3);
	-moz-transform: scale(1.3);
	-o-transform: scale(1.3);
	 background-color:#f15025;
	-ms-transform: scale(1.3);
	transform: scale(1.3);
	-webkit-backface-visibility: hidden;
	
}
/*end of old back to top*/	
	
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
         <!-- <li class="nav-item">
            <a class="nav-link active" href="property-grid.html">Property</a>
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
              <a class="dropdown-item" href="agent-single.html">Agent Single</a>
            </div>
          </li>-->
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



<br /><br /><br /><br /><br /><br />
<section class="head">
    <div class="container">
        <h4 class="text-center" style="letter-spacing:9px">SEARCH RESULTS</h4>
    </div>
</section>




<br /><br />



<div class="container">
<div class="col-lg-8">
<div class="row">
  <?php
include  "db.php";
//$db=mysqli_connect("localhost:3306","greendig_tboy","jetlog77$","greendig_property")or die(mysqli_error($db));
//mysqli_select_db($db,"property");
 //if ($conn){echo  "<div class='col-lg-12 text-center' style='font-size:20px; color:#fff;'>Very good we're CONNECTED</div>";}
	
//if(isset($_GET['$keywords'])){

	
//define variables
$city_id = '';
$purpose ='';
$city_name ='';
$purpose_id = '';
$rooms = '';
$image = '';
$min_price = '';
$max_price ='';
$construct='';
$submit='';
$search='';
$x='';
$foundnum='';
$keyword='';

 
//$button = $_GET ['submit'];
//$search = $_GET ['search']; 

?>     

<?php 
//$db=mysqli_connect("localhost:3306","greendig_tboy","jetlog77$","greendig_property")or die(mysqli_error($db));
//mysqli_select_db($db,"property");
   $purpose= $_POST['purpose'];
  $keyword=$_POST['keyword'];
 $queryk= "SELECT * FROM purpose WHERE purpose='$purpose'";
 //$queryk= "SELECT * FROM purpose WHERE city_name = 'id'";
 $resk=mysqli_query($db,$queryk)or die(mysqli_query());
//$i=1;
//while ($row = mysql_fetch_assoc($resk))
//{
    //your code
   // if ($i % 2 == 0)
       // echo '<br>';
   // $i++;
//}
	// original if($resk){
	
	
	$sqlbut = $_POST['button1'];
	if($sqlbut == '') {echo "Sorry no results found"; }else{
	 	if(isset($_POST['button1'])){
	while ($row=mysqli_fetch_assoc($resk)){	
	
	//my own variable
	//$c=$row=mysqli_fetch_assoc($resk);
	//their own variable
	// $i = 0;
//if ($i != 0 && $i%2 == 0)
 //  echo '<br/>';
	
	
			
$image=$row['image'];
$city_id = $row ['city_id'];
$city_name = $row ['city_name'];
$purpose = $row ['purpose'];
$rooms = $row ['rooms'];
//$city_name = $row ['city_name'];
$keyword = $row ['keyword'];
$minprice = $row ['minprice'];
$maxprice = $row['maxprice']; 
	
 //use the below to escape a loop of results from database
 //echo '<b>'.$field1name.$field2name.'</b><br />';
       // echo $field5name.'<br />';
       // echo $field5name.'<br />';
        //echo $field5name;	
	
?>
       
   
		
		
           

		
			<div class="col-md-12">
			
			<div class="row">
			
			<div class="col-md-12>
			
			
		<a href="#" title="Search Result" class="thumbnail"><img class"=img-reponsive" width="450px" height="450px" src="images/<?php echo $row['image']; ?>"></img></a>
		   
		
			<br><br>
			
			
      <p><h6 style="font-weight:bold; color:#000;"> <i class="fa fa-map-marker" style="color:#063"></i>&nbsp; Location: <span class="text-danger fa-sm"> <?php echo $city_name; ?></span>
	  &nbsp; | &nbsp; <i class="fa fa-hand-o-right" style="color:#063"></i>&nbsp; Purpose: <span class="text-danger"><?php echo $keyword; ?></span> &nbsp;	|					
						
	 &nbsp;	<i class="fa fa-bed" style="color:#063"></i>&nbsp; Rooms:<span class="text-danger fa-sm"> <?php echo $rooms;?></span> &nbsp; <br><br>
	 &nbsp;<i class="fa fa-money" style="color:#063"></i>&nbsp;	Min:<span class="text-danger fa-sm"> &#8358;  <?php echo $minprice;?></span></strong> &nbsp; | &nbsp;
	 <i class="fa fa-money" style="color:#063"></i>&nbsp; Max:<span class="text-danger fa-sm"> &#8358; <?php echo $maxprice;?></span></strong></h6>
	   <br>
	   <?php echo '<br><br>';?>
		
        <?php 
	         }
            ?>

          <?php 
           	}
          ?>


        <?php 
	   }
          ?>
	    </p>
	   

		  <div>
			
	       </div>

       <!-- <article class="search-result row">
			<div class="col-xs-12 col-sm-12 col-md-3">
				<a href="#" title="Lorem ipsum" class="thumbnail"><img src="images/prop3.jpg" width:"100" height="100" alt="Lorem ipsum" /></a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-2">
				<ul class="meta-search">
					<li><i class="glyphicon glyphicon-calendar"></i> <span>02/13/2014</span></li>
					<li><i class="glyphicon glyphicon-time"></i> <span>8:32 pm</span></li>
					<li><i class="glyphicon glyphicon-tags"></i> <span>Food</span></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7">
				<h3><a href="#" title="">Voluptatem, exercitationem, suscipit, distinctio</a></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>						
                <span class="plus"><a href="#" title="Lorem ipsum"><i class="glyphicon glyphicon-plus"></i></a></span>
			</div>
			<span class="clearfix borda"></span>
		</article>

		<article class="search-result row">
			<div class="col-xs-12 col-sm-12 col-md-3">
				<a href="#" title="Lorem ipsum" class="thumbnail"><img src="images/prop4.jpg" width:"100" height="100" alt="Lorem ipsum" /></a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-2">
				<ul class="meta-search">
					<li><i class="glyphicon glyphicon-calendar"></i> <span>01/11/2014</span></li>
					<li><i class="glyphicon glyphicon-time"></i> <span>10:13 am</span></li>
					<li><i class="glyphicon glyphicon-tags"></i> <span>Sport</span></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7">
				<h3><a href="#" title="">Voluptatem, exercitationem, suscipit, distinctio</a></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>						
                <span class="plus"><a href="#" title="Lorem ipsum"><i class="glyphicon glyphicon-plus"></i></a></span>
			</div>
			<span class="clearfix border"></span>
		</article>	-->	
        
        
        <!--Make results display on next line
        $i = 0;

then in your loop add

if ($i != 0 && $i%2 == 0)
   echo '<br/>';
   
   
   php code as follows
   foreach ($rows as $row) {
    if ($i++ % 2) { 
         // this code will only run for every even row
    }
    ...
    
    
another php
$i=1;
while ($row = mysql_fetch_array($query))
{
    //your code
    if ($i % 2 == 0)
        echo '<br>';
    $i++;
}


    
    
    
    
}
   -->	






</div>



  <!-- Bootstrap core JavaScript--
    ================================================== -
    <!-- Placed at the end of the document so the pages load faster --
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug --
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/bootstrap.min.js"></script>-->
    
	
	

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
	
	
	
	
	
	
	
	
	
	
	
	
	
<script src="js/scrolltop.js"></script>

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
    

    
<br>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
<script>
    $(function(){
    $('.listing-block').slimScroll({
        height: '500px'
    });
});
</script>

</div>






<button onclick="topFunction()" id="myBtn1" title="Go to top"><i class="fa fa-angle-up"></i></button> 



</body>
</html>



<?php include 'footer.php';
?>




